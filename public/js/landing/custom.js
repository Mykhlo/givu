// fovourite styles
let favs = document.querySelectorAll(".favourite")
// change favourite button styles on mobile
function uncheck_fav(fav, index){    
    fav.querySelector('label').ontouchstart = function(){
      if(fav.querySelector('input').checked){
        this.style.cssText  = 'background-color: white !important; color: #6bd098 !important;';        
      }
      if(!fav.querySelector('input').checked){
        this.style.cssText  = 'background-color: #6bd098 !important; color: white !important;';        
      }
    }  
}
// change favourite button styles on load
function change_fav(fav, index){
    if(fav.querySelector('input').checked)
      fav.querySelector('label').classList.add("active")
}

document.addEventListener('DOMContentLoaded', () => {
    favs.forEach(change_fav);
    favs.forEach(uncheck_fav);
});
// end favourite styles
