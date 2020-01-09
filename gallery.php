<?php include'header.php' ?>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.css'>
<section class="banner__section">
   <div class="main__banner">
    <div class="banner__content">
      <h4>Events Gallery</h4>
    </div>
    </div>
    <div class="banner__footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="banner__h">Events Gallery</h5>
                </div>
                <div class="col-md-6">
                    <div class="banner__links">
                        <ul>
                            <li>
                                <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li>Events Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery">
    <div class="container">
        <ul class="main-group filters-button-group gallery__grid">  
                <li class="">
                    <a class="is-checked" data-filter="*">All</a>
                </li>                
                <li class="">
                    <a class="" data-filter=".Events">Events</a>
                </li>
                <li class="">
                    <a class="" data-filter=".News">News</a>
                </li>
        </ul>
        <div class="grid">
            <div class="element-item News" data-category="transition">                   
               <div class="gallery__item">
                   <div id="video1">
                      <a href="images/news2.png" data-sub-html="<h4>Event</h4><p>Mr. Ismail Algamdi, Sehati Chairman leading the 1st Board Members Meeting.</p>" >  
                       <div class="gallery-overly">
                            <div class="g-cont">
                                <p>Mr. Ismail Algamdi, Sehati Chairman leading the 1st Board Members Meeting</p>
                            </div>
                        </div>             
                       <img src="images/news2.png" class="video-thumb">  
                      </a> 
                  </div>
               </div>       
            </div>  
              <div class="element-item Events" data-category="transition">                   
               <div class="gallery__item">
                   <div id="video1">
                      <a href="images/news1.png" data-sub-html="<h4>Event</h4><p>X-CCHI General Secretary, Mr. Alhassan responding to Payers & Providers conference audience.</p>" >  
                       <div class="gallery-overly">
                            <div class="g-cont">
                                <p>X-CCHI General Secretary, Mr. Alhassan responding to Payers & Providers conference audience</p>
                            </div>
                        </div>             
                       <img src="images/news1.png" class="video-thumb">  
                      </a> 
                  </div>
               </div>       
            </div>  
              <div class="element-item News" data-category="transition">                   
               <div class="gallery__item">
                   <div id="video1">
                      <a href="images/news3.png" data-sub-html="<h4>Event</h4><p>Mr. Ismail Algamdi, Sehati Chairman leading the 1st Board Members Meeting.</p>" >  
                       <div class="gallery-overly">
                            <div class="g-cont">
                                <p>Mr. Ismail Algamdi, Sehati Chairman leading the 1st Board Members Meeting</p>
                            </div>
                        </div>             
                       <img src="images/news3.png" class="video-thumb">  
                      </a> 
                  </div>
               </div>       
            </div>  
              <div class="element-item Events" data-category="transition">                   
               <div class="gallery__item">
                   <div id="video1">
                      <a href="images/about1.png" data-sub-html="<h4>Event</h4><p>Mr. Ismail Algamdi, Sehati Chairman leading the 1st Board Members Meeting.</p>" >  
                       <div class="gallery-overly">
                            <div class="g-cont">
                                <p>Mr. Ismail Algamdi, Sehati Chairman leading the 1st Board Members Meeting</p>
                            </div>
                        </div>             
                       <img src="images/about1.png" class="video-thumb">  
                      </a> 
                  </div>
               </div>       
            </div> 
              <div class="element-item News" data-category="transition">                   
               <div class="gallery__item">
                   <div id="video1">
                      <a href="images/about2.png" data-sub-html="<h4>Event</h4><p>Mr. Ismail Algamdi, Sehati Chairman leading the 1st Board Members Meeting.</p>" >  
                       <div class="gallery-overly">
                            <div class="g-cont">
                                <p>Mr. Ismail Algamdi, Sehati Chairman leading the 1st Board Members Meeting</p>
                            </div>
                        </div>             
                       <img src="images/about2.png" class="video-thumb">  
                      </a> 
                  </div>
               </div>       
            </div>           

            </div>
    </div>
</section>
<?php include'footer.php' ?>
<script>
$('#video1,#video2,#video3,#video4,#video5,#video6,#video7,#video8').lightGallery();
</script>