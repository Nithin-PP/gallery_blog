@extends('Web.Layouts.layout')
 @section('content')  

 <div class="site-section"  data-aos="fade">
      <div class="container-fluid">

      @foreach($result as $value)
      <div style="margin-left:600px;">
      <img src="{{asset('uploads/'.$value->image) }}"  width="600px" height="600px">
      <p style="width:600px; color:#fff;">{{$value->description}}</p>
      </div>
        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="text-center">Related Images</h2>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row" id="lightgallery">        
          @php
          $res=$value->blogData;
          @endphp
          @foreach($res as $re)
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="{{asset('uploads/'.$re->image)}}" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, dolor alias. Dignissimos hic voluptatibus dolorum expedita recusandae, consequatur distinctio est.</p>">
            <a href="#"><img src="{{asset('uploads/'.$re->image)}}"  width="400px" height="400px"></a>
          </div>
          @endforeach
          @endforeach

        </div>
      </div>
    </div>
    @endsection


