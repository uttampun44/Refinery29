

function hamburger(){
    let navmenu = document.querySelector('.navbar');
    if(navmenu.style.display === 'block'){
        navmenu.style.display = 'none';
    }
    else{
        navmenu.style.display = 'block';
    }
  }

  function load(){
    return true;
  }