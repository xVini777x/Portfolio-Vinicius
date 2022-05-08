<html lang="pt-br">

<head>
  <title>Portfólio</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="debug">
  <section class="container-home">
    <nav class="site-nav js-site-nav" role="navigation" aria-label="navigation">
      <div class="site-nav__curtain js-nav-curtain"></div>

      <div class="wrapper wrapper__nav-area">
        <button class="menu-button js-menu-button" aria-expanded="false" aria-controls="menu" aria-label="Menu button">
          <span class="menu-button__lines">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </span>
        </button>

        <a class="logo" href="#">Portfólio</a>

        <ul class="site-nav__menu u-list-reset js-menu" id="menu">
          <li><a class="site-nav__link" href="#">Home</a></li>
          <li>
            <a class="site-nav__link" href="#sobremim-position">Sobre mim</a>
          </li>
          <li>
            <a class="site-nav__link" href="#projects-position">Projetos</a>
          </li>
          <li><a class="site-nav__link" href="#skill-position">Skills</a></li>
          <li><a class="site-nav__link" href="#">Contato</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="text-box">
        <p>i'm</p>
        <h1>vinicius</h1>
        <h3>desenvolvedor web</h3>
        <div>
          <span>Você pode explorar mais sobre meu portfólio e <br />Experiências
            da minha vida pessoal aqui<br /></span>
        </div>
      </div>
    </div>
  </section>

  <main>
    <!--  SECTION - SOBRE MIM  -->
    <section id="sobremim-position" class="content-about">
      <div class="container">
        <div>
          <header class="text-box-header">
            <h1>Sobre mim</h1>
            <p>&#8722;<span>Quem sou eu</span> &#8722;</p>
          </header>

          <div class="row">
            <div class="col-12 col-lg-3 align-items-center justify-content-center">
              <figure>
                <img class="about-foto" src="assets/css/images/foto-vinicius.jpeg" alt="foto de vinicius" />
              </figure>
            </div>
            <div class="text-box-about mt-5 mt-lg-0 col-12 col-lg-9">
              <h2><span class="animation-js"></span></h2>
              <p>
                Atualmente, sou desenvolvedor web e estou me graduando em
                Ciência da Computação pela Universidade Estadual do
                Ceará(UECE). Sempre fui muito ligado a tecnologia desde novo e
                sempre estou em busca de novos desafios, seja aprendendo algo
                novo, desde fazer algum projeto complexo.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  SECTION - SOBRE MIM - END -->

    <!--  SECTION - MEUS PROJETOS  -->
    <section id="projects-position" class="container-projects">
      <div class="container">
        <header class="text-box-projects">
          <h1>Meus projetos</h1>
          <p>
            <span>&#8722;</span>
            <span>Aqui você poderá ver meus atuais projetos feitos</span>
            <span>&#8722;</span>
          </p>
        </header>
        <div id="slide-projetos" class="owl-carousel owl-theme owl-loaded owl-drag">
          <div>
            <a href="https://xvini777x.github.io/projeto-pizzaria/">
              <figure>
                <img src="assets/css/images/imagem-pizzaria.jpg" alt="" />
                <p>Projeto de uma pizzaria</p>
              </figure>
            </a>
          </div>
          <div>
            <a href="https://xvini777x.github.io/Projeto_figma/">
              <figure>
                <img src="assets/css/images/imagem-one-page.png" alt="" />
                <p>Projeto de uma one-page</p>
              </figure>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="skill-position" class="container-skills">
      <div class="container">
        <header>
          <h1>Minhas Skills</h1>
        </header>
        <div class="container-skills__grid">
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/html-5.png" alt="" />
            </figure>
            <h3>html5</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/css-3.png" alt="" />
            </figure>
            <h3>css3</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/sass.png" alt="" />
            </figure>
            <h3>sass</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/js.png" alt="" />
            </figure>
            <h3>javascript</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/php.png" alt="" />
            </figure>
            <h3>php</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/git.png" alt="" />
            </figure>
            <h3>git</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/wordpress-logo.png" alt="" />
            </figure>
            <h3>wordpress</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/gulp.png" alt="" />
            </figure>
            <h3>gulp</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
          <div class="conf-grid">
            <figure>
              <img src="assets/css/images/FileZilla_logo.png" alt="" />
            </figure>
            <h3>filezilla</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
              nihil recusandae repellat quaerat assumenda, explicabo nemo
              aspernatur
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="container-forms">
      <div class="container">
        <div class="container-forms__box-forms">
          <h1>Entre em contato comigo</h1>
          <div class="row">
            <div class="col-12 col-lg-6">
              <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_ipd377dh.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
            </div>
            <div class="col-12 col-lg-6">
              <form class=conf-forms>
                <h3>Contate-me</h3>
                <div class="d-flex">
                  <div>
                    <input type="text" required placeholder="informe seu nome" ><br>
                  </div>
                  <div>
                    <input type="email" required placeholder="Informe seu e-mail"><br><br>
                  </div>
                </div>
                <textarea required placeholder="Escreva sua mensagem"></textarea>
                <div>
                  <input type="submit" value="Enviar">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--  SECTION - MEUS PROJETOS - END -->

  <!--  SCRIPT -->
  <script src="assets/js/main.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script>
    var typed = new Typed(".animation-js", {
      strings: ["Olá, me chamo Vinicius", "Entenda um pouco sobre mim"],
      typeSpeed: 60,
      backSpeed: 60,
      loop: true,
    });

    ScrollReveal({
      reset: true,
      distance: "60px",
      duration: 800,
      delay: 400,
    });
    ScrollReveal().reveal(".content-about", {
      origin: "top"
    });
    ScrollReveal().reveal("#slide-projetos", {
      origin: "left"
    });
    ScrollReveal().reveal(".conf-grid", {
      origin: "left"
    });
  </script>
  <!--  SCRIPT - END -->
</body>

</html>