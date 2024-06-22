<?php
include ("../includes/header.php");
?>

<div class="container-fluid">
    <div class="row">
        <?php include ("../includes/sidebar.php"); ?>

        <div class="col py-3">
            <div class="container-fluid mt-4">

                <div class="d-flex justify-content-between">
                    <h1 class="d-inline">Reportes</h1>

                    <button type="button" class="btn btn-primary bg-btn" data-bs-toggle="modal"
                        data-bs-target="#addUserModal" data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Crear
                        Reporte</button>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="addUserModal" tabindex="-1"
                    aria-labelledby="addUserModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addUserModalLabel">Crear Reporte</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="attention_date">Fecha del reporte:</label>
                                        <input type="date" class="form-control" id="attention_date">
                                    </div>

                                    <div class="form-group">
                                        <label for="incidence_description">Descripcion:</label>
                                        <textarea class="form-control" id="incidence_description" rows="5"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Adjuntar foto:</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>


                                </form>
                            </div class="d-flex justify-content-between">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary bg-btn">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                        <i class="fas fa-eye"> </i>
                                        <i class="fas fa-pencil-alt"> </i>
                                        <i class="fas fa-trash-alt"> </i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link">Anterior</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Siguiente</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>