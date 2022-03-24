<?php

include_once 'controller.php';

class Home extends Controller
{
    function __construct()
    {
        // echo "<h1>home</h1>";
        $this->view("index");
    }

    function index(){

        echo "<h1>index of home</h1>";

    }

}
?>