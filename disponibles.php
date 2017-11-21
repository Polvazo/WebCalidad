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
                            <li><a href="prestados.php">Lista de libros prestados</a></li>
                             <li><a href="inicio.php">Cerrar Sesión</a></li>

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
                        if ($col['estado']==1) {
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
                                <input type="hidden" value="'.$col['id'].'" id="val'.$col['id'].'">
                                <a data-toggle="modal" data-target="#modal'.$col['id'].'b">
                                    <img src="app/img/delete.png" alt="">
                                </a>
                                <div id="dialog'.$col['id'].'" title="Mensaje Contáctenos" style="display:none;">
                                    <p id="rpta'.$col['id'].'"></p>
                              </td>
                              </tr>
                              <div id="modal'.$col['id'].'b" class="modal fade" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Eliminar Libro</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>¿Seguro que quiere eliminar el libro seleccionado?</p>
                                        <input type="hidden" value="'.$col['id'].'" id="val'.$col['id'].'">
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" id="delete'.$col['id'].'" class="btn btn-primary">Si</button>
                                        <button href="#!" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div><!-- /.modal-content -->
                                  </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <script>
                                    $("modal'.$col['id'].'b").on("shown.bs.modal", function () {
                                  $("#myInput").focus()
                                })
                                </script>
                                <script>
                                    $(document).ready(function(){
                                        $("#delete'.$col['id'].'").click(function(e){
                                            e.preventDefault();
                                            var id = $("#val'.$col['id'].'").val();
                                            var urlCall = "https://afternoon-springs-88209.herokuapp.com/api/libros";
                                            $.ajax({
                                                url: urlCall +"/"+id,
                                                type:"delete",
                                                datatype:"html",
                                                beforeSend:function(){
                                                    $("#dialog").dialog({
                                                        resizable:false,
                                                        modal:true,
                                                        autoOpen:true,
                                                        width:350,
                                                        height:120
                                                    });
                                                    $("#dialog #rpta").html("Enviando...");
                                                },
                                                success:function(html){
                                                    $("#dialog #rpta").html(html);
                                                    window.location.href = "menu.php";
                                                },
                                                error: function (msg) {
                                                    $("#dialog #rpta").html("ERROR, el libro se encuentra en reserva.");
                                                    window.location.href = "menu.php";
                                                }
                                            });

                                        });
                                    });
                                </script>
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
    <link rel="stylesheet" href="common/lib/jqueryui/css/ui-lightness/jquery-ui-1.9.2.custom.min.css"/>
<script src="common/lib/jqueryui/js/jquery-ui-1.9.2.custom.min.js"></script>
</body>
</html>
