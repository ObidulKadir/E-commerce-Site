<?php
  
  $active = 'Home';
  include("includes/header.php");

?>

   <div class="container" id="slider"><!-- container Start -->
        
        <div class="col-md-12"><!-- col-md-12 Start -->

            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Start -->
                <ol class="carousel-indicators"><!--carousel-indicators Start -->

                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    
                </ol><!-- carousel-indicators Start -->

                <div class="carousel-inner"><!-- carousel-inner Start -->

                    
                    <?php

                      $get_slides = "select * from slider LIMIT 0,1";

                      $run_slides = mysqli_query($con,$get_slides);

                      while ($row_slides=mysqli_fetch_array($run_slides)) {
                        # code...
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];

                        echo "
                          
                          <div class ='item active'>
                          <img src='admin_area/slides_images/$slide_image'>

                          </div>
                        " ;
                      }

                      $get_slides = "select * from slider LIMIT 1,3";
                      
                      $run_slides = mysqli_query($con,$get_slides);

                      while ($row_slides=mysqli_fetch_array($run_slides)) {
                        # code...
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];

                        echo "
                          
                          <div class ='item'>
                          <img src='admin_area/slides_images/$slide_image'>

                          </div>
                        " ;
                      }

                    ?>

                </div><!-- carousel-inner Finish -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control Start -->
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a><!-- left carousel-control Finish -->

                <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- left carousel-control Start -->
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a><!-- left carousel-control Finish -->

            </div><!-- carousel-slide Finish -->
          
        </div><!-- col-md-12 Finsih -->

   </div><!-- container Finish -->

   <div id="advantages"><!--#advantages Start -->

      <div class="container"><!-- container Start -->
          <div class="same-height-row"> <!-- same-height-row Start -->
              <div class="col-sm-4"><!-- col-sm-4 Start -->
                <div class="box same-height"><!-- box same-height Start -->
                    <div class="icon"><!-- icon Start -->
                      <i class="fa fa-heart"></i>
                    </div><!-- icon finish-->

                    <h3><a href="">We love our customer</a></h3>
                    <p>Customer response is the reaction by the organization to the queries and activities of the customer.</p>
                </div><!-- box same-height Finish -->
              </div><!-- col-sm-4 Finish -->
              <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Start -->
                    <div class="icon"><!-- icon Start -->
                      <i class="fa fa-tag"></i>
                    </div><!-- icon finish-->

                    <h3><a href="">We love our customer</a></h3>
                    <p>Customer response is the reaction by the organization to the queries and activities of the customer.</p>
                </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="">We love our customer</a></h3>
                    <p>Customer response is the reaction by the organization to the queries and activities of the customer.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
            
          </div><!-- same-height-row Finish -->
        
      </div><!-- container Finish -->
     
   </div><!-- #advantages Finish -->
   <!-- Product style -->
   <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Our Latest Products
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <?php

             getPro();

           ?>

       </div><!-- row Finish -->
       
   </div><!-- container Finish -->

   <?php

      include 'includes/footer.php';


   ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>