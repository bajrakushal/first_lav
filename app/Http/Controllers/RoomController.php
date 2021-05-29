<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $this->authorize('view-room');
        $datas = Room::all();
        return view('Admin.Room.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-room');
        return view('Admin.Room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $imageName = time().'-'.$request->name.'.'.$request->image->extension();

        $request->image->move(public_path('images'),$imageName);

        $room = New Room();
        $room->Room_name = $request->name;
        $room->type = $request->type_select;
        $room->price = $request->price;
        $room->description = $request->desc;
        $room->image_path = $imageName;
        $room->save();
        return redirect('/admin/rooms')->with('success','Room added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room,$id)
    {
        $this->authorize('edit-room');

        $data = Room::find($id);
        return view('Admin.Room.edit',compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $room)
    {
        $this->authorize('edit-room');
        $data = Room::find($room);
        $data->Room_name = $request->name;
        $data->type = $request->type_select;
        $data->price = $request->price;
        $data->description = $request->desc;
        $data->save();

        return redirect('/admin/rooms')->with('success','Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy( $room)
    {
        $this->authorize('edit-room');

        $room = Room::find($room);
        $room->delete();
        return redirect('/admin/rooms')->with('delete','Room deleted successfully');

    }

    public function naya()
    {
        $this->authorize('view-room');
        return view('Admin.dashboard');
    }
}
