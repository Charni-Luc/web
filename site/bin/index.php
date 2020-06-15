<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'mdl.php';
include 'ctrl.php';
include 'vw.php';

if (empty($_GET ['adrs']) || (!isset($_GET['adrs'])) || preg_match('#head#', $_GET['adrs'])) {

    print ctrlVwTmplAcc();
    exit();
}

if (preg_match('#cdtn#', $_GET['adrs'])) {
    print ctrlVwTmplCdtn();
    exit();
}
if (preg_match('#pcdr#', $_GET['adrs'])) {
    print ctrlVwTmplPcdr();
    exit();
}
if (preg_match('#ctct#', $_GET['adrs'])) {
    print ctrlVwTmplCtct();
    exit();
}
if (preg_match('#trtmt$#', $_GET['adrs'])) {
    print ctrlctctrtmt();
    exit();
}

if (preg_match('#dmdcdt$#', $_GET['adrs'])) {
    print ctrlVwTmplDmdCdt();
    exit();
}

if (preg_match('#cdttr$#', $_GET['adrs'])) {
    print ctrlmdldmdcdttrtmt();
    exit();
}