<?php
class BootstrapAbout extends Base {
    
    public function __construct() {
        parent::__construct("Bootstrap/About");
        
    }
    
    public function about($vars = []) {
        
        return $this->get_resource('about',$vars); 

    }
    
    
}