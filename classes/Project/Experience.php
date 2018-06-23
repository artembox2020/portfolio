<?php
class ProjectExperience extends Base {
    
    public function __construct() {
        parent::__construct("Project/Experience");
        
    }
    
    public function experience($vars = []) {
        $vars['rootUrl'] = "/classes/".$this->rootUrl;
        extract($vars);
        return $this->get_resource('experience',$vars); 

    }
    
    public function github() {
        return $this->get_resource('github',[]);
    }
    
    public function skills() {
        return $this->get_resource('skills',[]);
    }
    
    public function education() {
        return $this->get_resource('education',[]);
    }
    
     public function languages() {
        return $this->get_resource('languages',[]);
    }
}