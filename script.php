<?php
//ricevere il contenuto con POST

//leggere il file cds.json
$cds_list = file_get_contents("./cds.json");

//decodificare il contenuto del file cds.json
$cds_list_decoded = json_decode($cds_list, true);

//aggiungere il nuovo cd all'array
$cds_list_decoded[] = $_POST;

//codificare l'array in json
$cds_list_updated = json_encode($cds_list_decoded, JSON_PRETTY_PRINT);

//scrivere il contenuto nel file cds.json
file_put_contents("./cds.json", $cds_list_updated);

//reindirizzare alla pagina index.php
header("Location: ./index.php");
