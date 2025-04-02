<html lang="pt">
  <!-- <head> -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InfoJogos</title>
    <link rel="icon" href="imagens/infojogosicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo"><img src="imagens/infojogos.png"></a>

        <ul class="nav_items">
          <li class="nav_item">
            <a href="index.html" class="nav_link active" >Home</a>
            <a href="#" class="nav_link">Produtos</a>
            <a href="#" class="nav_link">Contactos</a>
          </li>
        </ul>

        <button class="button" id="form-open">Iniciar sessão</button>
      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="#">
            <h2>Iniciar Sessão</h2>

            <div class="input_box">
              <input type="email" placeholder="Email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Lembrar-me</label>
              </span>
              <a href="#" class="forgot_pw">Esqueceu a sua password?</a>
            </div>

            <button class="button">Entrar agora</button>

            <div class="login_signup">Não tem uma conta?<a href="#" id="signup">Criar</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form action="#">
            <h2>Criar</h2>

            <div class="input_box">
              <input type="email" placeholder="Email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Confirmar password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button">Entrar agora</button>

            <div class="login_signup">Já tem uma conta? <a href="#" id="login">Entrar</a></div>
          </form>
        </div>
      </div>
    </section>

    <script src="script.js"></script>

    <section>          
			<div class="bloco" >
				<br>
				<h3 align=center> InfoJogos </h3>	
				<br><br><br>
        <br>
				<p style="text-align:justify";>Um novo site para comprar a bom preço os jogos atuais e antigos!!!!
				<br>
				Queres os melhores jogos para PC, PlayStation ou Xbox? No InfoJogos, encontras uma vasta seleção de títulos para todas as plataformas, desde os lançamentos mais aguardados até aos clássicos intemporais.
        Compra de forma fácil e segura e recebe os teus jogos rapidamente para começares a jogar sem esperas. Explora a nossa coleção e encontra o teu próximo grande jogo hoje mesmo!!!!
				</p>
				<br><br>	
				<br><br>
      </div>


	<!-- ############### Rodapé do site ############################## -->
  <footer>
			<?php include('footer.php'); ?>
		</footer>		
     </body>
</html>