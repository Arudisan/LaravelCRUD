@extends('layouts.dashboard')
@section('content')
<h1>Hello, world!</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Major</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $data as $item )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->name}}</td>
        <td>{{ $item->date_birth}}</td>
        <td>{{ $item->gender}}</td>
        <td>{{ $item->address}}</td>
        <td>{{ $item->major}}</td>
      </tr>
      @endforeach
  </table>
@endsection
