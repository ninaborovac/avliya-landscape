
<footer class="text-right">
        <strong>
        <p style="color:#d4d6d8">
        AvliYa Landscape d.o.o.
        <br>
        Adresa: Grbavica 25
        <br>
        Telefon: + 387 (0)33 55 77 11
        <br>
        E-mail: avliYalandscape@gmail.com
        </strong>
        </p>



</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  	$( document ).ready(function() {
      	let nav = document.getElementById('nav')
	  	var link = window.location.href.split('/')
	  	console.log(nav, link[link.length - 1]);

	  	switch(link[link.length - 1]) {
	  		case '':
	  			nav.children[0].className = 'active';
	  			break;
	  		case 'o_nama':
	  			nav.children[1].className = 'active';
	  			break;
	  		case 'projekti':
	  			nav.children[2].className = 'active';
	  			break;
	  		case 'kontakt':
	  			nav.children[3].className = 'active';
	  			break;
			default:
				console.log('nema tog url-a');
	  	}
	});


  </script>

</body>
</html>