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

// $(".search-bar-container, .search-icon").on("click", function(){
//     $(".search-bar-container").css({
//         "display": "block", 
//         "position": "relative", 
//         "width": "100%", 
//         "z-index": "1"
//     });

//     $(".search-bar").removeClass("search-width-100");
// })

function setSearchProperty(){
    $(".search-bar-container").css({
        "display": "block", 
        "position": "relative", 
        "width": "100%", 
        "z-index": "1"
    });

    $(".search-bar").removeClass("search-width-100");
};

function unsetSearchProperty(){
    $(".search-bar-container").css({
        "display": "", 
        "position": "", 
        "width": "", 
        "z-index": ""
    });

    $(".search-bar").addClass("search-width-100");
};

$(".search-icon").on("click", function(){  
    if ($(window).width() <= 1400 && $(window).width() > 768){
        setSearchProperty();
    }
})

$("#main-body").on("click", function(){
    if (!$(".search-bar").hasClass("search-width-100") && $(window).width() <= 1400 && $(window).width() > 768){
        unsetSearchProperty();
    };
})