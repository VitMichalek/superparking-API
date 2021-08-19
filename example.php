<?php
include_once("m_core.php");


MP::$token = "muj tajny token";

//add new domain
$id = MP::addDomain("example.com",array("CD","CY"));

//changeCategory
MP::addDomain("example.com",array("ZZ"));


//get stats
MP::getStats("example.com","2021-08-1","2021-08-19");
?>