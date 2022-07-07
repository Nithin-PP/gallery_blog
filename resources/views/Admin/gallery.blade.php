<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Management | Dashboard</title>
  @include('Includes.header')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('Includes.adminmenu')
 <div class="wrapper">
<div class="container" style="margin-top:10px;">
<h2 style="margin-bottom: 20px;">Gallery</h2>

<!-- @if($errors->any())
    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
@endif -->

        <form id="form" action="{{url('register')}}" name="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                Title :
                <input type="text" class="form-control" name="title" id="title" placeholder="enter title">
                
            <div class="form-group col-md-12" >
            Detail :
                <textarea id="detail" class="form-control" name="detail" ></textarea>               
            </div>

            <div class="form-group col-md-12" >
            Description :
                <textarea id="desc" class="form-control" name="desc" ></textarea>               
            </div>

            <div class="form-group col-md-12" >
                image :              
                 <input type="file" class="form-control" name="file" id="file" > 
            </div>

            <div>
            <input type="submit" class="btn btn-success" name="submit" id="submit">
            </div>
        </form>
    </div>
    <br>
    <br>
 </div>

 @include('Includes.footer')
</body>
</html>

