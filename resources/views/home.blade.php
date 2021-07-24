<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    {{--style--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
                                {{--navbar--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @livewireStyles

</head>
<body style="background-color: #f3f3f3">

<div class="sidebar">
    <a href="#"><i class="fa fa-address-card"> </i></a> <br>
    <a href="#" class="fa fa-pencil">اضافة منتج</a> <br>
    <a href="#" class="fa fa-plus">اضافة خدمة</a> <br>

</div>

    <nav class="navbar  navbar-light">
        <div class="container-fluid">
            <div class="navbar-header" style="font-weight: bold;color: #e880ba">
                <a class="navbar-brand" href="#">Glow Salon</a>
            </div>
            <ul class="nav navbar-nav  ">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>   Heba</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>  logout</a></li>
            </ul>
        </div>
    </nav>
@yield('content')

<form action="/action_page.php"  style="position: absolute;
  left: 600px;
  top: 120px;
  right: 5px;
  bottom: 5px;">
    <div class="card border-success" >
        <div class="card-body ">
            <p class="card-text">  قص الشعر  </p>
            <br>

            <p class="card-text">  سشوار  </p>
        </div>
        <div class="card-footer bg-transparent border-success">Footer</div>
    </div>
    <div class="btn-group" style="width:80%">
        <button style="width:20%;background-color: #ff476d">ازاله</button>
        <button style="width:20%">السعر</button>
        <button style="width:20%">الخصم</button>
        <button style="width:20%;background-color: #01a7e1">الكمية</button>
    </div>
    <div class="btn-group" style="width:64%">
        <button style="width:100%;background-color: #00ac70 ">عملية الدفع</button>
    </div>
</form>
    @livewireScripts
</body>
</html>
