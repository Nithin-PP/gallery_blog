@extends('Admin.Layouts.layout')
@section('content')
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

@endsection