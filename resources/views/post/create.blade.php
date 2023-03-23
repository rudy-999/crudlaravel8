
@extends('welcome')
@section('container')
<h2>Add Post</h2>
<form action="/postStore" method="post">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" required autofocus value="{{ old('title') }}"> 
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required value="{{ old('slug') }}" readonly="" > 
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exceprt" class="form-label">Exceprt</label>
      <input type="text" name="exceprt" id="exceprt" class="form-control @error('exceprt') is-invalid @enderror" required value="{{ old('exceprt') }}"> 
      @error('exceprt')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" required value="{{ old('body') }}"> </textarea>
      @error('body')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/post" class="btn btn-secondary">back</a>
  </form>
  <script>
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

title.addEventListener('change',function(){
  fetch('/post/checkSlug?title='+title.value)
  .then(response =>response.json())
  .then(data=>slug.value=data.slug)
});
  </script>
@endsection