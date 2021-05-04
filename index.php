<?php

 require_once 'API/require_class.php';
 $api = new api();
 $session = new Session();
 $session->getSession();
/* 
 $array = array();

 $getAllProduct;

 $array['strSessionId'] =  $api->loadSession('strSessionId');

 $getAllNetworkProvider = $api->gets(array('strSessionId'=>$api->loadSession('strSessionId')), 'getNetworkProviders');

 foreach ($getAllNetworkProvider->arrNetworkProviders as $id) {
    $array['strSessionId'] = $api->loadSession('strSessionId');
    $array['guidNetworkProviderId'] = $id->guidNetworkProviderId;

    $getAllProduct =  $api->gets($array, 'getNetworkProviderProducts');
 }
 echo '<pre>';
var_dump($getAllProduct);
echo '</pre>';
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/--mp---Multiple-items-slider-responsive.css">
    <link rel="stylesheet" href="assets/css/-product-features.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Social.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="style/loader.css">
    <script src="API/json.js"></script>
    <title>Faznet</title>

    <style>

        .col-md-12 {
            background-color: #fff;
            padding-top: 20px;
            background-color: #FAFAFA;
            margin-top: 5em;
            
        }
      
#flucid{
    position: fixed;
    
    background: #f1f1f1;
    top: 0;
    left: 0;
    width: 100%;
    z-index: -1;
    height: 40%;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    flex-direction: column;
    padding-top: 1em;
    padding-left: 1em;
    color: #fff;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.back {
    position: fixed;
    z-index: 100;
    top: 1em;
    left: 1em;
    color: #000 !important;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe; 
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.fibreFlex, .icon  {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    flex-direction: column;
    padding: .2em;
    
}

div#net li {
    list-style: none;

}

div#net li a{
    list-style: none;
    padding: 10px 5px;
    background: #e8e8e8;
    margin: 10px 10px;
    color: #333;
    position: relative;
    display: block;
    transition: 700ms;
    cursor: pointer;
}


div#net li a:hover {
    background: #C8C8C8;
    margin-right: 5px;
    transition: 700ms;
}

div#net li a::after {
    content: '>';
    background-color: forestgreen;
    position: absolute;
    height: 100%;
    right: 0;
    top: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 22px;
    font-weight: bold;
    color: #fff;
}



*, ::after, ::before {
    box-sizing: border-box;
}
.fib{
    text-align: center;
}
        .smallLoads {
           
    border: 4px solid #D6D6D6;
    border-radius: 50%;
    border-top: 4px solid #381E80;
    width: 20px;
    height: 20px;
    margin-right: .5em;
    animation-name: smallSpin;
    -webkit-animation: smallSpin 900ms linear infinite;
    /* Safari */
    animation: smallSpin 900ms linear infinite;


  } 

  @media screen and (max-width: 780px) {
  .modal-content {
    width: 90%;
  }
}


 @-webkit-keyframes smallSpin {
    0% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
    }
 }

@keyframes smallSpin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
  }
</style>

</head>
<body>
<div id="loader"> <div class="loads"></div></div>
<div class="container">
    <!-- Trigger/Open The Modal -->
    <a href="https://isp.faznet.co.za/" class="back"><i class="fa fa-arrow-left" style=" font-size: 20px;"></i>  Back</a>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="body">
        <h5 id="fibreCheck"></h5>
        <div id="proceed"></div>
        <div id="net"></div>
    </div>
  </div>

</div>
 <div class="row" style="padding: 2%">
      <div class="col-md-12">
           <div>
        
               <script type="text/javascript" src="API/ajax.js" id="fibrescript"></script>
             
                       </div>
                  </div>
              </div>
              <div id="flucid">
              
</div>

 </div> 
    
</body>
<footer>
  <div class="container">
  <div class="row">
    <div class="col-12">
    <p style="text-align: center; color: #222; font-size:small;">Faznet&copy;Right reserved 2021</p>
    </div>
  </div>
   
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


</html>