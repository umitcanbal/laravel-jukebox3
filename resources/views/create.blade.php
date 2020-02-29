<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

@if ($author->name !== null)

  <form action="{{ action('PageController@edit', ['id_variable' => $author->id]) }}" method="post">

@else

  <form action="{{ action('PageController@store') }}" method="post">

@endif


  @csrf
    <div>
      
      <p style="color:green">@yield("success_message")</p>
      @yield("delete_success_message")
      @yield("edit_success_message")

      <p>Name of the author</p>
      <input type="text" name="authorname" value="{{ $author->name ?? ''}}">
      <!-- <p>Surname of the author</p>
      <input type="text" name="authorsurname"> -->
      <input type="submit" value="save">
    </div>


  </form>



@yield("delete_form")
  
  

</body>
</html>
