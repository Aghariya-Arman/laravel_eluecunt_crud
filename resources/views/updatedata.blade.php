@extends('layout')

@section('title')
    Update User Eloquant
@endsection

@section('content')
    <form action="{{ route('user.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Enter Name</label>
            <input type="text" class="form-control" value="{{ $users->name }}" name="name">
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Email</label>
            <input type="email" class="form-control" value="{{ $users->email }}" name="email">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Age</label>
            <input type="text" class="form-control" value="{{ $users->age }}" name="age">
            <span class="text-danger">
                @error('age')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter City</label>
            <input type="text" class="form-control"value="{{ $users->city }}" name="city">
            <span class="text-danger">
                @error('city')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
