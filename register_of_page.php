<!doctype html>
<html>

 <head>
  <title>signin</title>
  <link rel = "icon" href = 
  "file:///C:/Users/pc/Desktop/lastes/images/logo.jpg" 
          type = "image/x-icon">
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
            width: 100vw;
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
      margin: 0;
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
      <h4 style="    -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: transparent;
      font-variant: tabular-nums;
      line-height: 1.5;
      font-size: 16px;
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
      font-size:xx-small;
      text-align: center;">Please fill in this form to create an account.</p>
     
   <section id="label" class="sec">
     <div class="input-div">
      <label for="name"><b>Username</b></label>
      <form method="post" action="sginup-action.php">
      <input type="text" name="Name" placeholder="Enter name" required>
     </div>
     <div class="input-div" >
       <label for="Phone"><b>Phone number</b></label>
       <input type="text" placeholder="Enter Password" name="Phone" required>
      </div>
      <div class="input-div" >
        <label for="Phone"><b>Spaecialization</b></label>
        <input type="text" placeholder="Enter Password" name="Spaecialization" required>
      </div>
      <div class="input-div">
       <label for="email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="email" required >
      </div>
     <div class="input-div" >
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required >
     </div>
     <!-- <div class="input-div">
      <label for="psw-repeat" style="text-align: center;"><b>Confirm Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
     </div> -->
  </section>
      <div>
        <button type="button" onclick="location.href='home.php'" class="cancelbtn"  style="
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
font-size: 14px;">Cancel</button>
        <button type="submit" class="signupbtn" name="submit_login"  style=" 
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
font-size: 14px;"> Sign Up </button>
</form>
<p id="terms" style="--button-main-color: #1273EB;
     --checkbox-active-color: #1273EB;
     --checkbox-border-hover-color: #1273EB;
     --link-color: #1273EB;
     font-family: Proxima Nova,sans-serif;
     padding: 0;
     box-sizing: inherit;
     margin: 0;
     color: #869fb2;
     font-size:xx-small;
     text-align: center;" >By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      </div> <p id="create" style="--button-main-color: #1273EB;
      --checkbox-active-color: #1273EB;
      --checkbox-border-hover-color: #1273EB;
      --link-color: #1273EB;
      font-family: Proxima Nova,sans-serif;
      padding: 0;
      box-sizing: inherit;
      margin: 0;
      color: #869fb2;
      font-size:x-small;
      text-align: center;">Already have an account? <a href="signin_page.php">Sign in</a>.</p>
     
    </div></div>
  </section>
 </body>
</html>










