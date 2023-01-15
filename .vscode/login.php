<?php 
    //data base connection
    require 'includes/config/database.php';
    $db = conectarDB();
    //un array vacio
    $errores = [];
    //Autenticando usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user = mysqli_real_escape_string($db,$_POST['user']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        if(!$user){
            $errores[] = 
            "<script>
            Swal.fire({
                text:'El usuario es obligatorio o no es valido',
                width: 380 ,
                padding: '3em',
                color: '#ffffff',
                background: 'linear-gradient(to left,#040404,#FFB602)' ,
                confirmButtonColor: '#FFB602'
            })
            </script>";
        }
        if(!$password){
            $errores[] = 
            "<script>
            Swal.fire({
                text: 'El password es obligatorio',
                width: 380 ,
                padding: '3em',
                color: '#ffffff',
                background: 'linear-gradient(to left,#040404,#FFB602)' ,
                confirmButtonColor: '#FFB602'
            })
            </script>";
            }

        //En el caso de q esten vacios
        if(empty($errores)){
            //revisar si el usuario existe
            $query = "SELECT * FROM admins where username = '${user}'";
            $resultado = mysqli_query($db, $query);
            // var_dump($resultado);
            if($resultado->num_rows){
                //Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);
                //Virificar si el password es correcto o no
                $auth = password_verify($password,$usuario['password']);
                // var_dump($auth);
                if($auth){
                    //usario autenticar
                    session_start();
                    //llenar el arreglo de sesion
                    $_SESSION['user'] = $usuario['username'];
                    $_SESSION['login'] = true;

                    header('Location: /yointidev-main/admin/inicio/slides.php');
                }else{
                    $errores[] = "<script>
                    Swal.fire({
                        text:'El password es incorrecto',
                        width: 380 ,
                        padding: '3em',
                        color: '#ffffff',
                        background: 'linear-gradient(to left,#040404,#FFB602)' ,
                        confirmButtonColor: '#FFB602'
                    })
                    </script>";
                }

            }else{
                $errores[] =
                "<script>
                Swal.fire({
                    text:'El usario no existe',
                    width: 380 ,
                    padding: '3em',
                    color: '#ffffff',
                    background: 'linear-gradient(to left,#040404,#FFB602)' ,
                    confirmButtonColor: '#FFB602'
                })
                </script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">


    <!-- FONT AWESOME -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>LOGIN</title>
    <link rel="stylesheet" href="/yointidev-main/login/css/login.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://kit.fontawesome.com/3bbaa4f13a.js" crossorigin="anonymous"></script>
</head>
<body>
<main class="class=contenedor seccion contenido-centrado">   
            
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- FORMS -->
            
                    <form method="post" action="login.php" class="sign-in-form"  novalidate>
                    
                        <h2 class="title">Conectarse a</h2>
                        <h2 class="title">YOINTI-admin</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Usuario" name="user" id="user">

                        </div>

                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Contraseña" name="password" id="password">
                        </div>

                        <input type="submit" class="btn solid" value="Ingresar">
        
                            <?php foreach($errores as $error): ?>
                                <div class="alerta error">
                                    <?php echo $error; ?>
                                </div>
                            <?php endforeach; ?>
                

                        <br>
                        <br>
                        <br>

                        <p class="social-text">Dirigirse a las redes sociales</p>
                        <br>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>

                    </form>
                
            </div>
        </div>
</main>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    
                    <h3>Ir a la web de YOINTI</h3>

                    <p>Lorem ipsum, dolor sit amet consectetur 
                        adipisicing elit. Deleniti ut molestiae 
                        laborum ullam doloribus sunt impedit unde harum. 
                        Quam magni inventore, qui autem ea beatae obcaecati 
                        exercitationem nam numquam voluptates?</p>

                        <a href="/yointidev-main/">
                        <button class="btn transparent" >
                            Volver
                            <i class="fa-solid fa-arrow-right" ></i>
                        </button>
                        </a>
                    

                </div>
                
                <img src="./login/img/About-Us.png" alt="" class="image">
                <br>
                <img src="./login/img/yinegro.png" alt="" class="logo">

            </div>
        </div>


    </div>
    
    <script src="app.js"></script>

</body>

</html>