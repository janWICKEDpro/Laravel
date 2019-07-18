<style type="text/css">
		body{
	margin: 0;
	padding: 0;
	background-color: lightgrey;
	height: 100vh;
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}

.loginbox {
	width: 320px;
	height: 460px;
	border-radius: 25px;
	background: #000;
	color: white;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
	box-shadow: 4px 4px 4px 4px;
	margin-top: 30px;
}

.avatar{
	width: 110px;
	height: 110px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}

h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}

.loginbox.p{
	margin: o;
	padding: o;
	font-weight: bold;
	color: black;

}

.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

.loginbox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: red;
	color: white;
	font-size: 18px;
	border-radius: 20px;
}
 
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: yellow ;
	color: #000;
	transition: all 0.3s ease-in;
}

.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}

.loginbox a:hover
{
	color: #ffc107;
}
	</style>