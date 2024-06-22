<div class="col-auto col-md-3 col-xl-2 px-sm-1 px-0 bg-sidebar border rounded-3">
    <div class="d-flex flex-column px-3 pt-2 text-white min-vh-100">
        <!-- Contenido de la barra lateral -->
        <div class="text-center pt-3">
            <img src="../public/img/logo_blanco.png" alt="Logo sena" class="logo_menu">
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start text-white" id="menu">
            <li class="nav-item">
                <a href="../views/dashboard.php" class="nav-link align-middle px-0 text-white">
                    <i class="fas fa-home fs-5"></i>
                    <span class="d-none d-sm-inline px-3">Inicio</span>
                </a>
            </li>
            <li>
                <a href="../views/users.php" class="nav-link px-0 align-middle text-white">
                    <i class="fas fa-users fs-5"></i>
                    <span class="d-none d-sm-inline px-3">Usuarios</span>
                </a>
            </li>
            <li>
                <a href="../views/reports.php" class="nav-link px-0 align-middle text-white">
                    <i class="fas fa-tasks fs-5"></i>
                    <span class="d-none d-sm-inline px-3">Reportes</span> 
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="../views/MyProfileView.php" class=" text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://laboratoriosniam.com/wp-content/uploads/2018/07/michael-dam-258165-unsplash_WEB2.jpg" alt="Profile image" width="50" height="40" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">Lina Castro</span>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="../views/MyProfileView.php">Mi perfil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Cerrar la sesión</a></li>
            </ul>
        </div>
    </div>
</div>
