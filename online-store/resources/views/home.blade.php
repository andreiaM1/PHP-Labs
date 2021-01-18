@extends('layouts.app')

@section('style')
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 240px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 180px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

.gallery-wrapper {
    margin: 0;
   position: absolute;               
   top: 30%;
   left: 15%; 
   width: 100%;                        
  
}
h3 {
    position: absolute;
    left: 42%;
    top: 20%;
    color: gray;
    font-family: -webkit-pictograph;
}
</style>
@endsection

@section('content')
<h3>Product Categories</h3>
<div class="gallery-wrapper">
@foreach($categories as $key => $category)
<div class="gallery">
    
        <img src="{{$category->image}}" alt="Forest" width="600" height="400">
    
    <div class="desc">{{$category->name}}</div>
</div>
@endforeach
</div>
@endsection
