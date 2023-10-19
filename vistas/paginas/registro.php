<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Registro
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.php?pagina=inicio">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Registro
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
    <div class="flower__shape wow fadeInUp" data-wow-duration="3s">
        <img src="assets/img/about/shape/flower1.png" alt="flower__image">
    </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Name" id="name" name="registerName">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="registerEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                    name="registerPassword">
            </div>
        </div>
        <div class="flower__shape__two wow fadeInDown" data-wow-duration="4s">
            <img src="assets/img/about/shape/flower2.png" alt="flower__image">
         </div>
        <?php /*
   $registro = new ControladorFormularios();
   $registro -> crtRegistro(); 
   */
        $registro = ControladorFormularios::crtRegistro();
        if ($registro == "ok") {
            echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.gref);
                }
                </script>';

            echo '<div class="alert-success"> El usuario ha sido registrado</div>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>