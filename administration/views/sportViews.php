<?php
require('../../config/config.php');
$title = "Nouvel article sportif";
include_once('../partials/_header.php');
include_once('../partials/_sidebar.php');
include_once('../partials/_navbar.php');
?>


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Nouvel article sportif</h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ajouter un nouvel article sportif</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-xl-8 col-xs-12 col-sm-12 form-width">
                            <form action="../../controller/controllerPost.php" method="post" enctype="multipart/form-data" novalidate>
                                <div class="form-group">
                                    <label for="title"> Image du post </label>
                                    <input type="file" class="form-control-file" name="image_post" id="image_post" required/>
                                </div>

                                <div class="form-group">
                                    <label for="title"> Titre du post </label>
                                    <input type="text" class="form-control" name="titre_post" id="title" placeholder="Titre" required />
                                </div>

                                <div class="form-group">
                                    <label for="description"> Description </label>
                                    <input type="text" class="form-control" name="description_post" id="description" placeholder="Desciption" data-toggle="tooltip" data-placement="top" title="Ajouter une breve description de l'article" required/>
                                </div>

                                <div class="form-group">
                                    <label for="content"> Contenu de l'artcle </label>
                                    <textarea class="form-control" name="post" id="post" cols="15" rows="5" placeholder="..." ></textarea>
                                    <input type="hidden" name="date_publication" value="<?= date('Y-m-d') ?>">
                                </div>
                                <input type="submit" value="Poster l'article" name="poster" class="btn btn-block btn-success">
                            </form>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12">
                            lorem
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>


<?php
include_once('../partials/_footer.php');
?>