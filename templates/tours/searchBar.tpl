
<form method='GET' action="{$BASE_URL}pages/Tours/tours.php" >

			<div class="containerFiltro semi-square">
				<div class="item" style="padding: 0.3em 0">
					<div class="styled-select blue semi-square">
							{include file='tours/dropdown.tpl'}
					</div>
				</div>

				<div class="item" style="padding: 0.3em 0">
						<input class="inputFilter" type="text" value="Maximum Price" name="PriceMax" id="Price">
				</div>

				<div class="item" style="padding: 0.3em 0">
						<input class="inputFilter" type="text" value="Travelers" name="Viajantes" id="Viajantes">
				</div>

				<div class="item" style="padding: 0.3em 0">
					<div class="styled-select blue semi-square">
						<Select name="Order" id="Order">
							<Option value="anyorder">Any Order</Option>
							<Option value="custo_tour">Order By Price</Option>
							<Option value="datapartida">Order By Date</Option>
						</Select>
					</div>
				</div>

				<div class="item" style="padding: 0.3em 0">
					<p class="center">
					<form action="" method="GET">
					    <button id="btnSearch" type="submit" name="SearchTour">SEARCH</button>
					</form>

					</p>
				</div>
			</div>

	</form>
