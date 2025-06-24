// -------------------- Navbar
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


// -------------------- Skills switch
function openTabs(evt, tabsName) {
  // Esconde todas as abas
  const tabs = document.getElementsByClassName("tabs-skill");
  for (let i = 0; i < tabs.length; i++) {
    tabs[i].style.display = "none";
  }

  // Remove a classe 'active' de todos os botões
  const buttons = document.getElementsByClassName("button-skill");
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove("active");
  }

  // Mostra a aba clicada
  document.getElementById(tabsName).style.display = "block";

  // Adiciona a classe 'active' no botão clicado
  evt.currentTarget.classList.add("active");
}


// -------------------- Blog pages
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}