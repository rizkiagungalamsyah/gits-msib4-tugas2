<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- akhir bottstrap icon -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- akhir css -->
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">My Portofolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#project">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Akhir Navbar -->
    <!-- jumbotron -->
    <section class="jumbotron text-center">
        <img src="img/2.jpg " alt="agung" width="200" class="rounded-circle">
        <h1 class="display-4 text-light">Rizki Agung Alamsyah</h1>
        <p class="lead text-light">FullStack Web Developer</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L40,69.3C80,75,160,85,240,80C320,75,400,53,480,69.3C560,85,640,139,720,154.7C800,171,880,149,960,128C1040,107,1120,85,1200,85.3C1280,85,1360,107,1400,117.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-10">
                    <p>Saya mahasiswa jurusan teknik informatika di Politeknik Harapan Bersama Tegal. Saya suka belajar tentang teknologi informasi, terutama dalam pemrograman web. Saya juga membuat beberapa aplikasi web untuk menyelesaikan tugas dari dosen.</p>
                </div>
            </div>
          </section>
          <!-- akhir about -->
          <!-- Awal Project -->
    <section id="project">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Project</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img src="img/projek1.png" class="card-img-top" alt="projek">
                        <div class="card-body">
                          <p class="card-text">Website Portal Desa Kalialang.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img src="img/projek2.png" class="card-img-top" alt="projek">
                        <div class="card-body">
                          <p class="card-text">ChatBot dengan framework flask python.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img src="img/projek3.png" class="card-img-top" alt="projek">
                        <div class="card-body">
                          <p class="card-text">Website Sistem Pendukung Keputusan Metode (SAW).</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </section>
    <!-- Akhir Project -->
    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,64L40,85.3C80,107,160,149,240,149.3C320,149,400,107,480,101.3C560,96,640,128,720,149.3C800,171,880,181,960,176C1040,171,1120,149,1200,133.3C1280,117,1360,107,1400,101.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- akhir contact -->
    <!-- footer -->
    <footer class="bg-dark text-light text-center p-3">
        <p>Created with <i class="bi bi-heart-fill text-danger"></i> by<a href="#home" class="text-light">Rizki Agung Alamsyah</a></p>
    </footer>
    <!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>