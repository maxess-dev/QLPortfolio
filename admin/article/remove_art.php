<?php include("/Applications/MAMP/htdocs/QL_Portfolio/admin/vue/header.php") ?>
<?php include("../../admin/vue/menu.php") ?>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12 well" id="content">
                        <h1>Supprimer un article</h1>
                    </div>
                    <div class="col-md-12" style="display: flex; justify-content:center;">
                        <div class="col-md-6">
                            <form>
                                <div class="form-outline" style="margin-top: 20px;">
                                    <label class="form-label" for="form4Example2">Choix de l'article</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-top: 20px; padding: 10px 20px;">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("/Applications/MAMP/htdocs/QL_Portfolio/admin/vue/footer.php"); ?>