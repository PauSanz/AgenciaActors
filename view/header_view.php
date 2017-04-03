<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php require_once "controller/draw_addMenu.php" ?>
        <title>Agencia Actors</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="view/css/modern-business.css"/>
        <!-- Custom Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="view/css/style.css"/>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="?ctl=home"><h4 class="colortitol">Agencia d'Actors</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="?ctl=home">Home</a>
                        </li>
                        <li>
                            <a href="?ctl=pelicula&act=llista">Pel·licules</a>
                        </li>
                        <li>
                            <a href="?ctl=actor&act=llista">Actors</a>
                        </li>
                        <li>
                            <a href="?ctl=director&act=llista">Directors</a>
                        </li>
                        <?php if (isset($_COOKIE['user'])) { ?>
                        <li>
                            <a href="?ctl=paper&act=llista">Papers</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="?ctl=contact">Contacte</a>
                        </li>
                        <?php addMenu() ?>
                        <li class="login_action"><a id="login_action" href="?ctl=session&act=check"> Sessió</a></li>

                        <li class="login_user colorlink"><a id="login_user"></a></li>                                           

                    </ul>
                </div>               
            </div> 
        </nav>
=======
<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php require_once "controller/draw_addMenu.php" ?>
        <title>Agencia Actors</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="view/css/modern-business.css"/>
        <!-- Custom Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="view/css/style.css"/>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="?ctl=home"><h4 class="colortitol">Agencia d'Actors</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="?ctl=home">Home</a>
                        </li>
                        <li>
                            <a href="?ctl=pelicula&act=llista">Pel·lícules</a>
                        </li>
                        <li>
                            <a href="?ctl=actor&act=llista">Actors</a>
                        </li>
                        <li>
                            <a href="?ctl=director&act=llista">Directors</a>
                        </li>
                        <?php if (isset($_COOKIE['user'])) { ?>
                            <li>
                                <a href="?ctl=paper&act=llista">Papers</a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="?ctl=contact">Contacte</a>
                        </li>
                        <?php addMenu() ?>
                        <li class="login_action"><a id="login_action" href="?ctl=session&act=check"></a></li>

                        <li class="login_user colorlink"><a id="login_user"></a></li>                                           

                    </ul>
                </div>               
            </div> 
        </nav>
>>>>>>> master
