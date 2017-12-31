<!DOCTYPE HTML>
<html>
  <head>
    <title>KombiWithUs</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="{$BASE_URL}css/StyleKombi.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{$BASE_URL}JavaScript/main.js"></script>
  </head>

  <body>
    {if isset($USERNAME)}
      {include file='common/menu/menu_logged_in.tpl'}
    {else}
      {include file='common/menu/menu_logged_out.tpl'}
    {/if}

    <section id="messages" style="z-index:1000;">
      {if isset($SUCCESS_MESSAGES)}
        {foreach $SUCCESS_MESSAGES as $success}
          <div class="success"> {$success} <a class="close" href="#">&#215;</a></div>
        {/foreach}
      {/if}

      {if isset($ERROR_MESSAGES)}
        {foreach $ERROR_MESSAGES as $error}
          <div class="error">{$error} <a class="close" href="#">&#215;</a></div>
        {/foreach}
      {/if}
    </section>
