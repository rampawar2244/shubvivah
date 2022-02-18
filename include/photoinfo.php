<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <style>
         .quick-search{
   column-count: 2;
   padding-bottom: 45px;
   position: relative;
   top: 30px;
 }
.row1{
float: left;
margin-left: 195px;
 }
 .quick-search .centered {
  position: absolute;
  left: 369px;
  margin: -17px;
  margin-top: 15px;
  color: black;
}
 .col img{
   width: 390px;
   border: 10px solid;
    border-color: darkorange;
 }
 .row2{
   margin-inline: 25px;
 }
@media screen and (max-width: 600px){
  .quick-search{
    column-count: 2;
  }
}
@media screen and (max-width: 600px){
    .row1{
        float: none;
    width: 90%;
    margin-left: 2px;
    }
    .row2{
      margin-inline: 8px;
    }
}
@media screen and (max-width: 600px){
    .col img{
        width: 100%;
    }
}
 
    </style>
</head>
<body>
<div class="quick-search">
  <div class="row1">
    <div class="col">
  <img src="images/h5.jpg" alt="">
 
</div>
<br>
  </div>
  <div class="row2">
    <div class="col">
  <img src="images/h6.jpg" alt="">
  </div>
  </div>
</div>
</body>
</html>