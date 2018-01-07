<div class="MaintenenceBody" style="grid-row-start:4; grid-row-end:5; height:30em;background-color: #F2F2F2;">
  <div class="MaintenenceTitle" style="margin-top:1.5em;">
     NEW KOMBI
  </div><div class="MaintenenceContent">
    <div class="MaintenenceImage">
      <img src="{$BASE_URL}Fotos/kombi.jpg" style="width:20.5em;height:16.5em;">
    </div>
    <div class="MaintenenceForm">
      <div class="MaintenenceFormTitle">
        Please fill in the fields below:
      </div>
      <div class="MaintenenceFormContent">
        <div class="MaintenanceNameAlts">
          <br>
          Name <br>
        </div>
        <div class="MaintenanceOptionAlts">
          <form name="KombiInsert" method="POST" action="{$BASE_URL}actions/Maintenence/Insert/insert_kombi.php">
            <br>
            <input type="text" name="name_k" class="textcar" required value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.name_k)} {$FORM_VALUES.name_k} {/if}"> <br>
            <br>
            <input type="submit" name="botao3" value="INSERT" class="confirmButton">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
