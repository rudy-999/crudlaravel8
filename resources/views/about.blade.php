@extends('welcome')
@section('container')
<article>
    @foreach ($post as $isipost)
   <h3><a href="/abouts/{{ $isipost->slug }}">{{ $isipost->title }}</a></h3> 
    {{ $isipost->title }}
    @endforeach
</article>
@endsection