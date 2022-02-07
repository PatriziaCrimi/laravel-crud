@extends('layouts/app')

@section('section')
  <section class="hotels">    
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="title">{{$titlePage}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul>
            <li>
              {{$titlePage}}
            </li>
            <li>
              <a href="{{route('homepage')}}">Home</a>
            </li>
            <li>
              <a href="{{route('rooms.index')}}">Rooms</a>
            </li>
            <li>
              <a href="{{route('contacts')}}">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection
