<?php
require_once 'request.php';

try
{
    $location = 'http://localhost/contacts/rest.php';
    
    $parameters = [];
    $parameters['class']   = 'ContactRestService';
    $parameters['method']  = 'loadAll';
    // $parameters['filters'] = [ ['id', '>', 1] ];
    
    print_r(request($location, 'GET', $parameters));
}
catch (Exception $e)
{
    echo 'Error: '. $e->getMessage();
}
