@extends('Admin.Layouts.layout')
 @section('content')
 <div class="wrapper">
<div class="container" style="margin-top:10px;">
<h2 style="margin-bottom: 20px;">Gallery Images</h2>

<!-- @if($errors->any())
    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
@endif -->
        <form id="form" action="{{url('update1')}}" name="form" method="post" enctype="multipart/form-data">@csrf
        <input type="hidden" name="id" id="id" value="{{$update->id}}">
            <div class="form-group col-md-12" >
                image :              
                 <input type="file" class="form-control" name="file" id="file" > 
                 <img src="{{asset('uploads/'.$update->image)}}" alt="" width="100px" height="100px">
            </div>
            <div>
            <input type="submit" class="btn btn-success" name="submit" id="submit">
            </div>
        </form>
    </div>
 </div>
    @endsection