@extends('layouts/app')

@section('section')
  <section class="rooms-show">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="title">{{$titlePage}}</h1>
        </div>
      </div>
      {{-- Room Details --}}
      <div class="row">
        <div class="col-12">
          <h2>"{{$room->name}}"</h2>
          <h4>Room
            <span class="bold"> #{{$room->id}}</span>
          </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul>
            <li>
              Availability: {{$room->availability}}
            </li>
            <li>
              Name: {{$room->name}}
            </li>
            <li>
              Season: {{$room->season}}
            </li>
            <li>
              Number: {{$room->number}}
            </li>
            <li>
              Floor:
              <span class="bold">
                {{$room->floor}}
              </span>
            </li>
            <li>
              Beds:
              <span class="bold">
                {{$room->beds}}
              </span>
            </li>
            <li>
              Balcony:
              @if ($room->balcony)
                {{$room->balcony}}
              @else
                none
              @endif
            </li>
            <li class="price">
              Basic price:
              <span>
                {{number_format($room->basic_price, 2, ',', '.')}} &euro;
              </span>
            </li>
            <li>
              Size:
              @if ($room->size)
                {{number_format($room->size, 2, ',', '.')}} &#13217;
              @else
                N/A
              @endif
            </li>
            <li>
              @if ($room->description)
                <span class="bold">Description:</span>
                {{$room->description}}
              @else
                Description: N/A
              @endif
            </li>
            <li>
              @if ($room->notes)
              <span class="bold">Notes:</span>
              {{$room->notes}}
              @else
                Notes:  N/A
              @endif
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="button">
            <a href="{{route('rooms.index')}}" class="btn btn-dark">Back</a>
          </div>
        </div>
      </div>
    </div> {{-- Closign Container --}}
  </section>
@endsection
