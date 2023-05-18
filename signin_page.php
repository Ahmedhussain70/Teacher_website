<!doctype html >

<html lang="ar" lang="en">
 <head>
  <title>login</title>
  <link rel = "icon" href = 
  "file:///C:/Users/DELL/Desktop/lastes/images/logo.jpg" 
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
                  left: 50%;
                  transform: translate(-50%,-50%);
                  height: 100%;
                  object-fit: cover;
                  pointer-events: none;">
      </div>
      
      
  
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
             margin:0px;
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
          <div .email  style="    -webkit-text-size-adjust: 100%;
          -webkit-tap-highlight-color: transparent;
          font-variant: tabular-nums;
          font-weight: 400;
          line-height: 1.125;
          color: #000748;
          font-size: .8rem;
          font-family: DinNextRegular,sans-serif;
          text-align: right;
          display: inline-flex;
          align-items: baseline;
          box-sizing: border-box;
          width: 100%;
          padding: 10px;
          background-color: #ebf6ff;
          border-radius: 30px!important;
          padding-left: 20px;
          padding-right: 20px;">
              <label for="email" ><b>Email</b></label>
              <form method="post" action="login-action.php">
              <input type="text" placeholder="Enter Email" name="email" id="email" required style="-webkit-text-size-adjust: 100%;
              -webkit-tap-highlight-color: transparent;
              box-sizing: border-box;
              overflow: visible;
              font: inherit;
              background: 0 0;
              color: currentColor;
              border: none;
              outline: 0;
              padding: 0;
              margin: 0;
              width: 100%;
              max-width: 100%;
              vertical-align: bottom;
              text-align: inherit;
              touch-action: manipulation;
              margin-top: -.0625em;
              animation-name: cdk-text-field-autofill-end;
              caret-color: #f44336;">
          </div>
          <div .psw style="
              -webkit-text-size-adjust: 100%;
          -webkit-tap-highlight-color: transparent;
          font-variant: tabular-nums;
          font-weight: 400;
          line-height: 1.125;
          color: #000748;
          font-size: .8rem;
          font-family: DinNextRegular,sans-serif;
          text-align: right;
          display: inline-flex;
          align-items: baseline;
          box-sizing: border-box;
          width: 100%;
          padding:10px;
          background-color: #ebf6ff;
          border-radius: 30px!important;
          padding-left: 20px;
          padding-right: 20px;">
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" id="password" required style="    -webkit-text-size-adjust: 100%;
              -webkit-tap-highlight-color: transparent;
              box-sizing: border-box;
              overflow: visible;
              font: inherit;
              background: 0 0;
              color: currentColor;
              border: none;
              outline: 0;
              padding: 0;
              margin: 0;
              width: 100%;
              max-width: 100%;
              vertical-align: bottom;
              text-align: inherit;
              touch-action: manipulation;
              margin-top: -.0625em;
              animation-name: cdk-text-field-autofill-end;
              caret-color: #f44336;">
          </div></div>
         
   
      
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

<a href="register_of_page.php">Sign up</a>now.</p>
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
</section>
   
 </body>
</html>
