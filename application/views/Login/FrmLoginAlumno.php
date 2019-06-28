<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Alumno</title>        
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/font-awesome/css/font-awesome.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/dist/css/AdminLTE.min.css">

    </head>
    <body class="hold-transition login-box-msg">
        <!--class="hold-transition login-page" -->
        <div class="login-box">
            <div class="login-logo">
                <img src="<?php echo base_url(); ?>assets/template/image/logo_unfv.png">
                <h2>Bienvenido ESTUDIANTE</h2>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Si eres estudiante y no cuentas con un usuario y contrase&ntilde;a,
                    solic&iacute;tala a tu tutor.
                </p>
                <form action="<?php echo base_url(); ?>auth/login" method="post">
                    <center>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Usuario" name="txtusuario">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="txtclave">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                            </div>                    
                        </div>
                        <br><p class="n-t">
                            <b>
                                <small>Copyright © 2019 &Aacute;rea de Programaci&oacute;n DOTAP</small>
                            </b>
                        </p>
                    </center>
                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="<?php echo base_url(); ?>assets/template/jquery/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url(); ?>assets/template/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>
