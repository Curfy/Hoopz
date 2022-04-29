$(document).ready(function(){
    const sideMenu = document.querySelector("aside");
    const menuBtn = document.querySelector("#menu-btn");
    const closeBtn = document.querySelector("#close-btn");
    const themeToggler = document.querySelector(".theme-toggler");

    // set Theme

    
    if (localStorage.getItem("Theme")  == "Dark"){
        themeToggler.querySelector('span:nth-child(2)').classList.add('active');
        document.body.classList.add('dark-theme-variables');
    }else{
        themeToggler.querySelector('span:nth-child(1)').classList.add('active');
        document.body.classList.remove('dark-theme-variables');
        
    }

    // show sidebar
    menuBtn.addEventListener('click', () => {
        sideMenu.style.display = 'block';
    })

    // close sidebar
    closeBtn.addEventListener('click', () =>{
        sideMenu.style.display = 'none';
    })

    // change theme
    themeToggler.addEventListener('click', () =>{
        if(localStorage.getItem("Theme") == "Dark"){
            localStorage.setItem("Theme", "Light");
        }else{
            localStorage.setItem("Theme", "Dark");
        }
        
        document.body.classList.toggle('dark-theme-variables');
        themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
        themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
    })

});

function setSearchVisibility(){
    $(".sidenav-search-container").css({
        "display": "block", 
        // "position": "relative", 
        // "width": "100%", 
        "z-index": "1"
    });

    $(".sidenav-search-container").removeClass("search-width-100");

    $(".search-icon").css({"display": "none"});
};

function unsetSearchVisibility(){
    $(".sidenav-search-container").css({
        "display": "none", 
        // "position": "", 
        // "width": "", 
        "z-index": ""
    });

    $(".sidenav-search-container").addClass("search-width-100");

    $(".search-icon").css({"display": "block"});
};

$(".search-icon").on("click", function(){  
    if ($(window).width() <= 1400 && $(window).width() > 768){
        setSearchVisibility();
    }
})

$("#main-body").on("click", function(){
    if (!$(".sidenav-search-container").hasClass("search-width-100") && $(window).width() <= 1400 && $(window).width() > 768){
        unsetSearchVisibility();
    };
})

// FOR BUTTON RIPPLE EFFECT

function createRipple(event) {
  const button = event.currentTarget;

  const circle = document.createElement("span");
  const diameter = Math.max(button.clientWidth, button.clientHeight);
  const radius = diameter / 2;

  circle.style.width = circle.style.height = `${diameter}px`;
  circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
  circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
  circle.classList.add("ripple");

  const ripple = button.getElementsByClassName("ripple")[0];

  if (ripple) {
    ripple.remove();
  }

  button.appendChild(circle);
}

const buttons = document.getElementsByTagName("button");
for (const button of buttons) {
  button.addEventListener("click", createRipple);
}