@extends('layouts.app')

@section('content')
<h1>This is foods index page</h1>
<a href="/foods/create" class="btn-danger">create food</a>
@foreach ($foods as $food)
    <div style="margin-top: 20px; display:flex;">
        <a href="/foods/{{ $food->id }}">{{ $food->title }}</a>
        <p>{{ $food->body }}</p>
        <a href="/foods/{{ $food->id }}/edit">edit</a>
    </div>
    <form  action="/foods/{{$food->id}}/" method="post">
        {{-- Loại bỏ bảo mật trong form, tạo ô input ảo có token và value --}}
        {{-- Có csrf mới gửi dữ liệu đi được --}}
        @csrf
        @method('delete')
        <input type="hidden" name="_method" value="delete" />
        <button class="btn-danger">delete</button>
    </form>

@endforeach
@endsection