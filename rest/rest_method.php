<?php
require_once 'request.php';

try
{
    $location = 'http://localhost/contacts/rest.php';
    $parameters = array();
    $parameters['class']      = 'ContactRestService';
    $parameters['method']     = 'getBetween';
    $parameters['from']       = '1';
    $parameters['to']         = '3';
    
    print_r(request($location, 'GET', $parameters));
}
catch (Exception $e)
{
    echo 'Error: '. $e->getMessage();
}
