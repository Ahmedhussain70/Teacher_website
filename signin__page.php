<?php 
include 'db.php';
?>
<!doctype html >

<html lang="ar" lang="en">
 <head>
  <title>login</title>
  <link rel = "icon" href = 
  "file:///C:/Users/DELL/Desktop/lastes/images/logo.jpg" 
          type = "image/x-icon">
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">
 </head> 
 <body>
  
    <section class=" container-fluid justify-content-between row"
    style="--button-main-color: #1273EB;
              --checkbox-active-color: #1273EB;
              --checkbox-border-hover-color: #1273EB;
              --link-color: #1273EB;
              font-family: Proxima Nova,sans-serif;
              margin: 0;
              padding: 0;
              box-sizing: inherit;
              color: #374957;
              height: 100vh;
              
              display: flex;
              box-shadow: 0 0 30px #3749574d;">
               
      <div class="gallery  d-none d-sm-none"  style=" --button-main-color: #1273EB;
                --checkbox-active-color: #1273EB;
                --checkbox-border-hover-color: #1273EB;
                --link-color: #1273EB;
                font-family: Proxima Nova,sans-serif;
                color: #374957;
                margin: 0;
                padding: 0;
                box-sizing: inherit;
                background-color: #f8fafb;
                height: 100%;
                overflow: hidden;
                position: relative;
                
                width: 60%;">
        <img src="images/27037277_sculptor_online_3.jpg" 
        style="--button-main-color: #1273EB;
                  --checkbox-active-color: #1273EB;
                  --checkbox-border-hover-color: #1273EB;
                  --link-color: #1273EB;
                  font-family: Proxima Nova,sans-serif;
                  color: #374957;
                  margin: 0;
                  padding: 0;
                  box-sizing: inherit;
                  position: absolute;
                  top: 50%;
                  left: 600px;
                  transform: translate(-50%,-50%);
                  height: 100%;
                  object-fit: cover;
                  pointer-events: none;">
      </div>
      
      
  
            <div class=" col-sm-12 justify-content-center">
                <div .maincont style="    -webkit-text-size-adjust: 100%;
                -webkit-tap-highlight-color: transparent;
                font-variant: tabular-nums;
                line-height: 1.5;
                font-size: 16px;
                font-family: DinNextRegular,sans-serif!important;
                color: #000!important;
                text-align: center;
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
                align-items: center;
                
                border-radius: 30px;
                background: #fff;
                padding: 80px;
                
                
                box-shadow: 0 0 15px 7px #9e9e9e59;">
                <div .logo style="
                --checkbox-active-color: #1273EB;
                --checkbox-border-hover-color: #1273EB;
                --link-color: #1273EB;
                --button-main-color: #1273EB;
                font-family: Proxima Nova,sans-serif;
                color: #374957;
                margin: 0;
                padding: 0;
                box-sizing: inherit;
                align-items: center;
                display: flex;
                justify-content: center;
                height: 34px;
                width: 100%;
                margin-bottom: 2rem;"> <a href="file:///C:/Users/DELL/Desktop/lastes/about.html"><img src="images/logo1.jpg" width="100px" height="100px" ></a></div>
                <div .logindata style="
                --checkbox-active-color: #1273EB;
                --checkbox-border-hover-color: #1273EB;
                --link-color: #1273EB;
                --button-main-color: #1273EB;
                font-family: Proxima Nova,sans-serif;
                color: #374957;
                margin: 0;
                padding: 0;
                box-sizing: inherit;
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
                width: 100%;
                margin-bottom: 2rem;" >
                <h4 class="title">LOGIN</h4>
                <div style="
                --checkbox-active-color: #1273EB;
                --checkbox-border-hover-color: #1273EB;
                --link-color: #1273EB;
                --button-main-color: #1273EB;
                font-family: Proxima Nova,sans-serif;
                color: #374957;
                margin: 0;
                padding: 20PX;
                box-sizing: inherit;
                display: flex;
                align-items: center;
                flex-direction: column;
                gap: 10px;
                width: 100%;
                margin-bottom: 10px;">
                <form action="login-action.php" method="post">
             <div .email  >
                 <div class="col-12">
                    <div>
                        <input type="email" class="form-control w-100 mt-3" name="email" placeholder="Enter Your Email" id="mail" onkeyup="checkValidation()">
                        <div class="alert alert-danger w-100 mt-3 d-none" id="emailAlert"><p> Email not valid</p></div>
                        <?php If(isset($_POST['email']) && $_POST['email'] == ''){ ?>
        <h3>Invalid username or password</h3>
  <?php } ?>
                    </div>
                 
                   </div>
            
             </div>
            
             <div .psw >
                
                <div class="col-12">
                    <div>
                        <input type="password" name="password" class="form-control mt-4"  placeholder="Enter Your Password" id="password" onkeyup="checkValidation()">
               
                        <div class="alert alert-danger w-100 mt-3 d-none" id="passwordAlert"><p>Enter valid password *Minimum eight characters , at least one number:*</p></div>
                    </div>
                 
                   </div>

               
            </div>
            </div>
             <div class="alert  alert-danger w-100 mt-3 d-none" id="passwordAlert"><p> Password not  a valid</p></div>
            
      
         
                <div style="--checkbox-active-color: #1273EB;
                --checkbox-border-hover-color: #1273EB;
                --link-color: #1273EB;
                --button-main-color: #1273EB;
                font-family: Proxima Nova,sans-serif;
                color: #374957;
                margin: 0;
                padding: 0;
                box-sizing: inherit;
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
                width: 100%; ">
                 <button type="submit" name="submit_login" class="login" style=" 
                     -webkit-text-size-adjust: 100%;
       -webkit-tap-highlight-color: transparent;
       box-sizing: border-box;
       touch-action: manipulation;
       line-height: inherit;
       text-transform: none;
       overflow: hidden;
       position: relative;
       background: #fca800c5;
       border-width: 0;
       border-radius: 32px;
       cursor: pointer;
       color: rgba(255, 255, 255, 0.644);
       user-select: none;
       display: flex;
       align-items: center;
       justify-content: center;
       text-align: center;
       font-family: DinNextRegular,sans-serif;
       min-height: 34px!important;
       padding: 10px 20px;
       min-width: 220px;
       opacity:0.5;
       margin: 10px;
       font-weight: 500;
       font-size: 14px;">login</button>
                </div>
            </form>
               <div id="signin">
                 <p id="create" style="--button-main-color: #1273EB;
                 --checkbox-active-color: #1273EB;
                 --checkbox-border-hover-color: #1273EB;
                 --link-color: #1273EB;
                 font-family: Proxima Nova,sans-serif;
                 padding: 0;
                 box-sizing: inherit;
                 margin: 0;
                 color: #869fb2;
                 font-size:x-small;
                 text-align: center;">If you don’t have an account
   
   <a href="register_page.php">Sign up</a>now.</p>
   <p style="--button-main-color: #1273EB;
         --checkbox-active-color: #1273EB;
         --checkbox-border-hover-color: #1273EB;
         --link-color: #1273EB;
         font-family: Proxima Nova,sans-serif;
         padding: 0;
         box-sizing: inherit;
         margin: 0;
         color: #869fb2;
         font-size:xx-small;
         text-align: center;"><a href="#">Terms & Privacy</a>.</p>  
                </div></div></div></div>
            </div>
</section>
<script src="js/bootstrap.bundle.min.js"></script>
   <script src="main.js"></script>
 </body>
</html>
