<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>  
<h2>gallery</h2> 
    <table class="table">
    <h1></h1>
        <?php
        $count=1;
        ?>
        <tr>
            <th>title</th>
            <th>detail</th>
            <th>description</th>
            <th>image</th>
           
        </tr>
        <tr>
            <td>{{$gal->title}}</td>
            <td>{{$gal->detail}}</td>
            <td>{{$gal->description}}</td>
            <td><img src="{{public_path('uploads/'.$gal['image']) }}" alt="" width="80" height="80"></td>          
        </tr>
        <br>
        <h2>related data</h2>
        </table>
        <table class="table">
            <tr>
                <th>sl/no</th>
                <th>image</th>
            </tr>
            @foreach($blg as $bl)
            <tr>
                <td>{{$count}}</td>
                <td><img src="{{public_path('uploads/'.$bl['image']) }}" alt="" width="80" height="80"></td>
            </tr>
            <?php
            $count++;
            ?>
            @endforeach

        </table>

        </table>  
</body>
</html>