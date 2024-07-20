<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Masters Solutions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./View/css/style.css">
    <link rel="stylesheet" href="./View/css/Main.css">
    <!-- <link rel="stylesheet" href="MTS/css/style.css"> -->

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

</head>

<body>

    <!-- icludes -->
    <?php include_once "./preloader.php"; ?>
    <!-- Navbar -->
    <header>
        <nav class="navigation">
            <a href="#" class="logo">T<span>ech</span> M<span>asters</span> S<span>olutions</span></a>
            <img src="./View/Assets/logo.png" alt="">
            <ul class="nav-menu">
                <li class="nav-item"><a href="#home">Inicio</a></li>
                <li class="nav-item"><a href="#about">Sobre-Nos</a></li>
                <li class="nav-item"><a href="#projects">Projectos</a></li>
                <li class="nav-item"><a href="#">Orcamento</a></li>
                <li class="nav-item"><a href="#">Contactos</a></li>
            </ul>
            <button class="theme-btn">dark/light</button>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <!-- Home Section -->
    <section class="home">
        <div class="home-text">
            <h4 class="text-h4">Bem Vindo A</h4>
            <h1 class="text-h1 typewriter">Tech Masters Solutions</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod error
                veniam in voluptatem magni quisquam
            </p>
            <a href="#" class="home-btn">Pedir-Orcamento</a>
        </div>
        <div class="home-img" data-aos="fade-up">
            <img src="./View/Assets/imgs/vectors/img4.png" alt="hamburguer" />
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5" >
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-5 first-col">
                    <h6>Quem somos Nos</h6>
                    <strong>Somos uma equipe que é composta por especialistas em diversas áreas da tecnologia.
                    </strong>
                    <p>Nossa Missão e Transformar desafios tecnológicos em soluções simples e eficientes, proporcionando aos
                        nossos clientes uma vantagem competitiva no mercado.</p>

                    <a href="#services" class="btn btn-primary btn-lg">Veja Mais... </a>

                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 second-col">
                    <div class="img-about img-fluid">
                        <img src="./View/Assets/fundo-home.jpg" alt="" class="img-fluid">
                        <div class="experience-circle">
                            <p><strong>0+</strong></p>
                            <span>Anos de experiência</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="section" id="projects">
        <div class="top-header" data-aos="fade-up">
            <h1>Projects</h1>
        </div>
        <div class="project-container" data-aos="fade-up">
            <div class="project-box">
                <i class="uil uil-briefcase-alt"></i>
                <h3>Titulo</h3>
                <label>Descricao do que fazemos</label>
            </div>
            <div class="project-box">
                <i class="uil uil-users-alt"></i>
                <h3>Titulo</h3>
                <label>Descricao do que fazemos</label>
            </div>
            <div class="project-box">
                <i class="uil uil-award"></i>
                <h3>Titulo</h3>
                <label>Descricao do que fazemos</label>
            </div>
        </div>


        <!-- Services Section -->
        <section id="services" class="py-6 " data-aos="fade-up">
            <div class="container">
                <h2 class="text-center">Nossos Serviços</h2>
                <p class="text-center d-flex align-items-center justify-content-center">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Ducimus, iste! Laudantium cupiditate sapiente commodi porro maiores voluptatum</p>
                <div class="row d-flex  justify-content-center">
                    <div class="col-md-3 " data-aos="fade-up">
                        <h4>Desenvolvimento de Software</h4>
                        <p>Criação de aplicações personalizadas para atender às necessidades específicas do seu negócio.</p>
                    </div>
                    <div class="col-md-3 text-center" data-aos="fade-up">
                        <h4>Consultoria em TI</h4>
                        <p>Orientação especializada para otimizar a infraestrutura e os processos tecnológicos da sua empresa.</p>
                    </div>
                    <div class="col-md-3 text-center" data-aos="fade-up">
                        <h4>Suporte Técnico</h4>
                        <p>Assistência técnica eficiente para garantir que seus sistemas estejam sempre funcionando perfeitamente.
                        </p>
                    </div>
                    <div class="col-md-3 text-center" data-aos="fade-up">
                        <h4>Paginas Web</h4>
                        <p>Assistência técnica eficiente para garantir que seus sistemas estejam sempre funcionando perfeitamente.
                        </p>
                    </div>
                    <div class="col-md-3 text-center" data-aos="fade-up">
                        <h4>Design Grafico</h4>
                        <p>Assistência técnica eficiente para garantir que seus sistemas estejam sempre funcionando perfeitamente.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-5" data-aos="fade-up">
            <div class="container">
                <h2 class="text-center">Contato</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Entre em contato</h4>
                        <form>
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" placeholder="Seu nome">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Seu email">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensagem</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Sua mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h4>Nossos Contatos</h4>
                        <p><strong>Endereço:</strong> Rua Exemplo, 123, Cidade, País</p>
                        <p><strong>Telefone:</strong> (00) 1234-5678</p>
                        <p><strong>Email:</strong> contato@techmasters.com</p>
                        <p><strong>Redes Sociais:</strong></p>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer text-light text-center">
            <div class="container">
                <p>&copy; 2024 Tech Masters Solutions. Todos os direitos reservados.</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#home">Home</a></li>
                    <li class="list-inline-item"><a href="#about">Sobre Nós</a></li>
                    <li class="list-inline-item"><a href="#services">Serviços</a></li>
                    <li class="list-inline-item"><a href="#contact">Contato</a></li>
                </ul>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
        <script src="./Controller/script.js"></script>
</body>

</html>