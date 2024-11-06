<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my nav </title>
</head>
<body>
    <style>
        *{
    box-sizing: border-box;
    margin: 0%;
}
         
body {
    font-family: Cursive;
    padding: 10px;
    background-color: gray;
}
  
.header {
    padding: 10px;
    background: #000000;
    text-align: left;
    display: flex;
    align-items: center;
    justify-content: center;
}
.CBarreNav {
    overflow: hidden;
    background-color: #000000;
    
}
.CBarreNav a:hover {
  background-color: #ddd;
  color: black;
}
  
.CBarreNav a {
    float: left;
    display: block;
    color: #ffffff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.5s;
}
    </style>

<div class="header">
        
        
    </div>
      
    <div class="CBarreNav">
    <div id="myNav" class="overlay">
          <div class="overlay-menu">
            <a href="home.html" target="_blank">Home</a>
            <a href="#O">A</a>
            <a href="directYOU.html" target="_blank">B</a>
            <a href="login.php" target="_blank" style="float: right;">LOGOUT</a>
          </div>
        </div>
        </div>
</body>
</html>