<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: montserrat;
}
nav{
  text-decoration: none;
  background: #ffa500;
  height: 80px;
  width: 100%;
}
label.logo{
  
  font-size: 35px;
    line-height: 15px;
    padding: -2px;
    margin-left: 56px;
    font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: 	#808080;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #fff;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
section{
  /* background: url(bg1.jpg) no-repeat; */
  background-size: cover;
  height: calc(100vh - 80px);
}
    </style>
</head>
<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
     
      <!-- <label class="logo">
      <img src="images/icons/parshuram2.png" alt="LOGO">
</label> -->
      <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a  class="active" href="about.php">About</a></li>
        <!-- <li><a href="#">Services</a></li> -->
        <li><a class="active" href="contact.php">Contact</a></li>
		<li><a class="active" href="logout.php">Logout</a></li>
		<li><a class="active" href="profile.php">Profile</a></li>
        <!-- <li><a href="#">Feedback</a></li> -->
      </ul>
    </nav>
</body>
</html>