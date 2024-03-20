const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector(".form-inner .login ");
      const loginBtn = document.querySelector(".login-btn");
      const signupForm = document.querySelector(".form-inner .signup");
      const signupBtn = document.querySelector("signup-btn");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
       // loginForm.style.marginLeft = "-50%";
        //loginText.style.marginLeft = "-50%";
        loginForm.style.display = "none";
        signupForm.style.display = "block";
      });
      loginBtn.onclick = (()=>{
        //loginForm.style.marginLeft = "0%";
        //loginText.style.marginLeft = "0%";
        loginForm.style.display = "block";
        signupForm.style.display = "none";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
      /*const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector(".form-inner .login");
      const loginBtn = document.getElementById("login");
      const signupBtn = document.getElementById("signup");
      const signupText= document.querySelector(".title-text .signup");
      const  signupForm=documet.querySelector(".form-inner  .signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
        signupText.style.marginLeft = "0%";
      signupForm.style.marginLeft = "0%";
      return false;
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
        signupText.style.marginLeft = "-50%";
        signupForm.style.marginLeft = "-50%";
        return false;
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });*/

