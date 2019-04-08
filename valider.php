<?php
include './config.php';

if (
    isset($_POST['ok']) && isset($_POST[ 'denomination']) && isset($_POST['capital']) && isset($_POST['objsocial'])
    && isset($_POST['natujuridiq']) && isset($_POST['nationalite']) && isset($_POST['lieucompta'])
    && isset($_POST['adresse']) && isset($_POST['rccm']) && isset($_POST['rccmdate']) && isset($_POST['numeroifu'])
) {
        $denomination = addslashes($_POST['denomination']);
        $capital = addslashes($_POST['capital']);
        $objet = addslashes($_POST[ 'objsocial']);
        $naturejuridique = addslashes($_POST[ 'natujuridiq']);
        $nationalite = addslashes($_POST['nationalite']);
        $lieudecompta = addslashes($_POST[ 'lieucompta']);
        $adresse = addslashes($_POST['adresse']);
        $numrc = addslashes($_POST['rccm']);
        $datercm = addslashes($_POST['rccmdate']);
        $numifu = addslashes($_POST['numeroifu']);
echo $denomination;
echo $capital;
        $queryEntreprise = "INSERT INTO entreprises ('denomination','capital','objet','naturejuridique',
    'nationalite','lieudecompta','adresse','numrc','datercm','numifu')
    VALUES('$denomination','$capital',' $objet',' $naturejuridique',' $nationalite',' $lieudecompta',
    ' $adresse',' $numrc',' $datercm',' $numifu') ";
    echo $denomination;
    echo $capital;
    }
 