<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="main">
	<div class="header">
		<div class="logo_wrapper">
			<a href="index.php">Damoz.ga</a>
		</div>
		<div class="text_wrapper">
			ეს რაღაცა განკუთვნილია იმათთვის ვინ წერს მუსიკას ლექსებს ან უბრალოდ გარითმვა უყვარს...
			თქვენ შეგიძლიათ ჩაწეროთ თქვენთვის სასურველი სიტყვა და ამოგიგდებთ მსგავსი დაბოლოებით სიტყვას ან სიტყვებს.
			თქვენც შეგიძლიათ დაამატოთ სიტყვები, რათა უფრო მრავალი რითმა მოიძებნოს ამით დაეხმარებით სხვებს და შესაბამისად სხვებიც დაგეხმარებიან თქვენ...
		</div>
		<div class="counter_wrapper">
			<?php include 'counter.php';?>
		</div>
		<div class="add_word_button_wrapper">
			<a href="index.php">მთავარი გვერდი</a>
		</div>
	</div>
	<div class="form">
		<div class="add_wrapper">
			<form action="add.php" method="POST" name="add">
				<div class="input_word">
					<input type="text" name="name" placeholder="თქვენი სახელი" id="input_word_1">
				</div>
				<div class="input_word">	
					<input type="email" name="email" placeholder="თქვენი ელ-ფოსტა"  id="input_word_1">
				</div>
				<div class="input_word">	
					<input type="text" name="word" placeholder="შეიყვანეთ სიტყვა"  id="input_word">
				</div>
				<div class="input_submit">
					<input type="submit" name="submit" value="დაამატე!" id="input_submit">
				</div>
			</form>
		</div>
<?php
	include 'db.php';

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$word = $_POST['word'];
		$exist = "SELECT word FROM words where word = '$word'";
		$check_exist = mysqli_query($conn,$exist);

		if(mysqli_num_rows($check_exist)>0){

			echo "<script>
				alert('ესეთი სიტყვა უკვე არსებობს ბაზაში!');
			
			</script>";
				exit();
			
		}

		if(!empty($word)){
			$query_3 = "INSERT INTO words(word,name,email) VALUES ('$word','$name','$email')";
			$run_3 	 = mysqli_query($conn,$query_3);
			echo 
			'<script> 
				alert("თქვენი სიტყვა დაემატა!");
				exit();
			</script>';
		}else{
			echo 
			'<script> 
				alert("შეიყვანეთ სიტყვა!");
				exit();
			</script>';
		}
	}

?>
	</div>
	<?php include 'footer.php';?>
</div>
</body>
</html>