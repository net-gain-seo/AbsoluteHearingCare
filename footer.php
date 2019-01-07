</main>

<footer class="container-fluid site-footer">
  <div class="container">
    <div class="row padding0 phone">
        <a href="tel:17054504440">Hearing Questions? 705-450-4440</a>
    </div>
  </div>
    <div class="container flex-footer paddingB40">
        <div class="f-item phone-assoc">
          <div class="social">
              <a href="https://www.facebook.com/AbsoluteHearingCare/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebookicon.png" width="55px" alt=""></a>
              <!---a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twittericon.png" width="55px" alt=""></a>
              <a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedinicon.png" width="55px" alt=""></a---->
          </div>
        </div>
        <div class="f-item ">
          <h4>Business hours</h4>
          Monday - Friday 8:30am to 4:30pm<br/>
          Saturday by Appointment<br/>
          Sunday Closed
        </div>
        <div class="f-item">
          <h4>Absolute Hearing Care</h4>
          153 Great Northern Rd., Unit 5,<br/>
          Sault Ste Marie, ON, P6B 4Y9
        </div>
    </div>
    <div class="container">
      <div class="row padding0">
        <div class="col-lg-6 col-md-12 copyright">Copyright &copy; <?php echo date("Y"); ?> Absolute Hearing Care. All rights reserved.</div>

        <div class="col-lg-6 col-md-12 netgain">Website Designed by <a href="http://www.netgainseo.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/netgain.png" alt=""></a></div>
      </div>
    </div>
</footer>
<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <?php echo do_shortcode( '[contact-form-7 id="232" title="Contact Page"]' ); ?>
            </div>
        </div>
    </div>
</div>
<a href="#" class="scrollToTop">&uarr;</a>
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<?php wp_footer(); ?>
</body>
</html>
