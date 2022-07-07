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
 <div class="container">
    <table class="table">
        <?php 
        $count=1;
        ?>
        <br> 
    <br>
        <tr>
            <th>sl/no</th>
            <th>title</th>
            <th>detail</th>
            <th>description</th>
            <th>image</th>
            <th colspan="2">operations</th>
            <th colspan="2">related</th>
        </tr>
        @foreach($result as $gal)
        <tr>
            <td>{{$count}}</td>
            <td>{{$gal->title}}</td>
            <td>{{$gal->detail}}</td>
            <td>{{$gal->description}}</td>
            <td><img src="{{asset('uploads/'.$gal->image) }}" alt="" width="80px" height="80px"></td>
            <td> <a href="{{'edit/'.$gal->id}}" class="btn btn-primary">edit</a> </td>
             <td> <a href="{{'delete/'.$gal->id}}" class="btn btn-danger">delete</a></td>
             <td> <a href="{{'add/'.$gal->id}}" class="btn btn-success">add+</a></td>
             <td> <a href="{{'edit1/'.$gal->id}}" class="btn btn-dark">view</a></td>
        </tr>
        <?php 
        $count++; 
        ?>
        @endforeach
    </table>
    </div>
 </div>
 @include('Includes.footer')
</body>
</html>