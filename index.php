<!--Get The Header Of The Pge  -->
	<?php 
	include "header.php";
	?>

<!--This is the LoGo Of The initial Page -->
<form method="POST" action="search.php">
	<div class="logo-container">
		<div class="content">
		 <div class="box"><p style="color: white">READ<br> MORE<br> BOOKS</p>
              <input type="search" name="seraching" placeholder="FIND YOUR BOOK HERE">
              <button onclick="goo()">SEARCH</button>
		 </div>
		 </div>
	
	</div>
</form>
<script >
	function goo(){
		window.location.href="book.php"
	}
</script>
	