<?php include'header.php' ?>
<section class="banner__section">
   <div class="main__banner">
    <div class="banner__content">
      <h4>Job details</h4>
    </div>
    </div>
    <div class="banner__footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="banner__h">Carrier</h5>
                </div>
                <div class="col-md-6">
                    <div class="banner__links">
                        <ul>
                            <li>
                                <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="carriers.php">Carrier</a>
                            </li>
                            <li>Job details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="carrier_details">
    <div class="container">        
      <div class="main__header text-center">
          <h3>Job details</h3>
      </div>
      <h4 class="header__sec text-center">More Details of Position </h4>
      <div class="col-md-8 mx-auto job__card">
          <div class="job__head">
              <h4>Contract Manager</h4>
              <p>Admin, Riyadh</p>
          </div>
          <div class="job__des">
              <h4>Description :</h4>
              <p>To oversee the management, review, and development of client contracts, vendor contracts and trial contracts, as well as other internal businesses related contracts.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in commodo lorem. Aenean in purus odio. Curabitur facilisis hendrerit sapien, vel vestibulum turpis maximus vel. Etiam aliquam sit amet lectus dictum venenatis. Aliquam nulla metus, dignissim nec congue sit amet, lobortis non leo. Vivamus efficitur tempus sapien, eget fermentum est pretium a.</p>
              <h4>Requirements :</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in commodo lorem. Aenean in purus odio. Curabitur facilisis hendrerit sapien, vel vestibulum turpis maximus vel. Etiam aliquam sit amet lectus dictum venenatis. Aliquam nulla metus, dignissim nec congue sit amet, lobortis non leo. Vivamus efficitur tempus sapien, eget fermentum est pretium a.</p>
              <ul>
                  <li>Donec ultrices magna non nulla aliquam lacinia. Proin bibendum, leo nec iaculis egestas, dui odio fringilla mi, eu malesuada justo ipsum facilisis leo. In quis malesuada mi.</li>
                  <li> Pellentesque eleifend faucibus massa, vel cursus metus blandit sed.</li>
                  <li>Nam dignissim sapien et libero elementum auctor. </li>
                  <li>Maecenas feugiat arcu gravida nibh venenatis lacinia at rhoncus urna.</li>
              </ul>
              <h4>Hiring Policy :</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in commodo lorem. Aenean in purus odio. Curabitur facilisis hendrerit sapien, vel vestibulum turpis maximus vel. Etiam aliquam sit amet lectus dictum venenatis. Aliquam nulla metus, dignissim nec congue sit amet, lobortis non leo. Vivamus efficitur tempus sapien, eget fermentum est pretium a.</p>
          </div>
      </div>
      <div class="col-md-8 mx-auto">          
       <div class="main__header">
          <h3>Ready to apply?</h3>
      </div>
      </div>
      <div class="col-md-8 mx-auto job__card">
          <form id="contact" class="form sehati__form" method="post" action="" autocomplete="off">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-sm-10 mx-auto">
                    <div class="form-group">
                        <div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <input type="text" name="data[name]" placeholder="Full Name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-10 mx-auto">
                    <div class="form-group">
                        <div class="form-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <input type="email" name="data[email]" placeholder="E-mail" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-10 mx-auto">
                    <div class="form-group">
                       <div class="form-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <input type="number" name="data[contact]" placeholder="Contact Number" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-10 mx-auto">
                    <div class="form-group">
                        <div class="form-icon"><i class="fa fa-file-text" aria-hidden="true"></i></div>
                        <div class="custom-file">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            <input type="file" name="resume" class="custom-file-input" id="customFile">
                          </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-10 col-sm-10 mx-auto">
                    <div class="form-group">
                        <div class="form-icon"><i class="fa fa-comment" aria-hidden="true"></i></div>
                        <textarea class="form-control" name="data[msg]" placeholder="Your Message" rows="6"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-10 col-sm-10 mx-auto">
                    <button class="btn btn-read">Submit Application</button>
                </div>
            </div>
        </form>
      </div>
    </div>
</section>
<?php include'footer.php' ?>