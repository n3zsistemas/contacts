<?php
require_once 'request.php';

try
{
    $location = 'http://localhost/contacts/rest.php';
    
    $parameters = [];
    $parameters['class']  = 'ContactRestService';
    $parameters['method'] = 'delete';
    $parameters['id']     = 3;

    request($location, 'POST', $parameters);
}
catch (Exception $e)
{
    echo 'Error: '. $e->getMessage();
}
