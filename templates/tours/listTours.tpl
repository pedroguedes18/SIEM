
{foreach $tours as $tour}

    <div class="containerTour">
      <div class="photoTour">
          <img src="{$BASE_URL}Fotos/{$tour.linkimg}" alt="tourImage" class="imagephotoTour">
          <div class="overlay">
  					<p class="textOverlay">{$tour.descricao}</p>
  				</div>
      </div>
      <div class="infoTourName">
        <p class="textTour"> {$tour.nome_t} </p>
      </div>
      <div class="infoTourPrice">
        <p class="textTour"> {$tour.custo_tour} </p>
      </div>
      <div class="infoTourCity">
        <p class="textTour"> {$tour.nome_c} </p>
      </div>
      <div class="infoTourTime">
        <p class="textTour"> {$tour.duracao} </p>
      </div>
      <div class="infoTourDate">
        <p class="textTour"> {$tour.datapartida} </p>
      </div>
      <div class="infoTourBus">
        <p class="textTour"> {$tour.vagas-$tour.lotacao} / {$tour.vagas} </p>
      </div>
      <div class="buttonBook">
        <form method='POST'>
          <input  type="submit" name="botao3" value="BOOK" style="width:120px; height: 30px; opacity: 0.5; font-family: 'Eras ITC', 'Eras Light ITC',  sans-serif ; font-size: 20px; cursor: pointer; background-color: #2E64FE; color: white; border: none; border-radius: 6px;">
        </form>
      </div>
      <div class="marginLeft">

      </div>
      <div class="marginRight">

      </div>
    </div>

{/foreach}
