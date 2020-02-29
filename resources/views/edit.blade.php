@extends("create", [
  "author" => $author,
])

@section("edit_success_message")

  <b>{{$author->name}}</b> with the id <strong>{{$author->id}}</strong> has been successfully edited in the database!

@endsection

@section("delete_form")

  <form action="{{ action('PageController@delete', ['id_variable' => $author->id]) }}" method="post">
               
    @csrf
    <input type="submit" value="delete">
  </form>

@endsection