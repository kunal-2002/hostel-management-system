function rtohome(){
    window.location.href ="index.php";
}

function change(){
    window.location.href ="registration.php";
}


window.onscroll=function(){
    var top=window.scrollY;
    if(top>=50){
      document.getElementById("Nav1").style.backgroundColor = "white";
      document.getElementById("linkcolor").style.color = "black";
      document.getElementById("linkcolor1").style.color = "black";
      document.getElementById("linkcolor2").style.color = "black";
      document.getElementById("linkcolor4").style.color = "black";
      
    }
    else{
      document.getElementById("Nav1").style.backgroundColor = "transparent";
      document.getElementById("linkcolor").style.color = "white";
      document.getElementById("linkcolor1").style.color = "white";
      document.getElementById("linkcolor2").style.color = "white";
      document.getElementById("linkcolor4").style.color = "white";
    }
}

function openNav(){
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}