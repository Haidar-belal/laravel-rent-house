@extends('layouts.saidbar')
@section('contents')
    @if ($message = Session::get('success'))
        <div class="alert">
            {{ $message }}
        </div>
    @endif
    <div class="contener">
        <div class="title">Add House</div>
        <form action="{{ route('admin.house.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <i class="las la-city"></i>
                    <span class="details">City</span>
                    <input type="text" name="city" placeholder="Enter the city" autocomplete="off">
                    @error('city')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="las la-tty"></i>
                    <span class="details">Region</span>
                    <input type="text" name="region" placeholder="Enter the region" autocomplete="off">
                    @error('region')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="las la-braille"></i>
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Enter the address" autocomplete="off">
                    @error('address')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="las la-bell"></i>
                    <span class="details">Room number</span>
                    <input type="text" name="room_number" placeholder="Entre the room" autocomplete="off">
                    @error('room_number')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="las la-crow"></i>
                    <span class="details">Phone number</span>
                    <input type="text" name="phone" placeholder="Enter the number" autocomplete="off">
                    @error('phone')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Type</span>
                    <input type="text" name="type" placeholder="Enter the type" autocomplete="off">
                    @error('type')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="las la-truck"></i>
                    <span class="details">Space</span>
                    <input type="text" name="space" placeholder="Enter the space" autocomplete="off">
                    @error('space')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="las la-wind"></i>
                    <span class="details">Price</span>
                    <input type="text" name="price" placeholder="Enter the price" autocomplete="off">
                    @error('price')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="las la-beer"></i>
                    <span class="details">Floor number</span>
                    <input type="text" name="floors_number" placeholder="Enter the price" autocomplete="off">
                    @error('floors_number')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="lab la-apple"></i>
                    <span class="details">Image</span>
                    <input type="file" name="img" placeholder="Enter the image">
                    @error('img')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="button">
                <input type="submit" value="SAVE">
            </div>
        </form>
    </div>
@endsection
