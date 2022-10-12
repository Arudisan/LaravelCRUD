@extends('layouts.dashboard')
@section('content')
    <h1>Hello, world!</h1>
    @if ($message = Session::get('notif'))
        <div class="alert alert-primary" role="alert">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <form class="row g-3" action="{{ route('student.index') }}" method="GET">
        <div class="col-auto">
            <select name="filter" id="filter" class="form-select">
                <option value="">All</option>
                @foreach ($majors as $major)
                    <option value="{{ $major->id }}" {{ request('filter') == $major->id ? 'selected' : '' }}>
                        {{ $major->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-auto">
            <label for="search" class="visually-hidden"></label>
            <input type="text" name="search" class="form-control" id="search" placeholder="Search"
                value="{{ request('search') }}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Cari</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date Birth</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Major</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->date_birth }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->major->name }}</td>
                    <td>
                        <a href="{{ route('student.edit', ['student' => $item->id]) }}" class="btn btn-primary">edit</a>
                        <form action="{{ route('student.destroy', ['student' => $item->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
    {{ $data->links() }}
@endsection
