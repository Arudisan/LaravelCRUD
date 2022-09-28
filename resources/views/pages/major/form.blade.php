@extends('layouts.dashboard')
@section('content')
<h1>{{ $major->id ? 'Edit' : 'Create' }}</h1>
@if ($major->id)
    <form action="{{route('major.update',['major' => $major->id])}}" method="post">
    @method('PUT')
@else
    <form action="{{ route('major.store')}}" method="post">
@endif
    @csrf
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $major->name}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="">description</label>
        <textarea id="description" name="description" class="form-control" cols="30" rows="10"> {{ $major->description}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
