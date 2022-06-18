<?php 

	$title="My Website";
	$welcome="Welcome Here";
	$picture="tanzania-classic-safari1.png";
	$description="Description Box!!!!";
	
		if(isset($_POST['submit'])){
			
			$title=$_POST['title'];
			$welcome=$_POST['welcome'];
			$picture=$_POST['picture'];
			$description=$_POST['description'];
			
		}
?>



<!DOCTYPE html>

<html>

<head>

<title>Main_Page</title>
<style>

		*{

		margin: 0;

		padding: 0;

		font-family: sans-serif;

		box-sizing: border-box;

		}

		header{
		height: 10vh;
		background-color:black;
		}
	
	

		.section{
		display: flex;
		height: 80vh;
		}

		aside{
		flex: 0.25;
		border-right: 1px solid;
		padding-top: 40px;
		}

		aside img{
		width: 100%;
		height: 400px;
		object-fit: contain;
		}

		aside p{
		text-align: center;
		padding: 20px;
		} 
	
		main{
		flex: 0.75;
		display: flex;
		flex-direction: column; align-items: center;
		justify-content: center;
		}

		main h1{
		margin-bottom: 30px; 
		font-size: 45px;
		}
	
		footer{
		height: 10vh;
		background-color: black;
		}

		header h1{
		text-align: left;
		color: coral;
		line-height: 10vh;
		}
		
		

		footer h4{
		text-align: center;
		color: coral;
		line-height: 10vh;
		}

</style>

</head>

<body>

	<header>

	<h1>Resfeber Safari</h1>
		
		
	</header>

	<div class="section">

	<aside>

	<img src="<?php echo $picture; ?>"> <p><?php echo $description; ?></p>

	</aside>

	<main>

	<h1><?php echo $title; ?></h1>
	 <p><?php echo $welcome; ?></p>
	 </main>

	</div> 

	<footer>

	<h4>Visit us at Resfeber Safari &#169;</h4>

	</footer>
	</body> 
	</html>

