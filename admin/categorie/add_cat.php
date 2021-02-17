<?php include("/Applications/MAMP/htdocs/QL_Portfolio/admin/vue/header.php") ?>
<?php include("../../admin/vue/menu.php") ?>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12 well" id="content">
                        <h1>Ajouter une catégorie</h1>
                        <?php
                        $upload_dir = '../upload';
                        if(isset($_POST["nomCategorie"]) && isset($_FILES["photoCategorie"])){
                            require_once("../fonctions/connect.php");
                            $tmp_name = $_FILES["photoCategorie"]["tmp_name"];
                            move_uploaded_file($tmp_name, '../upload/' . $_FILES["photoCategorie"]["name"]);
                            $req = $db->prepare("INSERT INTO categorie (nom,url_photo) VALUES (?,?)");
                            $req->execute(array($_POST["nomCategorie"],$_FILES["photoCategorie"]["name"]));
                            echo "Catégorie ajoutée et image uploadé dans le dossier upload";
                            $req->closeCursor();
                        } else {
                            echo "Veuillez indiquer un nom de catégorie ainsi qu'une image associée à la catégorie";
                        }
                        ?>
                    </div>
                    <div class="col-md-12" style="display: flex; justify-content:center;">
                        <div class="col-md-6">
                            <form method="POST" action="#" enctype="multipart/form-data">
                                <div class="form-outline" style="margin-top: 20px;">
                                    <label class="form-label" for="nomCategorie">Nom de la catégorie</label>
                                    <input type="text" id="nomCategorie" class="form-control" name="nomCategorie" required />
                                </div>
                                <div class="form-outline" style="margin-top: 20px;">
                                    <label class="custom-file-label" for="photoCategorie">Choisir une photo pour la catégorie</label>
                                    <input type="file" class="custom-file-input" id="photoCategorie" name="photoCategorie" required>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-top: 20px; padding: 10px 20px;">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("/Applications/MAMP/htdocs/QL_Portfolio/admin/vue/footer.php"); ?>

