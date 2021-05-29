//funciones del menu
function abrirMenu() {
    let cellMenu = document.body.getElementsByClassName('navbar-nav')[0];
    cellMenu.style.left = "0";
  }
  function cerrarMenu() {
    let cellMenu = document.body.getElementsByClassName('navbar-nav')[0];
    cellMenu.style.left = "-80em";
  }