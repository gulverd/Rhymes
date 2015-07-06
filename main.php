	<form action="index.php" name="form" method="GET">
			<div class="search_wrapper">
				<input type="text" name="search" onkeypress="return makeGeo(this,event);" placeholder="ჩაწერეთ სასურველი სიტყვა..." id="search_input">
			</div>
			<div class="submit_wrapper">
				<input type="submit" name="submit" value="დადასტურება" id="submit">
			</div>
		</form>
		<div class="output">
			<p id="pp">
				<?php include 'doit.php';?>
			</p>
		</div>

			<input checked="checked" id="geoKeys" type="checkbox" display="none">