<?php
class ProjectLatest extends Base {
    
    public function __construct() {
        parent::__construct("Project/Latest");
        
    }
    
    public function latest($vars = []) {
        $vars['rootUrl'] = "/classes/".$this->rootUrl;
        extract($vars);
        return $this->get_resource('latest',$vars); 

    }
    
    
}