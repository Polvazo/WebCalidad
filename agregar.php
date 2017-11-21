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
                        <h1 class="page-head-line">Agregar Libro </h1>
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
                        <div class="form-group col-xs-6">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo" />
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="edicion">Edicion</label>
                            <input type="text" class="form-control" name="edicion" id="edicion" placeholder="Edicion">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="isbn">ISBN</label>
                            <input type="text" class="form-control" name="isbn" id="isbn" placeholder="SBN" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="idioma">Idioma</label>
                            <input type="text" class="form-control" name="idioma" id="idioma" placeholder="Idioma" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="num_ingreso"># de ingreso</label>
                            <input type="text" name="num_ingreso" id="num_ingreso" class="form-control" placeholder="Numero de Ingreso" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="num_hoja"># de Páginas</label>
                            <input type="text" name="num_hoja" id="num_hoja" class="form-control" placeholder="Páginas" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="fecha_ingreso">Fecha de Ingreso</label>
                            <input type="text" class="form-control" name="fecha_ingreso" id="fecha_ingreso" placeholder="Fecha de ingreso" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="anio">Año</label>
                            <input type="text" class="form-control" name="anio" id="anio" placeholder="Año" >
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="autor">Autor</label>
                            <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor" >
                        </div>
                        <input type="hidden" id="estado" name="estado" value="1">
                        <input type="hidden" id="portadaPhoto" name="portadaPhoto" value="XXXX" class="col s6">
                        <input type="hidden" id="codigoQR" name="codigoQR" value="XXXX" class="col s6">

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
    /*$("#telefono").keypress(function(e){
        var tecla = document.all?tecla=e.keyCode:tecla=e.which;
        return ((tecla>47 && tecla<58)||tecla==46);
    });*/
    $("#EnviarForm").click(function(e){
        e.preventDefault();
        var titulo = $("#titulo").val();
        var autor = $("#autor").val();
        var edicion = $("#edicion").val();
        var isbn = $("#isbn").val();
        var idioma = $("#idioma").val();
        var portadaPhoto = $("#portadaPhoto").val();
        var codigoQR = $("#codigoQR").val();
        var anio = $("#anio").val();
        var num_ingreso = $("#num_ingreso").val();
        var num_hoja = $("#num_hoja").val();
        var fecha_ingreso = $("#fecha_ingreso").val();
        var estado = $("#estado").val();

        /*if(nombre.length < 1){
            alert("El nombre es obligatorio");
            return false;
        }
        if(telefono.length < 1){
            alert("El telefono es obligatorio");
            return false;
        }
        if(correo.length < 1){
            alert("El correo es obligatorio");
            return false;
        } else {
            var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
            if(filter.test(correo)){
            } else {
                alert("El correo no es válido");
                return false;
            }
        }
        if(mensaje.length < 1){
            alert("El mensaje es obligatorio");
            return false;
        }*/
        $.ajax({
            url:'https://afternoon-springs-88209.herokuapp.com/api/libros',
            type:'POST',
            data:{titulo:titulo, autor:autor, edicion:edicion,  isbn:isbn, idioma:idioma, portadaPhoto:portadaPhoto, codigoQR:codigoQR, anio:anio, num_ingreso:num_ingreso, num_hoja:num_hoja, fecha_ingreso:fecha_ingreso, estado:estado},
            datatype:'html',
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
            }
        });
    });
});
</script>
</body>
</html>
