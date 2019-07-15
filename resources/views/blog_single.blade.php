@extends('layout.app')

@section('title', 'Blog')

@section('url')
  url({{URL::asset('images/bg_4.jpg')}})
@endsection

@section('container')
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
  <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Single</span></p>
    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$article->title}}</h1>
  </div>
</div>
@endsection

@section('content')
@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
  @endforeach
@endif
<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ftco-animate">
        {!!$article->body!!}
        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Life</a>
            <a href="#" class="tag-cloud-link">Sport</a>
            <a href="#" class="tag-cloud-link">Tech</a>
            <a href="#" class="tag-cloud-link">Travel</a>
          </div>
        </div>

        <div class="pt-5 mt-5">
          <h3 class="mb-5">{{$article->get_comments->count()}} Comments</h3>
          <ul class="comment-list">
            @foreach($article->get_comments as $comment)
                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{URL::asset('images/person_1.jpg')}}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>{{$comment->get_author->name}}</h3>
                    <div class="meta">{{date('M d, Y h:ma', strtotime($comment->created_at))}}</div>
                    <p>{{$comment->body}}</p>
                  </div>
                </li>
            @endforeach



          <!-- END comment-list -->

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="/comment" method="post" class="p-5 bg-light" >

              <div class="form-group">
                {{csrf_field()}}
                <input type="hidden" class="form-control" name="article_id" value="{{$article->id}}">
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" cols="20" rows="10" class="form-control" name="body"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
              </div>

            </form>
          </div>
        </div>


      </div> <!-- .col-md-8 -->
      <div class="col-md-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <div class="categories">
            <h3>Categories</h3>
            <li><a href="#">Tour <span>(12)</span></a></li>
            <li><a href="#">Hotel <span>(22)</span></a></li>
            <li><a href="#">Coffee <span>(37)</span></a></li>
            <li><a href="#">Drinks <span>(42)</span></a></li>
            <li><a href="#">Foods <span>(14)</span></a></li>
            <li><a href="#">Travel <span>(140)</span></a></li>
          </div>
        </div>

      </div>

    </div>
  </div>
</section> <!-- .section -->
@endsection
