<?php
    require_once('../model/loginModel.php');

    if (isset($_POST['connect'])) {
        login();
    }