
<form method='POST' action=''>

			<div class="containerFiltro semi-square">
				<div class="item" style="padding: 0.3em 0">
					<div class="styled-select blue semi-square">
							{include file='tours/dropdown.tpl'}
					</div>
				</div>

				<div class="item" style="padding: 0.3em 0">
						<input class="inputFilter" type="text" value="Maximum Price" name="PriceMax"></input>
				</div>

				<div class="item" style="padding: 0.3em 0">
						<input class="inputFilter" type="text" value="Travellers" name="Viajantes"></input>
				</div>

				<div class="item" style="padding: 0.3em 0">
					<div class="styled-select blue semi-square">
						<Select name='Order'>
							<Option value="anyorder">Any Order</Option>
							<Option value="custo_tour">Order By Price</Option>
							<Option value="datapartida">Order By Date</Option>
						</Select><p>
					</div>
				</div>

				<div class="item" style="padding: 0.3em 0">
					<p align=center>
					<input id="btnSearch" type="submit" name="SearchTour" value="SEARCH" onclick="showhide(toursToHide)" class="buttonSearch"></input>
				</div>
			</div>

	</form>
