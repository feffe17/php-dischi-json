<?php
$cds_list = file_get_contents("./cds.json");
$cds_list = json_decode($cds_list, true);
