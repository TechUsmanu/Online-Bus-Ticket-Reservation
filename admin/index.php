<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Redirecting you...</title>

<link rel="stylesheet" type="text/css" href="static/dist/semantic-ui/semantic.min.css">
<script src="static/dist/jquery/jquery.min.js"> </script>
<script src="static/dist/semantic-ui/semantic.min.js"></script>

<style>

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

.dark-mode {
  background-color: #333;
  color: #f2f2f2;
}

.dark-mode .ui.text.container {
  background-color: #000; /* Change container background to black in dark mode */
}

.dark-mode body {
  background-color: #333; /* Change the background color of all elements when in dark mode */
  color: #f2f2f2; /* Change the text color of all elements when in dark mode */
}


</style>
</head>
<body>
<button class="mode-toggle" onclick="toggleMode()">Toggle Mode</button>

    <div class="ui inverted huge borderless fixed fluid menu">
      <a class="header item">BUS TICKET RESERVATION SYSTEM</a>
    </div><br>
<div class="ui text container" style="margin-top:130px">
<div id="err001" class="ui success icon message">
<i class="notched circle loading icon"></i>
<div class="content">
<div class="header">We are redirecting you....</div>
<p>If the page fails to load, you can load <a href="login.html">Manually</a>.</p>
</div>
</div>
</div>
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

<script>
setTimeout(function(){location.href="login.php"},4000);
</script>
</body>
</html>