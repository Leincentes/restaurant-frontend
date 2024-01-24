<?php include BASE_PATH . '/resources/views/header.blade.php';  ?>

<!--Page header & Title-->
<section id="page_header">
  <div class="page_title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <h2 class="title">About Desu</h2>
           <p>Learn more about our story and vision.</p>
        </div>
      </div>
    </div>
  </div>  
</section>

<section id="overview" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <h2 class="heading">Restaurant Overview</h2>
         <hr class="heading_space">
         <p>Launched in Bataan, Desu has evolved from a local initiative to a prominent food destination in the Philippines. We take pride in our journey of providing delightful food experiences to our customers. Operating in Bataan and neighboring regions, we are committed to promoting sustainability within our local food ecosystem.</p>
      </div>
    </div>
  </div>
</section>

<section id="gallery" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="work-filter">
          <ul class="text-center">
             <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
             <li><a href="javascript:;" data-filter=".hod" class="filter">Head Chef</a></li>
             <li><a href="javascript:;" data-filter=".food" class="filter">Food Supervisor</a></li>
             <li><a href="javascript:;" data-filter=".kitchen" class="filter">Head Of Kitchen</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
      <div class="zerogrid">
        <div class="wrap-container">
          <div class="wrap-content clearfix">
            <div class="col-1-3 mix work-item hod heading_space">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="public/images/our-cheffs1.jpg" alt="cook"/>
                    <div class="overlay">
                      <div class="overlay-inner">
                        <ul class="social_icon">
                        <li><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
                        <li><a href="#" class="google"><i class="icon-google"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div> 
                  <div class="gallery_content text-left">
                    <h3> Andrew Bert</h3>
                    <small>Assistant Chef</small>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1-3 mix work-item food heading_space">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="public/images/our-cheffs2.jpg" alt="cook"/>
                    <div class="overlay">
                      <div class="overlay-inner">
                        <ul class="social_icon">
                          <li><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
                          <li><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
                          <li><a href="#" class="google"><i class="icon-google"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="gallery_content text-left">
                    <h3> Mecan smith</h3>
                    <small>food Specialist</small>
                    <p></p>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-1-3 mix work-item kitchen heading_space">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="public/images/our-cheffs3.jpg" alt="cook"/>
                    <div class="overlay">
                      <div class="overlay-inner">
                        <ul class="social_icon">
                          <li><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
                          <li><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
                          <li><a href="#" class="google"><i class="icon-google"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="gallery_content text-left">
                    <h3> Jack Bravo</h3>
                    <small>Food Supervisor</small>
                    <p></p>
                  </div> 
                </div>
              </div>
            </div>
            
          </div>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>

<?php include BASE_PATH . '/resources/views/footer.blade.php'; ?>
