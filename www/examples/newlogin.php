<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Travel App</title>
<script><link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script>

$(document).ready(function() {
		    /* capture the submit button on the loginform and look the user up the database */
		    $('#loginform').submit(function() {

	     var emailname ="email";
	     var emailval =$("#loginform :input[name='" + emailname + "']"); 
	     var passname ="password";
             var passval =$("#loginform :input[name='" + passname + "']");
             var URL="http://websys3.stern.nyu.edu/websysF14UB/websysF14UB3/processlogin.php?email=" + emailval + "&password=" + passval;
			     $.getJSON(URL, function() {
		          	 console.log(data); 
                                 $.each(data['users'], function(index, value) {
					  $('#page2').append( value['user']['FirstName'] + " " + value['user']['LastName'] + "Logged In");
					  $('#page2').append("<br>");
					};



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
