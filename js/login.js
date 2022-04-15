$(document).ready(function(){
   var usernameForm = document.getElementById("username");
   var passwordForm = document.getElementById("password");
   var loginButton = document.getElementById("loginBtn");
   var rememberCheckbox = document.getElementById("rememberCheckbox");

   var usernameValid = false
   var passwordValid = false

   $(usernameForm).keyup(function(){
      if(usernameForm.value.length > 0){
         usernameValid = true;
         checkInputs();
      }else{
         loginButton.disabled = true;
      }
   });
   $(passwordForm).keyup(function(){
      if(passwordForm.value.length > 0){
         passwordValid = true;
         checkInputs();
      }else{
         loginButton.disabled = true;
      }
   });

   function checkInputs(){
      if(usernameValid == true && passwordValid == true){
         loginButton.disabled = false;
      }else{
         loginButton.disabled = true;
      }
   }
   
   $(loginButton).click(function(e){
      e.preventDefault();
      $.ajax({
         url: "./methods/verifylogin.php",
         type: "POST",
         async: false,
         data:{
            "username": usernameForm.value,
            "password": passwordForm.value,
            "checkbox": rememberCheckbox.checked,
         },
      success: function(response){
            if(response.status == "201"){
               document.cookie = "isLogin=true;";
               if(rememberCheckbox.checked == true){
                  document.cookie = "token=" + response.token + ";expires=time()+9999, 18 Dec 2023 12:00:00 UTC";
               }
               window.location.href = "./pages/dashboard.php";
            }else{
               var errormessage = "Invalid Credentials";
               var data = '<div class="alert alert-danger d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" fill = "currentColor" viewBox = "0 0 16 16" role="img" aria-label="Danger:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div>'+errormessage+'</div></div>'
               $("#errorMessage").html(data);
               passwordForm.value = "";
               loginButton.disabled = true;
            }
            
         }
      });
   });
   
   
});
