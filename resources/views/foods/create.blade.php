@extends('layouts.app')

@section('content')
<h1>This is foods create page</h1>
<form  action='/foods' method="post"  enctype="multipart/form-data">
    {{-- Loại bỏ bảo mật trong form, tạo ô input ảo có token và value --}}
    {{-- Có csrf mới gửi dữ liệu đi được --}}
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title"  name="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Body</label>
    <input type="text" class="form-control"  name="body"  placeholder="Enter body">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control"  name="image"  placeholder="Enter body">
  </div>
 
  <select name="categories" >
    @foreach ($categories as $c)
    <option value="{{ $c->id }}">{{ $c->name }}</option>
    @endforeach
  </select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  @if ($errors->any())
      @foreach ($errors->all() as $error)
          <p class="text-danger">{{ $error }}</p>
      @endforeach
  @endif

@endsection