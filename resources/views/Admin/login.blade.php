<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form id="form" action="{{route('login_data')}}" name="form" method="post" enctype="multipart/form-data">
            @csrf
            <div style="margin-left:400px; margin-top:50px;">
            <h2 style="margin-left:15px; margin-bottom:50px;">login</h2>
            <div class="form-group col-md-6">
                email :
                <input type="email" class="form-control" name="email" id="email" placeholder="enter title">                       
            </div>

            <div class="form-group col-md-6" >
                password :              
                 <input type="password" class="form-control" name="password" id="password" > 
            </div>
            <div class="form-group col-md-6">
            <input type="submit" class="btn btn-success" name="submit" id="submit">
            </div>
            </div>
        </form>
    </div>
    <br>
    <br>
 </div>
</body>
</html>