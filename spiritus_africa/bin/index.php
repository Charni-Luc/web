<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "ctrl.php";
include "mdl.php";
include "veiw.php";

if (empty($_GET ['adrs']) || (!isset($_GET['adrs'])) || preg_match('#head#', $_GET ['adrs'])) {
    print ctrlVwTmplHome();
    exit();
}

if (preg_match('#service#', $_GET['adrs'])) {
    print ctrlVwTmplService();
    exit();
}

if (preg_match('#equipe#', $_GET['adrs'])) {
    print ctrlVwTmplTeam();
    exit();
}
if (preg_match('#contact#', $_GET['adrs'])) {
    print ctrlVwTmplContact();
    exit();
}