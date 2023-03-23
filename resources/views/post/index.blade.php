
@extends('welcome')
@section('container')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat</strong> {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<a href="/postCreate" class="btn btn-primary">New post</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1; @endphp
  @foreach ($post as $val)
  <tr>
    <th scope="row">{{ $no++ }}</th>
    <td>{{ $val->title }}</td>
    <td>{{ $val->slug }}</td>
    <td>{{ date('d m Y',strtotime($val->created_at)) }}</td>
    <td>
      <div class="d-grid gap-2 d-md-block">
          <a class="btn btn-warning btn-sm" href="/postEdit/{{ $val->slug }}">edit</a>
          <a href="/postDelete/{{ $val->slug }}" class="btn btn-danger btn-sm" onclick="return confirm('apakah kamu mau hapus?')">hapus</a>
      </div>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>
@endsection