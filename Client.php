<?php
ini_set('soap.wsdl_cache_enabled', 0);
$service=new SoapClient("http://localhost/Server.wsdl");
$taballservices=$service->Connection();

print_r($taballservices);
?>