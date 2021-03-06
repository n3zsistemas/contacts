<?php
require_once 'request.php';

try
{
    $location = 'http://localhost/contacts/rest.php';
    
    $parameters = [];
    $parameters['class']  = 'ContactRestService';
    $parameters['method'] = 'store';
    $parameters['data']   = ['name'    => 'Peter',
                             'email'   => 'peter@email.com',
                             'number'  => '12345678',
                             'address' => 'Peter St, 123'];
    
    print_r(request($location, 'POST', $parameters));
}
catch (Exception $e)
{
    echo 'Error: '. $e->getMessage();
}
