<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style media="screen">
      form{
        margin-left:  20%;
        margin-right: 20%;
        margin-top: 10%;
      }
    </style>
    <script src="https://cdn.tiny.cloud/1/ipwwk9p52k2qoi2mn878292mi7vi6ezu7fzll96903jqllax/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({
    selector : 'textarea',
    plugins : ['advlist autolink lists link image charmap print preview anchor', 'searchreplace visualblocks code fullscreen"", ""insertdatetime media table contextmenu paste'],
    toolbar : 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
  }); </script>
  </head>
  <body>
@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
  @endforeach
@endif
@if(session('success'))
    <div class="alert alert-danger">
      {{session('success')}}
    </div>
@endif

    <form action="/blog" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleFormControlInput1">Назва статті</label>
        <div class="input-group mb-3">
          <input type="text" id="exampleFormControlInput1" class="form-control" placeholder="Title" aria-label="title" aria-describedby="basic-addon1" name="title">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Зображення статті</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_url">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Текст</label>
        <textarea name="body">Text article</textarea>
      </div>
      <div class="form-group">
        {{csrf_field()}}
      </div>
      <button class="btn btn-primary" type="submit">Створити статтю</button>
    </form>

  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
