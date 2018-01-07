<div class="MaintenenceBody" style="grid-row-start:3; grid-row-end:4; height:33em;">
  <div class="MaintenenceTitle" style="margin-top:1.5em;">
     NEW LOCAL
  </div><div class="MaintenenceContent">
    <div class="MaintenenceImage">
      <img src="{$BASE_URL}Fotos/local.jpg" style="width:20.5em;height:16.5em;">
    </div>
    <div class="MaintenenceForm">
      <div class="MaintenenceFormTitle">
        Please fill in the fields below:
      </div>
      <div class="MaintenenceFormContent">
        <div class="MaintenanceNameAlts">
          Name <br>
          Ticket Price <br>
          Cidade <br>
          Link_img <br>
        </div>
        <div class="MaintenanceOptionAlts">
          <form name="LocalInsert" method="POST" action="{$BASE_URL}actions/Maintenence/Insert/insert_local.php">
            <input type="text" name="name_l" class="textcar" required value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.name_l)} {$FORM_VALUES.name_l} {/if}"> <br>
            <input type="text" name="price_l" class="textcar" required value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.price_l)} {$FORM_VALUES.price_l} {/if}"> <br>
            <Select name='city'>
            {foreach $citys as $city}
              <option style="font-size: 1.5em;" value={$city.id_cidade}> {$city.nome_c} </option>
            {/foreach}
            <input type="hidden"> <br>
            <input type="text" name="link_img_local" class="textcar" required value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.link_img_local)} {$FORM_VALUES.link_img_local} {/if}"><br>
            <input type="submit" name="botao3" value="INSERT" class="confirmButton">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
