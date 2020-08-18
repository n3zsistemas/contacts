<?php
require_once 'request.php';

try
{
    $location = 'http://localhost/contacts/rest.php';
    
    $parameters = [];
    $parameters['class']  = 'ContactRestService';
    $parameters['method'] = 'store';
    $parameters['data']   = ['name' => 'Dino Sauro', 'id' => 3];
    
    print_r(request($location, 'POST', $parameters));
}
catch (Exception $e)
{
    echo 'Error: '. $e->getMessage();
}
