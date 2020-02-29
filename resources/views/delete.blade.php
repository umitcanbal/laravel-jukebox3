@extends ("create", [

])

@section("delete_success_message")
  <p>The author named <strong>{{$name}}</strong> with the id <strong>{{$id}}</strong> has been successfully deleted</p>
@endsection