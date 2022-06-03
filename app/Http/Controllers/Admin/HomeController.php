<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Ikar;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function showAll()
    {
        return view('admin.showall')->with('house', Ikar::where('type', 'house')->count())->with('store', Ikar::where('type', 'store')->count())->with('chalet', Ikar::where('type', 'chalet')->count())->with('user', User::all()->count());
    }
    public function trached()
    {
        return view('admin.trached.index');
    }




    public function index()
    {
        return view('admin.house.index')->with('house', Ikar::where('type', 'house')->get());
    }




    public function create()
    {
        return view('admin.house.create');
    }




    public function store(StoreRequest $request)
    {
        $user = User::where('phone', $request->phone)->first();
        $photo = $request->img->GetClientOriginalExtension();
        $file_name = time() . '.' . $photo;
        $path = 'uploads/house';
        $request->img->move($path, $file_name);


        $house = Ikar::create([
            'region' => $request->region,
            'address' => $request->address,
            'city' => $request->city,
            'show_type' => $request->type,
            'type' => 'house',
            'price' => $request->price,
            'space' => $request->space,
            'user_id' => $user->id,
            'floors_number' => $request->floors_number,
            'room_number' => $request->room_number,
            'img' => $file_name,
        ]);


        return redirect()->back()->with('success', 'house added successflly');
    }


    public function show($id)
    {
        $house = Ikar::where('id', $id)->first()->get();
        return view('admin.house.show')->with('house', $house);
    }




    public function edit($id)
    {
        $house = Ikar::find($id);
        return view('admin.house.edit')->with('house', $house);
    }




    public function update(StoreRequest $request, $id)
    {
        $user = User::where('phone', $request->phone)->first();
        $house = Ikar::find($id);
        $house->region = $request->region;
        $house->address = $request->address;
        $house->city = $request->city;
        $house->show_type = $request->type;
        $house->price = $request->price;
        $house->space = $request->space;
        $house->user_id = $user->id;
        $house->room_number = $request->room_number;
        $house->floors_number = $request->floors_number;
        $house->save();
        return Redirect()->back()->with('success', 'house updated successflly');
    }




    public function destroy($id)
    {
        $house = Ikar::find($id);
        $destintion = 'upload/house/' . $house->img;
        if (File::exists($destintion)) {
            File::delete($destintion);
        }
        $house->delete();
        return redirect()->back()->with('success', 'house deleted successflly');
    }
}
