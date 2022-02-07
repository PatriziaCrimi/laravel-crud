<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $allRooms = Room::all();
    $onlyBalcony = Room::where('balcony', '!=', 0)->get();
    $data = [
      'titlePage' => 'Rooms Index',
      'allRooms' => $allRooms,
      'onlyBalcony' => $onlyBalcony,
    ];
    return view('rooms.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $data = [
      'titlePage' => 'Form',
      'subtitlePage' => 'Create a new Room'
    ];
    return view('rooms.create', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->all();

    //VALIDATION
    $request->validate([
            'number'=>'required',
        ]);

    $newRoom = new Room();
    //Questo richiede il fillable nel Model sennò lancia errore il Token
    $newRoom->fill($data);
    /*
    $newRoom->availability = $data['availability'];
    $newRoom->number = $data['number'];
    $newRoom->name = $data['name'];
    $newRoom->season = $data['season'];
    $newRoom->floor = $data['floor'];
    $newRoom->beds = $data['beds'];
    $newRoom->balcony = $data['balcony'];
    $newRoom->basic_price = $data['basic_price'];
    $newRoom->size = $data['size'];
    $newRoom->description = $data['description'];
    $newRoom->notes = $data['notes'];
    */
    $newRoom->save();

    $latestRoom = Room::orderBy('id', 'desc')->first();
    return redirect()->route('rooms.show', $latestRoom)->with('success', 'The new Room has been added');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $room = Room::find($id);
    if($room) {
      $data = [
        'titlePage' => 'Room Details',
        'room' => $room
      ];
      return view('rooms.show', $data);
    }
    abort(404);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Room $room) // Dependency Injection
  {
    if($room) {
      $data = [
        'titlePage' => 'Form',
        'subtitlePage' => 'Edit this room: ' . $room->name,
        'room' => $room
      ];
      return view('rooms.edit', $data);
    }
    abort(404);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Room $room) // Dependency Injection
  {
    $data = $request->all();

    //VALIDATION
    $request->validate([
            'number'=>'required',
        ]);

    $room->update($data);
    return redirect()->route('rooms.show', $room)->with('success', 'The new Room has been added');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Room $room) // Dependency Injection
  {
    $room->delete();
    return redirect()->route('rooms.index');
  }
}
