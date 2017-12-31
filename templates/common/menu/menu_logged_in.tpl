
<section id="menu">

  <div class="menu">
    {if $PAGE == "InitialPage"}
      <div class="text_menu" style="padding-top:0.5em;"> <p style="line-height: 0em;"> <img src={$BASE_URL}Fotos/kombi_menu.png style="width:2em;height:1.2em;"> </p> <p> <a class= "simple" href = "{$BASE_URL}" target="_self">KombiWithUs  </a> </p> </div>
      <div class="text_menu"> <a class="InitialPage" href="#AboutUS"> About US </a></div>
      <div class="text_menu"> <a class="InitialPage" href="#Regions"> Regions </a> </div>
      <div class="text_menu"> <a class="Generic" href = "{$BASE_URL}Tours/Form_ApresentaTours.php" target="_self"> Tours </a> </div>
      <div class="text_menu"> <a class="InitialPage" href="#Founders"> Founders </a> </div>
      {if $ADMIN == 'TRUE'}
        <div class="dropdown">
          <button class="dropbtn">Maintenence</button>
          <div class="dropdown-content">
            <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_Insert.php">Insert Info</a>
            <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_remove.php">Remove Info</a>
            <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_update.php">Update Info</a>
          </div>
        </div>
      {/if}
      <div class="text_menu"> <a class="InitialPage" href="#Downloads"> Downloads </a> </div>
      <div class="dropdown">
        <button class="dropbtn">{$USERNAME}</button>
        <div class="dropdown-content">
							<a href="{$BASE_URL}pages/MyTours/mytours.php">My Tours</a>
							<a href="{$BASE_URL}actions/SignIn/logout.php">Logout </a>
			  </div>
      </div>
    {else}
      <div class="text_menu" style="padding-top:0.5em;"> <p style="line-height: 0em;"> <img src={$BASE_URL}Fotos/kombi_menu.png style="width:2em;height:1.2em;"> </p> <p> <a class= "simple" href = "{$BASE_URL}" target="_self">KombiWithUs  </a> </p> </div>
      <div class="text_menu"> <a class="Generic" href="{$BASE_URL}pages/InitialPage/initialPage.php#AboutUS"> About US </a></div>
      <div class="text_menu"> <a class="Generic" href="{$BASE_URL}pages/InitialPage/initialPage.php#Regions"> Regions </a> </div>
      <div class="text_menu"> <a class="Generic" href = "{$BASE_URL}Tours/Form_ApresentaTours.php" target="_self"> Tours </a> </div>
      <div class="text_menu"> <a class="Generic" href="{$BASE_URL}pages/InitialPage/initialPage.php#Founders"> Founders </a> </div>
      {if $ADMIN == 'TRUE'}
        <div class="dropdown">
          <button class="dropbtn">Maintenence</button>
          <div class="dropdown-content">
            <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_Insert.php">Insert Info</a>
            <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_remove.php">Remove Info</a>
            <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_update.php">Update Info</a>
          </div>
        </div>
      {/if}
      <div class="text_menu"> <a class="Generic" href="{$BASE_URL}pages/InitialPage/initialPage.php#Downloads"> Downloads </a> </div>
      <div class="dropdown">
        <button class="dropbtn">{$USERNAME}</button>
        <div class="dropdown-content">
							<a href="{$BASE_URL}pages/MyTours/mytours.php">My Tours</a>
							<a href="{$BASE_URL}actions/SignIn/logout.php">Logout </a>
			  </div>
      </div>
    {/if}

  </div>
</section>
