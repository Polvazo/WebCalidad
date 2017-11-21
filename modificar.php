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
                        <h1 class="page-head-line">Modificar Libro </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-8">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Lista de campos
                        </div>
                        <div class="panel-body">
                       <form class="b_form">
                        <?php 
                            foreach ($array as $col) {
                                if ($col['id']==$_GET['id']) {
                        ?>
                        <input type="hidden" name="id_m" id="id_m" value="<?php echo $col['id'] ?>">
                        <div class="form-group col-xs-6">
                            <label for="titulo_m">Titulo</label>
                            <input type="text" name="titulo_m" class="form-control" id="titulo_m" value="<?php echo $col['titulo'] ?>" />
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="edicion_m">Edicion</label>
                            <input type="text" class="form-control" name="edicion_m" id="edicion_m" value="<?php echo $col['edicion'] ?>">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="isbn_m">ISBN</label>
                            <input type="text" class="form-control" name="isbn_m" id="isbn_m" value="<?php echo $col['isbn'] ?>" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="idioma_m">Idioma</label>
                            <input type="text" class="form-control" name="idioma_m" id="idioma_m" value="<?php echo $col['idioma'] ?>" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="num_ingreso_m"># de ingreso</label>
                            <input type="text" name="num_ingreso_m" id="num_ingreso_m" class="form-control" value="<?php echo $col['num_ingreso'] ?>" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="num_hoja_m"># de Páginas</label>
                            <input type="text" name="num_hoja_m" id="num_hoja_m" class="form-control" value="<?php echo $col['num_hoja'] ?>" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="fecha_ingreso_m">Fecha de Ingreso</label>
                            <input type="text" class="form-control" name="fecha_ingreso_m" id="fecha_ingreso_m" value="<?php echo $col['fecha_ingreso'] ?>" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="autor_m">Autor</label>
                            <input type="text" class="form-control" name="autor_m" id="autor_m" value="<?php echo $col['autor'] ?>" >
                        </div>
                        <input type="hidden" name="estado_m" id="estado_m" value="<?php echo $col['estado'] ?>" >
                        <input type="hidden" name="portadaPhoto_m" id="portadaPhoto_m" value="<?php echo $col['portadaPhoto'] ?>">
                        <input type="hidden" name="codigoQR_m" id="codigoQR_m" value="<?php echo $col['codigoQR'] ?>">
                        <input type="hidden" name="anio_m" id="anio_m" value="<?php echo $col['anio'] ?>">
                        <?php 
                                }
                            }
                        ?>
                        <div class="col-xs-12 text-center">
                            <a href="disponibles.php" class="btn btn-default">Salir</a>
                            <button type="submit" id="EnviarForm" class="btn btn-default">Guardar</button>
                            <div id="dialog" title="Mensaje Contáctenos" style="display:none;">
                                    <p id="rpta"></p>
                        </div>
                        </form>
                    </div>
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
<script>
$(document).ready(function(){
    $("#EnviarForm").click(function(e){
        e.preventDefault();
        var titulo = $("#titulo_m").val();
        var autor = $("#autor_m").val();
        var edicion = $("#edicion_m").val();
        var isbn = $("#isbn_m").val();
        var idioma = $("#idioma_m").val();
        var portadaPhoto = $("#portadaPhoto_m").val();
        var codigoQR = $("#codigoQR_m").val();
        var anio = $("#anio_m").val();
        var num_ingreso = $("#num_ingreso_m").val();
        var num_hoja = $("#num_hoja_m").val();
        var fecha_ingreso = $("#fecha_ingreso_m").val();
        var estado = $("#estado_m").val();
        var id = $("#id_m").val();
        var valor = parseInt($("#anio_m").val());
        var x = valor;
        $.ajax({
            url:"https://afternoon-springs-88209.herokuapp.com/api/libros",
            type:"PUT",
            data:{titulo:titulo, autor:autor, edicion:edicion,  isbn:isbn, idioma:idioma, portadaPhoto:portadaPhoto, codigoQR:codigoQR, anio:x, num_ingreso:num_ingreso, num_hoja:num_hoja, fecha_ingreso:fecha_ingreso, estado:estado, id:id},
            datatype:"html",
            beforeSend:function(){
                $("#dialog").dialog({
                    resizable:false,
                    modal:true,
                    autoOpen:true,
                    width:350,
                    height:120
                }),
                $("#dialog #rpta").html("Enviando...")
            },
            success:function(html){
                $("#dialog #rpta").html(html);
                window.location.href = "disponibles.php";
            },
            error:function(html){
                alert("error");
            }
        });
    });
});
</script>
</body>
</html>
<?php 
    }
    else{
        session_destroy();
        header('Location: index.php');
    }
?>