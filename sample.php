<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>Success</title>
	<link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<style>
HTML {
  /*using system font-stack*/
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  font-size: 115%; /*~18px*/
  font-size: calc(12px + (25 - 12) * (100vw - 300px) / (1300 - 300) );
  line-height: 1.5;
  box-sizing: border-box;
}

BODY {
  margin: 0;
  color: #3a3d40;
  background: rgb(252, 252, 252);
}

*, *::before, *::after {
  box-sizing: inherit;
  color: inherit;
}

/*Actual Style*/
 
/*=======================
       C-Container
=========================*/
.c-container {
  max-width: 27rem;
  margin: 1rem auto 0;
  padding: 1rem;
}

/*=======================
       O-Circle
=========================*/

.o-circle {
  display: flex;
  width: 10.555rem; height: 10.555rem;
  justify-content: center;
  align-items: flex-start;
  border-radius: 50%; 
  animation: circle-appearance .8s ease-in-out 1 forwards, set-overflow .1s 1.1s forwards;
}

.c-container__circle {
  margin: 0 auto 5.5rem;
}

/*=======================
    C-Circle Sign
=========================*/
      
.o-circle__sign {
  position: relative;
  opacity: 0;
  background: #fff;
  animation-duration: .8s;
  animation-delay: .2s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}

.o-circle__sign::before, 
.o-circle__sign::after {
  content: "";
  position: absolute;
  background: inherit;
}

.o-circle__sign::after {
    left: 100%;
    top: 2%;
    width: 500%;
    height: 89%;
    transform: translateY(4%) rotate(0deg);
    border-radius: 0;
    opacity: 0;
    animation: set-shaddow 0s 1.13s ease-in-out forwards;
    z-index: -1;
    /* border-radius: 10px; */
}


/*=======================
      Sign Success
=========================*/
 
.o-circle__sign--success { 
  background: rgb(56, 176, 131);
}

.o-circle__sign--success .o-circle__sign {
  width: 1rem; height: 6rem;
  border-radius: 50% 50% 50% 0% / 10%;
  transform: translateX(130%) translateY(35%) rotate(45deg) scale(.11);  
  animation-name: success-sign-appearance;
}

.o-circle__sign--success .o-circle__sign::before {
   bottom: -17%;
   width: 100%; height: 50%; 
   transform: translateX(-130%) rotate(90deg);
   border-radius: 50% 50% 50% 50% / 20%;

}

/*--shadow--*/
.o-circle__sign--success .o-circle__sign::after {
   background: rgb(40, 128, 96);
}
 

/*=======================
      Sign Failure
=========================*/

.o-circle__sign--failure {
  background: rgb(236, 78, 75);
}

.o-circle__sign--failure .o-circle__sign {
  width: 1rem; height: 7rem;
  transform: translateY(25%) rotate(45deg) scale(.1);
  border-radius: 50% 50% 50% 50% / 10%;
  animation-name: failure-sign-appearance;
}

.o-circle__sign--failure .o-circle__sign::before {
   top: 50%;
   width: 100%; height: 100%; 
   transform: translateY(-50%) rotate(90deg);
   border-radius: inherit;
} 

/*--shadow--*/
.o-circle__sign--failure .o-circle__sign::after {
   background: rgba(175, 57, 55, .8);
}


/*-----------------------
      @Keyframes
--------------------------*/
 
/*CIRCLE*/
@keyframes circle-appearance {
  0% { transform: scale(0); }
  
  50% { transform: scale(1.5); }
          
  60% { transform: scale(1); }
  
  100% { transform: scale(1); }
}

/*SIGN*/
@keyframes failure-sign-appearance {         
  50% { opacity: 1;  transform: translateY(25%) rotate(45deg) scale(1.7); }
    
  100% { opacity: 1; transform: translateY(25%) rotate(45deg) scale(1); }
}

@keyframes success-sign-appearance {      
  50% { opacity: 1;  transform: translateX(130%) translateY(35%) rotate(45deg) scale(1.7); }
    
  100% { opacity: 1; transform: translateX(130%) translateY(35%) rotate(45deg) scale(1); }
}
 

@keyframes set-shaddow {
  to { opacity: 1; }
}

@keyframes set-overflow {
  to { overflow: hidden; }
}



/*+++++++++++++++++++
    @Media Queries
+++++++++++++++++++++*/

@media screen and (min-width: 1300px) {
  
  HTML { font-size: 1.5625em; } /* 25 / 16 = 1.5625 */
  
}
</style>
<body>
	<section class="c-container">
  
		<div class="o-circle c-container__circle o-circle__sign--success">
		  <div class="o-circle__sign"></div>  
		</div>   
    <center>
    <div class="text">
      <h2>Thanks for your Enquiry and Feedback</h2>
    </div>
    <div style="color:#ff3f00;font-family: cursive;text-align: center;">
     <p> A Thank you  comes after the experience, continues communication with your guests after checkout, and shows your appreciation. 

It’s also one of the easiest emails to automate in your booking software. Plus, by sending a thank you for booking with us </p>
    </div>
</center>
	  </section>	  
</body>
<style>
  .text{
    width: 108vh;
    color: #ff3f00;
    font-family: cursive;
    margin-top: -57px;
    margin-left: -25px;
}
</style>
</html>

