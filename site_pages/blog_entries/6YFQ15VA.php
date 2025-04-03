<!DOCTYPE html>
<html>
<title>Controle laboratorial com Power Apps</title>
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

.newContainer {
  position: relative;
  width: 50%;
  overflow: hidden;
  padding-top: 28%; /* 4:3 Aspect Ratio */
}

.newResponsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}

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

.image_hv {
  cursor: zoom-in;
}

</style>
<body>

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <a class="w3-bar-item w3-right" style="text-decoration:none"><img src="../../site_images/logo-white.png" style="width:30px"></a>
  </div>
  
  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-grey w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <h4>Controle laboratorial com Power Apps</h4>
    </div>

    <hr>
    <div class="w3-container">
      <h5>Seções</h5>
    </div>
    <div class="w3-bar-block">
      <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Esconder Menu</a>
      <a href="#s01" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Power Apps</a>
      <a href="#s02" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  LIMS</a>
      <a href="#s03" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  HR Blood Laboratory</a>
      <a href="#s04" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Considerações</a>
      <a href="#s05" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Extras</a>
      <a href="#s06" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Fontes</a>
      <br>
      <a href="6YFQ15VAi.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  EN</a>
      <a href="../../site_pages/servicos.html#blog_6YFQ15VA" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Voltar ao blog</a>
      <br><br>
    </div>
  </nav>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
  
  
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
            <img src="blog_images_01-10/6YFQ15VA_00.png" style="width:50%">
          </div>
 
            <div class="w3-container">
              <h3><b>Controle laboratorial com Power Apps</b></h3>
              <h5>Henrique Roncon, <span class="w3-opacity">30 de Julho, 2023</span></h5>
            </div>
        
            <div id="s01" class="w3-container w3-justify">
              <p><i>#powerapps #microsoft #sharepoint #LIMS #laboratory #information #management #system</i></p>
              <div class="w3-row">
              </div>
            </div>

            <div class="w3-container w3-justify">
              <h4><b>Power Apps</b></h4>

              <p>Abordei – e abordarei – em outros posts meu gosto pela criação de aplicativos e a dificuldade em encontrar recursos para a elaboração de bons layouts para usuários, ou <i>graphical user interfaces</i> (GUI). De maneira geral, as lógicas de programação, os objetivos dos aplicativos, independem da GUI, logo, nesta parte, de idealização e definição do escopo do projeto, não costumo ter problemas. O desenvolvimento da GUI acaba sendo o gargalo de criação. 
              </p>

              <p>Uma opção interessante para a elaboração de aplicativos é disponibilizada pela Microsoft, o <b>Power Apps</b>. De maneira bem superficial, este recurso (pago, disponível através de licenças do Microsoft365) permite a elaboração (quase) intuitiva de aplicativos, de excelente apresentação visual, que se comunicam com recursos externos (bancos de dados de terceiros) ou da própria Microsoft, como o <b>Access</b>, o <b>Power Automate</b> e o  <b>Sharepoint</b>. 
              </p>

              <p>A criação e edição dos aplicativos pela ferramenta disponibilizada pela Microsoft permite que usuários com pouca ou nenhuma experiência em linguagens de programação desenvolvam programas funcionais, uma vez que a interface da ferramenta se baseia em recursos visuais de <i>drag and drop</i> e permite conexões básicas com banco de dados, como uma simples lista do Sharepoint (que poderíamos, com muitas ressalvas, comparar a uma planilha online do Excel). A interface como um todo é amigável e a curva de aprendizado é rápida, podendo o desenvolvedor que trabalha com esta plataforma aprimorar e entregar melhores resultados em um curto espaço de tempo.
              </p>

            </div>
            <div id="s02" class="w3-container w3-justify">
              <h4><b>LIMS</b></h4>
              <p>Os <b>sistemas de gestão de informações laboratoriais</b> (do inglês, laboratory information management system, LIMS) estão implementados nos mais variados segmentos da indústria, tendo como principal objetivo o efetivo controle de amostras de laboratório e os dados associados a elas. A importância de um sistema LIMS robusto e bem implementado é enorme: além de <b>redução de custos</b> e <b>aumento de produtividade</b> relacionados ao processo de gerenciamento de amostras, o <b>controle de qualidade</b> e o <b>atendimento às normas vigentes</b> tendem a ser mais rigorosos e satisfatórios, o que é imprescindível no setor farmacêutico ou de alimentos, por exemplo.
              </p>
              <p>A gestão das amostras auxiliadas por um software LIMS permite não só o controle individual, mas o de bateladas e lotes, permitindo, por exemplo, o rastreio de grandes quantidades de amostras – em uma eventual necessidade de recall, por exemplo. É possível também agilizar o procedimento de geração de resultados, permitindo o acesso às informações de maneira eficiente aos times que delas necessitam para realizar suas análises e aos próprios clientes, que precisam ter acesso aos laudos com agilidade e certos da transparência das informações ali contidas – garantir ao cliente que todas as etapas, da coleta a emissão do laudo, são controladas de forma rigorosa impacta positivamente na sua experiência.
              </p>
              <p>A alimentação gradativa dos bancos de dados do software permite, a médio e longo prazo, análise profunda dos procedimentos internos do laboratório, se estes podem ser otimizados de alguma forma, se os testes corretos estão sendo aplicados as amostras, além de possibilitar predições através do esboço de tendências. De forma resumida, o LIMS aumenta consideravelmente a eficiência e acurácia dos resultados do laboratório atuando na padronização de procedimentos e na gestão de dados das amostras e de suas dependências.
              </p>

            </div>

            <div id="s03" class="w3-container w3-justify">
              <h4><b>HR Blood Laboratory</b></h4>

              <p>A fim de explorar os recursos do Power Apps, desenvolvi o aplicativo da <b>HR Blood Laboratory</b>, uma empresa europeia que coleta amostras de sangue de pacientes e realiza testes diversos com estas.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_01.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Tela inicial do aplicativo.</figcaption>
              </div>
              
              <p>Da página inicial, partimos primeiramente para a seção <b>Standards</b>. Aqui são mostrados os testes (fictícios) aplicáveis às amostras coletadas dos pacientes. Há um filtro básico que permite verificar testes específicos, além da possibilidade de editar um teste existente ou adicionar um novo. O cadastro de novos testes é feito através do formulário <i>6897-DIY-HRBL2</i>, que compreende todos os dados necessários para incluí-lo no banco de dados. A edição dos dados de um teste é feita através do formulário <i>1989-DIY-HRBL2</i>, no entanto, o layout é o mesmo para adição de novos testes. A diferença entre os formulários é para mostrar que os comandos <i>criar</i> e <i>editar</i> no banco de dados são feitos de maneira independente.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_02.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Relação de testes disponíveis.</figcaption>
              </div>

              <p>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_03.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Cadastro/edição de testes.</figcaption>
              </div>

              <p>Partindo novamente da página inicial, temos a seção de <b>Patients</b>. Aqui são mostrados, de acordo com o filtro à direita, os pacientes cadastrados no banco de dados da empresa. A princípio, a abrangência da HR Blood Laboratory se limita a Europa, mais especificamente na Alemanha, Bélgica e Inglaterra.  Desta página, é possível navegar para a aba de inserção de novos pacientes no banco de dados (botão <i>New</i>), para a adição de uma nova amostra associada ao paciente (botão <i>New sample</i>), para visualização do histórico de amostras e testes do paciente (botão <i>Historic</i>) ou para a própria edição do cadastro do paciente (botão <i>Edit</i>).</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_04.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Relação de pacientes cadastrados.</figcaption>
              </div>

              <p>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_05.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Cadastro/edição de pacientes.</figcaption>
              </div>

              <p>O cadastro de novos pacientes é feito através do formulário <i>5205-DIY-HRBL2</i> e a edição de dados de um paciente selecionado é realizada através do formulário <i>6388-DIY-HRBL2</i>, seguindo a mesma lógica das <b>Standards</b>.</p>

              <p>Ao clicar em <i>New sample</i>, o usuário é levado ao formulário <i>5113-DIY-HRBL2</i>, utilizado para cadastrar uma nova amostra de sangue associada àquele paciente. Aqui, é necessário informar a data da coleta, o teste pelo qual a amostra está sendo submetida e o valor do teste – como dica ao usuário, é informado o range de valores normais para o tipo de teste selecionado. Um código (<i>barcode</i>) único é gerado para esta amostra, utilizando a ID da amostra, a data de inserção da amostra no banco de dados, a ID do teste e a ID do paciente. Um dado interessante que não utilizei neste projeto é que o próprio SharePoint grava por si só o usuário que fez a inserção do novo registro no banco de dados através do login no aplicativo, o que permite rastreio eficiente destas inserções.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_06.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Cadastro de nova amostra testada.</figcaption>
              </div>

              <p>A aba <i>Historic</i> mostra todas as amostras/testes associadas ao paciente selecionado. É possível, através dos filtros, verificar se há amostras aguardando validação, aprovadas, reprovadas, com resultado normal ou alterado, de acordo com o range aceitável da norma aplicada naquela amostra em específico.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_07.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Histórico de amostras do paciente.</figcaption>
              </div>

              <p>Clicando no ícone de <i>Print info</i>, o usuário é levado a uma página com layout diferente das demais (formulário <i>389-DIY-HRBL2</i>), onde constam todas as informações da amostra – o responsável pelo teste, quem o validou, se a amostra é válida, o resultado dela além dos dados de quem está gerando o formulário e a própria data de geração. Clicando em <i>Print</i>, é possível imprimir ou salvar em PDF o formulário com tais dados já padronizado em A4.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_08.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Resultado para impressão.</figcaption>
              </div>

              <p>A fim de criar um método de segurança, todas as amostras lançadas no sistema necessitam ser validadas – de preferência, o usuário que lança não é o mesmo que valida, por questões de verificação e conferência de informações. Assim, na seção <b>Samples</b> são listadas todas as amostras do banco de dados e, através dos filtros, é possível verificar o status destas. Aqui, ao invés do nome, é mais interessante trazer a ID do paciente, para tornar o procedimento, de certa forma, impessoal.</p>

              <p><i>Nota: aliado ao registro automático de gravação de usuário pelo SharePoint, é possível analisar indicadores de performance de funcionários, por exemplo.</i></p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_09.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Amostras cadastradas no banco de dados.</figcaption>
              </div>

              <p>Ao clicar em <i>Approve/Discard</i>, o usuário verifica as informações e aprova ou desaprova a amostra através do formulário <i>5256-DIY-HRBL2</i>. Como o valor do teste já foi informado no momento de cadastro de nova amostra, o usuário aqui apenas confere se o sistema está fazendo o <i>check</i> de maneira correta – o campo <i>Result</i> é automático: ele compara o valor de <i>Test value</i> com o range e retorna <i>Normal</i> se está dentro ou <i>Altered</i> se está fora deste intervalo. O botão <i>Print info</i> leva ao formulário <i>389-DIY-HRBL2</i>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_10.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Validação de amostras.</figcaption>
              </div>

              <p>Os recursos disponibilizados pelo Power Apps focam na interface com o usuário para o input de informações. No entanto, a ferramenta também disponibiliza recursos (limitados) para a apresentação dos dados presentes nos bancos de dados. Na seção <b>Dashboard</b> são colocados alguns exemplos de gráficos possíveis de serem plotados com os recursos nativos do Power Apps. Dependendo de como são escritos, os gráficos são atualizados tão logo novas informações são inseridas no aplicativo – o que também é bem intuitivo e relativamente fácil de ser implementado, uma vez conhecendo os métodos de plotagem.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_11.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Dashboard HR Blood Laboratory.</figcaption>
              </div>
            
            <div id="s04" class="w3-container">
              <h4><b>Considerações</b></h4>

              <p>Como comentado anteriormente, o aplicativo necessita de uma mínima estrutura para rodar. Aqui, fiz uso de três listas no Sharepoint: patients, samples e tests, com nomes intuitivos e relacionados diretamente às seções explanadas anteriormente. Procurei relacioná-las através de suas IDs, a fim de transitar entre elas sem que precisasse necessariamente realizar a junção delas, ou criar uma única lista compreendendo todas as infos que eu precisava.</p>

              <p>Todos os recursos utilizados aqui foram a nível de teste de implementação, logo, o aplicativo não está otimizado, inclusive apresenta suas redundâncias. Mas, por mais que seja um ambiente de teste, é válido mencionar que é muito mais recomendado conectar um dashboard desenvolvido em PowerBi com as listas do SharePoint (servindo como database), pela qualidade e quantidade de recursos oferecidos pelo PowerBi, além de ser algo (no caso, a conexão) muito simples de ser feito, o que potencializa muito a visualização e tomadas de decisão baseadadas nas informações alimentadas através do aplicativo.</p>

              <p><a style="color:red; font-weight: bold;" href="#s04" style="text-decoration:none">Pretendo documentar um pouco da técnica utilizada na elaboração deste projeto aqui.</a></p>
            </div>

            <div id="s05" class="w3-container">
              <h4><b>Extras</b></h4>
              <p>Os aplicativos desenvolvidos no Power Apps necessitam do ambiente de desenvolvimento e hospedagem disponibilizado nas contas pagas da Microsoft, logo, não disponibilizarei o arquivo em extensão <i>msapp</i> para download. Aqui, <a style="color:red; font-weight: bold;" href="../../site_projects/6YFQ15VA.rar" style="text-decoration:none">deixarei disponíveis para download as listas utilizadas como banco de dados</a>, bem como um vídeo <a style="font-weight: bold;" href="https://www.youtube.com/watch?v=NK7Xbs_Jcmc" target="_blank">mostrando o aplicativo em funcionamento.</a></p>
              <p>Entre em <a style="font-weight: bold;" href="../contato.html" target="_blank">contato</a> e vamos trocar uma ideia sobre esse tópico, desenvolver uma solução, um produto, juntos ou exclusivo para seu negócio!</p>
            </div>


            <div id="s06" class="w3-container">
              <h4><b>Fontes</b></h4>
              <p><a style="font-weight: bold;" href="https://learn.microsoft.com/en-us/power-apps/powerapps-overview" target="_blank">What is Power Apps?</a></p>
              <p><a style="font-weight: bold;" href="https://www.heavy.ai/technical-glossary/graphical-user-interface" target="_blank">Graphical User Interface Definition</a></p>
              <p><a style="font-weight: bold;" href="https://www.labware.com/blog/how-does-a-lims-work" target="_blank">How Does a LIMS Work?</a></p>
              <p><a style="font-weight: bold;" href="https://interfusaoti.com.br/blog/como-funciona-o-lims/" target="_blank">Saiba como funciona o LIMS e alavanque os resultados do seu laboratório</a></p>
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

  // Modal Image Gallery
function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    //var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
}

  

  </script>

</body>
</html>
