<div class="MaintenenceBody" style="grid-row-start:1; grid-row-end:2; height:65em;">
  <div class="MaintenenceTitle">
     NEW TOUR
  </div><div class="MaintenenceContent">
    <div class="MaintenenceImage">
      <img src="{$BASE_URL}Fotos/newTour.jpg" style="width:20.5em;height:16.5em;">
    </div>
    <div class="MaintenenceForm">
      <div class="MaintenenceFormTitle">
        Please fill in the fields below:
      </div>
      <div class="MaintenenceFormContent">
        <div class="MaintenanceNameAlts">
          Name <br>
          City <br>
          HOTEL <br>
          Duration <br>
          Free Places  <br>
          Bus <br>
          Start date <br>
          Price <br>
          Kombi <br>
          Link Img Tour <br>
          Link Img2 <br>
          Link Img3 <br>
          Description <br>
        </div>
        <div class="MaintenanceOptionAlts">
          <form name="HotelAlteration" method="POST" action="{$BASE_URL}actions/Maintenence/Insert/insert_tour.php">
            <input type="text" name="name_t" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.name_t)} {$FORM_VALUES.name_t} {/if}" class="textcar" required> <br>
            <Select name='city'>
            {foreach $citys as $city}
              <option style="font-size: 1.5em;" value={$city.id_cidade}> {$city.nome_c} </option>
            {/foreach}
            <input type="hidden"> <br>
            <div class="dropdown2">
              <span class="dropbtn2" style="border:0px;"> choose hotels</span>
              <div class="dropdown-content2">
                {foreach $hotels as $hotel}
                  <input type="checkbox" name="{$hotel.ref_hotel}" value="{$hotel.ref_hotel}"> <font size=2em> {$hotel.nome_h} </font> &nbsp
                {/foreach}
              </div>
            </div>
            <input type="hidden"> <br>
            <input type="text" name="duration" class="textcar" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.duration)} {$FORM_VALUES.duration} {/if}" required> <br>
            <input type="text" name="free_places" class="textcar" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.free_places)} {$FORM_VALUES.free_places} {/if}" required> <br>
            <input type="text" name="bus" class="textcar" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.bus)} {$FORM_VALUES.bus} {/if}" required> <br>
            <input type="text" name="date" class="textcar"  value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.date)} {$FORM_VALUES.date} {/if}" required> <br>
            <input type="text" name="price" class="textcar" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.price)} {$FORM_VALUES.price} {/if}" required> <br>
            <Select name='kombi'>
            {foreach $kombis as $kombi}
              <option style="font-size: 1.5em;" value={$kombi.num_kombi}> {$kombi.nome_k} </option>
            {/foreach}
            <input type="hidden"> <br>
            <input type="text" name="link_img_tour" class="textcar" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.link_img_tour)} {$FORM_VALUES.link_img_tour} {/if}" required> <br>
            <input type="text" name="link_img2" class="textcar" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.link_img2)} {$FORM_VALUES.link_img2} {/if}" required> <br>
            <input type="text" name="link_img3" class="textcar"  value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.link_img3)} {$FORM_VALUES.link_img3} {/if}" required> <br>
            <input type="text" name="description" class="textcar"  value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.description)} {$FORM_VALUES.description} {/if}" style="width:800px;" required> <br>

            <input type="submit" name="botao3" value="INSERT" class="confirmButton">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
