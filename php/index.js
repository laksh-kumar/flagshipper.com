function btn() {
  if ( document.getElementById('nav-list').style.display == "block") {
     document.getElementById('nav-list').style.display = "none";
     document.getElementById('button').style.transform = "rotate(0deg)";

  }
  else {
     document.getElementById('nav-list').style.display = "block";
     document.getElementById('button').style.transform = "rotate(180deg)";
  }
 }
