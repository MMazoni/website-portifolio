<?php
// This would be your framework default bootstrap file

// During dev, this file would be hit when accessing your local host, like:
// http://vite-php-setup.test

require_once __DIR__ . '/helpers.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css" >
        <title>Matheus Mazoni</title>
    </head>
    <body>
        <header>
            <div class="header-call">
                <span id="nav-button" class="icon-bars"></span>
            </div>
            <nav id="menu">
                <ul>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#education">Formação</a></li>
                    <li><a href="#experience">Experiência</a></li>
                    <li><a href="#skills">Habilidades</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <button class="icon-top"><span class="icon-chevron-up"></span></button>
            <section id="welcome">
                <div class="welcome-content">
                    <h1 class="text-center">Matheus Mazoni 
                        <br />
                        <small>back-end & front-end {developer}</small>
                        <a href="#about">
                            <span class="icon-chevron-down"></span>
                        </a>
                    </h1>
                </div>
            </section>
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-12">    
                            <h2>Sobre <br /><span>mim</span></h2>
                            <p>
                                Sou um <i>web devoloper</i> iniciante e amo <span>basquete</span>. Comecei a jogar e acompanhar a NBA 
                                desde os meus doze anos, desde lá é a coisa que mais gosto de fazer(antes da programação). 
                                Sempre tive vontade de andar de skate. Até comprei um quando já era adulto, porém nunca andei. 
                                Substitui meu gosto e passei a andar de <span>bicicleta</span>, atualmente é mais do que
                                um mero meio de transporte, mas um hobby. 
                                A música sempre fez parte da minha vida, aprendi a tocar violão com meu irmão, 
                                o que me fez ter algumas bandas na adolescência. <span>Pop-punk</span> é o meu estilo favorito, 
                                apesar de gostar de variados gêneros musicais.
                            </p>
                            <p>
                                Sou fã do Homem Aranha, graças ao desenho dos anos 90, 
                                depois consumi todo o conteúdo relacionado ao <span>teioso</span>, desde os quadrinhos aos
                                filmes. Tenho o hábito de ler e de alguns anos para cá, tive vontade de começar 
                                a escrever. Criei meu <a href="https://mmazoni.github.io" target="_blank">blog de tecnologia</a>,
                                que descreve minhas experiências nesse caminho que resolvi trilhar.
                            </p>
                            <p>
                                O que me fez querer trabalhar com tecnologia(desenvolvimento) foi os dois semestres que tive 
                                de <span>Linguagem de Programação</span> no meu antigo curso de Automação. Mudei de cidade 
                                e decidi mudar também de faculdade e curso. 
                                Hoje estou no último ano de ADS na Fatec Baixada Santista, não me arrependo da mudança, pois 
                                gosto muito do que estou fazendo e vejo que sempre irei aprender coisas novas, pois em tecnologia 
                                tudo muda muito rápido e é isso que me motiva a seguir nessa carreira.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="education">
                <div class="education-container">
                    <div class="container">
                        <h2>Formação</h2>
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-sm-10 col-xl-5">
                                <h3>Automação Industrial</h3>
                                <h4>IFSP Cubatão - 2015 a 2017</h4>
                                <p>Curso tecnólogo de 3 anos que capacita o aluno a atuar com automação 
                                no foco industrial. Esta formação possui uma grade enxuta de engenharia, 
                                como Matemática, Física, Eletroeletrônica, Informática e com matérias 
                                específicas de automação, como Microcontroladores, Controladores Lógico 
                                Programáveis, Robótica entre outras.</p>
                            </div>
                            <div class="col-md-5 col-lg-5 col-sm-10 offset-md-1 offset-lg-1 col-xl-5">
                                <h3>Análise e Desenvolvimento de Sistemas</h3>
                                <h4>Fatec Rubens Lara - Conclusão 12/2020</h4>
                                <p>Curso tecnólogo de 3 anos voltada para formar analistas/desenvolvedores 
                                para o mercado de  trabalho. Sua grade vai de matérias essenciais como 
                                Lógica de Programação, Orientação a Objeto, Banco de Dados, como também 
                                matérias de gestão e empreendedorismo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="skills">
                <div class="container">
                    <div class="row">
                        <div class="col-12">    
                            <h2>Habilidades</h2>
                            <p>
                                Abaixo estão listados as ferramentas que utilizo no meu dia-a-dia e as com o estudo em andamento:
                            </p>
                            <div class="container-skills">
                                <h3>Front-end</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <span class="icon-html5"></span>
                                        <span class="icon-css3"></span>
                                        <span class="icon-bootstrap"></span>
                                        <span class="icon-javascript"></span>
                                        <span class="icon-jquery"></span>
                                        <span class="icon-vue-dot-js"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container-skills">
                                <h3>Back-end</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <span class="icon-php"></span>
                                        <span class="icon-laravel"></span>
                                        <span class="icon-python"></span>
                                        <span class="icon-flask"></span>
                                        <span class="icon-django"></span>
                                        <span class="icon-node-dot-js"></span>
                                        <span class="icon-mysql"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container-skills">
                                <h3>Outros</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <span class="icon-composer"></span>
                                        <span class="icon-git"></span>
                                        <span class="icon-gitlab"></span>
                                        <span class="icon-gulp"></span>
                                        <span class="icon-linux"></span>
                                        <span class="icon-npm"></span>
                                        <span class="icon-pypi"></span>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Tenho objetivo em trabalhar com back-end na parte web, utilizando PHP ou Python. No entanto, 
                                também toparia aprender mais sobre front-end e UX, pois meu foco é ser um fullstack no futuro.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="experience">
                <div class="container">
                    <h2><span>Experiência</span><br /> profissional</h2>
                    <div class="row">
                        <div class="col-12">
                            <h3>Santos Port Authority - Estágio de Desenvolvedor de Sistemas</h3> 
                            <h4>Desde Set/2019 até o momento atual</h4>
                            <p>
                                Em setembro de 2019 consegui meu primeiro estágio na área de tecnologia. 
                                Fiquei na parte de desenvolvimento web. Eu criava e atualizava o site
                                 do Porto de Santos (WordPress) 
                                e a intranet(PHP e ASP Clássico). Entrei em um período da empresa de modernizações, 
                                as tecnologias estavam mudando e aprendi junto com toda a equipe. 
                                Começamos o desenvolvimento com o framework PHP, o <strong>Laravel</strong>. 
                                Na parte do front-end utilizamos 
                                <strong>Bootstrap e Vue.js.</strong> Foi implantado o <strong>Git</strong> para versionamento e o 
                                Jenkins para Entrega Continua. 
                                No meu primeiro projeto, fiz as telas de um sistema de envio de documentos online com Bootstrap e 
                                Jquery. Nunca tinha feito nada assim, aprendi na prática e pegava uns cursos online por fora. 
                                Teve um tempo para eu começar a ter uma familiaridade com as tecnologias. 
                                Hoje, estou desenvolvendo <strong>API Rest</strong> com Lumen, documentando com o Swagger e usando o Vue.js
                                para consumir as API's.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="container">
                    <h2>Contato</h2>
                    <form id="form" method="post">
                    <ul id="messages"></ul>
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome">
                        <span id="msg_name" class="erro-validation"></span>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                        <span id="msg_email" class="erro-validation"></span>
                    </div>
                    <div>
                        <label for="assunto">Assunto</label>
                        <input type="text" id="assunto" name="assunto">
                        <span id="msg_subject" class="erro-validation"></span>
                    </div>
                    <div>
                        <label for="conteudo">Conteúdo</label>
                        <textarea name="conteudo" id="conteudo" cols="25" rows="3"></textarea>
                        <span id="msg_content" class="erro-validation"></span>
                    </div>
                    <button id="btn-submit" type="submit" name="submit">Enviar</button>
                </form>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <ul>
                            <li><a href="#about">Sobre</a></li>
                            <li><a href="#education">Formação</a></li>
                            <li><a href="#experience">Experiência</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#contact">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6  col-12 list-icon">
                        <ul>
                            <li><a href="https://github.com/MMazoni" target="_blank"><span class="icon-github"></span></a></li>
                            <li><a href="https://www.linkedin.com/in/matheus-mazoni/" target="_blank"><span class="icon-linkedin"></a></span></li>
                            <li><a href="mailto:mmazoni.andrade@gmail.com"><span class="icon-gmail"></span></a></li>
                        </ul>
                        <p><a href="https://mmazoni.github.io/" target="_blank">https://mmazoni.github.io/</a></p>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col">
                        <p class="copyright"> ©  Matheus Mazoni</p>
                    </div>
                </div>
            </div>
        </footer>
		<?php echo jsTag('app.js'); ?>
    </body>
</html>