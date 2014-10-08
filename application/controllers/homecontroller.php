<?php
 
class HomeController extends Controller
{
    public function __construct($model, $action)
    {
        parent::__construct($model, $action);        
    }
     
    public function index()
    {
       
        $data = array();        
        $data['title'] = 'Magdalene MVC';
        
        $this->loadView('partials/head_nav_menu',$data);
        $this->loadView('main',$data);
        $this->loadView('partials/footer');
    }

}