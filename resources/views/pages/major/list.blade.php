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
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $data as $item )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->id}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->description}}</td>
        <td>
            <a href="{{route('major.show',['major'=>$item->id]) }}" class="btn btn-primary"> Students</a>
            <a href="{{route('major.edit',['major'=>$item->id]) }}" class="btn btn-primary">edit</a>
            <form action="{{ route('major.destroy',['major'=> $item->id]) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
  </table>
@endsection
