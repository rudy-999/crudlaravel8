
@extends('welcome')
@section('container')
{{-- <table class="table table-bordered table-striped">
    <tr>
        <td style="width:150px">Nama</td>
        <td>{{ $data->nama }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>{{ $data->pekerjaan }}</td>
    </tr>
    <tr>
        <td>Usia</td>
        <td>{{ $data->usia }}</td>
    </tr>
</table> --}}
<p>{{ $message }}</p>
<a href="/input" class="btn btn-primary">Kembali</a>
@endsection