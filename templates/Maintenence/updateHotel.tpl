{include file='common/header.tpl'}

<div class="MaintenenceBody">
  <div class="MaintenenceTitle">
     UPDATE HOTEL
  </div>
  <div class="MaintenenceContent">
    <div class="MaintenenceImage">
      <img src="{$BASE_URL}Fotos/hotel.jpg" style="width:20.5em;height:16.5em;">
    </div>
    <div class="MaintenenceForm">
      <div class="MaintenenceFormTitle">
        Fill the fields below for update data from hotel:
      </div>
      <div class="MaintenenceUpdateFormContent">
        <div class="MaintenenceHotelSearch">
          <form method="POST" action="{$BASE_URL}pages/Maintenence/Update.php" name="ChooseHotel"  >
            <span> Choose Hotel &nbsp; </span>
            <Select name='Hotel' id="hotelChosen">
            {foreach $hotels as $hotel}
              <Option {if $ref_hotel == $hotel.ref_hotel} selected {/if} value={$hotel.ref_hotel} > {$hotel.nome_h} </Option>
            {/foreach}
            <input type="submit" name="botao2" value="Search" style="width:80px; height: 22px; margin-left:1em; font-family: 'Eras ITC', 'Eras Light ITC',  sans-serif; font-size: 15px;" >
          </form>
        </div>
        <div class="MaintenenceHotelAlterations">
          <div class="MaintenanceNameAlts">
            Name <br>
            Price <br>
            Wi-Fi <br>
            Pool <br>
            Stars <br>
            Link_img
          </div>
          <div class="MaintenanceOptionAlts">
            <form name="HotelAlteration" method="POST" action="{$BASE_URL}actions/Maintenence/Update/update_hotel.php">
              <input type="text" name="name_h" class="textcar"> <br>
              <input type="text" name="price_h" class="textcar"> <br>
              <input type="radio" name="wifi" value="TRUE"> <font size=4px> Yes &nbsp &nbsp
                                  <input type="radio" name="wifi" value="FALSE"> No </font> <br>
              <input type="radio" name="pool" value="TRUE"> <font size=4px> Yes &nbsp &nbsp
              									  <input type="radio" name="pool" value="FALSE"> No </font> <br>
              <input type="radio" name="stars" value="1"> <font size=4px> 1&nbsp &nbsp
              									   <input type="radio" name="stars" value="2"> 2 &nbsp &nbsp
              									   <input type="radio" name="stars" value="3"> 3 &nbsp &nbsp
              									   <input type="radio" name="stars" value="4"> 4 &nbsp &nbsp
              									   <input type="radio" name="stars" value="5"> 5 </font> <br>
              <input type="text" name="link_img_hotel" class="textcar"><br>
              <input type="hidden" name="ref_hotel" value="{$ref_hotel}">
              <input type="submit" name="botao3" value="UPDATE" class="confirmButton">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{include file='common/footer.tpl'}
