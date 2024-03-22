<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration page</title>
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>registration Page</span></div>
            <form>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" value=""
                    placeholder="Username" required name="name">
                </div>
                
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value=""
                    placeholder="Email" required name="email">
                </div>

                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" value=""
                    placeholder="password" required name="password">
                </div>

                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="Confirm password" value=""
                    placeholder="Confirm_password" required name="password">
                </div>

                <div class="row">
                    <select class="selectbox" name="is_role"
                    required>
                        <option value="">Select Role </option>
                        <option value="2">Super Admin</option>
                        <option value="1">Admin</option>
                        <option value="0">User </option>
                    </select>
                </div>

                <div class="pass"><a href="Forgot Password"></a></div>

                <div class="row button">
                    <input type="submit" value="registration">
                </div> 
                
                <div class="signup-link"> Sign In? <a href="">login</a>
                </div>

                <div class="signup-link"> Welcom Page? <a href="{{ url('/') }}">Welcom Page</a>
                </div>
                
            </form>  
        </div>
    </div>          
</body>
</html>
    
