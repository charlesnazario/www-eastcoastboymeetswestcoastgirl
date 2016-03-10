		
		<?php global $redux_demo; ?>

		<!--copyright-->
		<?php include( get_template_directory() . '/include/footer/copyright.php'); ?>

	</div>
	<!--end nicdark_site_fullwidth-->

</div>
<!--end nicdark_site-->


<!--start preloader-->
<script type="text/javascript">
    jQuery(window).load(function() { jQuery(".nicdark_preloader").delay(1000).fadeOut("slow"); })
</script>
<!--end preloader-->

<!--insert here your google analytics code-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72418405-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>
	
</body>  
</html>
