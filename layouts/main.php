  <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>           
  <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">                       
            <img style="border-radius: 100000px; width: 200px; height: 200px;" class="profile-image img-responsive pull-left" src="assets/images/profile.png" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name">Artem Palamarchuk</h1>
                <h2 class="desc">Web App Developer</h2>   
                <ul class="social list-inline">
                                   
                </ul> 
            </div><!--//profile-->
            <a data-title="Contact Me" data-desc="<?= HelperAes::encrypt(file_get_contents($_SERVER['DOCUMENT_ROOT']."/view_general/contact-form.php"),'abcdefgh',128); ?>" class="btn btn-cta-primary pull-right btn-contact-me" href="" target="_blank"><i class="fa fa-paper-plane"></i> Contact Me</a> 
        </div><!--//container-->

    </header><!--//header-->
    
    <?php if($_SERVER['REQUEST_METHOD'] == "POST" && HelperBase::array_keys_exist(['name','topic','desc'],$_POST)): ?>
    <?php mail("artembo2020@gmail.com","User request: ".$_POST['topic']." from ".$_POST['name'],$_POST['desc'],"Content-Type: text/html"); ?>
    
    <div class="container sections-wrapper">
        <div style="float: right; padding: 12px; "><i data-remove=".container.sections-wrapper" class="glyphicon glyphicon-remove"> </i></div>
        <div class="alert alert-success">Your request has been submitted!</div>
    </div>
    
    <?php endif; ?>
    
            

    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
               <div style="padding:0;">
                   <section class="projects section" style="background-color: white;">
                    <div class="" style="padding: 30px 30px 12px 30px;">
                        <h2 class="heading">Personal developments</h2>
                   </div>
                   <?php echo  $about; ?>
                   </section>
                  
               </div>
               <br/>
               <?php echo $latest; ?>
               <?php echo $experience; ?> 
               <?php echo $github; ?>
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Zhytomir</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="mailto://artembo2020@gmail.com" target=_blank>artembo2020@gmail.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="https://artembox.info">https://artembox.info</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <?php echo $skills; ?>
                
                <!--<aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>                
                                <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>                                                             
                            </div><!--//item--><!--
                            
                            <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p> 
                            
                        </div><!--//content--><!--
                    </div><!--//section-inner--><!--
                </aside><!--//section-->
                <?php echo $education;  ?>
              
                            
                <?php echo $languages; ?>
                
                <!--<aside class="blog aside section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Blog Posts</h2>
                        <p>You can use Sascha Depold's <a href="https://github.com/sdepold/jquery-rss" target="_blank">jQuery RSS plugin</a> to pull in your blog post feeds.</p>
                        <div id="rss-feeds" class="content">

                        </div><!--//content--><!--
                    </div><!--//section-inner--><!--
                </aside><!--//section-->
                
                <!--<aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
                            </ul>
                        </div><!--//content--><!--
                    </div><!--//section-inner--><!--
                </aside><!--//section-->
                
                <!--<aside class="list conferences aside section">
                    <div class="section-inner">
                        <h2 class="heading">Conferences</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-calendar"></i> <a href="https://developer.apple.com/wwdc/" target="_blank">WWDC 2014</a> (San Francisco)</li>
                                <li><i class="fa fa-calendar"></i> <a href="http://hive.aigaseattle.org/">Hive</a> (Seattle)</li>
                            </ul>
                        </div><!--//content--><!--
                    </div><!--//section-inner--><!--
                </aside><!--//section-->
                
                <!--<aside class="credits aside section">
                    <div class="section-inner">
                        <h2 class="heading">Credits</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-external-link"></i> Bootstrap</a></li>
                                <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fa fa-external-link"></i> FontAwesome</a></li>
                                <li><a href="http://jquery.com/" target="_blank"><i class="fa fa-external-link"></i> jQuery</a></li>
                                <li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fa fa-external-link"></i> GitHub Calendar Plugin</a></li>
                                
                                <li><a href="http://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fa fa-external-link"></i> GitHub Activity Stream</a></li>
                                
                                <li><a href="https://github.com/sdepold/jquery-rss" target="_blank"><i class="fa fa-external-link"></i> jQuery RSS</a></li>
                                
                                <li>Profile image: <a href="https://www.flickr.com/photos/dotbenjamin/2577394151" target="_blank">Ben Smith</a></li>
                                <li>iPad and iPhone mocks: <a href="https://dribbble.com/perlerar" target="_blank">Regy Perlera</a></li>
                                
                            </ul>
                            
                            <hr/>
                            
                             <p>This responsive portfolio template is handcrafted by UX designer <a href="https://www.linkedin.com/in/xiaoying" target="_blank">Xiaoying Riley</a> at <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a> for developers and is <strong>FREE</strong> under the <a class="dotted-link" href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License</a></p>
                             <p>We will improve or add new features to this template based on users' feedback so follow us on twitter to get notified when a new version is out!</p>
                            <a class="btn btn-cta-secondary btn-follow" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i> Follow us</a>
                            <a class="btn btn-cta-primary btn-download" href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/" target="_blank"><i class="fa fa-download"></i> I want to download</a>
                        </div><!--//content--><!--
                    </div><!--//section-inner--><!--
                </aside><!--//section-->
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by Artem</small>
        </div><!--//container-->
    </footer><!--//footer-->
    <!--<div class="contact-me-container" style="position: fixed; width:96%; height: 96%; top: 2%; left: 2%; background: white; border: 2px solid black;">
        
    </div>
    -->
    <?php 
      $toolTip = new ToolPopUp();
      $toolTip->make("kontakt-form",".btn-contact-me");
    ?>
    <script>
        jQuery(function($){
           /* $(".btn-contact-me").on('click', function(e){
                e.preventDefault();
                
            });
            */
        })
    </script>
 
  