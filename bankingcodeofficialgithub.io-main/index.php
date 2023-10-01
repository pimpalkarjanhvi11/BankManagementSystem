<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='homepage.css'>

    <style>
.container {
  position: relative;
  width: 40%;
  top: 40%;
  left:3%;
}
.container2 {
  position: relative;
  width: 40%;
 
  top: -3%;
  left:30%;
}

.image {
  display: block;
  width: 40%;
  height: 50%;
  height: auto;
  
}

.image2 {
  display: block;
  width: 55%;
  height: 55%;
  height: auto;
 
  
}
.image3 {

 position: absolute;
 top: -40%;
 right:-70%;
}



.overlay {
  position: absolute;
  top: -30%;
  bottom: 0;
  left: -10%;
  right: 40%;
  height:145%;
  width: 70%;
  opacity: 0;
  transition: .5s ease;
  background-color:rgba(252, 180, 46, 0.808);
}
.overlay2 {
  position: absolute;
  top: -5%;
  bottom: 0;
  left: -10%;
  right: 0;
  height: 110%;
  width: 70%;
  opacity: 0;
  transition: .5s ease;
  background-color:rgba(252, 180, 46, 0.808);

}
.container:hover .overlay {
  opacity: 1;
}
.container2:hover .overlay2 {
  opacity: 1;
}
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
<body>
    
    <div class="bg-image">
    </div>

<div class="bg-text">
  <h2>Welcome to,</h2>
  
  <h1 style="font-size:60px"> <i>Globus Bank</i></h1>
 
</div>

<nav>
    <div class="logo">
        <h1><p style="font-size: 35px; margin-top: 0px;">~</p>G<p>LOBUS</p></p></h1>   
    </div>
    <div class="navbar">
        <ul>
            <li class='active'><a href="homepage.html">HOME</a></li>
            <li><a href="customers.php">CUSTOMERS</a></li>
            <li><a href="history.php">TRANSACTION</a></li>
                    
            
            </li>              
        </ul>
    </div>
</nav>


<div class="container">
  <img src="2912.9-transaction-icon-iconbunny.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><a href="history.php">TRANSACTION</a></div>
  </div>
</div>
<div class="container2">
  <img src="Capture.PNG" alt="Avatar" class="image2">
  <div class="overlay2">
    <div class="text"><a href="customers.php">CUSTOMERS</a></div>
  </div>
  <div class="image3">
    <img src="large-bank-building-external-view-clipart.jpg" class="image3">
    </div>

  </div>
</div>

       
      
</body>
</html>
