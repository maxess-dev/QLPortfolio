<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="./css/style.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">       
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quitter le back-office <b class="fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../index.php"><i class="fa fa-fw fa-power-off"></i> Quitter</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> CATÉGORIE <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-1" class="collapse">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Voir toutes les catégories</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Ajouter une catégorie</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Supprimer une catégorie</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> ARTICLE <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Voir tous les articles</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Ajouter un article</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Supprimer un article</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> COMMENTAIRES <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Voir les commentaires </a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Supprimer un commentaire</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Répondre à un commentaire</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12 well" id="content">
                        <h1>Page d'admin</h1>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
</body>
</html>