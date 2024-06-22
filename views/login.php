<?php
    include("../includes/header.php");
?>

<body>
    <main class="mt-5">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <div class="text-center rounded-circle">
                                        <img src="../public/img/logo_verde.png" alt="Logo sena" class="img-fluid logo">
                                    </div>
                                    <p class="text-center mb-3 mt-3">Introduzca su correo y contraseña para iniciar sesión</p>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        <div class="mb-3">
                                            <input type="Password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="rememberMe">Recuerdame</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0">Iniciar sesión</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include("../includes/footer.php"); ?>
</body>