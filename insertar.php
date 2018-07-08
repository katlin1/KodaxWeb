<?php
/**
 * Created by PhpStorm.
 * User: Delmy
 * Date: 4/7/2018
 * Time: 14:34
 */
    include('conexion.php');

    $nomCli=$_POST['nomCli'];
    $nombre=$_POST['nombre'];
    $correo=$_POST['corre'];
    $contra=$_POST['contra'];
    $espe=$_POST['Especialidad'];
    $dire=$_POST['dire'];
    $hora=$_POST['hora'];
    $tele=$_POST['tele'];
    //$lati=$_POST['lati'];
    //$longi=$_POST['longi'];


$insert="insert into registro(nameCli,nombre,tele,corre,contra,espe,dire,hora) values(?,?,?,?,?,?,?,?)";
$result=$conexion->prepare($insert);
$result->execute(array($nomCli,$nombre,$tele,$correo,$contra,$espe,$dire,$hora));
?>

