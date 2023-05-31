<!doctype html>
<html>

 <head>
  <title>signin</title>
  <link rel = "icon" href = 
  "file:///C:/Users/pc/Desktop/lastes/images/logo.jpg" 
          type = "image/x-icon">
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">
 </head> 


 <body>
  <section .container
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
    <div class="gallery"  style=" --button-main-color: #1273EB;
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
    width: 70%;">
<img src="images/13146648_Students watching webinar on computer.jpg" 
style="--button-main-color: #1273EB;
      --checkbox-active-color: #1273EB;
      --checkbox-border-hover-color: #1273EB;
      --link-color: #1273EB;
      font-family: Proxima Nova,sans-serif;
      color: #374957;
      margin-left:200px ;
      padding: 0;
      box-sizing: inherit;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      height: 100%;
      object-fit: cover;
      pointer-events: none;">
</div>
        
  <div class="maincont" style="    --button-main-color: #1273EB;
  --checkbox-active-color: #1273EB;
  --checkbox-border-hover-color: #1273EB;
  --link-color: #1273EB;
  -webkit-text-size-adjust: 100%;
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
  margin: 0px;
  border-radius: 30px;
  background: #fff;
  padding: 50px;
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
   justify-content: center;"> <a href="file:///C:/Users/pc/Desktop/lastes/about.html"><img src="images/logo1.jpg"
     width="100px" height="100px"></a> </div>
      <h1 style="    -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: transparent;
      font-variant: tabular-nums;
      line-height: 1.5;
      font-size: 20px;
      text-align: center;
      --checkbox-active-color: #1273EB;
      --checkbox-border-hover-color: #1273EB;
      --link-color: #1273EB;
      --button-main-color: #1273EB;
      font-family: Proxima Nova,sans-serif;
      color: #374957;">Sign Up</h1>
      <p id="terms" style="--button-main-color: #1273EB;
      --checkbox-active-color: #1273EB;
      --checkbox-border-hover-color: #1273EB;
      --link-color: #1273EB;
      font-family: Proxima Nova,sans-serif;
      padding: 0;
      box-sizing: inherit;
      margin: 0;
      color: #869fb2;
      font-size:12px;
      text-align: center;">Please fill in this form to create an account.</p>
        <div class="row mt-5">
          <div class="col-xl-6 col-l-6  text-center">
            <form action="sginup-action.php" method="post">
           <div>
               <input type="text" class="form-control m-4" placeholder="Enter Your Name" name="Name" id="name" onkeyup="checkValidation()" required>
               <div class="alert alert-danger w-100 mt-3 d-none" id="nameAlert"><p>special characters and numbers not allowed</p></div>
           </div>
        
          </div>
          <div class="col-xl-6 col-l-6 col-sm-12 ">
            <div>
              <input type="text" class="form-control m-4" name="Phone"  placeholder="Enter Your Phone" id="phone" onkeyup="checkValidation()" required>
              <div class="alert alert-danger w-100 mt-3 d-none" id="phoneAlert"><p>Enter valid Phone number</p></div>
            </div>
            
          </div>
          <div class="col-xl-6 col-l-6  col-sm-12">
            <div>
              <input type="text" class="form-control m-4" name="age"  placeholder="Enter Your Age" id="name" onkeyup="checkValidation()" required>
              <div class="alert alert-danger w-100 mt-3 d-none" id="ageAlert"><p>Enter valid age</p></div>
            </div>
            
          </div>
          <div class="col-xl-6 col-l-6 col-sm-12 ">
           <div>
               <input type="text" class="form-control m-4" name="City"  placeholder="Enter Your Country" id="name" onkeyup="checkValidation()" required>
               <div class="alert alert-danger w-100 mt-3 d-none" id="nameAlert"><p> Country not valid</p></div>
           </div>
        
          </div>
          <div class="col-xl-6 col-l-6 col-sm-12 ">
           <div>
               <input type="email" class="form-control m-4" name="email"  placeholder="Enter Your Email" id="mail" onkeyup="checkValidation()" required>
               <div class="alert alert-danger w-100 mt-3 d-none" id="emailAlert"><p> Email not valid</p></div>
           </div>
        
          </div>
          <div class="col-xl-6 col-l-6 col-sm-12 ">
           <div>
               <input type="password" class="form-control m-4" name="password" placeholder="Enter Your Password" id="password" onkeyup="checkValidation()" required>
      
               <div class="alert alert-danger w-100 mt-3 d-none" id="passwordAlert"><p>Enter valid password *Minimum eight characters , at least one number:*</p></div>
           </div>
        
          </div>

          
          <div class="col-12 text-center">
            <p>
              Already have an account? <a href="signin__page.php">Sign in.</a></p>
          </div>
         

          <div>
            <button type="button" onclick="location.href='Teachers_Home.php'" class="cancelbtn"  style="
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
    margin-left: 200px;
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
    margin-left: 400px;
    margin-top: 2px;
    font-weight: 1000;
    font-size: 14px;"">Cancel</button>
            <button type="submit" class="signupbtn" style=" 
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
    
    font-weight: 1000;
    margin-left: 400px;
    margin-top: 30px;
    font-size: 14px;"> Sign Up </button>

 
    </form>
   
   
          </div>



          <div class="col-12 text-center d-flex justify-content-center">
            <p class=" mt-3">
          
              By creating an account you agree to our <a href="">Terms & Privacy.</a></p>
            </div>
           
        </div>
      
      </div>
     
 
     
     
    </div></div>
  </section>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="main.js"></script>
 </body>
</html>










