<?php
$host="127.0.0.1";
$dbname="bibliotheque";
$user="root";
$mdp="";
$db=new PDO("mysql:host=$host;dbname=$dbname",$user,$mdp);
// print_r($db);
// // $requete="SELECT * from movies";
// // $resultat=$db->query($requete);
// // $resultat->setFetchMode(PDO::FETCH_ASSOC);
// // $allMovies =$resultat->fetchAll();
// // print_r($allMovies);
?>