<!DOCTYPE html>
<html>
<title>Blog 001</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Henrique,Roncon,engenheiro,mecânico,mechanical,engineer,ufscar,
                              universidade federal,são carlos,solidworks,matlab,python,office">
<meta name="description" content="Página de apresentação profissional de Henrique Roncon. Saiba
                                  mais sobre minha carreira, habilidades e projetos desenvolvidos." />
<meta name="robots" content="index, follow" />
<link rel="icon" href="../../site_images/favicon.ico">
<link rel="stylesheet" href="../../site_css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="../../site_css/fontawesome-free-6.1.1-web/css/all.css">
<style>

body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('../site_images/profile_pic_temp.png');
  min-height: 100%;
}

.red_text {
  text-decoration: none;
  color: #c81e1eff;
}

h1 {
  font-size: 5em; /* 40px/16=2.5em */
}


</style>
<body>

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <a href="#" class="w3-bar-item w3-right" style="text-decoration:none"><img src="../../site_images/logo-white.png" style="width:30px"></a>
  </div>
  
  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-grey w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <h4>Um Blog Inesperado</h4>
    </div>

    <hr>
    <div class="w3-container">
      <h5>Seções</h5>
    </div>
    <div class="w3-bar-block">
      <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Esconder Menu</a>
      <a href="#s01" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-right-long" aria-hidden="true"></i>  A oportunidade faz o leitor</a>
      <a href="#s02" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-right-long" aria-hidden="true"></i>  O problema de organização</a>
      <a href="#s03" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-right-long" aria-hidden="true"></i>  Apontamentos necessários</a>
      <a href="#consifin" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-right-long" aria-hidden="true"></i>  Considerações finais</a>
      <br>
      <a href="../../site_pages/servicos.html" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-right-long" aria-hidden="true"></i>  Voltar ao blog</a>
      <br><br>
    </div>
  </nav>
  
  
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;margin-right:200px">
  
    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <h5><br></h5>
    </header>

    <div class="w3-row">

        <!-- Article entries -->
        <div class="w3-col">


          <div class="w3-center">
            <img src="blog_images_01-10/BCW52BS1_01.png" style="width:30%">
          </div>
 
            <div class="w3-container">
              <h3><b>Explorando APIs</b></h3>
              <h5>Henrique Roncon, <span class="w3-opacity">31 de Maio, 2022</span></h5>
            </div>
        
            <div id="s01" class="w3-container w3-justify">
              <p>Se este blog fosse um livro, esta página seria definitivamente um prefácio.</p>
              <div class="w3-row">
              </div>
            </div>

            <div class="w3-container w3-justify">
              <h4><b>A oportunidade faz o leitor</b></h4>
              <p>É fato que a pandemia causada pelo Covid-19 gerou danos imensuráveis nas mais variadas frentes, no entanto, 
                houve luz naquele período. Na ocasião, a editora Springer fez o brilhante ato de disponibilizar grande quantidade 
                dos seus livros publicados para livre download, permitindo que qualquer pessoa tivesse acesso a publicações de alto valor 
                (financeiro e intelectual) até então somente vendidos em prateleira. 
              </p>
              <p>Diante da oportunidade, aproveitei. Bastante. Passei um bom tempo analisando os títulos disponíveis e, 
                baseado também pelos resumos, "adiquiri" os que me interessei. Não entrarei nos méritos se li os livros ou não, até 
                porque tenho a tendência de comportamento que aflinge muitos leitores mundo a fora, que é o de comprar livros em um 
                ritmo maior do que se lê - tsundoku, termo japonês que define este comportamento.
              </p>
            </div>

            <div id="s02" class="w3-container w3-justify">
              <h4><b>O problema de organização</b></h4>
              <p>Em posse de quantidade considerável de livros, decidi organizá-los. O simples fato de separá-los em diretórios já 
                resolve de maneira satisfatória o problema, no entanto, a definição pelo tipo de pasta, se seria por categoria, ano, 
                autor, criaria uma nova questão. Assim, optei por criar um sistema de consulta que me permitisse buscar pelos títulos 
                da minha biblioteca de acordo com critérios específicos de momento. Mais do que a consulta, decidi expandir o sistema 
                para fazer a inserção de novos livros, a edição de informações existentes e também a exclusão de dados - caracterizando 
                um modelo, um banco de dados, munido das quatro operações básicas CRUD (create, read, update e delete). A aplicação 
                destas operações em banco de dados é imensa e pretendo abordar o assunto em outros projetos.
              </p>
            </div>

            <div id="s03" class="w3-container w3-justify">
              <h4><b>O sistema bibliotecário</b></h4>
              <p>Para executar a ideia, fiz todo o sistema em python. Para a interface, usei a biblioteca TKinter, pela facilidade de 
                trabalho e compatibilidade com a escala deste projeto. Para o armazenamento de informações, optei por utilizar a biblioteca 
                SQLite3, que permite utilizar (alguns) recursos de banco de dados sem a necessidade de fazer o setup de um servidor dedicado 
                para isso.
              </p>
              <div class="w3-center">
                <img src="blog_images_01-10/2LNR49NR_01.png" style="width:50%">
                <figcaption>Tela inicial</figcaption>
              </div>
              <p>Na tela principal são apresentados todos os recursos do aplicativo. Na parte inferior, temos os botões que seguem e suas
                respectivas funções:
                <ul>
                    <li>Show all</li>
                    <ul>
                      <li>Retorna todos os livros cadastrados no banco de dados.</li>
                    </ul> 
                    <li>Add book</li>
                    <ul>
                      <li><img src="blog_images_01-10/2LNR49NR_02.png" style="width:50%"></li>
                      <li>Para adicionar um novo livro no sistema, é preciso inserir as informações dele na janela que se abre.</li>
                      <li>Dentre as particularidades desta versão do aplicativo, tem-se:</li>
                      <ul>
                        <li>Que nos campos <i>Statistics</i>, <i>Logistics</i> e <i>Robotics</i>, é preciso informar no campo o valor <b>1</b> se o livro pertence
                          aquela categoria e <b>0</b> caso não tenha essa classificação.</li>
                        <li>Em Path, é preciso seguir a instrução</li>
                    </ul> 
                    </ul> 
                    <li>Milk</li>
                </ul> 
              </p>
            </div>


            <div id="consifin" class="w3-container">
              <h4><b>Considerações Finais</b></h4>
              <p>Pretendo divulgar o contato em todo post, mas fique à vontade para se conectar comigo via email, mensagem, nos 
                  canais disponíveis <a style="font-weight: bold;" 
                href="../contato.html" target="_blank">aqui</a>. Me avisa se achar alguma incoerência nas informações também!
                Sempre bom ter um olhar externo sobre o que a gente escreve. 
              </p>
              <p>No mais: let's do this!</p>

              <div class="w3-center">
                <img src="blog_images_01-10/BCW52BS1_02.gif" style="width:50%">
                <figcaption>.</figcaption>
              </div>

            </div>

            <div class="w3-container">
              <h4><b>Extras</b></h4>
              <p>Gostou desse conteúdo?
              <a style="color:purple; font-weight: bold;" 
              href=<?php echo file_get_contents("linkpix.txt");?> target="_blank">Fica à vontade pra pagar um café pra gente!</a></p>
              <p>Entre em <a style="font-weight: bold;" 
                href="../contato.html" target="_blank">contato</a> e vamos trocar uma ideia sobre esse tópico, 
                desenvolver uma solução, um produto, juntos ou exclusivo para seu negócio!</p>
            </div>

            <div class="w3-center">
                <img src="../../site_images/logo-black.png" style="width:20%">
              </div>


          <!-- Article done -->
          
          <br>
        
        </div>
      </div>
  


  
    <!-- End page content -->
  </div>
  
  <script>
  // Get the Sidebar
  var mySidebar = document.getElementById("mySidebar");
  
  // Get the DIV with overlay effect
  var overlayBg = document.getElementById("myOverlay");
  
  // Toggle between showing and hiding the sidebar, and add overlay effect
  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
      overlayBg.style.display = "none";
    } else {
      mySidebar.style.display = 'block';
      overlayBg.style.display = "block";
    }
  }
  
  // Close the sidebar with the close button
  function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
  }


  </script>

</body>
</html>
