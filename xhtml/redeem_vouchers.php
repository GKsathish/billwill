<?php include("sidebar.php");?>

<style>

 
 .comming_soon {
     width: 56%;
     margin: 6em auto;
     padding: 40px;
     background-color: rgba(255, 255, 255, 0.84);
     border-radius: 15em;
 }
 
 @media (max-width: 600px) {
    
     .comming_soon {
         width: auto;
         margin: 0 auto;
         border-radius: 0;
         padding: 1em;
     }
 }
 
.hammer {
     margin-left: 42%;
     position: relative;
     animation: anim1 2s;
     animation-iteration-count: infinite;
   size: 30px !important;
 }

 
 @keyframes anim1 {
     0% {
         bottom: 0px;
     }
     25% {
         bottom: 35px;
     }
     50% {
         bottom: 15px;
     }
     75% {
         bottom: 35px;
     }
     100% {
         bottom: 0px;
     }
 }
 
 .text1 {
     text-align: center;
     color: #FFCE31;
     
     text-shadow: -1px 1px 5px #ffe7b6;
 }
 
 .uc {
     text-align: center;
     color: #89664C;
     
 }




</style>
<div class="main-part">

      <div id="main-wrapper">
       

        <div class="content-body">


        

  <div class="comming_soon"> <img src="https://img.icons8.com/clouds/100/null/hammer.png" alt="hammer and pick" style="font-size: 0.30em;" class="hammer" onmousedown="return false">
    <h1 class="text1">COMING SOON</h1>
    <h3 class="uc">Under Construction!</h3> </div>
        </div>
      </div>
</div>