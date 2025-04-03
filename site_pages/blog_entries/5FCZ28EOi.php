<!DOCTYPE html>
<html>
<title>Business Analysis: Northwind Traders</title>
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
        <h4>Business Analysis: Northwind Traders</h4>
    </div>

    <hr>
    <div class="w3-container">
      <h5>Seções</h5>
    </div>
    <div class="w3-bar-block">
      <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Hide menu</a>
      <a href="#s02" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Business and goals</a>
      <a href="#s03" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Northwind Traders</a>
      <a href="#s04" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Extras</a>
      <a href="#s05" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Source</a>
      <br>
      <a href="5FCZ28EO.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  PT-BR</a>
      <a href="../../site_pages/servicos.html#blog_5FCZ28EO" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i>  Back to blog</a>
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
            <img src="blog_images_01-10/5FCZ28EO_12.png" style="width:70%">
          </div>
 
            <div class="w3-container">
              <h3><b>Business Analysis: Northwind Traders</b></h3>
              <h5>Henrique Roncon, <span class="w3-opacity">September, 5th, 2023</span></h5>
            </div>
        
            <div id="s01" class="w3-container w3-justify">
              <p><i>#powerbi #powerplatform #data #analytics #northwind #traders #microsoft</i></p>
              <div class="w3-row">
              </div>
            </div>

            <div id="s02" class="w3-container w3-justify">
              <h4><b>Business and goals</b></h4>
              <p>
                Business analysis - widely known today, even in Brazil, as Business Intelligence - has its primary goal as understanding a company's past and present through the data it generates, with the help of BI software. While historical analysis is not the primary function of such software, it is through historical analysis that one can identify flaws or bottlenecks in the business, reasons for declining revenue, market comprehension, and trends, among many other factors that, if improved, can potentially bring positive results for the company in the future.
              </p>
            </div>

            <div id="s03" class="w3-container w3-justify">
              <h4><b>Northwind Traders</b></h4>
              <p>
                In order to provide a sample database for testing to its users, Microsoft offers the data of the fictional company Northwind Traders in the Access application. In this example, there is information about the products sold by Northwind, data related to purchase orders, inventory, suppliers, customers, employees... a compact database, but with enough inputs for an initial approach to business analysis. In this project, I use PowerBI to retrieve data from this database, define indicators that I believe are relevant to the company, and analyze them, suggesting, through them, improvement opportunities and potential revenue.
              </p>

              <h5><b>Current Overview</b></h5>
              <p>
                Note: The date of the last entry in the <i>orders</i> file was considered the fictitious date of project creation, which is May 6, 1998.
              </p>

              <p>
                As of the present moment, <i>May 6, 1998</i>, we have recorded 270 purchase orders for the year, with revenue of $440,623.87. These sales primarily occurred in Europe (across 15 different countries) and in the United States. However, there were significant sales in South America, such as in Brazil, representing 10.4% of the total purchase orders and 10.2% of the annual revenue – ranking fourth in this list, behind only the United States, Germany, and Austria. The current average order value is $1,631.94. It's also important to note that the sales team is distributed between the United States and the United Kingdom.
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_01.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Charts of purchase orders and revenue by country.</figcaption>
              </div>

              <p>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_02.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Distribution of employees by country.</figcaption>
              </div>

              <p>
                In total, 16,247 products have been sold so far, with the top three sellers in this period being Konbu (<i>Seafood</i>, ID number 13, 659 units sold), Guaraná Fantástica (<i>Beverages</i>, ID number 24, 546 units sold), and Camembert Pierrot (<i>Dairy</i>, ID number 60, 542 units sold). The top three products leading in revenue are Côte de Blaye (<i>Beverage</i>, accounting for 15.3% of total revenue with 260 units sold), Thüringer Rostbratwurst (<i>Meat</i>, responsible for 7.6% of revenue with 318 units sold), and Raclette Courdavault (<i>Dairy</i>, accounting for 6.0% with 513 units sold).
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_03.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Unit quantity of products sold</figcaption>
              </div>

              <p>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_04.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Total revenue by product.</figcaption>
              </div>

              <h5><b>Historical analysis</b></h5>

              <p>
                Taking into consideration all the available data, it is possible to analyze sales information dating back to July 1996. With these resources, we can observe that between the years 1996 and 1997, there was an increase of approximately 168% in the number of purchase orders (from 152 to 408), and revenue increased from $208,083.97 to $617,085.20 - an increase of approximately 196%. The average order value grew by 10.5%, going from $1,368.97 to $1,512.46.
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_05.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Sales and revenue history between 1996 and 1997.</figcaption>
              </div>

              <p>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_06.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Charts of purchase orders and revenue by country between 1996 and 1997.</figcaption>
              </div>

              <p>
                During that period, as shown by the data for the current year, Germany and the United States topped the list of countries that made the most purchases and generated revenue for the company. Brazil ranks third among countries that placed the most purchase orders at Northwind Traders in both years, also accounting for the fifth-highest revenue for the company during that period.
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_07.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Charts of purchase orders and revenue by country between 1996 and 1997.</figcaption>
              </div>

              <p>
                In terms of products, there was a 166% increase in the overall sales volume (from 9,581 items to 25,489 items sold), with notable jumps of 380% in the number of <i>Grains/Cereal</i> sales (from 549 to 2,636 items), 205% in <i>Confections</i> (from 1,357 to 4,139 items), and 201% in <i>Condiments</i> (from 962 to 2,895 items). The top-selling products were Gorgonzola Telino (<i>Dairy</i>, ID 31, totaling 1,100 units sold during the period and a 48% increase between 1996 and 1997), Gnocchi di Nonna Alice (<i>Grains/Cereals</i>, ID 56, totaling 1,067 units sold during the period and a significant 911% increase between 1996 and 1997), and Camembert Pierrot (<i>Dairy</i>, ID 60, totaling 1,035 units sold during the period and a 79% increase in sales between 1996 and 1997). Revenue in 1996 and 1997 was led by Côte de Blaye (<i>Beverages</i>, accounting for 9% of the revenue during the period), followed by Thüringer Rostbratwurst (<i>Meat</i>, representing 6% of the revenue) and Raclette Courdavault (<i>Dairy</i>, with 5% of the total revenue).
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_11.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>
                  History of sales volume and categories in the period between 1996 and 1997.
                </figcaption>
              </div>

              <h5><b>Future projections</b></h5>

              <p>
                Northwind Traders' numbers are solid and show good growth rates, and, combined with the analyses presented so far, there is room for improvement in the company's results.
              </p>

              <p>
                In order to set goals and market strategies, we will estimate the data for the first half of 1996 for a better foundation. Since the first halves of 1997 and 1998 are discrepant – the first showing an increase in sales and revenue, while the other indicates a decline in both – it is not possible to identify a market trend during this period without additional information. Therefore, we will <b>hypothetically consider</b> that the number of sales/revenue in the first half of 1996 is equal to 65% of what was achieved in the second half. Thus, we <b>estimate that the total sales</b> in 1996 are 250, the <b>estimated revenue</b> is $343,338.55, and consequently, the <b>estimated average ticket</b> is $1,373.35. In relation to 1997, we would then have a "<i>real</i>" growth of 63% in purchase orders (from 250 to 408) and an 80% increase in revenue ($343,338.55 to $617,085.20).
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_08.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Sales and revenue history in 1997 by semester.</figcaption>
              </div>

              <p>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_09.png" style="width:50%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Histórico de vendas e faturamento em 1997 por semestre.</figcaption>
              </div>

              <h5><b>Goals</b></h5>

              <p>
                With the considerations regarding 1996 and a growth parameter between 1996 and 1997 established, it is recommended to set a goal of achieving <b>694</b> purchase orders for 1998. This would represent an <b>increase of 70%</b> compared to 1997 – higher but close to the 63% increase calculated between 1996 and 1997. Similarly, for revenue, it is recommended to adopt the value of <b>$1.141.607,62</b> as a goal, representing an <b>85% increase</b> compared to 1997 (the estimated increase between 1996 and 1997 was 80%). With these numbers, the projected average ticket for 1998 is <b>$1644,97</b>, which means an <b>8.8% increase</b> compared to 1997 (the estimated increase in the average ticket between 1996 and 1997 was 10%).
              </p>

              <p>
                For a better estimate and goal definition, more data and information are essential. Nevertheless, it is understood that the previously recommended values are safe and consistent with the size of Northwind Traders, as they are close to the values practiced in previous years and aim for the company's ambitious growth.
              </p>

              <p>
                In addition to economic indicators, it is also recommended to increase market share in Europe by expanding trade with at least <b>5 more countries</b> on the continent (totaling trade with 20 countries in the European Union). In the Americas, it is also recommended to increase market share by expanding into at least <b>1 more country</b>, so the company is involved with 6 different countries.
              </p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_10.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>The goals set for 1998.</figcaption>
              </div>

              <h5><b>Estratégias</b></h5>

              <p>
                To achieve the participation indicators, <b><i>it is recommended to hire 2 Sales Representatives</i></b>: one fluent in German and another fluent in Spanish and Portuguese.
                <ul>
                  <li>
                    The employee fluent in German can be dedicated to trade with Germany, which is very strong, and boost sales in Austria and Switzerland - both of which have increased their consumption of Northwind products. Consequently, one employee would be freed from the demand of these countries and could focus on prospecting more customers in other countries (aiming to achieve the EU participation goal) or on maintaining existing ones.
                  </li>
                  <li>
                    The employee fluent in Spanish and Portuguese is essential. The trade in Brazil is solid, with high potential, and it is imperative that due attention be given to Brazilian customers - both for their retention and for prospecting new ones. As a <i>plus</i>, it is possible to explore the market in Portugal, which is still modest in Northwind's revenue charts. With fluency in Spanish, customer service in Spain and Latin America would also be better managed, since there are already three countries in the Americas (Venezuela, Argentina, and Mexico) with Spanish as their native language consuming Northwind products. Not only that: there are several other countries in the continent where Spanish is spoken, so prospecting new customers in new countries could also be facilitated.O funcionário fluente em Espanhol e Português é fundamental. 
                  </li>
                </ul>
              </p>

              <p>
                With the goal of increasing revenue and average ticket value, as well as expanding the market through the new sales representatives, it is suggested to invest in <i><b>cross-selling</b></i> actions for products. Cross-selling involves offering an item that was initially not considered by the customer at the time of purchase. This way, within the same purchase, revenue is maximized, and the average ticket value, as a result, increases.
              </p>

              <p>
                Among the many possible <i><b>cross-selling</b></i> configurations with Northwind Traders' products*, the following is proposed:
                <p>
                  *The <i>discontinued</i> column of the <i>products</i> table was not taken into consideration here.
                </p>
                <ul>
                  <li>
                    For the products <b>Camembert Pierrot</b>, <b>Raclette Courdavault</b>, and <b>Gorgonzola Telino</b> (the top three products in terms of quantity sold in Northwind's history, all of which are in the <i>Dairy</i> category and pair well with beverages, pastries, and chocolates), during the checkout process, we propose offering beverages (<i>Beverages</i>), sweets (<i>Produce</i>), and pastries (<i>Grains/Cereals</i>) to the customer. Currently, we can offer items such as <b>Sasquatch Ale</b> (<i>Beverage</i>, with a low price of $14 and high inventory, 111 units), <b>NuNuCa Nuss-Nogaut-Creme</b> (from the <i>Confections</i> category, also priced at $14 with high inventory, 76 units), and <b>Ravioli Angelo</b> from the <i>Grains/Cereals</i> group. Ravioli has a good inventory level (36 units) and has been selling well this year, with 35% of orders coming from Portuguese or Spanish-speaking countries and 30% from German-speaking countries. A secondary opportunity here is to create a <b>campaign to boost the sale of this product bundle</b> by the two new employees who will be hired to serve customers speaking these languages.
                  </li>
                  <li>
                    that <b>exclusive product baskets</b> be created, each containing one item from each category. For example, it's possible to create a complete product basket containing <b>Côte-de-Blaye</b> (<i>Beverages</i>, $2635 per unit), <b>Thüringer Rostbratwurst</b> (<i>Meat</i>, $12379 per unit), <b>Raclette Cordavault</b> (<i>Dairy</i>, $55 per unit), <b>Tarte au Sucre</b> (<i>Confections</i>, $493 per unit), <b>Gnocchi di Nonna Alice</b> (<i>Grains/Cereals</i>, $38 per unit), and <b>Manjumup Dried Apples</b> (<i>Produce</i>, $53 per unit). These are 7 of the top 8 products that have generated the most revenue for Northwind Traders so far and have a high added value, thereby increasing the average ticket value.
                  </li>
                  <li>
                    that <b>product packages</b> be created, similar to the exclusive baskets mentioned above, but with the goal of <b>reducing inventory</b> or <b>boosting products with low sales</b>. The item <b>Chocolade</b> (<i>Confections</i>), despite being relatively expensive ($1275), had 130 units sold in 1997 and only 8 in 1998, so it could be considered for the exclusive baskets since there is inventory available (15 units). Another <i>Confections</i> product that could be considered for the baskets is <b>Schoggi Schokolade</b>, which is slightly more affordable at $439 per unit and has good inventory available (49 units). Another product that could be considered for a basket is <b>Röd Kaviar</b> (<i>Seafood</i>, $15 per unit), which had good sales in 1997 (256 units) but hasn't performed as well in 1998, with only 12 units sold, and there's the additional challenge of having 101 units in inventory.
                  </li>
                </ul>
              </p>
            </div>

            
            <div id="s04" class="w3-container">
              <h4><b>Considerations</b></h4>
              <p>
                It's possible to analyze the available data from Northwind Traders in many different ways and using various methods. In this analysis, I chose not to delve into advanced statistical or computational methods, often referred to as predictive analytics, because, in my understanding, there isn't a solid historical dataset available (in this case, we have data for only a year and a half of operation) that would allow for conclusive results using complex tools. Despite the short time frame, there are several tables with a considerable volume of data that I haven't fully explored. It's clear, then, that there's significant room for improvement and expansion of the results I've presented!
              </p>
            </div>

            <div class="w3-center">
                <p><a style="font-weight: bold;" href="https://www.novypro.com/project/northwind-traders-a-business-analysis-power-bi" target="_blank">Click here to access and interact with the Power BI dashboard.</a></p>
              </div>

            <p>.</p>

            <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_13.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Main screen.</figcaption>
              </div>

              <p>.</p>

              <div class="w3-center">
                <img src="blog_images_01-10/5FCZ28EO_14.png" style="width:80%" class ="image_hv" onclick="onClick(this)">
                <figcaption>Products screen.</figcaption>
              </div>

            <div id="s05" class="w3-container">
              <h4><b>Extras</b></h4>
              <p>
                <a style="color:red; font-weight: bold;" href="../../site_projects/5FCZ28EO.rar" style="text-decoration:none">Download this project by clicking here.</a>
              </p>
              <p>
                <a style="font-weight: bold;" href="../contato.html" target="_blank">Get in touch</a>, and let's discuss this topic, develop a solution, a product, together or exclusively for your business!
              </p>
            </div>

            <div id="s06" class="w3-container">
              <h4><b>Fontes</b></h4>
              <p><a style="font-weight: bold;" href="https://learn.microsoft.com/en-us/power-bi/fundamentals/power-bi-overview" target="_blank">What is Power BI?</a></p>
              <p><a style="font-weight: bold;" href="https://techcommunity.microsoft.com/t5/access-blog/announcing-new-templates-for-microsoft-access-northwind-2-0-is/ba-p/3806082" target="_blank">Announcing New Templates for Microsoft Access: Northwind 2.0 is here!</a></p>
              <p><a style="font-weight: bold;" href="https://github.com/jpwhite3/northwind-SQLite3" target="_blank">Database (github)</a></p>
              <p><a style="font-weight: bold;" href="https://code.google.com/archive/p/northwindextended/downloads" target="_blank">Database (Google)</a></p>


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
