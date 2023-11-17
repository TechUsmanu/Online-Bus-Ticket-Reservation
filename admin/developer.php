<?php require ("session.php")?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI." name="description" />
    <meta content="Semantic-UI, Theme, Design, Template" name="keywords" />
    <meta content="PPType" name="author" />
    <meta content="#ffffff" name="theme-color" />
    <title>About Developer</title>
    <link href="static/dist/semantic-ui/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="static/stylesheets/default.css" rel="stylesheet" type="text/css" />
    <link href="static/stylesheets/pandoc-code-highlight.css" rel="stylesheet" type="text/css" />
    <script src="static/dist/jquery/jquery.min.js"></script>
	<script src="admin.js"></script>
  <style>



</style>
  </head>
  <body>

    <div class="ui inverted huge borderless fixed fluid menu">
      <a class="header item">BUS TICKET RESERVATION SYSTEM</a>
      <div class="right menu">
        <div class="item">
          <div class="ui small input">
		  <form>
            <input placeholder="Search order.." name="search" />
			</form>
          </div>
        </div>
        <a class="item" href="logout.php">Log out</a>
      </div>
    </div>
	
    <div class="ui grid">
      <div class="row">
        <div class="column" id="sidebar">
          <div class="ui secondary vertical fluid menu">
            <a class="item" href="bookings.php">Bookings</a><a class="item " href="transactions.php">Transactions</a><a class=" item" href="travelclass.php">Traveling Classes</a><a class="item">Export</a>
			
          </div>
        </div>
		
    <style type="text/css">
      body {
        display: relative;
      }
      
      #sidebar {
        position: fixed;
        top: 51.8px;
        left: 0;
        bottom: 0;
        width: 18%;
        background-color: #f5f5f5;
        padding: 0px;
      }
      #sidebar .ui.menu {
        margin: 2em 0 0;
        font-size: 16px;
      }
      #sidebar .ui.menu > a.item {
        color: #337ab7;
        border-radius: 0 !important;
      }
      #sidebar .ui.menu > a.item.active {
        background-color: #337ab7;
        color: white;
        border: none !important;
      }
      #sidebar .ui.menu > a.item:hover {
        background-color: #4f93ce;
        color: white;
      }
      
      #content {
        margin-left: 19%;
        width: 81%;
        margin-top: 3em;
        padding-left: 3em;
        float: left;
      }
      #content > .ui.grid {
        padding-right: 4em;
        padding-bottom: 3em;
      }
      #content h1 {
        font-size: 36px;
      }
      #content .ui.divider:not(.hidden) {
        margin: 0;
      }
      #content table.ui.table {
        border: none;
      }
      #content table.ui.table thead th {
        border-bottom: 2px solid #eee !important;
      }

      body{
background-color:f1f1f1;
}
a{
	cursor:pointer;

}

body {
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
  color: #333;
}

.ui.text.container {
  background-color: #fff; /* Default white background color */
}

/* Set the button at the top right corner */
.mode-toggle {
  position: fixed;
  top: 10px;
  right: 10px;
  z-index: 9999;
}

/* Add padding to the header to avoid overlap */
header {
  padding-top: 50px;
}

body.dark-mode {
  background-color: #333; /* Change the background color of all elements when in dark mode */
  color: #f2f2f2; /* Change the text color of all elements when in dark mode */
}

.dark-mode .ui.text.container {
  background-color: #000; /* Change container background to black in dark mode */
}


    </style>
    

    <script>
 function toggleMode() {
  const body = document.body;
  const button = document.querySelector('.mode-toggle');
  body.classList.toggle('dark-mode');

  // Update button text based on the current mode
  if (body.classList.contains('dark-mode')) {
    button.textContent = 'Light Mode';
  } else {
    button.textContent = 'Dark Mode';
  }

  // Save the user preference in Local Storage (optional).
  const isDarkMode = body.classList.contains('dark-mode');
  localStorage.setItem('isDarkMode', isDarkMode);
}

// Check the user's preference on page load and apply the mode accordingly (optional).
document.addEventListener('DOMContentLoaded', function() {
  const isDarkMode = localStorage.getItem('isDarkMode');
  if (isDarkMode === 'true') {
    document.body.classList.add('dark-mode');
    document.querySelector('.mode-toggle').textContent = 'Light Mode';
  }
});





  </script>

  </body>
</html>
