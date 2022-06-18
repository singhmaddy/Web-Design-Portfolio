<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin_Control_Panel</title>
</head>
	<style>
		
		body{
			margin: 0px;
			display: flex;
			justify-content: center;
			align-content: center;
			height: 70vh;
			padding-top: 20px;
		}
		
		form{
			padding:30px;
			border: 1px solid silver;
			border-radius: 20px;
		}
	
		div{
			margin: 20px 0;
			
		}
		
		input{
			width: 300px;
			height: 35px;
			padding-left: 10px;
			border-radius: 5px;
			border: 1px solid black;
		}
		
		button{
			padding: 10px 30px;
			border: none;
			outline: none;
			background-color: coral;
			color: white;
			border-radius: 4px;
			opacity: 0.8;
			cursor: pointer;
			transition: 0.2s;
			margin-left: 40px; 
		}
		
		button:hover{
			opacity: 1;
		}
	</style>

<body>
	<form method="post" action="homepage.php">
	
		<h1>Admin Control Panel</h1>
		
			<div>
		<input type="text" name="title" placeholder="Enter title" required>
			</div>
	
		
			<div>
		<input type="text" name="welcome" placeholder="Enter welcome message" required>
			</div>
		
			<div>
		<input type="text" name="picture" placeholder="Enter picture path" required>
			</div>
	
			<div>
		<input type="text" name="description" placeholder="Enter picture description" required>
		</div>	
			<div>	
		<button type="submit" name="submit">View Home Page for Changes </button>	
			</div>
	
	</form>
</body>
</html>