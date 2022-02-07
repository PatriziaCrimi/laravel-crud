@extends('layouts/app')

@section('section')
  <section class="rooms-edit">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="title">
            <h1>{{$titlePage}}</h1>
            <h2>{{$subtitlePage}}</h2>
          </div>
        </div>
      </div>

      {{-- Form --}}
      <div class="row">
        <div class="col-12">
          <form class="rooms-edit-form" action="{{route('rooms.update', ['room' => $room->id])}}" method="POST">
            {{-- Token necessario per il form --}}
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="room-availability">Availability</label>
              <p>
                <input type="radio" name="availability" value="yes" {{$room->availability == 'yes' ? 'checked' : ''}}>
                Yes
              </p>
              <p>
                <input type="radio" name="availability" value="no" {{$room->availability == 'no' ? 'checked' : ''}}>
                No
              </p>
            </div>
            <div class="form-group">
              <label for="room-number">Room number</label>
              <input value="{{$room->number}}" required type="number" min="1" name="number" class="form-control" id="room-number" aria-describedby="room-number">
            </div>
            <div class="form-group">
              <label for="room-name">Name</label>
              <input value="{{$room->name}}" type="text" placeholder="Enter the room name" name="name" maxlength="50" class="form-control" id="room-name">
            </div>
            <div class="form-group">
              <label for="room-season">Season</label>
              <select class="form-control" name="season">
                <option value="">--select--</option>
                <option value="spring" {{$room->season == 'spring' ? 'selected' : ''}}>Spring</option>
                <option value="summer" {{$room->season == 'summer' ? 'selected' : ''}}>Summer</option>
                <option value="autumn" {{$room->season == 'autumn' ? 'selected' : ''}}>Autumn</option>
                <option value="winter" {{$room->season == 'winter' ? 'selected' : ''}}>Winter</option>
              </select>
            </div>
            <div class="form-group">
              <label for="room-floor">Floor</label>
              <input value="{{$room->floor}}" type="number" min="0" name="floor" class="form-control" id="room-floor" aria-describedby="room-floor">
            </div>
            <div class="form-group">
              <label for="room-beds">Beds</label>
              <input value="{{$room->beds}}" type="number" min="0" name="beds" class="form-control" id="room-beds" aria-describedby="room-beds">
            </div>
            <div class="form-group">
              <label for="room-balcony">Balcony</label>
              <input value="{{$room->balcony}}" type="number" min="0" name="balcony" class="form-control" id="room-balcony" aria-describedby="room-balcony">
            </div>
            <div class="form-group">
              <label for="room-price">Basic price &euro;</label>
              <input value="{{$room->basic_price}}" type="number" min="0" step="0.01" name="basic_price" class="form-control" id="room-price" aria-describedby="room-price">
            </div>
            <div class="form-group">
              <label for="room-size">Size</label>
              <input value="{{$room->size}}" type="number" step="0.001" min="0" name="size" class="form-control" id="room-size" aria-describedby="room-size">
            </div>
            <div class="form-group">
              <label for="room-description">Description</label>
              <textarea name="description" rows="6" cols="80" maxlength="255" placeholder="Enter the room description" class="form-control" id="room-description" aria-describedby="room-description">{{$room->description}}</textarea>
            </div>
            <div class="form-group">
              <label for="room-notes">Notes</label>
              <textarea name="notes" rows="2" cols="80" maxlength="255" placeholder="Enter here the notes" class="form-control" id="room-notes" aria-describedby="room-notes">{{$room->notes}}</textarea>
            </div>
            {{-- Buttons --}}
            <div class="buttons d-flex justify-content-between">
              <button type="submit" class="btn btn-primary text-capitalize">Save changes</button>
              <a href="{{route('rooms.index')}}" class="btn btn-dark">Back</a>
            </div>
          </form>
        </div>
      </div>
    </div> {{-- Closing Container--}}
  </section>
@endsection
