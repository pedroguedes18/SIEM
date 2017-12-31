{include file='common/header.tpl'}

  <div class="ContainerSignIn">
    <div class="login">
      <div class="loginTitle">
        <p class="SignInTitle"> Become the next traveler <span style="color:#2F5599"> <b> KombiWithUs </b> </p>
      </div>

        <div class="loginForm">
            <div class="SignInFormTitle">
              <b> Login and <span style="color:#2F5599"> Enjoy it </b>
            </div>

            <form class="FormLogin" name="Login" method='POST' action='{$BASE_URL}actions/SignIn/login.php'>
                <p style="padding: 1em;"> <input class="inputSignIn" type="text" id="username" name="usernameL" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.usernameL)} {$FORM_VALUES.usernameL} {/if}" placeholder="Username"> </p>
                <p style="padding: 1em;"> <input class="inputSignIn" type="password" id="password" name="passwordL" placeholder="Password"> </p>
                <p style="padding-bottom: 1em; padding-right:4.5em; text-align: right;"> <input type="submit" name="botao1" value= "Log in" style="width:4.5em; height: 2em; font-family: 'Eras ITC', 'Eras Light ITC',  sans-serif ; font-size: 1.2em;"> </p>
            </form>
        </div>
      </div>

    <div class="register">
      <div class="registerForm">
        <div class="SignInFormTitle">
          <b> Register now! It's <span style="color:#2F5599"> FREE </b>
        </div>

        <form class="FormRegister" name="Register" action='{$BASE_URL}actions/SignIn/register.php'  method='POST'>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="name" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.name)} {$FORM_VALUES.name} {/if}" placeholder="NAME" > </p>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="email" placeholder="EMAIL" > </p>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="contact" value="{if isset($FORM_VALUES) && !empty($FORM_VALUES.contact)} {$FORM_VALUES.contact} {/if}" placeholder="CONTACT" > </p>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="text" name="username" placeholder="USERNAME" onkeyup="showUserResult(this.value)">
              <p class="UserCheckInfo"> <span id="txtHint"></span></p> </p>
          <p style="padding: 0.5em;"> <input class="inputSignIn" type="password" name="password" placeholder="PASSWORD" > </p>
          <p style="padding-bottom: 0.5em; padding-right:3.8em; text-align: right;"> <input type="submit" name="botao2" value= "Register" style="width:4.5em; height: 2em; font-family: 'Eras ITC', 'Eras Light ITC',  sans-serif ; font-size: 1.2em;"> </p>
        </form>
      </div>
    </div>
  </div>
