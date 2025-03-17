<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Il Mio Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Chi Sono</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contatti</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero text-center text-white">
        <div class="container">
            <h1>Ciao, sono [Il Tuo Nome]</h1>
            <p>Web Developer & Designer</p>
            <a href="#portfolio" class="btn btn-primary">Guarda il mio lavoro</a>
        </div>
    </header>

    <!-- Portfolio -->
    <section id="portfolio" class="container py-5">
        <h2 class="text-center mb-4">I miei lavori</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400" class="card-img-top" alt="Progetto 1">
                    <div class="card-body">
                        <h5 class="card-title">Progetto 1</h5>
                        <p class="card-text">Descrizione breve del progetto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400" class="card-img-top" alt="Progetto 2">
                    <div class="card-body">
                        <h5 class="card-title">Progetto 2</h5>
                        <p class="card-text">Descrizione breve del progetto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400" class="card-img-top" alt="Progetto 3">
                    <div class="card-body">
                        <h5 class="card-title">Progetto 3</h5>
                        <p class="card-text">Descrizione breve del progetto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contatti -->
    <section id="contact" class="container py-5">
        <h2 class="text-center mb-4">Contattami</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="Il tuo nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="La tua email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Messaggio</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Il tuo messaggio"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Il Mio Portfolio - Tutti i diritti riservati</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
