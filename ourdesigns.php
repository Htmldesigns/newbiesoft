<html>
    <head>
        <title>OurDesigns | Newbie softsoutions</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/menu/slicknav.css">
        <script src="js/menu/modernizr.min.js"></script>
        <script src="js/menu/jquery.slicknav.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#menu').slicknav();

                 $("#estore").click(function(){
                    $("#estoreModal").modal("show");
                });

                $("#ashaisha").click(function(){
                    $("#ashaishaModal").modal("show");
                });

                $("#flowers").click(function(){
                      
                    $("#flowersModal").modal("show");
                });
                $("#homeneeds").click(function(){
                      
                    $("#homeneedModal").modal("show");
                });
                $("#interier").click(function(){
                      
                    $("#interierModal").modal("show");
                });

                $("#v1").click(function(){
                    $("#v1Modal").modal("show");
                });
                 /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#v1Modal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#v1Modal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });


                $("#v2").click(function(){
                    $("#v2Modal").modal("show");
                });

                 /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo1").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#v2Modal").on('hide.bs.modal', function(){
        $("#cartoonVideo1").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#v2Modal").on('show.bs.modal', function(){
        $("#cartoonVideo1").attr('src', url);
    });

     $("#v3").click(function(){
                    $("#v3Modal").modal("show");
                });

                 /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo2").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#v3Modal").on('hide.bs.modal', function(){
        $("#cartoonVideo2").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#v3Modal").on('show.bs.modal', function(){
        $("#cartoonVideo2").attr('src', url);
    });








            });
        </script>
        <style type="text/css">
            .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
   
    background-color: #F8F8F8;
   
}


        </style>
    </head>
    <body>
        <!-- header start -->
     <header class="line">
           <div class="container">
             <div class="row">
                <div class="col-xs-8">
                   <nav class="navbar">
                         <div class="navbar-header">
                                    <a class="navbar-brand" href="index.php">
                                        <img class="img-responsive" src="images/logo.png" style="width: 32%;">
                                    </a>
                         </div>        
                    </nav>
                     </div>
                      <div class="col-xs-4">
                              <div class="row adjust-text">
                    <div class="col-xs-1"><span class="glyphicon glyphicon-envelope text-color "></span></div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">info@newbiesoftsolutions.com</div>
                </div>
             </div>
          </div>
      </header>
        <!-- header end -->
     <!---    menu start  -->
        <nav class="navbar navbar-inverse navbar-inversecolor">
              <div class="container">
                <ul class="nav navbar-nav leftmove">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="aboutus.php">AboutUs</a></li>
                  <!-- <li><a href="bposervices.php">Services</a></li> -->
                  <li><a href="softwaredevelopment.php">Software Development</a></li>
                   <li><a href="ourdesigns.php">Our Designs</a></li>
                   <li><a href="ourteam.php">Our Team</a></li>
                   <li><a href="contactus.php">Contact Us</a></li>
                  
                </ul>
              </div>
       </nav>
    <!---    menu end  -->
    <!-- mobile menu start  -->
        <div class="row">
         <div class="col-xs-12">
          <div class="nav-wrapper">
            <ul id="menu" style="display:none;">
                <li><a href="index.php">Home</a></li>
                  <li><a href="aboutus.php">AboutUs</a></li>
                  <li><a href="bposervices.php">Services</a></li>
                  <li><a href="softwaredevelopment.php">Software Development</a></li>
                   <li><a href="ourdesigns.php">Our Designs</a></li>
                   <li><a href="ourteam.php">Our Team</a></li>
                   <li><a href="contactus.php">Contact Us</a></li>
                  
            </ul>
         </div>
        </div>
        </div>
       <!-- mobile menu end -->
       <div class="container bgcolor">
         <div class="row">
            <div class="col-xs-3">
                <div class="well well-left">
                  <div>
                    <h3 class="well-text">A set of 10 Bootstrap and Non Bootstrap templates are designed &amp built by Newbie soft solutions </h3>

                  </div>
                  <div>
                     <h3 style="font-size:13px;font-weight:bold;">Our Future Template Designs:</h3>
                     <div class="scroll-down">
                        <ul>
                          <li style="color: #3D8FCC;">Asha Isha Foundation</li>
                          <li style="color: #848688;">VSP Adds</li>
                          <li style="color: #3D8FCC;">KML Sourceing Solutions</li>
                          

                        </ul>

                        

                     </div>
                   
                  </div>

                </div>
            </div>
            <div class="col-xs-9">
              <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                <li class="active">
                  <a  href="#1" data-toggle="tab">Web Designs</a>
                </li>
                <li>
                  <a href="#2" data-toggle="tab">Sales</a>
                </li>
                <li>
                  <a href="#3" data-toggle="tab">Videos</a>
                </li>
            </ul>
    <div class="tab-content ">
      <div class="tab-pane active" id="1">
              <div class="row">
              </div>
              <div class="row">
                <!-- ###############estore################# -->
                <div class="col-xs-4">
                  <div class="well well-height">
                    
                    <ul class="demo-3 list-unstyled">
                      <li>
                          <figure>
                              <img src="images/ourdesigns/chartiybig.png" class="img-responsive">
                              <figcaption>
                                  <h2>Asha Isha Foundation</h2>
                                  <p>This mainly used donate the money to poor childrens.</p>
                                  <div class="view"><a href="javascript:void(0)" id="estore">View</a></div>
                              </figcaption>
                          </figure>
                      </li>
                   </ul>
                   <div style="padding-top: 15px;"><span>Charity</span><span class="text-muted" style="padding-left: 15px;">ResponsiveHTML,CSS3</span></div>
                  </div>
                </div>
                    <div id="estoreModal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                          </div>
                          <div class="modal-body">
                            <img src="images/ourdesigns/chartiysmall.png">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- ############home nedds########### -->
                <div class="col-xs-4">
                  <div class="well well-height">
                    <ul class="demo-3 list-unstyled">
                      <li>
                          <figure>
                              <img src="images/ourdesigns/homeneedsmall.png" class="img-responsive">
                              <figcaption>
                                  <h2>Home Needs</h2>
                                  <p>We supply the home needs through this website.</p>
                                  <div class="view"><a href="javascript:void(0)" id="homeneeds">View</a></div>

                              </figcaption>
                          </figure>
                      </li>
                   </ul>
                   <div style="padding-top: 15px;"><span>ecommerce</span><span class="text-muted" style="padding-left: 15px;">ResponsiveHTML,CSS3</span></div>
                   <div id="homeneedModal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Home Needs</h4>
                          </div>
                          <div class="modal-body">
                            <img src="images/ourdesigns/homeneeds.png">
                          </div>
                          <div class="modal-footer">
                           
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                 <!-- ############home nedds end########### -->
                <div class="col-xs-4">
                  <!-- ############inteerier start########### -->
                  <div class="well well-height">
                    <ul class="demo-3 list-unstyled">
                      <li>
                          <figure>
                              <img src="images/ourdesigns/interiersmall.png" class="img-responsive">
                              <figcaption>
                                  <h2>Interiors</h2>
                                  <p>We supply interiors designs through this website.</p>
                                  <div class="view"><a href="javascript:void(0)" id="interier">View</a></div>
                              </figcaption>
                          </figure>
                      </li>
                   </ul>
                   <div style="padding-top: 15px;"><span>ecommerce</span><span class="text-muted" style="padding-left: 15px;">ResponsiveHTML,CSS3</span></div>
                  </div>
                   <div id="interierModal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Home Needs</h4>
                          </div>
                          <div class="modal-body">
                            <img src="images/ourdesigns/interierbig.png">
                          </div>
                          <div class="modal-footer">
                           
                          </div>
                        </div>

                      </div>
                    </div>
                </div>
                <!-- ############inteerier end########### -->
              </div>
              <div class="row">
                <!-- ############asha isha  start########### -->
                <div class="col-xs-4">
                  <div class="well well-height">
                    <ul class="demo-3 list-unstyled">
                      <li>
                          <figure>
                              <img src="images/ourdesigns/chartiysmall.png" class="img-responsive">
                              <figcaption>
                                   <h2>Asha Isha Foundation</h2>
                                  <p>This mainly used donate the money to poor childrens.</p>
                                  <div class="view"><a href="javascript:void(0)" id="ashaisha">View</a></div>
                              </figcaption>
                          </figure>
                      </li>
                   </ul>
                   <div style="padding-top: 15px;"><span>Charity</span><span class="text-muted" style="padding-left: 15px;">ResponsiveHTML,CSS3</span></div>

                  </div>
                   <div id="ashaishaModal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Donation Website</h4>
                          </div>
                          <div class="modal-body">
                            <img src="images/ourdesigns/chartiybig.png" >
                          </div>
                          <div class="modal-footer">
                           
                          </div>
                        </div>

                      </div>
                    </div>
                  
                </div>
                <!-- ############asha isha  end########### -->
                <!-- ########flowers start########## -->
                <div class="col-xs-4">
                  <div class="well well-height">
                    <ul class="demo-3 list-unstyled">
                      <li>
                          <figure>
                              <img src="images/ourdesigns/flowers.png" class="img-responsive">
                              <figcaption>
                                  <h2>Planets And Flowers</h2>
                                  <p>This mainly used to purchased the flowers in online.</p>
                                  <div class="view"><a href="javascript:void(0)" id="flowers">View</a></div>
                              </figcaption>
                              
                          </figure>
                      </li>
                   </ul>
                   <div style="padding-top: 15px;"><span>ecommerce</span><span class="text-muted" style="padding-left: 15px;">ResponsiveHTML,CSS3</span></div>
                   <div id="flowersModal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Planets And Flowers Website</h4>
                          </div>
                          <div class="modal-body">
                            <img src="images/ourdesigns/flowersbig.png" >
                          </div>
                          <div class="modal-footer">
                           
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- ############flowers end########### -->
                </div>
                <div class="col-xs-4">
                  <!-- ############comeing soon start########### -->
                  <div class="well well-height">
                    <ul class="demo-3 list-unstyled">
                      <li>
                          <figure>
                              <img src="images/ourdesigns/flowers.png" class="img-responsive">
                              <figcaption>
                                  <h2>Planets And Flowers</h2>
                                  <p>This mainly used to purchased the flowers in online.</p>
                                  <div class="view"><a href="javascript:void(0)" id="comingsoon">View</a></div>
                              </figcaption>
                          </figure>
                      </li>
                   </ul>
                   <div style="padding-top: 15px;"><span>ecommerce</span><span class="text-muted" style="padding-left: 15px;">ResponsiveHTML,CSS3</span></div>
                  </div>
                  <div id="comingsoonModal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Donation Website</h4>
                          </div>
                          <div class="modal-body">
                            <img src="images/ourdesigns/flowers.png" >
                          </div>
                          <div class="modal-footer">
                           
                          </div>
                        </div>

                      </div>
                    </div>
                </div>
                <!-- ############comeing soon end########### -->
              </div>
          </div>
          <!------------ ############Tabpane2########## ------------>
          <div class="tab-pane" id="2">
            <div class="row">


            </div>
              

          </div>
          <!------------ ############Tabpane2 end########## ------------>

           <!------------ ############Tabpane3########## ------------>
          <div class="tab-pane" id="3">
            <div class="row">
               <div class="col-xs-4">
                  <div class="well vediowell-height">
                    <img src="images/video/v1.png" style="cursor: pointer;" id="v1">
                     <div id="v1Modal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-body">
                            <!-- <iframe src="https://www.youtube.com/watch?v=rz_GqnsLPTM"></iframe> -->
                            <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
                          </div>
                          
                        </div>

                      </div>
                    </div>
                        
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="well vediowell-height">
                    <img src="images/video/v1.png" style="cursor: pointer;" id="v2">
                    <div id="v2Modal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-body">
                            <!-- <iframe src="https://www.youtube.com/watch?v=rz_GqnsLPTM"></iframe> -->
                            <iframe id="cartoonVideo1" width="560" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
                          </div>
                          
                        </div>

                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="well vediowell-height">
                    <img src="images/video/v1.png" style="cursor: pointer;" id="v3">
                    <div id="v3Modal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-body">
                            <!-- <iframe src="https://www.youtube.com/watch?v=rz_GqnsLPTM"></iframe> -->
                            <iframe id="cartoonVideo2" width="560" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
                          </div>
                          
                        </div>

                      </div>
                    </div>
                    
                  </div>
                </div>

            </div>
          </div>
          <!------------ ############Tabpane3 end########## ------------>
        </div>
        <!------------ ############Tabcontent end########## ------------>
            </div>
         </div>

       </div>
    <!-- Footer -->
        <footer class="footer">
          <div class="container" style="border-bottom: 1px solid #AFB4BF;">
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
             
              <ul class="footerdsc">
                <li><h4>How We Work</h4></li>
                <li>
                    <a href="company.php">Our Goals & Achivements </a>
                </li>
                <li>
                  <a href="services.php">Services</a>
                </li>
              </ul>
              
            </div>
            <!--<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
             
              <ul class="footerdsc">
                <li> <h4>About Us</h4></li>
                <li>
                    <a href="#">The Team</a>
                    
                </li>
                
              </ul>
            </div>
            --><div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
             
              <ul class="footerdsc">
                
                 <li><h4>Engage Us</h4></li>
                  <li>
                    <a href="https://www.facebook.com/newbiesoftsolutions/" target="_blank">Facebook</a>
                  </li>
                  <li>
                    <a href="https://twitter.com/Newbie_Soft" target="_blank">Twitter</a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/in/newbie-soft-solutions-b9a7b8112" target="_blank">Linkdin</a>
                  </li>
                  <li>
                    <a href="https://plus.google.com/u/0/113507466819711075556/posts?hl=en" target="_blank">Google plus</a>
                  </li>
                  
                    
              
              </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            
             <ul class="footerdsc">
               <li><h4>Contact Us</h4></li>
                <li>
                    <a href="contactus.php">Who we are</a>
                </li>
                
              </ul>
            </div>
            </div>
         </div>
         <div class="row">
           <div class="col-xs-12 text-center">
             <p class="copyright">2016 Copyright &copy; Newbie Softsolutions Pvt Ltd. | All Rights Reserved </p>
           </div>
             
         </div>
        </footer>
    
    <!-- Footer end -->

    </body>
</html>