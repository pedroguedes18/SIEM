
<section id="menu">

  <div class="menu">
    {if $PAGE == "InitialPage"}
      <div class="text_menu" style="padding-top:0.5em;"> <p style="line-height: 0em;"> <img src={$BASE_URL}Fotos/kombi_menu.png style="width:2em;height:1.2em;"> </p> <p> <a class= "simple" href = "{$BASE_URL}" target="_self">KombiWithUs  </a> </p> </div>
      <div class="text_menu"> <a class="InitialPage" href="#AboutUS"> About US </a></div>
      <div class="text_menu"> <a class="InitialPage" href="#Regions"> Regions </a> </div>
      <div class="text_menu"> <a class="Generic" href = "{$BASE_URL}Tours/Form_ApresentaTours.php" target="_self"> Tours </a> </div>
      <div class="text_menu"> <a class="InitialPage" href="#Founders"> Founders </a> </div>
      <div class="text_menu"> <a class="InitialPage" href="#Downloads"> Downloads </a> </div>
      <div class="text_menu"> <a class="SignIn" href= "{$BASE_URL}pages/SignIn/SignIn.php"> Sign In </a> </div>
    {else}
      <div class="text_menu" style="padding-top:0.5em;"> <p style="line-height: 0em;"> <img src={$BASE_URL}Fotos/kombi_menu.png style="width:2em;height:1.2em;"> </p> <p> <a class= "simple" href = "{$BASE_URL}" target="_self">KombiWithUs  </a> </p> </div>
      <div class="text_menu"> <a class="Generic" href="{$BASE_URL}pages/InitialPage/initialPage.php#AboutUS"> About US </a></div>
      <div class="text_menu"> <a class="Generic" href="{$BASE_URL}pages/InitialPage/initialPage.php#Regions"> Regions </a> </div>
      <div class="text_menu"> <a class="Generic" href = "{$BASE_URL}Tours/Form_ApresentaTours.php" target="_self"> Tours </a> </div>
      <div class="text_menu"> <a class="Generic" href="{$BASE_URL}pages/InitialPage/initialPage.php#Founders"> Founders </a> </div>
      <div class="text_menu"> <a class="Generic" href="{$BASE_URL}pages/InitialPage/initialPage.php#Downloads"> Downloads </a> </div>
      <div class="text_menu"> <a class="SignIn" href= "{$BASE_URL}pages/SignIn/SignIn.php"> Sign In </a> </div>
    {/if}

  </div>
</section>
