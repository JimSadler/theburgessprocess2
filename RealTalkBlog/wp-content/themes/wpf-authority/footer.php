<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="footer_top">
          <div class="row">

      <?php dynamic_sidebar('footer-widgets'); ?>
      
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="footer_bottom">
      <?php get_template_part('templates/footer-social');?>
  
  <ul class="foot-contact"style="list-style: none; font-size: 14px">
                    
                      <li class="col-lg-12 copyright" style="text-align: center;">
                          <p class="copyright fa fa-copyright "> 2016 Martha Burgess Novak</p>
                      </li>
                      
                  </ul>
      
        </div>
      </div>
  
  
  <?php 
    if ( is_home() || is_front_page() ):
      get_template_part('templates/credit');
    endif;	
  ?>
  
    </div>
  </div>
 <div class="container-fluid me-tag" style="margin-bottom: 1em;">
        <a href="https://www.jsdevelopment.tech" target="_blank"><i class="fa fa-cog fa-spin fa-lg " style="color: cornsilk;" aria-hidden="true"></i>  Website developed by JS Development</a>
    </div>
</footer>
<!-- End footer -->


<?php wp_footer();?>
</body>
</html>
   





<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>