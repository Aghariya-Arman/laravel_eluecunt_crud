@extends('layout')

@section('title')
    Add User Eloquant
@endsection

@section('content')
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Enter Name</label>
            <input type="text" class="form-control" value="{{ old('name') }}" name="name">
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Email</label>
            <input type="email" class="form-control" value="{{ old('email') }}" name="email">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Age</label>
            <input type="text" class="form-control" value="{{ old('age') }}" name="age">
            <span class="text-danger">
                @error('age')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter City</label>
            <input type="text" class="form-control" value="{{ old('city') }}" name="city">
            <span class="text-danger">
                @error('city')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
