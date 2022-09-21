@extends('layouts.dashboard')
@section('content')
<h1>Hello, world!</h1>
@if($message = Session::get('notif'))
<div class="alert alert-primary" role="alert">
    <strong>{{ $message }}</strong>
  </div>
  @endif
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
        @foreach ( $data as $item )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->name}}</td>
        <td>{{ $item->date_birth}}</td>
        <td>{{ $item->gender}}</td>
        <td>{{ $item->address}}</td>
        <td>{{ $item->major}}</td>
        <td>
            <a href="{{route('student.edit',['student'=>$item->id]) }}" class="btn btn-primary">edit</a>
        </td>
      </tr>
      @endforeach
  </table>
@endsection
