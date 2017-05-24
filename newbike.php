<!DOCTYPE html>
<html lang="en">
<body>
<?php include("includes/header1.php"); ?>

<!-- Listing Start -->
<section id="listing1" class="listing1 padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9">
            <h2 class="uppercase">Bike Listing</h2>
            <p class="heading_space">Choose & buy bike of your choice</p>
          </div>
          <div class="col-md-3">
          <form class="callus">
            <div class="single-query">
              <div class="intro">
                <select>
                  <option class="active">Default Order</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                </select>
              </div>
            </div>
            </form>
          </div>
        </div>
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
                   
        <div class="row">
          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="images/1bg.jpg" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">$8,600 Per Month</span>
                </div>
                <span class="tag_t">For Sale</span> 
                <span class="tag_l">Featured</span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="captlize"><a href="detail.php">Historic Town House</a></h3>
                  <p>45 Regent Street, London, UK</p>
                </div>
                <div class="property_meta transparent"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                  <span><i class="icon-bed"></i>2 Office Rooms</span> 
                  <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                </div>
                <div class="property_meta transparent bottom30">
                  <span><i class="icon-old-television"></i>TV Lounge</span>
                  <span><i class="icon-garage"></i>1 Garage</span>
                  <span></span>
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                  <ul class="pull-right">
				  
                    <li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal"><i class="icon-like"></i> Contact Dealer </button></li>
                    
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
          
          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="images/1bg.jpg" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">$8,600 Per Month</span>
                </div>
                <span class="tag_t">For Sale</span> 
                
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="captlize"><a href="detail.php">Historic Town House</a></h3>
                  <p>45 Regent Street, London, UK</p>
                </div>
                <div class="property_meta transparent"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                  <span><i class="icon-bed"></i>2 Office Rooms</span> 
                  <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                </div>
                <div class="property_meta transparent bottom30">
                  <span><i class="icon-old-television"></i>TV Lounge</span>
                  <span><i class="icon-garage"></i>1 Garage</span>
                  <span></span>
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                  <ul class="pull-right">
                    <li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal"><i class="icon-like"></i> Contact Dealer </button></li>
					
                  </ul>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="images/1bg.jpg" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">$8,600 Per Month</span>
                </div>
                <span class="tag_t">For Sale</span> 
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="captlize"><a href="detail.php">Historic Town House</a></h3>
                  <p>45 Regent Street, London, UK</p>
                </div>
                <div class="property_meta transparent"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                  <span><i class="icon-bed"></i>2 Office Rooms</span> 
                  <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                </div>
                <div class="property_meta transparent bottom30">
                  <span><i class="icon-old-television"></i>TV Lounge</span>
                  <span><i class="icon-garage"></i>1 Garage</span>
                  <span></span>
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                  <ul class="pull-right">
                    <li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal"><i class="icon-like"></i> Contact Dealer </button></li>
                    
                  </ul>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="detail.php"><img src="images/1bg.jpg" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">$8,600 Per Month</span>
                </div>
                <span class="tag_t">For Sale</span> 
                <span class="tag_l">Featured</span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="captlize"><a href="detail.php">Historic Town House</a></h3>
                  <p>45 Regent Street, London, UK</p>
                </div>
                <div class="property_meta transparent"> 
                  <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                  <span><i class="icon-bed"></i>2 Office Rooms</span> 
                  <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                </div>
                <div class="property_meta transparent bottom30">
                  <span><i class="icon-old-television"></i>TV Lounge</span>
                  <span><i class="icon-garage"></i>1 Garage</span>
                  <span></span>
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                  <ul class="pull-right">
                    <li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal"><i class="icon-like"></i> Contact Dealer </button></li>
                    
                  </ul>
                </div>
                
              </div>
            </div>
          </div>

		</div>
        
        
      </div>
      <aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
          </div>
          <form class="callus">
            
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option selected="" value="any">Brand</option>
                  <option>a</option>
                  <option>B </option>
                  <option>c</option>
                  <option>d</option>
                  <option>e</option>
                  <option>f</option>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option class="active">Model</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>e</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            
            
            
            
            <div class="col-sm-12 form-group">
              <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
          </form>
          
          
        </div>
       
        </aside>
    </div>
  </div>
</section>
<!-- Listing end -->

  <?php include ("includes/footer.php"); ?>


</body>


</html>

