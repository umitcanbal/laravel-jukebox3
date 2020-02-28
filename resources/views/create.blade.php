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
      <p>Name of the author</p>
      <input type="text" name="authorname">
      <!-- <p>Surname of the author</p>
      <input type="text" name="authorsurname"> -->
      <input type="submit">
    </div>
  </form>

</body>
</html>