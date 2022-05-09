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

// FOR COLLAPSIBLE ASIDE SEARCH BAR
function setSearchVisibility(){
    $(".sidenav-search-container").css({
        "display": "block", 
        "z-index": "1"
    });
    $(".sidenav-search-container").removeClass("search-width-100");
    $(".search-icon").css({"display": "none"});
};

function unsetSearchVisibility(){
    $(".sidenav-search-container").css({
        "display": "none", 
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

    hideSuggestion();
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

// FOR SIDE BAR SUGGESTIONS
var query = '';
$('#player-search').on('click', function(){
    $(this).keyup(function(){
        query = $(this).val();
        if (!query.length){
            hideSuggestion();
        }
        else{
            viewSuggestion('side', query);
        }
    })
})

// FOR PAGE BAR SUGGESTIONS
$('#team-search, #username-search').on('click', function(){
    query = $(this).val();
    $(this).keyup(function(){
        query = $(this).val();
        if (!query.length){
            hideSuggestion();
        }
        else{
            viewSuggestion('page', query);            
        }
    });
});

function viewSuggestion(suggestion, query){
    $('.' + suggestion + '-suggestions').removeClass('d-none');
    $('.' + suggestion + '-search-expandable-container').css({"height" : "349px"});
    for (let i=1; i<6; i++){
        $('#' + suggestion + '-suggestion-' + i).html(query);
    }
}

function hideSuggestion(){
    $('.suggestions').addClass('d-none');
    $('.page-search-expandable-container').css({"height" : "35px"});
    $('.side-search-expandable-container').css({"height" : "35px"});
}