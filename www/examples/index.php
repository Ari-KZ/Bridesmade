<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link rel="stylesheet" type="text/css" href="file:///C|/Users/exk200/Documents/NYU Fa14/Web App Design/Fernweh/includes/style1.css">
<link href="file:///C|/Users/exk200/Documents/NYU Fa14/Web App Design/Fernweh/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="file:///C|/Users/exk200/Documents/NYU Fa14/Web App Design/Fernweh/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="file:///C|/Users/exk200/Documents/NYU Fa14/Web App Design/Fernweh/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Fernweh</h1>
        <input type="search" value="Search for Trips">
	</div>
    
	<div data-role="content">	
		<ul data-role="listview" class="mainmenu">
			<li><a href="#page2">My Trips</a></li>
            <li><a href="#page3">Create Trip</a></li>
            <li><a href="#page4">Account</a></li>
			<li><a href="#page5">Settings</a></li>
            <input type="button" value="Log Out">
		</ul>		
	</div>
	
</div>

<div data-role="page" id="page2">
	<div data-role="header">
    	<a href="#page" data-role="button" data-icon="arrow-l">Back</a>
   		<h1>My Trips</h1>
	</div>
	<div data-role="content">	
				
	</div>
	
</div>

<div data-role="page" id="page3">
	<div data-role="header">
    <a href="#page" data-role="button" data-icon="arrow-l">Back</a>
		<h1>Create Trip</h1>
	</div>
	<div data-role="content">	
				
	</div>
	
	</div>
</div>

<div data-role="page" id="page4">
	<div data-role="header">
    <a href="#page" data-role="button" data-icon="arrow-l">Back</a>
		<h1>Account</h1>
	</div>
	<div data-role="content">	
				
	</div>
	
	</div>
</div>

<div data-role="page" id="page5">
  <div data-role="header">
  <a href="#page" data-role="button" data-icon="arrow-l">Back</a>
    <h1>Settings</h1>
  </div>
  <div data-role="content"></div>
  
  </div>
</div>

</div>




</body>
</html>
