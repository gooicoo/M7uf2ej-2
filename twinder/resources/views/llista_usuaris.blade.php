<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>usuaris</h1>
    <ol>
      @foreach($users as $user)

        [{{$user->id}}] {{$user->name}} - numero posts: {{ $user->posts()->count() }}
        <ol>
            @foreach( $user->posts as $post)
              <li>{{ $post->text }}</li>
            @endforeach
        </ol>


      @endforeach
    </ol>

</html>
