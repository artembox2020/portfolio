<?php 
  class MainController extends Controller {
      public function __construct() {
         $this->controller = 'main'; 
         $this->layout = 'main'; 
      }
      
      public function indexAction($arr, $layout='main') {
         
         //$rel = new DBHRel("ONE_MANY","users_reports",["name"=>"users","users"=>"id","fields"=>["id","login","date"]], ["name"=>"users_reports","users_reports"=>"user_id","fields"=>["month","day","comment"]]);
         //$rel_rev = new DBHRel("ONE_MANY","users_reports_rev", ["name"=>"users","users"=>"id","fields"=>["id","login","date"]],["name"=>"users_reports","users_reports"=>"user_id","fields"=>["month","day","comment"]] );
         $about = new BootstrapAbout();
         $latest = new ProjectLatest();
         $experience  = new ProjectExperience();
          //echo 'indexAction'; return true;
         //$test = new TestWorker([$rel_rev]);
         $jssor = new ToolJssor();
         //$criteria = new DBHCriteria("users_reports.user_id >?",[0],"users_reports.user_id DESC");
                 //$result= $test->findByAttrRel($rel,$criteria,['one' => true]);
         //echo 'before attr rel<br/>'; 
         //$test->updateByAttrRel($rel_rev, NULL,['pwd' => 'Jan']);
         //echo "after test<br/>";
         //die();
         //echo $test->getLastQueryString()."<br/>";
         //die();
         //$test->insert(['login','pwd','isAdmin'],[['dddffdoioioiodf','w2222323','0']],['table' =>'users']);
         //ob_start(); echo '<pre>'; print_r($test->getLastQueryString()); echo "<br/>"; print_r($test->getLastQueryArgs()); echo '</pre>'; $s = ob_get_clean();
         $this->setTitle("artembox.info | My Portfolio");
         $this->render(['about' => $jssor->banner("Favor",['getPopupForGallery']), 'latest' => $latest->latest(), 'experience' =>$experience->experience(), 'github' => $experience->github(), 'skills' => $experience->skills(), 'education' => $experience->education(), 'languages' => $experience->languages() ]);
         
      }
      
  }
  $class = "MainController";