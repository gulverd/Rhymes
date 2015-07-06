<?php 
					include 'db.php';	

					if(isset($_GET['submit'])){
						$word = $_GET['search'];
						$last3 = mb_substr($word,-3,mb_strlen($word),"UTF-8");
						$sql  = "SELECT word FROM words where word like '%$last3'";
						$run  = mysqli_query($conn,$sql);
						echo '<span style="color:red">'.$word.'</span>'.' '.'-';

						if(empty($word)){
								echo 'შეიყვანეთ სიტყვა!';
							}else{	
						while($row = mysqli_fetch_array($run)){
							$w  = $row[0];
							echo ' '.mb_substr($w,0,mb_strlen($w),"UTF-8").','.' ';


														
							}
						}

					}
				?>