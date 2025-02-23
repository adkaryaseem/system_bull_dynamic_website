document.querySelector(".side-bar-phone-display") .addEventListener("click",toggleNavContents);
function toggleNavContents(){
        document.querySelector (".nav-contents").style.display="flex";
    }

document.querySelector(".cross-btn").addEventListener("click",toggleCrossBtn);
function toggleCrossBtn(){
    document.querySelector (".nav-contents").style.display="none";
}