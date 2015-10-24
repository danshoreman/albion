
<footer class="page-footer">
	<div class="row">
		<div class="small-12 medium-6 large-5 columns footer-map">
			<p><strong>Find used caravans in Yorkshire & Bradford</strong></p>
			<p class="located">Albion Caravans is located within a short drive of Bradford or Leeds. Use postcode BD10 9SX in your satnav of view our <a href="/contact/">contact page</a> for our full address.</p>
			<?php /* echo do_shortcode('[pw_map address="BD10 9SX"]'); */ ?>
			<div id="map-canvas"></div>
		</div>
		<div class="small-12 medium-6 large-5 columns footer-form">
			<p><strong>Albion Caravans newsletter sign up</strong></p>
			<p>For up to date caravan and caravan accessories news in Leeds and Bradford enter your name and email address below to go on our mailing list</p>
			
			<form action="http://albioncaravans.createsend.com/t/j/s/nydhld/" method="post" id="subForm">
			    <div class="field-wrap">
			        <label for="fieldName">Name</label>
			        <input id="fieldName" name="cm-name" type="text" required />
			    </div>
			    <div class="field-wrap">
			        <label for="fieldEmail">Email Address</label>
			        <input id="fieldEmail" name="cm-nydhld-nydhld" type="email" required />
			    </div>
			    <div class="submit-wrap">
			        <button type="submit" id="submitBtn">Subscribe</button>
			    </div>
			</form>

		</div>
	</div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60333061-1', 'auto');
  ga('send', 'pageview');

</script>


<?php wp_footer(); ?>

</body>
</html>