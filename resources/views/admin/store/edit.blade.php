@extends('layouts.saidbar')
@section('contents')
    @if ($message = Session::get('success'))
        <div class="alert">
            {{ $message }}
        </div>
    @endif
    <div class="contener">
        <div class="title">Update Store</div>
        <form action="{{ route('admin.store.update', [$store->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">City</span>
                    <input type="text" name="city" placeholder="" value="{{ $store->city }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Region</span>
                    <input type="text" name="region" placeholder="" value="{{ $store->region }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="" value="{{ $store->address }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Room number</span>
                    <input type="text" name="room_number" placeholder="" value="{{ $store->room_number }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone number</span>
                    <input type="text" name="phone" placeholder="" value="{{ $store->user->phone }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Type</span>
                    <input type="text" name="type" placeholder="" value="{{ $store->show_type }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Space</span>
                    <input type="text" name="space" placeholder="" value="{{ $store->space }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Price</span>
                    <input type="text" name="price" placeholder="" value="{{ $store->price }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Floor number</span>
                    <input type="text" name="floors_number" placeholder="" value="{{ $store->floors_number }}" required>
                </div>
                <div class="input-box">
                    <span class="details">Image</span>
                    <input type="file" name="img" placeholder="" value="{{ $store->img }}" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
