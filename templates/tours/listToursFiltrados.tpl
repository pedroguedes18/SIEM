{foreach $toursFiltrados as $tourFiltrado}

    <div class="containerTour">
      <div class="photoTour">
          <img src="{$BASE_URL}Fotos/{$tour.linkimg}" class="imagephotoTour">
          <div class="overlay">
  					<p class="textOverlay">{$tourFiltrado.descricao}</p>
  				</div>
      </div>
      <div class="infoTourName">
        <p class="textTour"> {$tourFiltrado.nome_t} </p>
      </div>
      <div class="infoTourPrice">
        <p class="textTour"> {$tourFiltrado.custo_tour} </p>
      </div>
      <div class="infoTourCity">
        <p class="textTour"> {$tourFiltrado.nome_c} </p>
      </div>
      <div class="infoTourTime">
        <p class="textTour"> {$tourFiltrado.duracao} </p>
      </div>
      <div class="infoTourDate">
        <p class="textTour"> {$tourFiltrado.datapartida} </p>
      </div>
      <div class="infoTourBus">
        <p class="textTour"> {$tourFiltrado.vagas-$tourFiltrado.lotacao} / {$tourFiltrado.vagas} </p>
      </div>
      <div class="buttonBook">
        <form method='POST' action=''>
          <input  type="submit" name="botao3" value="BOOK" style="width:120px; height: 30px; opacity: 0.5; font-family: 'Eras ITC', 'Eras Light ITC',  sans-serif ; font-size: 20px; cursor: pointer; background-color: #2E64FE; color: white; border: none; border-radius: 6px;"></input>
        </form>
      </div>
      <div class="marginLeft">

      </div>
      <div class="marginRight">

      </div>
    </div>

{/foreach}
