<?php
 
class HomeController extends Controller
{     
    public function index()
    {
       
        $data = array();        
        $data['title'] = 'Magdalene MVC';
        
        $this->loadView('partials/head_nav_menu',$data);
        $this->loadView('home',$data);
        $this->loadView('partials/footer');
    }

}