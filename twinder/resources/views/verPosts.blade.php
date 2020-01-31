<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver posts</title>
  </head>
  <style media="screen">
    .post{
      margin: 0 auto;
      width: 90%;
    }
    .nombre{
      font-weight: bold;
      font-size: 20px;
    }
  </style>
  <body>
    <h1>Posts</h1>
    <hr><hr>
    <div class="post">
      @foreach($posts as $post)

        <p class="nombre">{{ $post->user->name }}</p>
        <p class="post">{{ $post->text }}</p>
        <p class="fecha">{{ $post->created_at }}</p>
        <hr>

      @endforeach
    </div>




  </body>
</html>
