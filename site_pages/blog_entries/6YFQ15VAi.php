<!DOCTYPE html>
<html>
<title>Lab Control with Power Apps</title>
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
        <h4>Lab Control with Power Apps</h4>
    </div>

    <hr>
    <div class="w3-container">
      <h5>Sections</h5>
    </div>
    <div class="w3-bar-block">
      <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Hide menu</a>
      <a href="#s01" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Power Apps</a>
      <a href="#s02" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  LIMS</a>
      <a href="#s03" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  HR Blood Laboratory</a>
      <a href="#s04" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Considerations</a>
      <a href="#s05" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Extras</a>
      <a href="#s06" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Sources</a>
      <br>
      <a href="6YFQ15VA.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  PT-BR</a>
      <a href="../../site_pages/services.html#blog_6YFQ15VAi" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Back to blog</a>
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
              <h3><b>Lab Control with Power Apps</b></h3>
              <h5>Henrique Roncon, <span class="w3-opacity">July, 30th, 2023</span></h5>
            </div>
        
            <div id="s01" class="w3-container w3-justify">
              <p><i>#powerapps #microsoft #sharepoint #LIMS #laboratory #information #management #system</i></p>
              <div class="w3-row">
              </div>
            </div>

            <div class="w3-container w3-justify">
              <h4><b>Power Apps</b></h4>

              <p>
              I have discussed - and will continue to discuss - in other posts my passion for creating applications and the difficulty in finding resources for designing good user interfaces, or <i>graphical user interfaces</i> (GUIs). In general, the logic of programming, the objectives of applications, are independent of the GUI, so in this part, in the conceptualization and scope definition of the project, I usually don't have any problems. The development of the GUI often becomes the bottleneck in the creation process.
              </p>

              <p>
              An interesting option for creating applications is provided by Microsoft, called <b>Power Apps</b>. In a nutshell, this resource (which is paid and available through Microsoft 365 licenses) allows for the (almost) intuitive creation of visually appealing applications that can communicate with external resources (third-party databases) or with Microsoft's own resources, such as <b>Access</b>, <b>Power Automate</b>, and <b>Sharepoint</b>.
              </p>

              <p>
              The creation and editing of applications using the tool provided by Microsoft allow users with little or no experience in programming languages to develop functional programs. This is because the tool's interface is based on visual <i>drag and drop</i> resources and allows for basic connections to databases, such as a simple SharePoint list (which, with many reservations, we could compare to an online Excel spreadsheet). The interface as a whole is user-friendly, and the learning curve is quick. Developers working with this platform can improve and deliver better results in a short amount of time.
            </p>

            </div>
            <div id="s02" class="w3-container w3-justify">
              <h4><b>LIMS</b></h4>
              <p>
              <b>Laboratory Information Management Systems</b> (LIMS) are implemented in various industry segments, with their primary goal being the effective control of laboratory samples and associated data. The importance of a robust and well-implemented LIMS system is enormous. In addition to <b>cost reduction</b> and <b>increased productivity</b> related to sample management processes, <b>quality control</b> and <b>compliance with current standards</b> tend to be more rigorous and satisfactory, which is crucial in sectors such as pharmaceuticals or food.
              </p>
              <p>
                Managing samples with the assistance of LIMS software allows for not only individual sample control but also batch and lot control. For example, it enables tracking large quantities of samples in the event of a recall. It also streamlines the process of generating results, providing efficient access to information for teams that need it for analysis and for clients who need quick access to reports with confidence in the transparency of the information contained therein. Assuring clients that all steps, from sample collection to report issuance, are rigorously controlled positively impacts their experience.
              </p>
              <p>
                Gradually feeding data into the software's databases allows for in-depth analysis of the laboratory's internal procedures over the medium and long term. It helps identify areas where optimization is possible, ensures that the correct tests are being applied to the samples, and enables predictions by outlining trends. In summary, LIMS significantly increases the efficiency and accuracy of laboratory results by standardizing procedures and managing sample data and their dependencies.
              </p>
            </div>

            <div id="s03" class="w3-container w3-justify">
              <h4><b>HR Blood Laboratory</b></h4>
              <p>
                To explore the features of Power Apps, I developed the <b>HR Blood Laboratory</b> app, a European company that collects blood samples from patients and conducts various tests with them.
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_01.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Initial screen of the app.</figcaption>
              </div>
              <p>
                From the home page, we first go to the <b>Standards</b> section. Here, the (fictional) tests applicable to the samples collected from patients are displayed. There is a basic filter that allows you to check specific tests, as well as the possibility to edit an existing test or add a new one. Registering new tests is done through the <i>6897-DIY-HRBL2</i> form, which includes all the necessary data to add it to the database. Editing the data of a test is done through the <i>1989-DIY-HRBL2</i> form; however, the layout is the same for adding new tests. The difference between the forms is to demonstrate that the <i>create</i> and <i>edit</i> commands in the database are done independently.
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_02.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>List of available tests.</figcaption>
              </div>

              <p>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_03.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Test registration/editing.</figcaption>
              </div>
              <p>
                Starting again from the home page, we have the <b>Patients</b> section. Here, according to the filter on the right, the patients registered in the company's database are displayed. Initially, HR Blood Laboratory's scope is limited to Europe, specifically Germany, Belgium, and England. From this page, you can navigate to the tab for adding new patients to the database (<i>New</i> button), adding a new sample associated with the patient (<i>New sample</i> button), viewing the patient's sample and test history (Historic button), or editing the patient's record (<i>Edit</i> button).
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/6YFQ15VA_04.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>List of registered patients.</figcaption>
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
