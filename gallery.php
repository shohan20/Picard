<!DOCTYPE html>
<html lang="en-US">
   <head>
       <?php session_start(); ?>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Responsive Design website template</title>
       <link type="text/css" rel="stylesheet" href="dist/materialize/css/materialize.min.css"  media="screen,projection"/>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>   
      <!--lightgallery-->
      <link rel="stylesheet" href="dist/css/lightgallery.css">
      <script src="dist/js/lightgallery.min.js"></script>

    <!-- lightgallery plugins -->
    <script src="dist/js/lg-thumbnail.min.js"></script>
    <script src="dist/js/lg-fullscreen.min.js"></script>
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]--> 

      <script>

      var gallery = lightGallery(document.getElementById('lightgallery'));
      $(document).ready(function(){
          
          $.ajax({
              type: "POST",
              url: "php/display.php",
              dataType:'JSON', 
              success: function(response){
                // put on console what server sent back...
                
               //var data_array=$.parseJSON(response);
               if(response !== null){
                var things = response.toString().split(','); 
                console.log(things);
                var sr= "<?php echo "upload/".$_SESSION['id']."/"?>";
                for(var i = 0; i < things.length; i++) {
                    //Do things with things[i]
                  var srs=sr+things[i];
                   console.log(srs);
                 // console.log(ib);
                  var value='<div class="imag" data-src='+srs+'><img class="full" src='+srs+'></div>';
                  $("#lightgallery").append(value);
                }
               setTimeout(function() {
               //gallery.destroy(); // destroy gallery
              gallery = lightGallery(document.getElementById('lightgallery')); //re-initiate gallery
              }, 100); 
                
              }
            }

         });

        });
      </script>


       <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="dist/materialize/js/materialize.min.js"></script>


  <link rel="stylesheet" type="text/css" href="css/upload.css" />
    <link rel="stylesheet" type="text/css" href="dist/dropzone.css" />
    <script type="text/javascript" src="dist/dropzone.js"></script>
   </head>
    <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="../design/">DESIGN <br /><strong>THEME</strong></a>
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
                  <div class="top-nav s-12 l-5">
                    
                        <li><a href="index.html">Home</a>
                        
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="../design/"><strong>picard</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        
                       
                        
                        <li><a href="login/login.html">login</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <div id="head">
            <div class="line">
               <h1>Responsive image gallery</h1>
            </div>
         </div>


           <div class="fixed-action-btn">
          <a id="myBtn" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>
          </div>

        <!--<button id="myBtn" >upload</button> -->

        <!-- The Modal -->
        <div id="myModal" class="modal">
            
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <form action="php/uploadProcess.php" class="dropzone">
            </form>

          </div>

        </div>
        <script type="text/javascript" src="js/upload.js"></script>



         <div id="content">
            <div class="line">
               <div class="margin">
                <div id="lightgallery" class="line margin">
                   
              </div>
               </div>
            </div>
         </div>

         

         <div id="fourth-block">
            <div class="line">
               <div id="owl-demo2" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Amazing responsive template</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Responsive components</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Retina ready</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2015, Vision Design - graphic zoo
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : false,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : true,
         	singleItem:true
           });
         });	
          
      </script> 
   </body>
</html>