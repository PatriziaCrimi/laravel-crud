@extends('layouts/app')

@section('section')
  <div class="container">
    <div class="row">
      <div class="col-12">
        Sorry, the Room does not exist.
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="{{route('homepage')}}" class="btn btn-danger">Back Home</a>
        <a href="{{route('rooms.index')}}" class="btn btn-danger">Back to Rooms</a>
      </div>
    </div>
  </div>
@endsection
