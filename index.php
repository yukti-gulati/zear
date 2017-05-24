<!DOCTYPE html>
<html lang="en">
<body>

<?php include("includes/header.php"); ?>
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
                   
    <!--bg image -->
    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-left">
            <h1 class="uppercase"><span>We don’t just find Great Deals</span> We Create them</h1>
            <p class="bottom30">Buy Used Bike or New Bike with Complete Peace of Mind, Get started in few clicks</p>
          </div>
          
          <div class="col-sm-4">
            <div class="row">
              <form class="callus clearfix border_radius">
                
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option selected="" value="any">Brand</option>
                        <option>Honda</option>
                        <option>Bajaj </option>
                        <option>Yamaha</option>
                        <option>Hero</option>
                        
                      </select>
                    </div>
                  </div>
                
                
                  <div class="single-query form-group top10">
                    <input type="text" class="keyword-input" placeholder="Model (e.g. 'Activa')">
                  </div>

                  <button type="submit" class="btn-blue border_radius top15">Search</button>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Types -->
   
    
    <!--Best Deal Properties-->
    <section id="deals" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
            <h2 class="uppercase">Best Used Car Deals</h2>
            <p class="heading_space">We are proud to present to you some of the best used bikes for affordable prices.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div id="full-slider" class="owl-carousel">
              <div class="item">
                <div class="media deal_media proerty_content">
                  <div class="media-left">
                    <a href="detail.php">
                    <img class="media-object" src="images/usedbike.jpg" alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="price default_clr">
                      <h4>$8,600  <small>Bike Name</small></h4>
                    </div>
                    <div class="proerty_text">
                      <h3 class="bottom15"> <a href="property_detail1.html">Full Bike Name</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
                    </div>
                    <div class="dealer clearfix">
                      <i class="author"><img src="images/author.png" alt="author"></i>
                      <h4>Bohdan Kononets &nbsp; <small>- agent</small></h4>
                      <span><i class="icon-phone4"></i>321 233 5566</span> 
                      <a href="mailto:michael@castle.com"><i class="icon-mail-envelope-closed3"></i>abc@zear.com</a> 
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left">45 Regent Street, city, country</p>
                      <ul class="pull-right">
                        <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                      </ul>
                    </div>
                    <div class="property_meta"> 
                      <span><i class="icon-select-an-objecto-tool"></i>Milage</span>
                      <span><i class="icon-bed"></i>Used</span> 
                      <span><i class="icon-safety-shower"></i>Condition</span> 
                      <span><i class="icon-old-television"></i>Other Feature</span> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="media deal_media proerty_content">
                  <div class="media-left">
                    <a href="detail.php">
                    <img class="media-object" src="images/usedbike.jpg" alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="price default_clr">
                      <h4>$8,600 Per Month - <small>Name of the Bike</small></h4>
                    </div>
                    <div class="proerty_text">
                      <h3 class="bottom15"> <a href="property_detail3.html">Full Name</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
                    </div>
                    <div class="dealer clearfix">
                      <i class="author"><img src="images/author.png" alt="author"></i>
                      <h4>Bohdan Kononets &nbsp; <small>- agent</small></h4>
                      <span><i class="icon-phone4"></i>321 233 5566</span> 
                      <a href="mailto:michael@castle.com"><i class="icon-mail-envelope-closed3"></i>michael@castle.com</a> 
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left">45 Regent Street, London, UK</p>
                      <ul class="pull-right">
                        <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                      </ul>
                    </div>
                    <div class="property_meta"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                      <span><i class="icon-bed"></i>3 Bedrooms</span> 
                      <span><i class="icon-safety-shower"></i>2 Bedrooms</span> 
                      <span><i class="icon-old-television"></i>TV Lounge</span> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Best Deal Properties Ends-->
    
    <!--Featured Property-->
    <section id="property" class="padding bg_light">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
            <h2 class="uppercase">Featured New Bikes</h2>
            <p class="heading_space"> We are proud to present to you some of the best bikes for affordable 
              prices. 
            </p>
          </div>
        </div>
        <div class="row">
          <div class="three-item owl-carousel">
            <div class="item feature_item">
              <div class="image"> <img src="images/1bg.jpg" alt="Featured Property"> 
                <span class="price default_clr">$8,600 </span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="bottom15"><a href="detail.php">Park Avenue Apartment</a></h3>
                  <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>Contact Me</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a>
                </div>
                <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
              </div>
            </div>
            <div class="item feature_item">
              <div class="image"><a href="detail.php"> <img src="images/1bg.jpg" alt="Featured Property"></a>
                <span class="price default_clr">$8,600 </span> 
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="bottom15"><a href="detail.php">Park Avenue Apartment</a></h3>
                  <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>Contact Me</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a> 
                </div>
                <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft </span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
              </div>
            </div>
            <div class="item feature_item">
              <div class="image"> <a href="detail.php"><img src="images/1bg.jpg" alt="Featured Property"></a>
                <span class="price default_clr">$8,600 </span> 
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="bottom15"><a href="detail.php">Park Avenue Apartment</a></h3>
                  <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>Contact Me</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a>
                </div>
                <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
              </div>
            </div>
            <div class="item feature_item">
              <div class="image"> <a href="detail.php"><img src="images/1bg.jpg" alt="Featured Property"></a> 
                <span class="price default_clr">$8,600 </span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="bottom15"><a href="detail.php">Park Avenue Apartment</a></h3>
                  <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>Contact Me</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a>
                </div>
                <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
              </div>
            </div>
            <div class="item feature_item">
              <div class="image"> <a href="detail.php"><img src="images/1bg.jpg" alt="Featured Property"> </a>
                <span class="price default_clr">$8,600 Per Month</span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="bottom15"><a href="detail.php">Park Avenue Apartment</a></h3>
                  <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>Conta Me</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a> 
                </div>
                <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>2 Office Rooms</span> <span><i class="icon-safety-shower"></i>1 Bathroom</span> </div>
              </div>
            </div>
            <div class="item feature_item">
              <div class="image"><a href="detail.php"> <img src="images/1bg.jpg" alt="Featured Property"> </a>
                <span class="price default_clr">$8,600 </span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="bottom15"><a href="detail.php">Park Avenue Apartment</a></h3>
                  <p>nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option nihil imperdiet doming…</p>
                  <a href="javascript:void(0)" class="btn-more">
                  <i><img src="images/arrowl.png" alt="arrow"></i>
                  <span>Contact Me</span>
                  <i><img src="images/arrowr.png" alt="arrow"></i>
                  </a>
                </div>
                <div class="property_meta"> <span> <i class="icon-select-an-objecto-tool"></i>4800 sq ft </span> <span> <i class="icon-bed"></i>2 Office Rooms </span> <span> <i class="icon-safety-shower"></i>1 Bathroom </span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--Parallax-->
    <section id="parallax" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="parallax_inner text-center">
              <h2 class="text-capitalize bottom15">GENERAL FEATURES</h2>
              <p class="heading_space">Buy Used Bike with Complete Peace of Mind</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="parallax_inner text-center">
              <i class="icon-icons9 bottom30"></i>
              <h3 class="text-capitalize bottom15">Fully Certified Bikes</h3>
              <p>nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="parallax_inner text-center">
              <i class="icon-icons9 bottom30"></i>
              <h3 class="text-capitalize bottom15">Best Price in Town</h3>
              <p>nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="parallax_inner text-center">
              <i class="icon-icons9 bottom30"></i>
              <h3 class="text-capitalize bottom15">Easy Paper Transfer</h3>
              <p>nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.</p>
            </div>
          </div>
		  <div class="col-sm-3">
            <div class="parallax_inner text-center">
              <i class="icon-icons9 bottom30"></i>
              <h3 class="text-capitalize bottom15">Six Months Warranty</h3>
              <p>nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--Testinomials-->
    <section id="testinomialBg" class="padding bg_light">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h2 class="uppercase">Happy Customers</h2>
            <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="testinomial-slider" class="owl-carousel">
              <div class="item">
                <div class="testinomial_content text-center">
                  <img src="images/author.png" alt="happy client" class="bottom15">
                  <h4 class="uppercase"> SAM NICHOLSON</h4>
                  <span class="smmery bottom15">( NorthMarq Capital  )</span>
                  <img src="images/stars.png" alt="rating" class="bottom30">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                </div>
              </div>
              <div class="item">
                <div class="testinomial_content text-center">
                  <img src="images/author.png" alt="happy client" class="bottom15">
                  <h4 class="uppercase"> SAM NICHOLSON</h4>
                  <span class="smmery bottom15">( NorthMarq Capital  )</span>
                  <img src="images/stars.png" alt="rating" class="bottom30">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 text-center">
          <a href="javascript:void(0)" class="cd-see-all btn-black border_radius margin40"><i class="fa fa-th" aria-hidden="true"></i>view all</a>
        </div>
      </div>
    </section>
    <div class="cd-testimonials-all">
      <div class="cd-testimonials-all-wrapper">
        <ul>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
            <div class="cd-author">
              <img src="images/author.png" alt="Author image">
              <ul class="cd-author-info">
                <li>SAM NICHOLSON</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div>
            <!-- cd-author -->
          </li>
        </ul>
      </div>
      <!-- cd-testimonials-all-wrapper -->
      <a href="javascript:void(0)" class="close-btn">Close</a>
    </div>
     <!--Footer-->
   <?php include ("includes/footer.php"); ?>
</body>
</html>
