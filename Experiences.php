<!DOCTYPE html>
<html lang="fr">
 <?php include("head.php"); ?>
<body role="document">
  <a name="Debut"></a>
     <!--===============intro barrage========-->
  <div class="container">
    <div class="start-template">
      <h1 align="center"><img src="images/expp.png">
        Experiences
      </h1>
      <h2 align="left">
        Les barrages hydroélectriques
      </h2>
      <p class="lead">
        L’hydroélectricité est une source d’énergie renouvelable, c’est-à-dire qui ne consomme pas de ressource à échelle humaine, cela représente 16,3% de la production électrique dans le monde 
        ce  qui n’est donc pas négligable. Les avantage de cette source d’énergie sont : le faible coût de production, le peu d’émission de CO<sub>2</sub> et la possibilité de stocker et de délivrer de  
        l’électricité à volonté    <br><br>
        <img src="images/Barrage_schema" align="right">
        <i>Une centrale hydroélectrique est composeé essentiellement de :</i><br>
        <li> une vanne de contrôle : permet de laisser plus ou moins écouler l’eau un conduit : guide l’eau vers la turbine</li>
        <li>une turbine hydraulique : dispositif qui utilise l’énergie cinétique de l’eau (vitesse d’écoulement) pour faire tourner ses palles dans le but de convertir celle-ci en énergie mécanique</li>
        <li>un alternateur : machine constituée d’un stator (partie fixe) et d’un stator (partie tournante) le mouvement de celui-ci autour du stator produit un champ magnétique et ainsi une tension 
        électrique  
        ( phénomène d’induction électromagnétique)</li>
        <li>un transformateur : machine permettant d’élever une tension Le tout est relié au réeau électrique.</li>
      </p>
    </div>
    <h4 align="center">
      <br> Les barrages hydroélectriques se basent sur les principes de l’hydroélectricité :
    </h4>
    <p align="center">
      <br>l’énergie cinétique de l’eau dût à sa chute et transformée en energie mécanique grâce à une turbine reliée à un alternateur qui va transformer celle-ci en energie électrique.
    </p>
    <p align="center"><img src="images/Chaine energe.png" align="center"></p>
    <p align="center" >
      <i>Nous nous sommes demandé qu’elles étaient les paramétres à faire varier pour obtenir une production en puissance électrique maximal, puis nous avons décidé de nous intéresser plus 
      particuliérement aux paramétres liés au conduit.
      <br> Nous allons donc étudier dans un premier temps la hauteur de chute de l’eau, le débité laquelle l’eau est lâchée et la hauteur d’eau dans le réservoir puis à d’autres paramétres que nous n’avons pas
      expérimenté mais qui reste indispensable à une telle installation.</i>
    </p>
  </div>  

           <!--=======================premiere experience=====================-->
  <hr class="featurette-divider">
  <div class="container">
    <div class="start-template">
      <h1 align="left">La hauteur de chute de le l'eau</h1>
      <p>
       La hauteur de chute de l’eau est un élément important dans une centrale, en effet, on peut classer les centrales en trois types de classement :<br>
       1. Les hautes chutes (supérieur à 200 mètres)<br>
       2. Les chutes moyennes (entre 50 et 200 mètres)<br>
       3. Les chutes basses (50 mètres)<br>
       La hauteur de chute permet de déterminer la turbine la plus adaptés aux conditions de la central avec les meilleurs rendements, par exemple :<br>
       La turbine Pelton pour les hautes chutes (avec un rendement de 90%)<br>
       La turbine Francis pour les chutes moyennes (avec un rendement entre 80 et 95%) La turbine Kaplan pour les chutes basses (avec un rendement de 90% à 95%)<br>
       Ce qui différentie ces différentes turbines, c’est leurs diamètres, vitesses de rotation et la forme des palles.<br>
       En théorie, plus la hauteur de chute de l’eau est importante, plus la puissance produite est importante. Nous avons voulu vérifier expérimentalement cette affirmation, pour cela, nous avons reproduit le fonctionnement d’une centrale hydroélectrique à notre échelle.<br>
       Pour ce faire nous avons utilisé une cuve avec un indicateur de niveau pouvant contenir environs 64cm d’eau, pour l’entrée de l’eau , nous avons assemblé deux tuyau entre eux afin de pouvoir augmenter plus ou moins la hauteur sans être gêné, en ce qui concerne la sortie d’eau on a fabriqué un « squelette » en forme d’angle droit pour notre tuyau qui était flexible afin que l’eau puisse arriver verticalement par rapport à la turbine.<br>
       Comme nous l’avons dit précédemment, notre objectif est de voir la variation de production de puissance électrique en fonction de la hauteur de la chute d’eau, nous avons donc eu à faire deux types de mesures :<br>
       la première est la hauteur en la sortie de l’eau du conduit et le point d’impact avec la première palle de la turbine nous réalisons cette mesure à l’aide d’un mètre ruban.<br>
       La deuxième mesure est celle de la puissance, à nos débuts, nous utilisions un wattmètre, cependant celui-ci n’était pas assez précis, nous avons donc décidé de mettre en œuvre la relation P=U*I (où P est la puissance en W, U est la tension en V et I est l’intensité en A) pour cela il était donc indispensable de mesurer la tension à
       l’aide d’un voltmètre et l’intensité à l’aide d’un ampèremètre.
      </p>
      <p align="center"><img src="images/mnt.png" class="img-rounded"></p>
      <p>
        <i> Nous avons utilisé une ampoule pour faire un circuit fermé et pouvoir ainsi mettre le voltmètre en dérivation. Pour faire varier la hauteur de chute nous avons surélevé la cuve sur des 
        supports élévateurs, nos mesures ont été faites de 5cm de chute à 70cm tout en gardant un débit constant de 4.8L/min.</i>
      </p>
      <p align="center"><img src="images/mtg.png"></p>
      <div class="input-group">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">RÉSULTATS<span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <img src="images/cob.png">
            <p><font color="black"><br>La courbe rouge est modélisée sur un modèle affine et la courbe bleu relie simplement les points mesurés.<br>
               On étudiera la courbe modélisée, celle si ne passe pas par l’origine, cependant il est impossible d’un point de vue pratique de produire de l’électricité quand la sortie d’eau est au <br>contact de la turbine car celle-ci serait bloqué,<br> c’est pour cela que nous avons commencé nos mesures à partir de laquelle la sortie d’eau n’est pas en contact avec les palles de la turbine soit à une hauteur de 5cm.<br>
               On observe que plus la hauteur de chute est grande, plus la puissance produite est importante ce qui confirme donc l’hypothèse de départ, <br>les barrages à haute chute sont donc les plus intéressent en terme de production électrique. On remarque que la courbe, même sans modélisation à une allure de droite <br>On en déduit que la puissance électrique est proportionnel à la hauteur de chute. <br>Grâce à notre logiciel de mesures nous avons pu établir la relation suivante : P=20.2*H+4 <i>cette relation s’applique pour notre maquette mais pas obligatoirement à tous les barrages.</i><br>
               On obtient un écart type de 4,8% d’écart type sur cette expérience, ce qui raisonnable étant donné les multiples problèmes auxquels nous fusse confronté : <li>les fuites de notre cuve</li> <li>l’instabilité des valeurs affichés de l’ampèremètre</li><li></li> la turbine qui n’était pas droite mais surtout la régulation du débit, en effet nous devions faire de tels sorte que le débit reste constant de manière manuelle.</font></p>
          </ul>
        </div>
      </div>    
    </div>
  </div>  

            <!--=====================éieme experience=============-->
    <hr class="featurette-divider">
    <div class="container">
      <div class="start-template">
        <h1 align="left">Hauteur de l’eau dans la cuve et débit :</h1>
        <p>
          Dans une centrale hydroélectrique il est possible de modifier la hauteur d’eau stockée dans la cuve et le débit d’écoulement (on admet pour l’instant que la hauteur dans la cuve et le débit son
          liés, nous tenterons de le démontrer expérimentalement) en ouvrant plus ou moins la vanne. C’est un élément important de la central car ce système d’ouverture de la vanne permet d’obtenir une
          production d’électricité plus ou moins grande selon la demande du consommateur (on produira plus d’électricité durant les heures de pointes pour les particuliers par exemple).<br>
          Suite à nos recherche nous nous pouvons affirmer que la hauteur d’eau dans la cuve est lié avec le débit d’écoulement en effet nous avons trouvé une équation mettant en relation ces deux 
          paramètres : P=g*Q*H (où P est la puissance de l’eau en W, g le champ de pesanteur soit 9.81m/s, Q le débit de l’eau en m^3/s et H la hauteur en m) et avons émis l’hypothèse que l’évolution du 
          débit est proportionnelle avec la production d’énergie électrique, nous allons donc tester cette hypothèses expérimentalement.<br>
          Le but de notre expérience est de mesurer la puissance électrique produite en fonction de la hauteur d’eau dans la cuve et du débit de l’eau. Pour ce faire nous avons utilisé le même montage que 
          lors de l’expérience précédente à peu de chose près, en effet exit les supports élévateurs (on garde la hauteur de chute constante) on utilise aussi un récipient et une éprouvette gradué en 
          plus du matériel de la première expérience. Les mesures que nous devions faire lors de cette manipulation étaient :
          <li>la hauteur d’eau dans la cuve, nous avons mesuré ceci en graduant l’indicateur de niveau (une graduation tous les centimètres)</li>
          <li>le débit de l’eau, on mesure ceci en laissant couler l’eau dans notre récipient pendant 30secondes puis on transvase le contenu dans une éprouvette gradué, on multiplie le résultat par deux
          pour obtenir une mesure en L/s</li>
          <li>la puissance produite, comme la première fois en utilisant un ampèremètre et un voltmètre pour mesurer le courant et la tension puis en appliquant la relation P= U*I</li>
          <br>On obtient donc ce montage :
        </p>
        <p align="center"><img src="images/mtg2.png"></p>
        <p>
          Nous avons effectués toutes les mesures simultanément par soucis de temps.
          Grâce à nos mesures, nous avons alors pu tracer ces différentes courbes, la première représentant le débit en fonction de la hauteur, la seconde représentant la puissance électrique produite
          en fonction du débit et la troisième représentant la puissance électrique produite en fonction de la hauteur d'eau dans la cuve.
        </p>
      </div>
    </div>
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img src="images/cb1.png" style="width: 400px; height: 400px;">
          <p>
            <i>Ecart expérience-modèle 3,9 % sur Débit(Hauteur) Ecart quad. Débit=154,1 10a3 L/min Vm=7,17 ±1,00 KM=24,2 ±8,4) donc débit propor<br>Cette courbe représente la puissance électrique en 
            fonction du débit, on remarque alors que lorsque le débit est faible, aucune puissance électrique n'est produite car la turbine ne tourne que très peu, voir pas du tout. Lorsqu'un débit
            minimum  est atteint et qu'une puissance électrique est produite, on remarque alors que la puissance électrique produite est proportionnelle au débit puisqu'à quelques erreurs près de 
            manipulations, notre courbe obtenue est droite</i>
          </p>
        </div>
        <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <img src="images/cb3.png" style="width: 400px; height: 400px;">
            <p>
              Ecart expérience-modèle 3,3 % sur P(Hauteur)
              Ecart quad. P=48,8 μW
              a=(42,7 ±4,0) 10a¥ N.sa1 b=-491,00 ±140,00 μW<br>La courbe bleu représente la modélisation de notre courbe et la courbe rouge représente les points reliés, on remarque qua la courbe 
              représentant la puissance électrique en fonction du débit et la courbe représentant la puissance électrique en fonction de la hauteur d'eau dans la cuve ont la même allure, on en déduis 
              donc que le débit est bien proportionnel à la hauteur</p>
          </div>
        </div>
      </div>
    </div>
</body>
<div align="center">
        <ul class="pagination">
          <li class="disabled"><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
</div>
 <?php include("footer.php"); ?>
</html>