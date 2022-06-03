@extends('layouts.saidbar')
@section('contents')
    @if ($message = Session::get('success'))
        <div class="alert">
            {{ $message }}
        </div>
    @endif
    <div class="contener">
        <div class="title">Update Chalet</div>
        <form action="{{ route('admin.chalet.update', [$chalet->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">City</span>
                    <input type="text" name="city" placeholder="" value="{{ $chalet->city }}" required autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Region</span>
                    <input type="text" name="region" placeholder="" value="{{ $chalet->region }}" required
                        autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="" value="{{ $chalet->address }}" required
                        autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Room number</span>
                    <input type="text" name="room_number" placeholder="" value="{{ $chalet->room_number }}" required
                        autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Phone number</span>
                    <input type="text" name="phone" placeholder="" value="{{ $chalet->user->phone }}" required
                        autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Type</span>
                    <input type="text" name="type" placeholder="" value="{{ $chalet->show_type }}" required
                        autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Space</span>
                    <input type="text" name="space" placeholder="" value="{{ $chalet->space }}" required
                        autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Price</span>
                    <input type="text" name="price" placeholder="" value="{{ $chalet->price }}" required
                        autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Floor number</span>
                    <input type="text" name="floors_number" placeholder="" value="{{ $chalet->floors_number }}" required
                        autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Image</span>
                    <input type="file" name="img" placeholder="" value="{{ $chalet->img }}" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
