<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/login/logstyle.css')}}">
    <script src="{{ asset('js/login/logincard.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>

    

    <div class="container" id="container">
        <div class="circle circle-one"></div>
        <div class="form-container sign-up-container">
            <form action="/registrar" method="post">
                @csrf
                <h1 class="colorh">Registrarse</h1>
                <div class="social-container">
                    <!-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
                </div>
                <span>O usa tu correo para registrarte</span>
                <input type="text" name="name" placeholder="Nombre" />
                <input type="email" name="email" placeholder="Correo" />
                <input type="password" name="password" placeholder="Contraseña" />
                <button type="submit">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="/login" method="post">
                @csrf
                <h1 class="colorh">Iniciar Sesion</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>O usa tu cuenta</span>
                <input type="email" name="email" placeholder="Correo" />
                <input type="password" name="password" placeholder="Contraseña" />
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido de nuevo!</h1>
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hola, Usuario!</h1>
                    <p>Introduce tus datos personales y comienza tu juego con nosotros.</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
            
        </div>

        <div class="circle circle-two"></div>
        
        
    </div>
    
        <div class="theme-btn-container"></div>
        <script src="{{ asset('js/login/loginscript.js') }}"></script>
   
</body>
</html>