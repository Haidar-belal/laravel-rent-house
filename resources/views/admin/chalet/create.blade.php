@extends('layouts.saidbar')
@section('contents')
    @if ($message = Session::get('success'))
        <div class="alert">
            {{ $message }}
        </div>
    @endif
    <div class="contener">
        <div class="title">Add Chalet</div>
        <form action="{{ route('admin.chalet.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">City</span>
                    <input type="text" name="city" placeholder="Enter the city" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Region</span>
                    <input type="text" name="region" placeholder="Enter the region" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Enter the address" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Room number</span>
                    <input type="text" name="room_number" placeholder="Entre the room" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Phone number</span>
                    <input type="text" name="phone" placeholder="Enter the number" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Type</span>
                    <input type="text" name="type" placeholder="Enter the type" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Space</span>
                    <input type="text" name="space" placeholder="Enter the space" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Price</span>
                    <input type="text" name="price" placeholder="Enter the price" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Floor number</span>
                    <input type="text" name="floors_number" placeholder="Enter the price" required autocomplete="off">
                </div>
                <div class="input-box">
                    <i class="las la-car"></i>
                    <span class="details">Image</span>
                    <input type="file" name="img" placeholder="Enter the image" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="SAVE">
            </div>
        </form>
    </div>
@endsection
