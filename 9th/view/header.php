<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
	a{
		text-decoration:none;
		background-color: #71a0db;
		color: white;
	}
	a :hover{
		text-decoration: none;
	}
	ul{
		margin-bottom: -10px;
	}
	.btn1{
		text-decoration:none;
		margin: 0 0 10px 10px;
		background-color: #71a0db;
		padding: 10px 10px;
		border-radius: 5px;
		color: white;
	}
	/* .btn1{
	 	background-color: red;
	}
	.btn2{
	 	background-color: red;
	}
	.btn3{
	 	background-color: red;
	}
	.btn4{
	 	background-color: red;
	} */
body {
  font-family: Arial, Helvetica, sans-serif;
}


.navbar .drop_a{
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 10px 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  font-family: inherit;
  margin: 0 0 10px 10px;
  background-color: #71a0db;
}
.dropdown{
	margin-top: -10px;
}

 a:hover, .dropdown:hover .dropbtn {
  background-color: red;
  text-decoration: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  display: block;
  text-align: left;
}

.dropdown-content a .drop_a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block; 
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>
<body>
	<h1 align="center">WellCome Home Page</h1>
	<h3 align="center">Parsonal Wallet Maneger</h3>
	<hr>
	<ul style=" list-style:none; display:flex;">
		<li ><a class="btn1" href="index.php">Home</a></li>
		<li><a class="btn1" href="index.php?view=income">Income</a></li>
		<li><a class="btn1" href="index.php?view=income_category">Income_Category</a></li>
		<li><a class="btn1" href="index.php?view=expense_category">Expense Category</a></li>
		<li><a class="btn1" href="index.php?view=income_table">Income_Table</a></li>
		<div class="dropdown">
			<button class="dropbtn">Report 
			    <i class="fa fa-caret-down" aria-hidden="true"></i>
			</button>
		    <div class="dropdown-content">
		      <a class="drop_a" href="index.php?view=income_repot">Income Table</a>
		      <a class="drop_a" href="#">Expence Category</a>
		    </div>
		  </div> 	
	</ul>
	<hr> 