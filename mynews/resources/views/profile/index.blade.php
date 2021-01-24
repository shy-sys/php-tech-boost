@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
　　　　<div class="row">
  <div class="headline col-md-10 mx-auto">
    <div class="row">
      <div class="col-md-6">
        <div class="caption mx-auto">
          <div class="image">
            <img src="{{ asset('storage/image/' . $headline->image_path) }}">
          </div>
          <div class="title p-2">
            <h1>{{ str_limit($headline->name, 70) }}</h1>
          </div>
        </div>
      </div>
      　　　<div class="col-md-6">
        　<div class="title p-2">
          <h3>{{ str_limit($headline->gender, 70) }}</h3>
        　</div>
        　<div class="title p-2">
          <h3>{{ str_limit($headline->hobby, 70) }}</h3>
        　</div>
       　 <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
     　　　 </div>
  　　　　  </div>
  　　　　</div>
　　　</div>
       <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection