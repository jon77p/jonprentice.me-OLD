		<div class="img-container"></div>
        <!-- <div class="blur"></div> -->
      </div>
	</div>
	
	<!-- Site Footer -->
	<footer class="footer">
	  <div class="container">	
	    <p class="text-muted credit">Developed by <a href="https://jonprentice.me/about.html">Jon Prentice</a>.</p>
	  </div>
	</footer> <!-- ./footer -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
		$(".fadeIn").hide(0).each(function (i, el) {
		    const $el = $(el);
			$el.delay(400 + 400 * i).fadeIn(400);
		});
	</script>
  </body>
</html>
