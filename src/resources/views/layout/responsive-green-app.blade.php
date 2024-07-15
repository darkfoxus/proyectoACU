<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

.sidebar a.icon {
    display: none;
    }

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
   /* code to handle the hamburger style */
  .sidebar a {
    text-align: center;
    /*float: none; */
    padding: 10px;
  }
  .sidebar a:not(:first-child) {display: none;}
  .sidebar a.icon {
    float: right;
    display: block;
  }
    
  .sidebar.responsive .icon {
    position: absolute;
    right: 0;
    bottom:0;
  }
  .sidebar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }  
  .sidebar {
  position: fixed;
  bottom: 0;
  }
  
  /* code to handle the hamburger style */
  
  
}
</style>
</head>
<body>

<div class="sidebar" id = "mySidevar">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="tickHamburgerMenu()">&#9776;</a>
</div>

<div class="content"> 
  <h2>Responsive Sidebar Example</h2>
  <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
  <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
  @yield('content')
  
</div>

<script>
function tickHamburgerMenu() {
  var x = document.getElementById("mySidevar");
  if (x.className === "sidebar") {
    x.className += " responsive";
  } else {
    x.className = "sidebar";
  }
}
</script>

</body>
</html>