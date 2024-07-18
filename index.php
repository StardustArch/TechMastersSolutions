<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Masters Solutions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- icludes -->
    <?php include_once "./preloader.php"; ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" data-aos="fade-up">
        <a class="navbar-brand" href="#"><img src="./Assets/logo.png" alt="">Tech Masters Solutions</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="d-flex align-items-center justify-content-center  home-section" style="height: 100vh;" data-aos="fade-up">
        <div class="text-center">
            <!-- <img src="./323807986_3704092469832487_6186636151820287463_n.jpg" alt="Tech Masters Solutions" style="width: 200px;"><br> -->
            <h1 class="mt-4 typewriter">Bem-vindo à Tech Masters Solutions</h1>
            <p class="lead">Seu parceiro para o sucesso na área digital</p>
            <a href="#services" class="btn btn-primary btn-lg">Nossos Serviços</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Sobre Nós</h2>
                    <p>Nossa missão é fornecer soluções tecnológicas inovadoras para impulsionar o sucesso dos nossos clientes.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-dark text-light" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center">Nossos Serviços</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Desenvolvimento de Software</h4>
                    <p>Criação de aplicações personalizadas para atender às necessidades específicas do seu negócio.</p>
                </div>
                <div class="col-md-4">
                    <h4>Consultoria em TI</h4>
                    <p>Orientação especializada para otimizar a infraestrutura e os processos tecnológicos da sua empresa.</p>
                </div>
                <div class="col-md-4">
                    <h4>Suporte Técnico</h4>
                    <p>Assistência técnica eficiente para garantir que seus sistemas estejam sempre funcionando perfeitamente.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <h4>Consultoria em TI</h4>
                    <p>Orientação especializada para otimizar a infraestrutura e os processos tecnológicos da sua empresa.</p>
                </div>
                <div class="col-md-4">
                    <h4>Suporte Técnico</h4>
                    <p>Assistência técnica eficiente para garantir que seus sistemas estejam sempre funcionando perfeitamente.</p>
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
    <footer class="footer bg-dark text-light text-center">
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
    <script src="./Controller/AOSinit.js"></script>
</body>

</html>