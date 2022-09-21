@extends('layouts.dashboard')
@section('content')
<h1>{{ $student->id ? 'Edit' : 'Create' }}</h1>
@if ($student->id)
    <form action="{{route('student.update',['student' => $student->id])}}" method="post">
    @method('PUT')
@else
    <form action="{{ route('student.store')}}" method="post">
@endif
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->name}}">
      @error('name') <div class="text-muted"> {{$message}}</div> @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Date Birth</label>
      <input type="date" name="date_birth" class="form-control" id="exampleInputPassword1" value="{{ $student->date_birth}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gender</label>
       <select name="gender" id="gender" class="form-control">
        <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}> Laki</option>
        <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}> Perempuan</option>
       </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="">Address</label>
        <textarea id="alamat" name="address" class="form-control" cols="30" rows="10"> {{ $student->address}}</textarea>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Major </label>
        <select name="major" id="major" class="form-control">
            <option value="informatika" {{ $student->major == 'informatika' ? 'selected' : '' }}> Informatika</option>
            <option value="akuntansi" {{ $student->major == 'management' ? 'selected' : '' }}> Akuntansi</option>
            <option value="agama" {{ $student->major == 'agama' ? 'selected' : '' }}> Agama </option>
           </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
