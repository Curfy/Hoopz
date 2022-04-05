$(document).ready(function(){
   logoutButton = document.getElementById("logoutBtn");
   $(logoutButton).click(function(e){
      e.preventDefault();
      $.ajax({
         url: '../methods/logout.php',
       });
       
       window.location.href = "../login.php";
   });
});
