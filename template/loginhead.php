<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <style>
        * {
	margin: 0px;
	padding: 0px;
}
body {
	font-size: 120%;
	background-image: url("bootstrap/img/bg.jpeg");
	background-repeat: no-repeat;
	background-size: cover;
}

.header {
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #ff613a;
	text-align: center;
	border: 1px solid #ff613a;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	background: rgba(255,255,255,0.9);
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #ff613a;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
</style>
</head>
<body>