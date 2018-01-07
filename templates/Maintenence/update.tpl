{include file='common/header.tpl'}

<div class="MaintenenceBody">
  <div class="MaintenenceTitle">
     UPDATE HOTEL
  </div>
  <div class="MaintenenceContent">
    <div class="MaintenenceImage">
      <img src="{$BASE_URL}Fotos/hotel.jpg" style="width:330px;height:260px;">
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
              <Option value={$hotel.ref_hotel}> {$hotel.nome_h} </Option>
            {/foreach}
            <input type="submit" name="botao2" value="Search" style="width:80px; height: 22px; margin-left:1em;font-family: 'Eras ITC', 'Eras Light ITC',  sans-serif; font-size: 15px;" >
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

{include file='common/footer.tpl'}
