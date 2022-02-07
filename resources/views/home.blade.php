@extends('layouts.app')

@section('section')
  <section class="homepage">    
    <div class="container">
      <div class="title">
        <div class="row">
          <div class="col-12">
            <h1>Laravel
              <span class="text-uppercase">crud</span>
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h2>Homepage</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="contacts">
      <ul>
        <li>
          <a href="{{route('hotels')}}">Hotels</a>
        </li>
        <li>
          <a href="{{route('rooms.index')}}">Rooms</a>
        </li>
        <li>
          <a href="{{route('contacts')}}">Contacts</a>
        </li>
      </ul>
    </div>
  </section>
@endsection
