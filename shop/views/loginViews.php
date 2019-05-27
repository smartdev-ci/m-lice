<?php
    include_once ('../partials/_header.php');
    include_once ('../partials/_navbar.php');
?>

<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <h2>Se connecter</h2>
                    <form method="post" action="/mlice/controller/controllerLogin.php">
                        <input type="email" name="email_user" placeholder="Votre adresse mail" />
                        <input type="password" name="password_user" placeholder="Votre mot de passe" />
                        <span>
                            <input type="checkbox" class="checkbox">
                            Keep me signed in
                        </span>
                        <input type="submit" value="Se connecter" name="connect">
                    </form>
                </div>
                <!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OU</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2>S'inscrire!</h2>
                    <form action="#">
                        <input type="text" placeholder="Name" />
                        <input type="email" placeholder="Email Address" />
                        <input type="password" placeholder="Password" />
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->