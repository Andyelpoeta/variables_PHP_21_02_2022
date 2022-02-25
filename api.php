<?php
header('Access-Control-Allow-Origin: *');
$nomUsu=(string)"Andres Jair Soto";
$edaUsu=(int) 34;
$altUsu=(float) 1.83;
$miTel=(int) 3025288678;
$miCorreo=(string)"sotorodriguez@gmail.com";
$hobUsu=(array)[
    (string) "Cantar",
    (string) "Hacer deporte",
    (string) "Compartir con mi familia"
];
$soyEst=(bool) true;
$rutUsu=(object) [];
$rutUsu->levantar =(int) 6;
$vacio=null;
$espa="</br>";
echo "Mi nombre es:".$nomUsu,$espa;
echo "Mi edad es:".$edaUsu,$espa;
echo "Mi telefono es:".$miTel,$espa;
echo "Mi correo es:".$miCorreo,$espa;
echo "Yo mido :".$altUsu,$espa;
var_dump($hobUsu);
echo "Estudio el diplomado en confenalco".$soyEst;
var_dump($rutUsu);
var_dump($vacio);
?>