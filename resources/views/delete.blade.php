@extends ("create", [

])

@section("delete_success_message")
  <p>The author named <strong>{{$author->name}}</strong> with the id <strong>{{$author->id}}</strong> has been successfully deleted</p>
@endsection