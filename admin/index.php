<?php include("../admin/vue/header.php") ?>
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul class="nav navbar-right top-nav">       
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quitter le back-office <b class="fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../index.php"><i class="fa fa-fw fa-power-off"></i> Quitter</a></li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> CATÉGORIE <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-1" class="collapse">
                            <li><a href="/QL_Portfolio/admin/article/display_all_art.php"><i class="fa fa-angle-double-right"></i> Voir toutes les catégories</a></li>
                            <li><a href="/QL_Portfolio/admin/article/add_art.php"><i class="fa fa-angle-double-right"></i> Ajouter une catégorie</a></li>
                            <li><a href="/QL_Portfolio/admin/article/remove_art.php"><i class="fa fa-angle-double-right"></i> Supprimer une catégorie</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> ARTICLE <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                            <li><a href="/QL_Portfolio/admin/article/display_all_art.php"><i class="fa fa-angle-double-right"></i> Voir tous les articles</a></li>
                            <li><a href="/QL_Portfolio/admin/article/add_art.php"><i class="fa fa-angle-double-right"></i> Ajouter un article</a></li>
                            <li><a href="/QL_Portfolio/admin/article/remove_art.php"><i class="fa fa-angle-double-right"></i> Supprimer un article</a></li>
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
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12 well" id="content">
                        <h1>Page d'admin</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("../admin/vue/footer.php"); ?>
