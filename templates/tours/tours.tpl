{include file='common/header.tpl'}

<body>

{include file='menu/menu.tpl'}

<div class="container">
  <div class="searchBar">
    {include file='tours/searchBar.tpl'}
  </div>
  <div class="listTours" id="Tours">
    <div class="space"></div>
    {include file='tours/listTours.tpl'}
  </div>
  <div class="listToursFiltrados" id="Tours2">
    <div class="space"></div>
    {include file='tours/listTours.tpl'}
  </div>
</div>

{include file='common/footer.tpl'}
