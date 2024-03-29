@extends('layouts.saidbar')
@section('contents')
    @if ($message = Session::get('success'))
        <div class="alert">
            {{ $message }}
        </div>
    @endif
    <div class="progect">
        <div class="card">
            <div class="card-header">
                <h3>House</h3>
                <a href="">
                    <button>add New house<span class="las la-plus"></span></button>
                </a>
            </div>
            <div class="card-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>
                                <i class="las la-city"></i>
                                city
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                regoion
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                owner
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                type
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                room number
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ( as $item) --}}
                            <tr>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->region }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->room_number }}</td>
                                <td>
                                    <a title="show" href="{{ route('admin.house.show', [$item->id]) }}">
                                        <span class="las la-user-circle"></span>
                                    </a>
                                    <a title="edit" href="{{ route('admin.house.edit', [$item->id]) }}">
                                        <span class="las la-phone"></span>
                                    </a>
                                    <a title="delete" href="{{ route('admin.house.destroy', [$item->id]) }}">
                                        <span class="las la-comment"></span>
                                    </a>
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Chalet</h3>
                <a href="">
                    <button>add New house<span class="las la-plus"></span></button>
                </a>
            </div>
            <div class="card-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>
                                <i class="las la-city"></i>
                                city
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                regoion
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                owner
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                type
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                room number
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ( as $item) --}}
                            <tr>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->region }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->room_number }}</td>
                                <td>
                                    <a title="show" href="{{ route('admin.house.show', [$item->id]) }}">
                                        <span class="las la-user-circle"></span>
                                    </a>
                                    <a title="edit" href="{{ route('admin.house.edit', [$item->id]) }}">
                                        <span class="las la-phone"></span>
                                    </a>
                                    <a title="delete" href="{{ route('admin.house.destroy', [$item->id]) }}">
                                        <span class="las la-comment"></span>
                                    </a>
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Store</h3>
                <a href="">
                    <button>add New house<span class="las la-plus"></span></button>
                </a>
            </div>
            <div class="card-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>
                                <i class="las la-city"></i>
                                city
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                regoion
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                owner
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                type
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                room number
                            </td>
                            <td>
                                <i class="las la-city"></i>
                                action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ( as $item) --}}
                            <tr>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->region }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->room_number }}</td>
                                <td>
                                    <a title="show" href="{{ route('admin.house.show', [$item->id]) }}">
                                        <span class="las la-user-circle"></span>
                                    </a>
                                    <a title="edit" href="{{ route('admin.house.edit', [$item->id]) }}">
                                        <span class="las la-phone"></span>
                                    </a>
                                    <a title="delete" href="{{ route('admin.house.destroy', [$item->id]) }}">
                                        <span class="las la-comment"></span>
                                    </a>
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
