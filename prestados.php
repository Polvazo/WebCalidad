<?php 
    include "controller/menu.controller.php";
    
?>

<!DOCTYPE html>
<html>
<head>
<?php include 'tpl/head.php'; ?>
<link href="app/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="agregar.php">Agregar Libro</a></li>
                            <li><a href="disponibles.php">Lista de libros disponibles</a></li>
                             <li><a href="inicio.php?data=close">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Lista de Libros Activos</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-xs-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titulo</th>
                                            <th>Edicion</th>
                                            <th>SBN</th>
                                            <th>Idioma</th>
                                            <th>Numero de Ingreso</th>
                                            <th>Paginas</th>
                                            <th>Fecha de ingreso</th>
                                            <th>Estado</th>
                                            <th>Autor</th>
                                            <th>Categoria</th>
                                            <th>Adicionales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                        foreach ($array as $col) {
                        if ($col['estado']==0) {
                            echo '
                                <tr>
                                <td class="add-col2">
                                <p>
                                 <input type="checkbox" class="filled-in" id="test'.$col['id'].'" />
                                 <label for="test'.$col['id'].'"></label>
                               </p>
                              </td>
                              <td class="add-col2"><strong>'.$col['titulo'].'</strong></td>
                              <td class="add-col2"><strong>'.$col['edicion'].'</strong></td>
                              <td class="add-col2"><strong>'.$col['isbn'].'</strong></td>
                              <td class="add-col2"><strong>'.$col['idioma'].'</strong></td>
                              <td class="add-col2"><strong>'.$col['num_ingreso'].'</strong></td>
                              <td class="add-col2"><strong>'.$col['num_hoja'].'</strong></td>
                              <td class="add-col2"><strong>'.$col['fecha_ingreso'].'</strong></td>
                              <td class="add-col2"><strong>'.$col['estado'].'</strong></td>
                              <td class="add-col2"><strong>'.$col['autor'].'</strong></td>
                              <td class="add-col2"><strong>12</strong></td>
                              <td class="add-col2">
                                <a href="modificar.php?id='.$col['id'].'">
                                    <img src="app/img/edit.png" alt="">
                                </a>
                                <a href="#modal'.$col['id'].'b">
                                    <img src="app/img/delete.png" alt="">
                                </a>
                              </td>
                              </tr>
                                <div id="modal'.$col['id'].'b" class="modal">
                                  <div class="modal-content">
                                    <h4>Eliminar libro</h4>
                                    <p>¿Seguro que quiere eliminar el libro seleccionado?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No</a>
                                    <input type="hidden" value="'.$col['id'].'" id="val'.$col['id'].'">
                                    <a id="delete'.$col['id'].'" class="modal-action modal-close waves-effect waves-green btn-flat">Si</a>
                                    <div id="dialog" title="Mensaje Contáctenos" style="display:none;">
                                    <p id="rpta"></p>
                                  </div>
                                </div>
                            ';
                        }
                        }
                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
</body>
</html>
