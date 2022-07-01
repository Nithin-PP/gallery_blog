@extends('Web.Layouts.layout')
 @section('content')   
<div class="container-fluid" data-aos="fade" data-aos-delay="500">
      <div class="row">

      @foreach($insert as $in)
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">            
              <a href="{{url('image/' .$in->id)}}" class="btn btn-outline-white py-2 px-5"> More </a>
            </div>
            <img src="{{asset('uploads/'.$in->image) }}"  width="600px" height="600px">
          </div>
          <h2 class="mb-3" style="margin-left:200px; color:#fff;">{{$in->title}}</h2>
          <p style="width:600px; color:#fff;">{{$in->detail}}</p>
        </div>
        @endforeach
      </div>
    </div>
    @endsection
