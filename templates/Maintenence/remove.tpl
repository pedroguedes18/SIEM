{include file='common/header.tpl'}

<div class="MaintenenceBody">
  <div class="MaintenenceTitle" style="margin-top:3.5em;">
     REMOVE LOCAL
  </div><div class="MaintenenceContent">
    <div class="MaintenenceImage">
      <img src="{$BASE_URL}Fotos/removeLocal.png" style="width:20.5em;height:16.5em;">
    </div>
    <div class="MaintenenceForm">
      <div class="MaintenenceFormTitle">
        Choose from the list below the local to remove
      </div>
      <div class="MaintenenceFormContent">
        <div class="MaintenanceNameAlts">
          <br> Local <br>
        </div>
        <div class="MaintenanceOptionAlts">
          <form name="LocalInsert" method="POST" action="{$BASE_URL}actions/Maintenence/Remove/remove_local.php">
            <input type="hidden"> <br>
            <Select name='local'>
            {foreach $locals as $local}
              <option style="font-size: 1.5em;" value={$local.id_local}> {$local.nome_l} </option>
            {/foreach}
            <input type="hidden"> <br>
            <input type="submit" name="botao3" value="REMOVE" class="DeleteButton">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


{include file='common/footer.tpl'}
