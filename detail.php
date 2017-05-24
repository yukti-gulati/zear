<!DOCTYPE html>
<html lang="en">


<body>


 

<!--Header-->
<?php include("includes/header1.php"); ?>

<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Enter Details
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form-horizontal" role="form">
				<div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                         placeholder="Enter Your Name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                         placeholder="Enter Email Address"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Mobile No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                             placeholder="Enter Mobile No"/>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                             placeholder="Enter your city"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
                
                
                
                
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
              
            </div>
        </div>
    </div>
</div>



 

<!--About Us -->
<section id="about" class="padding padding_bottom ">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="uppercase">About Bike</h2>
        <span class="bottom15">A few words about bike and Bike Model</span>
        <p class="heading_space">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
    <div class="row number-counters text-center">
      <!-- first count item -->
      <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
        <i class="icon-icons215"></i>
        <p>Years of Built</p>
        <!-- Set Your Number here. i,e. data-to="56" -->
        <strong data-to="1991">0</strong>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
        <i class="icon-bed"></i>
        <p>Milage</p>
        <strong data-to="6">0</strong>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
        <i class="icon-safety-shower"></i>
        <p>Number of Bathrooms</p>
        <strong data-to="7">0</strong>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
        <i class="icon-old-television"></i>
        <p>TV Lounge</p>
        <strong data-to="2">0</strong>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
        <i class="icon-garage"></i>
        <p>Parking Garage</p>
        <strong data-to="1">0</strong>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
        <i class="icon-select-an-objecto-tool"></i>
        <p>Square Feet</p>
        <strong data-to="5456">0</strong>
      </div>
    </div>
    <a  class="btn-blue border_radius uppercase" data-toggle="modal" data-target="#myModalHorizontal" > Contact Dealer Now</a> 

  </div>
</section>
















<!--Footer-->
  <?php include ("includes/footer.php"); ?>




</body>


</html>

