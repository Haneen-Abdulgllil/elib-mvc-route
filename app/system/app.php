<?php 
class App{

    public $controller='home';
    public $method='index';
    public $parameters=[];

    function __construct()
    {
        $urlParts=explode('/',$_GET['url']);
        

        if(file_exists("app/controllers/".$urlParts[0].".php")){
            $this->controller=$urlParts[0];  
        }

        require_once "app/controllers/".$this->controller.".php";
        $c=new $this->controller;


        if(isset($urlParts[1])&& method_exists($c,$urlParts[1])){
            $this->method=$urlParts[1];
            unset($urlParts[1]);
            $this->parameters = array_values($urlParts);
        }
    
        call_user_func_array([$c,$this->method],$this->parameters);
    }




    
    


}
?>