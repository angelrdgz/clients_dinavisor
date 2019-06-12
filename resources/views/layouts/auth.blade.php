<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Dinavisor</title>
</head>

<body id="auth">
    <div class="d-md-flex h-md-100 align-items-center">
        <div class="col-md-6 col-lg-4 p-0 bg-white h-md-100 loginarea">
            <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
                @yield('content')
            </div>
        </div>
        <div class="col-md-6 col-lg-8 p-0 bg-indigo h-md-100">
            <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
                <div class="logoarea pt-5 pb-5">
                    <img src="{{asset('imgs/real_time.gif')}}" class="animated_back" alt="">
                </div>
            </div>
        </div>


    </div>
</body>

</html>