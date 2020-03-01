<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <nav>
    <a href="{{ action('PageController@create') }}">Create New Author</a>
    <a href="/list">Check The Whole List Of Authors</a>
  </nav>
  @yield("create_section")
  @yield("list")
</body>
</html>