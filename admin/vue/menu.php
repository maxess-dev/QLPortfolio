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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Retour à la page d'accueil <b class="fa fa-angle-down"></b></a>
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
                    <li><a href="/QL_Portfolio/admin/categorie/display_all_cat.php"><i class="fa fa-angle-double-right"></i> Voir toutes les catégories</a></li>
                    <li><a href="/QL_Portfolio/admin/categorie/add_cat.php"><i class="fa fa-angle-double-right"></i> Ajouter une catégorie</a></li>
                    <li><a href="/QL_Portfolio/admin/categorie/remove_cat.php"><i class="fa fa-angle-double-right"></i> Supprimer une catégorie</a></li>
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