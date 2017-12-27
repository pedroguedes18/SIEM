{include file='common/header.tpl'}

<body>
  {include file='menu/menu.tpl'}

  <div class="ContainerSignIn">
    <div class="login">
      <div class="loginTitle">
        <p class="SignInTitle"> Become the next traveler <span style="color:#2F5599"> <b> KombiWithUs </b> </p>
      </div>

        <div class="loginForm">
            <div class="SignInFormTitle">
              <b> Login and <span style="color:#2F5599"> Enjoy it </b>
            </div>

            <form class="FormLogin" name="Login" method='POST' action='{$BASE_URL}Login/verifica_dados.php'>
                <p style="padding: 1em;"> <input class="inputSignIn" type="text" id="username" name="username" value="Username"> </p>
                <p style="padding: 1em;"> <input class="inputSignIn" type="password" id="password" name="password" value="Password"> </p>
                <p style="padding-bottom: 1em; padding-right:4.5em; text-align: right;"> <input type="submit" name="botao1" value= "Log in" style="width:100px; height: 40px; font-family: 'Eras ITC', 'Eras Light ITC',  sans-serif ; font-size: 20px;"> </p>
            </form>
        </div>
      </div>

    <div class="register" name="Register" method='POST' action='{$BASE_URL}Register/trata_dados.php'>
      <div class="registerForm">
        <div class="SignInFormTitle">
          <b> Register now! It's <span style="color:#2F5599"> FREE </b>
        </div>

        <form class="FormRegister">
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="nome" value="NAME" required> </p>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="email" value="EMAIL" required> </p>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="contacto" value="CONTACTO" required> </p>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="username" value="USERNAME" required> </p>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="password" value="PASSWORD" required> </p>
          <p style="padding-bottom: 0.5em; padding-right:3.8em; text-align: right;"> <input type="submit" name="botao2" value= "Register" style="width:100px; height: 40px; font-family: 'Eras ITC', 'Eras Light ITC',  sans-serif ; font-size: 20px;"> </p>
        </form>
      </div>
    </div>
  </div>

</body>
