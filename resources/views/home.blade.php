<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


        <title>New Age - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('landing-page/css/styles.css')}}" rel="stylesheet" />
    


        <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">GYPEM OLIMPIADE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('testimoni') }}" role="button">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('event') }}" role="button">Event</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal" role="button">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Feedback</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Feedback Modal -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="feedbackModalLabel">Feedback</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
    <form id="feedbackForm">
        <div class="mb-3">
            <label for="inputName" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputName" placeholder="Your Name">
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Your Name">
        </div>
            <div class="mb-3">
      <label for="feedbackOptions" class="form-label">Berikan Nilai Yang Tebaik</label>
      <div id="feedbackOptions">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="option1" id="option1">
          <label class="form-check-label" for="option1">Bintang 1</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="option2" id="option2">
          <label class="form-check-label" for="option2">Bintang 2</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="option3" id="option3">
          <label class="form-check-label" for="option3">Bintang 3</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="option4" id="option4">
          <label class="form-check-label" for="option4">Bintang 4</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="option5" id="option5">
          <label class="form-check-label" for="option5">Bintang 5</label>
        </div>
      </div>
    </div>
        <div class="mb-3">
            <label for="inputDescription" class="form-label">Description</label>
            <textarea class="form-control" id="inputDescription" rows="3" placeholder="Feedback Description"></textarea>
        </div>
    </form>
</div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send Feedback</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Platform Kompetisi Pelajar Indonesia</h1>
                            <p class="lead fw-normal text-muted mb-5">GYPEM adalah platform kompetisi nasional bagi pelajar di Indonesia, diselenggarakan oleh PT. Digital Edu Indonesia.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <body id="page-top">
    <!-- Navigation dan bagian lain tetap sama -->
<body id="page-top">
    <!-- Navigation dan bagian lain tetap sama -->
    <div class="masthead-device-mockup">
        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                    <stop class="gradient-start-color" offset="0%"></stop>
                    <stop class="gradient-end-color" offset="100%"></stop>
                </linearGradient>
            </defs>
            <circle cx="50" cy="50" r="50"></circle>
        </svg>
        <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
        </svg>
        <svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="50"></circle>
        </svg>
        <div class="device-wrapper">
            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                <!-- Carousel Bootstrap -->
                <div class="screen">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="landing-page/assets/img/1.png" class="d-block w-100" alt="Gambar 1">
                            </div>
                            <div class="carousel-item">
                                <img src="landing-page/assets/img/2.png" class="d-block w-100" alt="Gambar 2">
                            </div>
                            <div class="carousel-item">
                                <img src="landing-page/assets/img/3.png" class="d-block w-100" alt="Gambar 3">
                            </div>
                            <div class="carousel-item">
                                <img src="landing-page/assets/img/4.png" class="d-block w-100" alt="Gambar 4">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">
                            <h1>Mengapa Harus Gypem?</h1>Banyak sekali manfaat atau keuntungan mengikuti olimpiade di Gypem, antara lain :</div>
                        <img src="landing-page/assets/img/Group 14.png" alt="..." style="height: 4rem" />
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Kualitas Soal Tinggi</h3>
                                        <p class="text-muted mb-0">Kualitas soal dapat dijamin kualitasnya dan cocok dengan kurikulum saat ini.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Flexible</h3>
                                        <p class="text-muted mb-0">Dapat dikerjakan dimanapun kalian berada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Klaim Hadiah</h3>
                                        <p class="text-muted mb-0">Banyak sekali pilihan hadiah yang dapat dimenangkan.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Semua Tingkatan</h3>
                                        <p class="text-muted mb-0">Olimpiade tersedia untuk semua jenjang pendidikan (SD - SMP - SMA - UNIVERSITAS)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                <!-- Carousel Bootstrap -->
                <div class="screen">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="landing-page/assets/img/5.png" class="d-block w-100" alt="Gambar 1">
                            </div>
                            <div class="carousel-item">
                                <img src="landing-page/assets/img/6.png" class="d-block w-100" alt="Gambar 2">
                            </div>
                            <div class="carousel-item">
                                <img src="landing-page/assets/img/7.png" class="d-block w-100" alt="Gambar 3">
                            </div>
                            <div class="carousel-item">
                                <img src="landing-page/assets/img/8.png" class="d-block w-100" alt="Gambar 4">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section>
        <!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Olimpiade Berskala Nasioanal.</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">GYPEM, platform kompetisi nasional oleh PT. Digital Edu Indonesia, bertujuan menjadi penyelenggara olimpiade terkemuka dalam 5 tahun. Misi GYPEM adalah menyusun soal olimpiade berbasis kurikulum, menjaga kualitas dengan teknologi, dan memperkuat hubungan dengan sekolah di seluruh Indonesia.</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
            <div class="px-10 px-sm-0 shadow">
        <img class="img-fluid" src="landing-page/assets/img/hero-image 1.png" alt="..." />
    </div>
</div>

                    <!-- "https://source.unsplash.com/u8Jn2rzYIps/900x900" -->
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Stop waiting.
                        <br />
                        Start Learn, Try and Pray.
                   </div>
            </div>
        </section>
        <!-- App badge section-->
        <footer class="bg-gradient-primary-to-secondary py-4">
    <div class="container px-5">
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <div class="contact-info text-white mb-4 mb-lg-0">
                <p class="mb-1"><strong>Email:</strong> Gypemolimpiadenasional@gmail.com</p>
                <p class="mb-1"><strong>No. WhatsApp:</strong> +62 852 0495 7813</p>
                <p class="mb-0"><strong>Lokasi:</strong> Jl. Citarung no.13 Panderejo, Banyuwangi</p>
            </div>
            <div class="social-media d-flex align-items-center mb-4 mb-lg-0">
                <a href="https://youtube.com" target="_blank" class="me-3">
                    <img src="landing-page/assets/img/youtube.png" alt="YouTube" class="social-icon">
                </a>    
                <a href="https://tiktok.com" target="_blank" class="me-3">
                    <img src="landing-page/assets/img/tik-tok1.png" alt="TikTok" class="social-icon">
                </a>
                <a href="https://instagram.com" target="_blank" class="me-3">
                    <img src="landing-page/assets/img/instagram.png" alt="Instagram" class="social-icon">
                </a>
                <a href="https://facebook.com" target="_blank" class="me-3">
                    <img src="landing-page/assets/img/facebook.png" alt="Facebook" class="social-icon">
                </a>
            </div>
            <div class="official-logo">
                <img src="landing-page/assets/img/Group 14.png" alt="Official Logo" class="img-fluid">
            </div>
        </div>
    </div>
</footer>

