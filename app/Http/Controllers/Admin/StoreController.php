<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Ikar;
use App\Models\User;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.store.index')->with('store', Ikar::where('type', 'store')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store.create');
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
        $path = 'uploads/store';
        $request->img->move($path, $file_name);


        $store = Ikar::create([
            'region' => $request->region,
            'address' => $request->address,
            'city' => $request->city,
            'show_type' => $request->type,
            'type' => 'store',
            'price' => $request->price,
            'space' => $request->space,
            'user_id' => $user->id,
            'floors_number' => $request->floors_number,
            'room_number' => $request->room_number,
            'img' => $file_name,
        ]);

        $store->save();
        return redirect()->back()->with('success', 'store added successflly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Ikar::where('id', $id)->first()->get();
        return view('admin.store.show')->with('store', $store);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $store = Ikar::find($id);
        return view('admin.store.edit')->with('store', $store);
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
        $store = Ikar::find($id);
        $store->region = $request->region;
        $store->address = $request->address;
        $store->city = $request->city;
        $store->show_type = $request->type;
        $store->price = $request->price;
        $store->space = $request->space;
        $store->user_id = $user->id;
        $store->room_number = $request->room_number;
        $store->floors_number = $request->floors_number;
        $store->save();
        return Redirect()->back()->with('success', 'store updated successflly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Ikar::find($id);
        $store->delete();
        return redirect()->back()->with('success', 'store deleted successflly');
    }
}
