@extends('layouts/app')

@section('section')
  <section class="rooms-index">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="title">{{$titlePage}}</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="text-center">
            <a href="{{route('rooms.create')}}" class="btn btn-success">Create new Room</a>
          </div>
        </div>
      </div>

      {{-- TABLE - All Rooms List --}}
      <div class="row">
        <div class="col-12">
          <h2>All Rooms List</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Basic price</th>
                <th scope="col">Balcony</th>
                <th scope="col">Actions</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($allRooms as $key => $room)
                <tr>
                  <th scope="row">
                    {{$room->id}}
                  </td>
                  <td class="room-name">
                    {{$room->name}}
                  </td>
                  <td>
                    {{number_format($room->basic_price, 2, ',', '.')}} &euro;
                  </td>
                  <td>
                    @if ($room->balcony == 0)
                      none
                    @else
                      {{$room->balcony}}
                    @endif
                  </td>
                  {{-- Buttons --}}
                  <td>
                    <a href="{{route('rooms.show', ['room' => $room->id])}}" class="btn btn-info text-uppercase">
                      Details
                    </a>
                  </td>
                  <td>
                    <a href="{{route('rooms.edit', ['room' => $room->id])}}" class="btn btn-success text-uppercase">
                      Edit
                    </a>
                  </td>
                  <td>
                    <form class="" action="{{route('rooms.destroy', ['room' => $room->id])}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger text-uppercase">
                        Delete
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      {{-- TABLE Only Balcony Rooms List --}}
      <div class="row">
        <div class="col-12">
          <h2 class="text-capitalize">Balcony rooms list</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Basic price</th>
                <th scope="col">Balcony</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($onlyBalcony as $key => $room)
                <tr>
                  <th scope="row">
                    {{$room->id}}
                  </td>
                  <td class="room-name">
                    {{$room->name}}
                  </td>
                  <td>
                    {{number_format($room->basic_price, 2, ',', '.')}} &euro;
                  </td>
                  <td>
                    {{$room->balcony}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      {{-- Links List--}}
      <div class="row">
        <div class="col-12">
          <div class="links-list">
            <h3>Links</h3>
            <ul>
              <li>
                {{$titlePage}}
              </li>
              <li>
                <a href="{{route('homepage')}}">Home</a>
              </li>
              <li>
                <a href="{{route('hotels')}}">Hotels</a>
              </li>
              <li>
                <a href="{{route('contacts')}}">Contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> {{-- Closing Container --}}
  </section>

@endsection
