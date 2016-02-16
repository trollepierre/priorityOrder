<?php
// connexion a la BD
// Paramètres persos
$host = 'mysql1.alwaysdata.com';
$database = 'recontact_liwymoi';
$user = 'recontact';
$pass = 'kit';
/*
$host = 'localhost';
$database = 'elprojector';
$user = 'root';
$pass = '';/**/
// --------------------------------
try{
                $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $database , $user , $pass);
                }catch(Exception $e){
                die('Erreur : '.$e->getMessage());
                // //header('Location: index.php?bug=OK7');                echo('hi2');
                }

            // echo('CONNEXION BDD OK <br>');
// --------------------------------
?>