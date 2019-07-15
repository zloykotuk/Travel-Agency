<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
  <form class="" action="{{URL::to('/test')}}" method="post">
    {{csrf_field()}}
    <input type="date" name="date_from">
    <input type="date" name="date_to">
    <input type="text" name="guest">
    <input type="text" name="children">
    <input type="hidden" name="id_hotel" value="1">
<button type="submit" name="button">submit</button>
  </form>
  </body>
</html>
