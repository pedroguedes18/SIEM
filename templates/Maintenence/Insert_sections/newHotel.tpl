<div class="MaintenenceBody" style="grid-row-start:2; grid-row-end:3; background-color: #F2F2F2; height:40em;">
  <div class="MaintenenceTitle" style="margin-top:1.5em;">
     NEW HOTEL
  </div><div class="MaintenenceContent">
    <div class="MaintenenceImage">
      <img src="{$BASE_URL}Fotos/hotel.jpg" style="width:20.5em;height:16.5em;">
    </div>
    <div class="MaintenenceForm">
      <div class="MaintenenceFormTitle">
        Please fill in the fields below:
      </div>
      <div class="MaintenenceFormContent">
        <div class="MaintenanceNameAlts">
          Name <br>
          Price <br>
          Wi-Fi <br>
          Pool <br>
          Stars  <br>
          Link_img <br>
        </div>
        <div class="MaintenanceOptionAlts">
          <form name="HotelInsert" method="POST" action="{$BASE_URL}actions/Maintenence/Insert/insert_hotel.php">
            <input type="text" name="name_h" class="textcar" required value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.name_h)} {$FORM_VALUES.name_h} {/if}"> <br>
            <input type="text" name="price_h" class="textcar" required value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.price_h)} {$FORM_VALUES.price_h} {/if}"> <br>
            <input type="radio" name="wifi" value="TRUE"> <font size=4px> Yes &nbsp &nbsp
                                <input type="radio" name="wifi" value="FALSE" checked> No </font> <br>
            <input type="radio" name="pool" value="TRUE"> <font size=4px> Yes &nbsp &nbsp
            									  <input type="radio" name="pool" value="FALSE" checked> No </font> <br>
            <input type="radio" name="stars" value="1"> <font size=4px> 1&nbsp &nbsp
            									   <input type="radio" name="stars" value="2"> 2 &nbsp &nbsp
            									   <input type="radio" name="stars" value="3" checked> 3 &nbsp &nbsp
            									   <input type="radio" name="stars" value="4"> 4 &nbsp &nbsp
            									   <input type="radio" name="stars" value="5"> 5 </font> <br>
            <input type="text" name="link_img_hotel" class="textcar" required value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.link_img_hotel)} {$FORM_VALUES.link_img_hotel} {/if}"><br>
            <input type="submit" name="botao3" value="INSERT" class="confirmButton">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
