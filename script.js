let togglenavState = false;

let toggleNav = function() {
    let getNav = document.querySelector("#barone");
    let getTitle1 = document.querySelector(".hide-1");
    let getTitle2 = document.querySelector(".hide-2");
    
    if(togglenavState===false){
        getNav.style.visibility = "visible";
        getTitle1.style.visibility = "hidden";
        getTitle2.style.visibility = "hidden";
        togglenavState = true;
    }else{
        getNav.style.visibility = "hidden";
        getTitle1.style.visibility = "visible";
        getTitle2.style.visibility = "visible";
        togglenavState = false;
    }
}

function achievementonly(){
  let ach = document.querySelectorAll(".achievement");
  let xp = document.querySelectorAll(".xp");
  for(let i=0;i<ach.length;i++){
    ach[i].style.color = "black";
    ach[i].style.backgroundColor = "white";
  }
  for(let i=0;i<xp.length;i++){
    xp[i].style.color = "white";
    xp[i].style.backgroundColor = "transparent";
  } 
}
function xponly(){
  let xp = document.querySelectorAll(".xp");
  let ach = document.querySelectorAll(".achievement");
  for(let i=0;i<ach.length;i++){
    ach[i].style.color = "white";
    ach[i].style.backgroundColor = "transparent";
  }
  for(let i=0;i<xp.length;i++){
    xp[i].style.color = "black";
    xp[i].style.backgroundColor = "white";
  } 
}
function bothxpa(){
  let xp = document.querySelectorAll(".xp");
  let ach = document.querySelectorAll(".achievement");
  for(let i=0;i<ach.length;i++){
    ach[i].style.color = "white";
    ach[i].style.backgroundColor = "transparent";
  }
  for(let i=0;i<xp.length;i++){
    xp[i].style.color = "white";
    xp[i].style.backgroundColor = "transparent";
  }
}

function scrolltop() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}

const query = window.matchMedia('(min-width: 1340px)')

function OnChangeSize(e) {
  let getSideBar = document.querySelector("#barone");
  let getTitle1 = document.querySelector(".hide-1");
  let getTitle2 = document.querySelector(".hide-2");
    
        if(e.matches){
            getSideBar.style.visibility = "visible"; 
            getTitle1.style.visibility = "visible";
            getTitle2.style.visibility = "visible";
        }else{
            getSideBar.style.visibility = "hidden"
            getTitle1.style.visibility = "visible";
            getTitle2.style.visibility = "visible";
        }
}

query.addListener(OnChangeSize)
OnChangeSize(query)


scroll = document.getElementById("scroll");
window.onscroll = function() {
  scrollFunction()
};


function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    scroll.style.visibility = "visible"; 
  } else {
    scroll.style.visibility = "hidden"; 
  }
}



