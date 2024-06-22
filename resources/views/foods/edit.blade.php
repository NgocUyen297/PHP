@extends('layouts.app')

@section('content')
<h1>This is foods edit page</h1>
<form  action="/foods/{{$food->id}}/" method="post">
    {{-- Loại bỏ bảo mật trong form, tạo ô input ảo có token và value --}}
    {{-- Có csrf mới gửi dữ liệu đi được --}}
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="put" />
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title" 
    value={{ $food->title }}
     name="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Body</label>
    <input type="text" class="form-control"
    value={{ $food->body }}  
    name="body"  placeholder="Enter body">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection