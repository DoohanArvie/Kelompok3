<DOCTYPE HTML>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Kelompok 3 Godzilla FullStack 4">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <title>Gym and Court App</title>

  <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-training-studio.css') }}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Awal Area Header ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/dashboard') }}" class="logo">Training<em> Studio</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#features">Layanan kami</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Kelas</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Jadwal</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Kontak</a></li> 
                            <li class="main-button"><a href="#">Login</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Akhir Area Header ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('images/gym-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Kekuatan, ketahanan, kebugaran</h6>
                <h2>Semua <em>disini</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Daftar member</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Pilih <em>Layanan</em></h2>
                        <img src="{{ asset('images/line-dec.png') }}" alt="waves">
                        <p>Nikmati berbagai program layanan kami untuk menunjang gaya hidup sehat anda</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Basic Fitness</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>New Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel="nofollow" href="https://www.pexels.com" target="_blank">Pexels website</a> for images and video background used in this HTML template.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel="nofollow" href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on our website.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Don't <em>think</em>, begin <em>today</em>!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Daftar Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2><em>Kelas</em> Kami</h2>
                        <img src="{{ asset('images/line-dec.png') }}" alt="">
                        <p>Bentuk tubuhmu dan mulai hidup sehat sekarang</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="{{ asset('images/tabs-first-icon.png') }}" alt="">First Training Class</a></li>
                  <li><a href='#tabs-2'><img src="{{ asset('images/tabs-first-icon.png') }}" alt="">Second Training Class</a></a></li>
                  <li><a href='#tabs-3'><img src="{{ asset('images/tabs-first-icon.png') }}" alt="">Third Training Class</a></a></li>
                  <li><a href='#tabs-4'><img src="{{ asset('images/tabs-first-icon.png') }}" alt="">Fourth Training Class</a></a></li>
                  <div class="main-rounded-button"><a href="#">View All Schedules</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="{{ asset('images/training-image-01.jpg') }}" alt="First Class">
                    <h4>First Training Class</h4>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="{{ asset('images/training-image-02.jpg') }}" alt="Second Training">
                    <h4>Second Training Class</h4>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="{{ asset('images/training-image-03.jpg') }}" alt="Third Class">
                    <h4>Third Training Class</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="{{ asset('images/training-image-04.jpg') }}" alt="Fourth Training">
                    <h4>Fourth Training Class</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Jadwal <em>Kelas</em></h2>
                        <img src="{{ asset('images/line-dec.png') }}" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat nam similique quis quod tempora, deleniti atque omnis illo, excepturi adipisci, itaque placeat dicta eligendi vero repudiandae officia obcaecati veniam minus.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Fitness Class</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Training</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Expert <em>Trainers</em></h2>
                        <img src="{{ asset('images/line-dec.png') }}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('images/first-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Strength Trainer</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('images/second-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Muscle Trainer</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('images/third-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Power Trainer</span>
                            <h4>Paul D. Newman</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12 mx-auto">
                    <div class="contact-form">
                    <h2 style="text-align: center; color:white; margin-bottom:30px;">Masukkan Ulasanmu!!</h2>
                        <form id="contact" action="{{ route('ulasan.store') }}" method="post">
                            @csrf
                            <div class="rating">
                                <input type="number" name="rating" hidden>
                                <i class="bx bx-star star" style="--i: 0;"></i>
                                <i class="bx bx-star star" style="--i: 1;"></i>
                                <i class="bx bx-star star" style="--i: 2;"></i>
                                <i class="bx bx-star star" style="--i: 3;"></i>
                                <i class="bx bx-star star" style="--i: 4;"></i>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="ulasan" rows="6" id="ulasan" placeholder="Ulasan Anda" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Bagikan Ulasan</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2024 Kelompok Godzilla
                FullStack 4 Gamelab Indonesia
                </p>
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- Rating Star -->
    <script src="{{ asset('js/rating.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
                    
    <!-- Plugins -->
    <!-- ScrollReveal -->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!-- Waypoints -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>

    <!-- CounterUp -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

    <!-- ImgFix -->
    <script src="{{ asset('js/imgfix.min.js') }}"></script>

    <!-- MixItUp -->
    <script src="{{ asset('js/mixitup.js') }}"></script>

    <!-- Accordions -->
    <script src="{{ asset('js/accordions.js') }}"></script>

   <!-- Global Init -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</DOCTYPE>