<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="geo.js"></script>
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
			<a href="add.php">დაამატე სიტყვა</a>
		</div>
	</div>
	<?php //include 'func.php';?>
	<div class="form">
		<?php include 'main.php';?>
	</div>
	<?php include 'footer.php';?>
</div>
</body>
</html>
