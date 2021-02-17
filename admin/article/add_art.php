<?php include("/Applications/MAMP/htdocs/QL_Portfolio/admin/vue/header.php") ?>
<?php include("../../admin/vue/menu.php") ?>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12 well" id="content">
                        <h1>Ajouter un article</h1>
                    </div>
                    <div class="col-md-12" style="display: flex; justify-content:center;">
                        <div class="col-md-6">
                            <form>
                                <div class="form-outline" style="margin-top: 20px;">
                                    <label class="form-label" for="form4Example1">Nom de l'article</label>
                                    <input type="text" id="form4Example1" class="form-control" />
                                </div>
                                <div class="form-outline" style="margin-top: 20px;">
                                    <label class="form-label" for="form4Example2">Choix de la catégorie</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-outline" style="margin-top: 20px;">
                                    <label class="form-label" for="form4Example3">Texte</label>
                                    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                </div>
                                <div class="form-outline" style="margin-top: 20px;">
                                    <label class="custom-file-label" for="inputGroupFile01">Choisir une </label>
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
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