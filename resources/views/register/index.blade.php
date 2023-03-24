
@extends('welcome')
@section('container')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat</strong> {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<form action="/register" method="post">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"> 
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp"  value="{{ old('email') }}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"  value="{{ old('username') }}">
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"  value="{{ old('password') }}">
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection