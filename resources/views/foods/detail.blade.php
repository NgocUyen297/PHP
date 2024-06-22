@extends('layouts.app')

@section('content')
<h1>This is foods index page</h1>
<a href="/foods/create" class="btn-danger">create food</a>
<p>{{ $food->title }}</p>
<p>{{ $food->body }}</p>
<p>{{ $category }}</p>
<img src="{{ asset('images/'. $food->images) }}" alt="hinh anh">
@endsection