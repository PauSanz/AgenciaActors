<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Agencia Actors</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="view/css/modern-business.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/style.css"/>
        <!-- Custom Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
                            <a href="?ctl=llistaactors">Llistat actors</a>
                        </li>
                        <li>
                            <a href="?ctl=contact">Contact</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formularis <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="?ctl=pelicula&act=afegir">Afegir Pel·licula</a>
                                </li>
                                <li>
                                    <a href="?ctl=afegiractor">Afegir Actor</a>
                                </li>
                                <li>
<!--                                    <a href="?ctl=afegir&act=director">Afegir Director</a>-->
                                <a href="?ctl=afegirdirector">Afegir Director</a>
                                </li>                                
                            </ul>
                        </li> 
                        <li class="login_action"><a id="login_action" href="?ctl=session&act=check"></a></li>
                        
                        <li class="login_user colorlink"><a id="login_user"></a></li>                                           
                    </ul>
                </div>               
            </div>          
        </nav>        
        
