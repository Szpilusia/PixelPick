console.log("będe jeść naleśniczki");

var theme = document.getElementById("theme");
var img = document.getElementById("img");
var site = document.getElementById("rightSite");
var body = document.getElementById("body");

/*=================================================
    changing themes
=================================================*/

const changeTheme = () => {
    const rootElem = document.documentElement
    let dataTheme = rootElem.getAttribute('data-theme'), newTheme
    
    newTheme = (dataTheme === 'light') ? 'dark' : 'light'

    rootElem.setAttribute('data-theme', newTheme)
}

document.querySelector('#theme-switcher').addEventListener('click', changeTheme);

/*=================================================
    menu 
=================================================*/

function menu(){
    if(site.style.display == "none"){
        site.style.display = "block";
    }else{
        site.style.display = "none";
    }
}