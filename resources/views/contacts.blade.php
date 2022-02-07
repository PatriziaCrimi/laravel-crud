@extends('layouts.app')

@section('section')
  <section class="contacts">    
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="title">
            <h1>Contacts</h1>
          </div>
          <div class="contacts-list">
            <ul>
              <li>
                {{$contact}}
              </li>
              <li>
                <a href="{{route('homepage')}}">Home</a>
              </li>
              <li>
                <a href="{{route('hotels')}}">Hotels</a>
              </li>
              <li>
                <a href="{{route('rooms.index')}}">Rooms</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
