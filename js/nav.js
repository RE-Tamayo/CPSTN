const nav = document.querySelectorAll("li");
       
nav.forEach(item => {
    item.addEventListener("click", (event) => {
        if (!item.classList.contains('active')) {
            nav.forEach(item => {
                if(item.classList.contains('active')) {
                    item.classList.remove('active');
                }
            })
            item.classList.add('active');
            
        }

        else {
            item.classList.remove('active');
        }
       
    });
});


const menu = document.querySelector("#menu");

const pushbar =   new Pushbar({
    blur:true,
    overlay:true,
});

menu.addEventListener("click", (event) => {
    pushbar.open('topnav');	
});
	
