<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcom page</title>
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Welcom Page</span></div>
            <form>
                <div class="signup-link"> Sign In? <a href="">
                Login</a></div>
                <div class="signup-link"> Join Now? <a href=
                    "{{ url('registration') }}"> Rigistration </a></div>
            </form>
        </div>
    </div>    
</body>
</html>