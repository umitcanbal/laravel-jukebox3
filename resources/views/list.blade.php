@extends("index")

@section("list")
  @foreach ($authors as $author)
    <p>
      {{$author->name}} {{$author->id}} 
      <a href="{{ action('PageController@edit', ['id' => $author->id]) }}">EDIT</a> 
      <a href="{{ action('PageController@delete', ['id' => $author->id]) }}">DELETE</a>
    </p>
  @endforeach
@endsection