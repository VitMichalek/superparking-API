<?php
include_once("mp_core.php");


MP::$token = "muj tajny token";

//add new domain
/*
parametry:
1) domena
2) kategorie - pole povolených kategorii - pokud nebude určeno zařadí se automaticky jako ostatní
3) typ - (F -formulář na podej, R - přesměrování přeprodej)
*/
$id = MP::addDomain("example.com",array("CD","CY"),"R");

//changeCategory
MP::addDomain("example.com",array("ZZ"),"F");


//get stats
MP::getStats("example.com","2021-08-1","2021-08-19");
?>