<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  

  <form action="{{ action('PageController@store') }}" method="post">

  @csrf
    <div>
      <!-- <p>{{ $variable ?? '' }222222}</p> -->
      <p style="color:green">@yield("success_message")</p>
      @yield("delete_success_message")

      <p>Name of the author</p>
      <input type="text" name="authorname">
      <!-- <p>Surname of the author</p>
      <input type="text" name="authorsurname"> -->
      <input type="submit">
    </div>
  </form>
  
  @yield("delete_form")

  

</body>
</html>
