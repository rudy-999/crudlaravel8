
@extends('welcome')
@section('container')
<form method="POST" action="/submit">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>

    <button type="submit">Submit</button>
</form>
@endsection