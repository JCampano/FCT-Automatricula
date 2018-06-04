 <?php
    include "php/permisos.php";
    include "header.php";
 ?>
            <div class="content-wrapper">
              <div class="container-fluid" style="margin-top:20px;">
                  <?php

                    if (isset($_GET["e"]) && $_GET["e"]==1){
                        $_SESSION['tipoMensaje']= "danger";
                        $_SESSION['mensaje'] = "No tiene permiso para acceder a esta página";
                    }


                    if (isset($_SESSION['mensaje']) && isset($_SESSION['tipoMensaje']))  {
                    echo '<div class="alert alert-'.$_SESSION['tipoMensaje'].' alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>'.$_SESSION["mensaje"].'</div>';
                    unset($_SESSION['mensaje']);
                    unset($_SESSION['tipoMensaje']);
               }

                ?>
                <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Inicio</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Últimas Matrículas Registradas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Dato</th>
                                            <th>Dato</th>
                                            <th>Dato</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Enseñanzas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Dato</th>
                                            <th>Dato</th>
                                            <th>Dato</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                            <td>Dato</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
              </div>
          </div>

   <?php

    include "footer.php";

    ?>