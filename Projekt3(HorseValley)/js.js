//Stick navbar

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  let sticky = document.getElementById("navbar").classList;

  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    sticky.remove("absolute");
    sticky.add("sticky");
  } else {
    sticky.remove("sticky");
    sticky.add("absolute");
  }
}

/*Menu Hamburger*/

function Hamburger() {
  let menu = document.getElementById("menu");
  let close = document.getElementById("close");
  let tabs = document.getElementById("Tabs");

  if (menu.style.display == "block") {
    menu.style.display = "none";
    close.style.display = "block";
    tabs.style.display = "block";
  } else {
    menu.style.display = "block";
    close.style.display = "none";
    tabs.style.display = "none";
  }
}

// Scroll animations
const observerOptions = {
  threshold: 0.15,
  rootMargin: "0px 0px -100px 0px",
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
}, observerOptions);

document.querySelectorAll(".fade-in").forEach((el) => {
  observer.observe(el);
});
