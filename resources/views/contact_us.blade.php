@extends('index')
@section('content')
<div class="google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.164023240432!2d67.06958231447754!3d24.858246951469436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33ea038aae977%3A0xfb476b3946063440!2sOffice%20No.01%20Plot%2C%20Plot%203%20F%2C%20Pakistan%20Employees%20Co-Operative%20Housing%20Society%20Block%206%20PECHS%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1615738647886!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 </div><!-- /#map -->
    
    <!-- Map Area end -->
    
    <!-- Contact-info area Start -->
    <section class="contact-info">
        <div class="container-fluid no-pad">
           <div class="contact-info-inner">
               <div class="row no-gutters">
                  <div class="col-md-4">
                      
                       <div class="email-info sin-cont-info d-flex align-items-center">
                          <div class="center-wrap">
                           <i class="flaticon-at"></i>
                           <h3>Email Us</h3>
                           <p>Mail:<a href="mailto:info@spsons.com"> info@spsons.com </a></p>
                           <a href="mailto:ubaid.paracha@spsons.com"> ubaid.paracha@spsons.com</a>
                           </div>
                           
                       </div>
                   </div>
                   <div class="col-md-4">
                        <div class="office-location sin-cont-info d-flex align-items-center">
                           <div class="center-wrap">
                            <i class="flaticon-map-pin-marked"></i>
                            <h3>office location</h3>
                            <p>Office No.01 Plot No. 03/N, Block-6, P.E.C.H.S Karachi, Pakistan.</p>
                           </div> 
                        </div>
                    </div>
                   <div class="col-md-4">
                        <div class="call-us sin-cont-info d-flex align-items-center">
                            <div class="center-wrap">
                                <i class="flaticon-telephone-of-old-design"></i>
                                <h3>call Us</h3>
                                <p>Phone: <a href="tel:0092-343-2456825"> 0092-343-2456825</a></p>
                                <a href="tel:0092-321-3026704"> 0092-321-3026704</a>
                            </div>
                        </div>
                   </div>
                
               </div>
           </div>
        </div>
    </section>
    <!-- Contact-info area End -->
     
    
    <!-- Contact bottom area Start -->
    <section class="contuct-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                   <div class="con-bottom-inner">
                       <h4>CONTACT <span>US</span></h4>
                       <div class="per-social">
                           <ul>
                               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                        <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
                      
                        <form class="con-page-form" action="https://themeim.com/demo/imgra/mail.php" id="contact-form" method="post">
                            <textarea name="message" placeholder="Message"></textarea>
                            <input type="text" name="name"  placeholder="Name *" class="mar-r">
                            <input type="text" name="email" placeholder="Email *">
                            <button  type="submit" >Submit</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Contact bottom area end -->
    
    
    
    <!-- Clint logo Part Start -->
    <section class="clint-logo-3 section-p bg_dark">
        <div class="container">
            <div class="row">
                <div class="swiper-container clint-logo-3-slider" data-swiper-config='{"loop": true, "effect": "slide", "speed": 900, "autoplay": 1500, "paginationClickable": true, "slidesPerView" : 4 ,"breakpoints": { "575": { "slidesPerView": 2},"767": { "slidesPerView": 3 }}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="{{url('/')}}/assets/images/c41.png" alt=""></a>
                        </div>
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="{{url('/')}}/assets/images/c42.png" alt=""></a>
                        </div>
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="{{url('/')}}/assets/images/c43.png" alt=""></a>
                        </div>
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="{{url('/')}}/assets/images/c44.png" alt=""></a>
                        </div>
                        <!-- Single Client -->
                        <div class="swiper-slide clints-logo-3-item">
                            <a href="#"><img src="{{url('/')}}/assets/images/c45.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clint logo Part End -->


    

<!-- Twiter Feed  Part Start -->
<section class="twitter-feed-part">
    <div class="container">
        <div class="row">
            <div class="twitter-feed-box">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-4">
                        <div class="p-relative">
                            <div class="twitter-icon"> <i class="fa fa-twitter"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-7 col-sm-7 col-8 text-left">
                        <div class="swiper-container twitter-feed-slider" data-swiper-config='{"loop": true, "effect": "slide","speed": 800,"autoplay": 5000,"paginationClickable":true,"nextButton":".swiper-button-next","prevButton":".swiper-button-prev"}'>
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <h5>Lorem Ipsum is simply dummy text of the printing and type setting industry has been the industry's.</h5>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <h5>Lorem Ipsum is simply dummy text of the printing and type setting industry has been the industry's.</h5>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <h5>Lorem Ipsum is simply dummy text of the printing and type setting industry has been the industry's.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-2 d-none d-sm-inline-block">
                        <!-- If we need navigation buttons -->
                        <div class="twitter-sldier-button">
                            <div class="swiper-button-prev">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="swiper-button-next">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection