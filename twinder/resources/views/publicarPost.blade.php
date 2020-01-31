<!DOCTYPE html>
<html lang="sp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>publicar post</title>
  </head>

  <body>
    <h3>ID: {{ auth()->user()->id }}  //  NAME: {{ auth()->user()->name }}</h3>
    <hr>

    <form id="save_post" method="get" action="{{URL::to('/')}}/publicarPost">
      {{ csrf_field() }}
      <textarea name="body">{{ old('body') }}</textarea>
      <input type="submit" value="Save">

    </form>

  

  </body>
</html>
