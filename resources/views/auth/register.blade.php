<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Choco Travel - Registrate y Conoce el Choco </title>
    <link rel="stylesheet" href="{{ url('assets/css/register.css') }}">
    <!-- Fontawesome CDN Link -->
     <link rel="shortcut icon" href={{url('assets/images/logo/logo.png')}} type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="back">
            <img src={{url('assets/images/gallary/back.jpg')}} alt="">
                <div class="text"> 
                <span class="text-1">Registrate <br> Y conocer lo mejor del Chocó</span>
                    <span class="text-2">Acandi</span>
                </div>
            </div>
            <div class="front">
            <img src={{url('assets/images/gallary/front.jpg')}} alt="">
                <div class="text">
                    <span class="text-1">Logueate <br>y conoce lo mejor del Chocó</span>
                    <span class="text-2">Nuqui</span>
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="form-content">
                <!-- Login Form -->
                <div class="login-form">
                    <div class="title">Logueate</div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf <!-- Token CSRF requerido por Laravel para formularios POST -->
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Ingresa tu correo" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <div class="text"><a href="#"></a></div>
                            <div class="button input-box">
                                <input type="submit" value="Ingresa">
                            </div>
                            <div class="text sign-up-text">No tienes Cuenta? <label for="flip">Registrate</label></div>
                        </div>
                    </form>
                </div>

                <!-- Signup Form -->
                <div class="signup-form">
                    <div class="title">Registrate</div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf <!-- Token CSRF requerido por Laravel para formularios POST -->
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" placeholder="Ingresa tu nombre" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Ingresa tu coreo" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password_confirmation" placeholder="Confirma tu contraseña" required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Submit">
                            </div>
                            <div class="text sign-up-text">Ya cuentas con una cuenta? <label for="flip">Logueate</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
