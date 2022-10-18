<?php
//echo"Bonjour à tous";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pwd = $_POST['password'];
if(isset($_POST['framework'][0])) {$fraùework0=$_POST['framework'][0];};
if(isset($_POST['framework'][1])) {$fraùework0=$_POST['framework'][1];};
if(isset($_POST['framework'][2])) {$fraùework0=$_POST['framework'][2];};

echo"Vous avez taper : ".$nom." ".$prenom." ".$pwd." ".$framework0." ".$framework1." ".$framework2;
?>