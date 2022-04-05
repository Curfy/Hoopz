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

})
