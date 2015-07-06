<?php

	include 'db.php';
	
				$result = mysqli_query($conn,"SELECT word FROM words");
				$num_rows = mysqli_num_rows($result);

				echo 'ამჟამად საიტზე არის:'.' '.'<span style="color:red">'.$num_rows.'</span>'.' '.'სიტყვა!';

		?>