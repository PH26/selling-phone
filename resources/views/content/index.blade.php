@extends('layouts.frontend')
@section('content')
<div class="header_slide">
<div class="header_bottom_left">                
    <div class="categories">
      <ul>
        <h3>Categories</h3>
          <li><a href="#">Mobile Phones</a></li>
          <li><a href="#">Desktop</a></li>
          <li><a href="#">Laptop</a></li>
          <li><a href="#">Accessories</a></li>
          <li><a href="#">Software</a></li>
           <li><a href="#">Sports &amp; Fitness</a></li>
           <li><a href="#">Footwear</a></li>
           <li><a href="#">Jewellery</a></li>
           <li><a href="#">Clothing</a></li>
           <li><a href="#">Home Decor &amp; Kitchen</a></li>
           <li><a href="#">Beauty &amp; Healthcare</a></li>
           <li><a href="#">Toys, Kids &amp; Babies</a></li>
      </ul>
    </div>                  
 </div>
         <div class="header_bottom_right">                   
             <div class="slider">                        
                 <div id="slider">
                    <div id="mover">
                        <div id="slide-1" class="slide">                                
                         <div class="slider-img">
                             <a href="preview.html"><img src="/frontend/images/slide-1-image.png" alt="learn more" /></a>                                     
                          </div>
                            <!-- <div class="slider-text">
                             <h1>Clearance<br><span>SALE</span></h1>
                             <h2>UPTo 20% OFF</h2>
                           <div class="features_list">
                            <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>                                        
                            </div>
                             <a href="preview.html" class="button">Shop Now</a>
                           </div>     -->                      
                          <div class="clear"></div>             
                      </div>    
                        <div class="slide">
<!--                                             <div class="slider-text">
                             <h1>Clearance<br><span>SALE</span></h1>
                             <h2>UPTo 40% OFF</h2>
                           <div class="features_list">
                            <h4>Get to Know More About Our Memorable Services</h4>                                         
                            </div>
                             <a href="preview.html" class="button">Shop Now</a>
                           </div>  -->      
                             <div class="slider-img">
                             <a href="preview.html"><img src="/frontend/images/slide-3-image.jpg" alt="learn more" /></a>
                          </div>                                                                         
                          <div class="clear"></div>             
                      </div>
                      <div class="slide">                                     
                          <div class="slider-img">
                             <a href="preview.html"><img src="frontend/images/slide-2-image.jpg" alt="learn more" /></a>
                          </div>
                          <!-- <div class="slider-text">
                             <h1>Clearance<br><span>SALE</span></h1>
                             <h2>UPTo 10% OFF</h2>
                           <div class="features_list">
                            <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>                                        
                            </div>
                             <a href="preview.html" class="button">Shop Now</a>
                           </div>    -->
                          <div class="clear"></div>             
                      </div>                                                
                 </div>     
            </div>
         <div class="clear"></div>                         
     </div>
  </div>
<div class="clear"></div>
</div>
</div>
<div class="main">
<div class="content">
<div class="content_top">
    <div class="heading">
    <h3>Điện thoại mới</h3>
    </div>
    <div class="see">
        <p><a href="#">Xem tất cả</a></p>
    </div>
    <div class="clear"></div>
</div>
  <div class="section group">
        <div class="grid_1_of_4 images_1_of_4">
             <a href="{{ route('home.product') }}"><img src="frontend/images/feature-pic1.jpg" alt="" /></a>
             <h2>Lorem Ipsum is simply </h2>
            <div class="price-details">
               <div class="price-number">
                    <p><span class="rupees">$620.87</span></p>
                </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
            </div>
             
        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <a href="preview.html"><img src="frontend/images/feature-pic2.jpg" alt="" /></a>
             <h2>Lorem Ipsum is simply </h2>
            <div class="price-details">
               <div class="price-number">
                    <p><span class="rupees">$899.75</span></p>
                </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
            </div>
            
        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <a href="preview.html"><img src="frontend/images/feature-pic3.jpg" alt="" /></a>
             <h2>Lorem Ipsum is simply </h2>
             <div class="price-details">
               <div class="price-number">
                    <p><span class="rupees">$599.00</span></p>
                </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
            </div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <a href="preview.html"><img src="frontend/images/feature-pic4.jpg" alt="" /></a>
             <h2>Lorem Ipsum is simply </h2>
            <div class="price-details">
               <div class="price-number">
                    <p><span class="rupees">$679.87</span></p>
                </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
            </div>                   
        </div>
    </div>
    <div class="content_bottom">
    <div class="heading">
    <h3>Điện thoại nổi bật</h3>
    </div>
    <div class="see">
        <p><a href="#">Xem tất cả</a></p>
    </div>
    <div class="clear"></div>
</div>
    <div class="section group">
        <div class="grid_1_of_4 images_1_of_4">
             <a href="preview.html"><img src="frontend/images/new-pic1.jpg" alt="" /></a>                    
             <h2>Lorem Ipsum is simply </h2>
            <div class="price-details">
               <div class="price-number">
                    <p><span class="rupees">$849.99</span></p>
                </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
            </div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <a href="preview.html"><img src="frontend/images/new-pic2.jpg" alt="" /></a>
             <h2>Lorem Ipsum is simply </h2>
             <div class="price-details">
               <div class="price-number">
                    <p><span class="rupees">$599.99</span></p>
                </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
            </div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <a href="preview.html"><img src="frontend/images/new-pic4.jpg" alt="" /></a>
             <h2>Lorem Ipsum is simply </h2>
            <div class="price-details">
               <div class="price-number">
                    <p><span class="rupees">$799.99</span></p>
                </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
            </div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
         <a href="preview.html"><img src="frontend/images/new-pic3.jpg" alt="" /></a>
             <h2>Lorem Ipsum is simply </h2>                     
             <div class="price-details">
               <div class="price-number">
                    <p><span class="rupees">$899.99</span></p>
                </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="footer">
<div class="wrap">    
 <div class="section group">
        <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Customer Service</a></li>
                <li><a href="#">Advanced Search</a></li>
                <li><a href="delivery.html">Orders and Returns</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        <div class="col_1_of_4 span_1_of_4">
            <h4>Why buy from us</h4>
                <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Customer Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="contact.html">Site Map</a></li>
                <li><a href="#">Search Terms</a></li>
                </ul>
        </div>
        <div class="col_1_of_4 span_1_of_4">
            <h4>My account</h4>
                <ul>
                    <li><a href="contact.html">Sign In</a></li>
                    <li><a href="index.html">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="contact.html">Help</a></li>
                </ul>
        </div>
        <div class="col_1_of_4 span_1_of_4">
            <h4>Contact</h4>
                <ul>
                    <li><span>+91-123-456789</span></li>
                    <li><span>+00-123-000000</span></li>
                </ul>
                <div class="social-icons">
                    <h4>Follow Us</h4>
                      <ul>
                          <li><a href="#" target="_blank"><img src="frontend/images/facebook.png" alt="" /></a></li>
                          <li><a href="#" target="_blank"><img src="frontend/images/twitter.png" alt="" /></a></li>
                          <li><a href="#" target="_blank"><img src="frontend/images/skype.png" alt="" /> </a></li>
                          <li><a href="#" target="_blank"> <img src="frontend/images/dribbble.png" alt="" /></a></li>
                          <li><a href="#" target="_blank"> <img src="frontend/images/linkedin.png" alt="" /></a></li>
                          <div class="clear"></div>
                     </ul>
                </div>
        </div>
    </div>          
</div>
@endsection