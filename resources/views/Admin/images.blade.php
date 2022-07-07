<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  @include('Includes.header')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('Includes.adminmenu')
<div class="wrapper">
   <div class="container fluid">
    
    <table class="table">
        <?php 
        $count=1;
        ?>
<br> 
<br>
        <tr>
            <th>sl/no</th>
            <th>image</th>
            <th colspan="2">operations</th>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{$count}}</td>
            <td><img src="{{asset('uploads/'.$value->image) }}" alt="" width="80px" height="80px">
            {{$value->image}}</td>
            <td> <a href="{{'/edit2/'.$value->id}}" class="btn btn-primary">edit</a> 
           <a href="{{'/delete1/'.$value->id}}" class="btn btn-danger">delete</a></td>
        </tr>
        <?php $count++; ?>
        @endforeach
    </table>
    </div>
</div>

@include('Includes.footer')
</body>
</html>