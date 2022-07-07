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
<h2 style="margin-bottom: 20px;">Gallery Images</h2>

<!-- @if($errors->any())
    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
@endif -->
        <form id="form" action="{{url('reg')}}" name="form" method="post" enctype="multipart/form-data">@csrf
        <input type="hidden" name="id" id="id" value="{{$view}}">
            <div class="form-group col-md-12" >
                image :              
                 <input type="file" class="form-control" name="file" id="file" > 
            </div>
            <div>
            <input type="submit" class="btn btn-success" name="submit" id="submit">
            </div>
        </form>
    </div>
 </div>
 @include('Includes.footer')
</body>
</html>
