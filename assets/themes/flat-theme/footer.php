<?php if(!is_page()) { ?>
</div><!--/#primary-->
</div><!--/.col-lg-12-->
</div><!--/.row-->
</div><!--/.container.-->
</section><!--/#main-->
<?php } ?>
<?php
$fb = "https://id-id.facebook.com/PT-Perkebunan-Nusantara-I-Persero-117655771626484/";
$tw = "https://twitter.com/humasptpn1/";
$gl = "https://plus.google.com/107778668701693918537/";
$base = site_url();
?>
<section id="bottom" class="wet-asphalt">
  <div class="container">
    <div class="row">
        <?php //dynamic_sidebar('bottom'); ?>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <ul>
            <li>
              <a target="_blank" href="<?php echo $fb;?>">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x icon-background4"></i>
                  <i class="fa fa-facebook fa-stack-1x"></i>
                </span>
              </a>
            </li>
            <li>
              <a target="_blank" href="<?php echo $tw;?>">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x icon-background4"></i>
                  <i class="fa fa-twitter fa-stack-1x"></i>
                </span>
              </a>
            </li>
            <li>
              <a target="_blank" href="<?php echo $gl;?>">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x icon-background4"></i>
                  <i class="fa fa-google-plus fa-stack-1x"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
        <div id="wbs" class="col-sm-4"><a target="_blank" href="http://wbs.ptpn1.co.id"><img src="<?php echo $base;?>/assets/themes/flat-theme/assets/images/img/wbs.png"/></a></div>
    </div>
    <div id="bottom-menu" class="row">
      <div class="col-sm-12">
        <ul>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'container'  => false,
          'menu_class' => 'bottom-menu',
          'items_wrap'=>'%3$s'
          )
        );
        ?>
      </ul>
    </div>
  </div>
  </div>
</section>

<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php show_footer();?>
        <ul class="pull-right">
          <li>
            <a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a><!--#gototop-->
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer><!--/#footer-->


  <?php if(zee_option('zee_theme_layout')=='boxed'){ ?>
    </div><!--/#boxed-->
  <?php } ?>

<?php google_analytics();?>

<?php wp_footer(); ?>

</body>
</html>
