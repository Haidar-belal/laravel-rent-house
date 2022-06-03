<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Ikar;
use App\Models\User;

class ChaletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.chalet.index')->with('chalet', Ikar::where('type', 'chalet')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chalet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $user = User::where('phone', $request->phone)->first();
        $photo = $request->img->GetClientOriginalExtension();
        $file_name = time() . '.' . $photo;
        $path = 'uploads/chalet';
        $request->img->move($path, $file_name);


        $chalet = Ikar::create([
            'region' => $request->region,
            'address' => $request->address,
            'city' => $request->city,
            'show_type' => $request->type,
            'type' => 'chalet',
            'price' => $request->price,
            'space' => $request->space,
            'user_id' => $user->id,
            'floors_number' => $request->floors_number,
            'room_number' => $request->room_number,
            'img' => $file_name,
        ]);

        $chalet->save();
        return redirect()->back()->with('success', 'chalet add successflly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chalet = Ikar::where('id', $id)->first()->get();
        return view('admin.chalet.show')->with('chalet', $chalet);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chalet = Ikar::find($id);
        return view('admin.chalet.edit')->with('chalet', $chalet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $user = User::where('phone', $request->phone)->first();
        $chalet = Ikar::find($id);
        $chalet->region = $request->region;
        $chalet->address = $request->address;
        $chalet->city = $request->city;
        $chalet->show_type = $request->type;
        $chalet->price = $request->price;
        $chalet->space = $request->space;
        $chalet->user_id = $user->id;
        $chalet->room_number = $request->room_number;
        $chalet->floors_number = $request->floors_number;
        $chalet->save();
        return Redirect()->back()->with('success', 'chalet updated successflly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chalet = Ikar::find($id);
        $chalet->delete();
        return redirect()->back()->with('success', 'chalet deleted successflly');
    }
}
