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
	<script>
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('New message to ' + recipient)
		  modal.find('.modal-body input').val(recipient)
		})
	</script>
  </body>
</html>
