
<Select name='Cidade'>

  <Option value="anycity">Any City</Option>
  {foreach $cities as $city}
    <Option value="{$city.nome_c}">{$city.nome_c}</Option>
  {/foreach}

</Select>
