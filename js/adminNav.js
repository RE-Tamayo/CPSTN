const url = window.location.href;
const pages = url.split("/");
const page = pages.length -1;

currentPage = pages[page];

const navItem1 = document.querySelector('#dashboard');
const navItem2 = document.querySelector('#approve');
const navItem3 = document.querySelector('#analytics');
const navItem4 = document.querySelector('#users');
const navItem5 = document.querySelector('#schedule');
const navItem6 = document.querySelector('#notifications');
const navItem7 = document.querySelector('#settings');

switch (currentPage) {
    case "dashboard":
        if (!navItem1.classList.contains('active')) {
            navItem1.classList.add('active');
        }
        break;
    case "approve":
        if (!navItem2.classList.contains('active')) {
            navItem2.classList.add('active');
        }
        break;
    case "analytics":
        if (!navItem3.classList.contains('active')) {
            navItem3.classList.add('active');
        }
        break;
    case "users":
        if (!navItem4.classList.contains('active')) {
            navItem4.classList.add('active');
        }
        break;
    case "schedule":
        if (!navItem5.classList.contains('active')) {
            navItem5.classList.add('active');
        }
        break;
    case "notifications":
        if (!navItem6.classList.contains('active')) {
            navItem6.classList.add('active');
        }
        break;
    case "settings":
        if (!navItem7.classList.contains('active')) {
            navItem7.classList.add('active');
        }
        break;
    default:
        break;
}

const menu = document.querySelector("#menu");

const pushbar =   new Pushbar({
    blur:true,
    overlay:true,
});

menu.addEventListener("click", (event) => {
    pushbar.open('topnav2');	
});
	
