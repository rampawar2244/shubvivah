 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
 
.pic-ctn {
  width: 50vw;
  height: 100px;
}

@keyframes display {
  0% {
    transform: translateX(200px);
    opacity: 0;
  }
  10% {
    transform: translateX(0);
    opacity: 1;
  }
  20% {
    transform: translateX(0);
    opacity: 1;
  }
  30% {
    transform: translateX(-200px);
    opacity: 0;
  }
  100% {
    transform: translateX(-200px);
    opacity: 0;
  }
}

.pic-ctn {
  position: relative;
  width: 50%;
    margin-top: 8vh;
}

.pic-ctn > img {
    position: absolute;
    top: 0;
    width: 35%;
    left: calc(100% - 100px);
    opacity: 0;
    animation: display 10s infinite;
}
@media screen  and (max-width: 600px){
    .pic-ctn {

    }
}
@media screen and (max-width: 600px) {
    .pic-ctn > img {
position: absolute;
    top: 0;
    width: 100%;
    left: calc(100% - 100px);
    opacity: 0;
    animation: display 10s infinite;
    }
}

img:nth-child(2) {
  animation-delay: 2s;
}
img:nth-child(3) {
  animation-delay: 4s;
}
img:nth-child(4) {
  animation-delay: 6s;
}
img:nth-child(5) {
  animation-delay: 8s;
}
     </style>
 </head>
 <body>
     <div>
 <div class="pic-ctn">
     
    <img src="images/g1.jpg" alt="" class="pic">
    <img src="images/g2.jpg" alt="" class="pic">
    <img src="images/g3.jpg" alt="" class="pic">
    <img src="images/g4.jpg" alt="" class="pic">
    <img src="images/g5.jpg" alt="" class="pic">
    <img src="images/g6.jpg" alt="" class="pic">
    <img src="images/g7.jpg" alt="" class="pic">
    <img src="images/g8.jpg" alt="" class="pic">
    <img src="images/g9.jpg" alt="" class="pic">
  
  </div> 
  </div>
 
  </section>
  
 </body>
 </html>