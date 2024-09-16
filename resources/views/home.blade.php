@extends('layout')

@section('title')
    All User Eloquant
@endsection

@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>
    <table class="table table-bordered-dark table-striped mt-2">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>AGE</th>
            <th>CITY</th>
            <th>VIEW</th>
            <th>DELET</th>
            <th>UPDATE</th>

        </tr>
        @foreach ($detail as $det)
            <tr>
                <td> {{ $det->id }}</td>
                <td> {{ $det->name }}</td>
                <td>{{ $det->email }}</td>
                <td> {{ $det->age }}</td>
                <td> {{ $det->city }}</td>
                <td><a href="{{ route('user.show', $det->id) }}" class="btn btn-primary">view</a></td>
                <td>
                    <form action="{{ route('user.destroy', $det->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td><a href="{{ route('user.edit', $det->id) }}" class="btn btn-warning">Update</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class=" mt-3">
        {{ $detail->links('pagination::bootstrap-5') }}
    </div>
@endsection
