<?php
include_once("mp_core.php");


SP::$token = "muj tajny token";

//add new domain
/*
parametry:
1) domena
2) kategorie - pole povolených kategorii - pokud nebude určeno zařadí se automaticky jako ostatní  seznam kategorii MP::getCategoryList();
3) typ - (F -formulář na podej, R - přesměrování přeprodej)
*/
$id = SP::addDomain("example.com",array("CD","CY"),"R");

//changeCategory
SP::addDomain("example.com",array("ZZ"),"F");


//get stats
/*
1) domena
2) datum od
3) datum do
4) group  - day, month
*/
SP::getStats("example.com","2021-08-01","2021-08-19","day");

//vybere vše za celou dobu co je domena v systemu
SP::getStats("example.com","","","day");

//list your domain
SP::getDomainList();

//smazaní domeny - logicky
SP::delDomain("example.com");
?>
