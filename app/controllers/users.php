<?php

require_once 'controller.php';

class Users extends Controller{
    

    public function __construct()
    {
        echo "<h1>user</h1>";
    }

    function index()
    {
        echo "<h1>index</h1>";
    }

    function show($id)
    {
        $user = $this->model('user');

        $user -> insert();
        echo "<h1>nnnn $id</h1>";
    }
}



?>
