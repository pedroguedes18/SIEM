{include file='common/header.tpl'}

<div class="MyTours">
  <div class="bodyMytours">
    <div class="titleMyTours">
      <p> <b>MY TOURS</b></p>
    </div>
    <div class="reservations">
      {if $numReservations.count > 0}
        {$i = 0}
        {foreach $reservations as $reservation}
          <article class="singleReservation">
              <div class="RerservationImageTitle">
                <img src={$BASE_URL}Fotos/{$reservation.linkimg} style="width:10em;height:5em;">
                <span style="text-align: center;"> {$reservation.nome_t} </span>
              </div>
              <div class="ReservationContent">
                <span> City: {$reservation.nome_c} </span> <br>
                <span> {$reservation.duracao} Hours</span> <br>
                <span> Date: {$reservation.datapartida}</span> <br>
                <span> Hotel:  {$reservation.nome_h}</span> <br>
                <span> Atractions:</span>
                {if $numAtractions[$i].count > 0}
                  {foreach $atractions[$i] as $atraction}
                    <span style="font-size: 0.9em;"> {$atraction.nome_l} ;&nbsp; </span>
                  {/foreach}
                {else}
                  <span style="font-size: 0.9em;"> No atractions for this reservation </span>
                {/if}
              </div>
              {if $reservation.realizado == FALSE}
                  <div class="ReservationDelete">
                    <form name="deleteReservation" method='POST' action='{$BASE_URL}actions/UserPage/deleteReservation.php'>
                      <input type="hidden" name="ref_reserva" value= "{$reservation.ref_reserva}">
                      <input type="image" src="{$BASE_URL}Fotos/delete.png" style="width:4em;height:4em;" alt="Submit Form">
                    </form>
                  </div>
              {/if}
          </article>
          {$i = $i+1}
        {/foreach}
      {else}
        <b> NO RESERVATION YET </b>
      {/if}
    </div>
  </div>
</div>

{include file='common/footer.tpl'}
