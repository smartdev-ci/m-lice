<?php
require('../../config/config.php');
$title = "Administration | Utilisateurs";
include_once('../partials/_header.php');
include_once('../partials/_sidebar.php');
include_once('../partials/_navbar.php');
?>


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Utilisateurs</h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ajouter un administrateur</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-xl-8 col-xs-12 col-sm-12 form-width">
                            <form action="/mlice/controller/controllerUsers.php" method="post" enctype="multipart/form-data" novalidate>
                                <div class="row form-group">
                                    <div class="form-group col-12">
                                        <label for="title"> Photo utilisateur </label>
                                        <input type="file" class="form-control-file" name="photo_user" id="photo_user" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        Nom
                                        <input type="text" name="nom_user" id="nom" class="form-control" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        Prenoms
                                        <input type="text" name="prenoms_user" id="prenoms" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        Date de naissance
                                        <input type="date" name="date_user" id="birthday" class="form-control" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        Sexe
                                        <div class="form-check">
                                            <input type="radio" name="sexe_user" value="Masculin" class="form-check-input"> M
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="sexe_user" value="Feminin" class="form-check-input"> F
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        Contact
                                        <input type="number" name="contacts_user" id="contact" class="form-control" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        E-mail
                                        <input type="email" name="email_user" id="email_user" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        Mot de passe
                                        <input type="password" name="password_user" id="password" class="form-control" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        Confirmer le mot de passe
                                        <input type="password" name="confirm" id="password2" class="form-control" required />
                                        <input type="hidden" name="type_user" value="Admin">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-6">
                                        <input type="submit" name="useradd" id="useradd" class="btn btn-success btn-block" value="Enregistrer">
                                    </div>
                                </div>
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

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Administrateurs</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Sexe</th>
                                    <th>E-mail</th>
                                    <th>Contact</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
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