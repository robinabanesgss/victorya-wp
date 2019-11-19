<?php get_header(); ?>

<section>
     <div class="banner-sec">
          <div>
               <canvas></canvas>
          </div>
          <div class="banner-sec__content">
               <div class="banner-sec__text">
                    <h1 class="banner-sec__ttl">Good food choices are good investments.</h1>
                    <p class="banner-sec__dtl">There is a powerful need for symbolism, and that means the architecture must have something that appeals to the human heart.</p>
               </div><!-- /banner text -->
               <div class="banner-sec__btn">
                    <a href="#" class="banner-sec__order-btn">Order now</a>
                    <span>Watch our story</span>
                    <a href="#" class="banner-sec__play-btn">play</a>
               </div><!-- /banner buttons -->
          </div>
     </div>
</section> <!-- /end of banner -->
<section>
     <div class="blog-sec container">
          <div class="blog-sec__box">
               <div class="blog-sec__item">
                    <div class="blog-sec__imgbox01">
                         <img src="<?php echo get_template_directory_uri(); ?>/dist/images/blog-img1.png" alt="">
                    </div>
                    <div class="blog-sec__textbox">
                         <h2>The best comfort food will always be greens, cornbread, and fried chicken.</h2>
                         <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                              clita kasd gubergren,</p>
                         <button>Know More About Us</button>
                    </div>
               </div><!-- /.item -->
               <div class="blog-sec__item">
                    <div class="blog-sec__textbox">
                         <h2>The best comfort food will always be greens, cornbread, and fried chicken.</h2>
                         <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                              clita kasd gubergren,</p>
                         <button>Know More About Us</button>
                    </div>
                    <div class="blog-sec__imgbox02">
                         <img src="<?php echo get_template_directory_uri(); ?>/dist/images/blog-img2.png" alt="">
                    </div>
               </div><!-- /.item -->
          </div><!--  /.box -->
     </div><!-- /.blog-sec -->
</section>
<section>
     <div class="vid-sec container">
          <div class="vid-sec__img">
               <img src="<?php echo get_template_directory_uri(); ?>/dist/images/vid-bg.png" alt="">
          </div><!-- /.image -->
          <div class="vid-sec__overlay"></div>
          <div class="vid-sec__text-box">
               <h2 class="ad-vid__ttl">
                    When a man's stomach is full it makes no difference whether he is rich or poor.
               </h2>
               <p class="vid-sec">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.
               </p>
          </div><!-- /.text-box -->
          <button type="button" class="vid-sec__btn">play</button>
          <p>Watch our story</p>
     </div><!-- /.vid-sec -->
</section>
<section>
     <div class="collection-sec container">
          <div class="collection-sec__textbox">
               <h2 class="collection-sec__ttl">Explore Our Foods</h2>
               <p class="collection-sec__subttl">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
          </div><!-- /.textbox -->
          <div class="collection-sec__prod-box">
               <div class="collection-sec__item">
                    <div class="collection-sec__img">
                         <img src="<?php echo get_template_directory_uri(); ?>/dist/images/food1.png" alt="">
                    </div><!-- /.img -->
                    <div class="collection-sec__dtl-wrapper">
                         <div class="collection-sec__item-ttl">
                              <h3>Ham Sandwich</h3>
                              <p>$10.50</p>
                         </div>
                         <div class="collection-sec__item-detail">
                              Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                         </div>
                    </div> <!-- /.dtl-wrapper -->
               </div><!-- ./item -->
          </div><!-- /.prod-box -->
          <button type="button" class="collection-sec__btn">Explore all food</button>
     </div><!-- /collection-sec -->
</section>

<?php get_footer(); ?>