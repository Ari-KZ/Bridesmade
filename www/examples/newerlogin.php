
<html>
<head>

<title>Travel App</title>
<link rel="stylesheet" type="text/css" href="jquery-mobile/style1.css">
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script>

$(document).ready(function() {
		    /* capture the submit button on the loginform and look the user up the database */
		    $('#loginform').submit(function() {
					     var data = $(this).serializeArray();

                                             var URL="http://websys3.stern.nyu.edu/websysF14UB/websysF14UB3/processlogin.php";
					     $.getJSON(URL, data,  function(mydata) {
							 console.log(mydata);

						       });
					     });

</script>

</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Fernweh</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview" class="mainmenu">
			<li><a href="#page2">Login</a></li>
            <li> </li>
			
		</ul>		
	</div>
	
</div>

<div data-role="page" id="page2">
	<div data-role="header">
		<h1>Fernweh</h1>
	</div>
<div data-role="content">	
 <form id="loginform" ACTION=processlogin.php method="get">
Email:<input type="email" required name="email">
Password:<form><input type="password" required name ="password">
        <input type="submit" value="Login">
         </form>
	</div>
	
</div>

<div data-role="page" id="page3">
	<div data-role="header">
	</div>
<div data-role="content">	
</div>


</body>
</html>
