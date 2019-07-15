@extends('layout.app')

@section('title', 'Blog')


@section('url', 'url(\'images/bg_4.jpg\')')

@section('container')
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
  <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tips &amp; Articles</h1>
  </div>
</div>
@endsection

@section('content')
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      @foreach($articles as $article)
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="/blog/{{$article->id}}" class="block-20" style="background-image: url({{$article->image_url}});">
          </a>
          <div class="text p-4 d-block">
            <span class="tag">Tips, Travel</span>
            <h3 class="heading mt-3"><a href="#">{{$article->title}}</a></h3>
            <div class="meta mb-3">
              <div><a href="#">{{date('M d, Y', strtotime($article->created_at))}}</a></div>
              <div><a href="#">{{$article->get_author->name}}</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{$article->get_comments->count()}}</a></div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
