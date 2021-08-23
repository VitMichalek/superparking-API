<?php
include_once("mp_core.php");


MP::$token = "muj tajny token";

//add new domain
/*
parametry:
1) domena
2) kategorie - pole povolených kategorii - pokud nebude určeno zařadí se automaticky jako ostatní  seznam kategorii MP::getCategoryList();
3) typ - (F -formulář na podej, R - přesměrování přeprodej)
*/
$id = MP::addDomain("example.com",array("CD","CY"),"R");

//changeCategory
MP::addDomain("example.com",array("ZZ"),"F");


//get stats
/*
1) domena
2) datum od
3) datum do
4) group  - day, month
*/
MP::getStats("example.com","2021-08-01","2021-08-19","day");

//vybere vše za celou dobu co je domena v systemu
MP::getStats("example.com","","","day");

//list your domain
MP::getDomainList();
?>