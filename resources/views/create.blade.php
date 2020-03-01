@extends("index")

@section("create_section")
  @if ($author->name !== null)
    <form action="{{ action('PageController@delete', ['id' => $author->id]) }}" method="get">
      @csrf
      <input type="submit" value="delete">
    </form>

    <form action="{{ action('PageController@update', ['id' => $author->id]) }}" method="post">
  @else
    <form action="{{ action('PageController@store') }}" method="post">
  @endif
      @csrf
      <div>
        <p>Enter a new author</p>
        <input type="text" name="authorname" value="{{$author->name}}">
        <input type="submit" value="save">
      </div>
    </form>
@endsection

