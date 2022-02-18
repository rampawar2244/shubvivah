 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Document</title>
     <style>
         *{
             margin: 0;
             padding: 0;
             box-sizing: border-box;
         }
         .topnav {
  overflow: hidden;
  background-color:#b51a1a;
}

.topnav a {
  float: left;
  display: block;
   color: #fff;
  text-align: center;
  
  list-style: none;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
 color: #fff;
}

.topnav a.active {
 
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active" style="text-decoration: none;">Shubh Vivah</a>
  <a style="text-decoration: none;" href="login.php"  >Login</a>
  <a style="text-decoration: none;" href="register.php"  >Registration</a></a>
  <a href="#"><select name="" id="">
    <option value=""></option>
    <option value="">Marathi</option>
    <option value="">Hindi</option>
    </select>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
 

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
 </body>
 </html>