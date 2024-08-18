<?php
include 'config.php';

// Initialize variables for error messages
$updateMessage = '';

// Handle form submission for hero content
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_hero'])) {
        $h2 = $_POST['h2_content'];
        $span = $_POST['span_content'];
        $p = $_POST['p_content'];
        $btn = $_POST['btn_content'];

        // Prepare and execute the update query
        $sql = "UPDATE hero SET h2=?, span=?, p=?, btn=? WHERE id=1";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('ssss', $h2, $span, $p, $btn);
            if ($stmt->execute()) {
                $updateMessage = 'Hero content updated successfully.';
            } else {
                $updateMessage = 'Error updating hero content: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            $updateMessage = 'Error preparing statement: ' . $conn->error;
        }
    }

    if (isset($_POST['update_header'])) {
        $logo = $_POST['logo_content'];
        $nav1 = $_POST['nav1_content'];
        $nav2 = $_POST['nav2_content'];
        $nav3 = $_POST['nav3_content'];
        $nav4 = $_POST['nav4_content'];
        $nav5 = $_POST['nav5_content'];
        $nav6 = $_POST['nav6_content'];

        // Prepare and execute the update query
        $sql = "UPDATE header SET logo=?, nav1=?, nav2=?, nav3=?, nav4=?, nav5=?, nav6=? WHERE id=1";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('sssssss', $logo, $nav1, $nav2, $nav3, $nav4, $nav5, $nav6);
            if ($stmt->execute()) {
                $updateMessage = 'Header content updated successfully.';
            } else {
                $updateMessage = 'Error updating header content: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            $updateMessage = 'Error preparing statement: ' . $conn->error;
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_about'])) {
      $title = isset($_POST['title_content']) ? $_POST['title_content'] : '';
      $h2_about = isset($_POST['h2_content']) ? $_POST['h2_content'] : '';
      $p1 = isset($_POST['p1_content']) ? $_POST['p1_content'] : '';
      $span1 = isset($_POST['span1_content']) ? $_POST['span1_content'] : '';
      $span2 = isset($_POST['span2_content']) ? $_POST['span2_content'] : '';
      $span3 = isset($_POST['span3_content']) ? $_POST['span3_content'] : '';
      $p2= isset($_POST['p2_content']) ? $_POST['p2_content'] : '';
      $btn= isset($_POST['btn_content']) ? $_POST['btn_content'] : '';
    
      // Prepare and execute the update query for ABOUT content
      $sql = "UPDATE about SET title=?, h2=?, p1=?, span1=?, span2=?, span3=?, p2=?, btn=? WHERE id=1";
      if ($stmt = $conn->prepare($sql)) {
          $stmt->bind_param('ssssssss', $title, $h2_about, $p1, $span1, $span2, $span3, $p2, $btn);
          if ($stmt->execute()) {
              echo "<script>alert('About content updated successfully');</script>";
          } else {
              echo "<script>alert('Error updating about content: " . $stmt->error . "');</script>";
          }
          $stmt->close();
      } else {
          echo "<script>alert('Error preparing statement: " . $conn->error . "');</script>";
      }
    }
}
// Check if Service form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services'])) {
  $title = $_POST['title_content'] ?? '';
  $h2 = $_POST['h2_content'] ?? '';
  $service1 = $_POST['service1_content'] ?? '';
  $service1p = $_POST['service1p_content'] ?? '';
  $service2 = $_POST['service2_content'] ?? '';
  $service2p = $_POST['service2p_content'] ?? '';
  $service3 = $_POST['service3_content'] ?? '';
  $service3p = $_POST['service3p_content'] ?? '';
  $service4 = $_POST['service4_content'] ?? '';
  $service4p = $_POST['service4p_content'] ?? '';
  $service5 = $_POST['service5_content'] ?? '';
  $service5p = $_POST['service5p_content'] ?? '';
  $service6 = $_POST['service6_content'] ?? '';
  $service6p = $_POST['service6p_content'] ?? '';

  // Prepare and execute the update query for service content
  $sql = "UPDATE services SET title=?, h2=?, service1=?, service1p=?, service2=?, service2p=?, service3=?, service3p=?, service4=?, service4p=?, service5=?, service5p=?, service6=?, service6p=? WHERE id=1"; // Adjust id as needed
  if ($stmt = $conn->prepare($sql)) {
      $stmt->bind_param('ssssssssssssss', $title, $h2, $service1, $service1p, $service2, $service2p, $service3, $service3p, $service4, $service4p, $service5, $service5p, $service6, $service6p);
      if ($stmt->execute()) {
          echo "<script>alert('Services content updated successfully');</script>";
      } else {
          echo "<script>alert('Error updating services content: " . $stmt->error . "');</script>";
      }
      $stmt->close();
  } else {
      echo "<script>alert('Error preparing statement: " . $conn->error . "');</script>";
  }
}

// Check if Contact form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_contact'])) {
  $title = $_POST['title_content'] ?? '';
  $h2 = $_POST['h2_content'] ?? '';
  $address = $_POST['address_content'] ?? '';
  $address_det = $_POST['address_det_content'] ?? '';
  $phone = $_POST['phone_content'] ?? '';
  $phone_det = $_POST['phone_det_content'] ?? '';
  $email = $_POST['email_content'] ?? '';
  $email_det = $_POST['email_det_content'] ?? '';


  // Prepare and execute the update query for service content
  $sql = "UPDATE contact SET title=?, h2=?, address=?, address_det=?, phone=?, phone_det=?, email=?, email_det=?   WHERE id=1";
  if ($stmt = $conn->prepare($sql)) {
      $stmt->bind_param('ssssssss', $title, $h2, $address, $address_det, $phone, $phone_det, $email, $email_det);
      if ($stmt->execute()) {
          echo "<script>alert('Contact content updated successfully');</script>";
      } else {
          echo "<script>alert('Error updating contact content: " . $stmt->error . "');</script>";
      }
      $stmt->close();
  } else {
      echo "<script>alert('Error preparing statement: " . $conn->error . "');</script>";
  }
}

// Check if Footer form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_footer'])) {
  $p = $_POST['p_content'] ?? '';
  $span1 = $_POST['span1_content'] ?? '';
  $span2 = $_POST['span2_content'] ?? '';
  $strong = $_POST['strong_content'] ?? '';


  // Prepare and execute the update query for footer content
  $sql = "UPDATE footer SET p=?, span1=?, span2=?, strong=?  WHERE id=1";
  if ($stmt = $conn->prepare($sql)) {
      $stmt->bind_param('ssss', $p, $span1, $span2, $strong);
      if ($stmt->execute()) {
          echo "<script>alert('Footer content updated successfully');</script>";
      } else {
          echo "<script>alert('Error updating Footer content: " . $stmt->error . "');</script>";
      }
      $stmt->close();
  } else {
      echo "<script>alert('Error preparing statement: " . $conn->error . "');</script>";
  }
}


// Fetch the current hero content
$sql = "SELECT h2, span, p, btn FROM hero WHERE id=1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $hero_row = $result->fetch_assoc();
} else {
    $hero_row = ['h2' => 'Default Heading', 'span' => 'Default Span', 'p' => 'Default content', 'btn' => 'Read More'];
}

// Fetch the current header content
$sql = "SELECT logo, nav1, nav2, nav3, nav4, nav5, nav6 FROM header WHERE id=1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $header_row = $result->fetch_assoc();
} else {
    $header_row = ['logo' => 'Default Logo', 'nav1' => 'Home', 'nav2' => 'About', 'nav3' => 'Services', 'nav4' => 'Portfolio', 'nav5' => 'Contact', 'nav6' => '?'];
}

// Fetch the current ABOUT content
$sql = "SELECT title, h2, p1, span1, span2, span3, p2, btn FROM about WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $about_row = $result->fetch_assoc();
} else {
    $about_row = ['title' => '?', 'h2' => '?', 'p1' => '?', 'span1' => '?', 'span2' => '?', 'span3' => '?', 'p2' => '?', 'btn' => '?'];
}

// Fetch the current SERVICE content
$sql = "SELECT title, h2, service1, service1p, service2, service2p, service3, service3p, service4, service4p, service5, service5p, service6, service6p  FROM services WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $services_row = $result->fetch_assoc();
} else {
    $services_row = ['title' => '?', 'h2' => '?', 'service1' => '?', 'service1p' => '?', 'service2' => '?', 'service2p' => '?', 'service3' => '?', 'service3p' => '?', 'service4' => '?', 'service4p' => '?', 'service5' => '?', 'service5p' => '?', 'service6' => '?', 'service6p' => '?'];
}

// Fetch the current Contact content
$sql = "SELECT title, h2, address, address_det, phone, phone_det, email, email_det FROM contact WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $contact_row = $result->fetch_assoc();
} else {
    $contact_row = ['title' => '?', 'h2' => '?', 'address' => '?', 'address_det' => '?', 'phone' => '?', 'phone_det' => '?', 'email' => '?', 'email_det' => '?'];
}

// Fetch the current Footer content
$sql = "SELECT p, span1, span2, strong FROM footer WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $footer_row = $result->fetch_assoc();
} else {
  $footer_row = ['p' => '?','span1' => '?','span2' => '?','strong' => '?',];
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
      <h1>
  <?php
  if (!empty($header_row['logo'])) {
      echo '<img src="uploads/' . htmlspecialchars($header_row['logo']) . '" class="large-logo">';
  } else {
      echo 'No logo available';
  }
  ?>
</h1>

      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active"><?php echo htmlspecialchars($header_row['nav1']); ?></a></li>
          <li><a href="#about"><?php echo htmlspecialchars($header_row['nav2']); ?></a></li>
          <li><a href="#services"><?php echo htmlspecialchars($header_row['nav3']); ?></a></li>
          <li><a href="#contact"><?php echo htmlspecialchars($header_row['nav4']); ?></a></li>
          <li><a href="admin.php">LOGIN</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><?php echo htmlspecialchars($hero_row['h2']); ?> <span><?php echo htmlspecialchars($hero_row['span']); ?></span></h2>
            <p class="animate__animated animate__fadeInUp"><?php echo nl2br(htmlspecialchars($hero_row['p'])); ?></p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo htmlspecialchars($hero_row['btn']); ?></a>
          </div>
        </div>
      </div>
      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><span><?php echo htmlspecialchars($about_row['title']); ?></h2>
        <p><?php echo htmlspecialchars($about_row['h2']); ?></p>
      </div><!-- End Section Title -->
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
            <?php echo htmlspecialchars($about_row['p1']); ?>
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo htmlspecialchars($about_row['span1']); ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo htmlspecialchars($about_row['span2']); ?></span></li>
              <li><i class="bi bi-check2-circle"></i> <span><?php echo htmlspecialchars($about_row['span3']); ?></span></li>
            </ul>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p><?php echo htmlspecialchars($about_row['p2']); ?></p>
            <a href="#" class="read-more"><span><?php echo htmlspecialchars($about_row['btn']); ?></span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

<!-- Services Section -->
<section id="services" class="services section">

<!-- Services Section -->
<section id="services" class="services section">
  <div class="container section-title" data-aos="fade-up">
    <h2><?php echo htmlspecialchars($services_row['title']); ?></h2>
    <p><?php echo htmlspecialchars($services_row['h2']); ?></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
          </div>
            <h3><?php echo htmlspecialchars($services_row['service1']); ?></h3>
          </a>
          <p><?php echo htmlspecialchars($services_row['service1p']); ?></p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
          </div>
            <h3><?php echo htmlspecialchars($services_row['service2']); ?></h3>
          </a>
          <p><?php echo htmlspecialchars($services_row['service2p']); ?></p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-chat-text" style="color: #20c997;"></i>
          </div>
            <h3><?php echo htmlspecialchars($services_row['service3']); ?></h3>
          </a>
          <p><?php echo htmlspecialchars($services_row['service3p']); ?></p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
          </div>
            <h3><?php echo htmlspecialchars($services_row['service4']); ?></h3>
          </a>
          <p><?php echo htmlspecialchars($services_row['service4p']); ?></p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-globe" style="color: #6610f2;"></i>
          </div>
            <h3><?php echo htmlspecialchars($services_row['service5']); ?></h3>
          </a>
          <p><?php echo htmlspecialchars($services_row['service5p']); ?></p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-clock" style="color: #f3268c;"></i>
          </div>
            <h3><?php echo htmlspecialchars($services_row['service6']); ?></h3>
          </a>
          <p><?php echo htmlspecialchars($services_row['service6p']); ?></p>
        </div>
      </div><!-- End Service Item -->
    </div>
  </div>

</section>

<!-- Contact Section -->
<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2><?php echo htmlspecialchars($contact_row['title']); ?></h2>
  <p><?php echo htmlspecialchars($contact_row['h2']); ?></p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-4">
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h3><?php echo htmlspecialchars($contact_row['address']); ?></h3>
          <p><?php echo htmlspecialchars($contact_row['address_det']); ?></p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-telephone flex-shrink-0"></i>
        <div>
          <h3><?php echo htmlspecialchars($contact_row['phone']); ?></h3>
          <p><?php echo htmlspecialchars($contact_row['phone_det']); ?></p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h3><?php echo htmlspecialchars($contact_row['email']); ?></h3>
          <p>i<?php echo htmlspecialchars($contact_row['email_det']); ?></p>
        </div>
      </div><!-- End Info Item -->
    </div>

    <div class="col-lg-8">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>
    </div><!-- End Contact Form -->

  </div>

</div>

</section><!-- /Contact Section -->
    </main>


    <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename"><?php
if (!empty($header_row['logo'])) {
    echo '<img src="uploads/' . htmlspecialchars($header_row['logo']) . '" class="large-logo" style="width: 150px; height: auto;">'; // Adjust width and height as needed
} else {
    echo 'No logo available';
}
?>
</h3>
      <p><?php echo htmlspecialchars($footer_row['p']); ?></p>
      <div class="container">
        <div class="copyright">
          <span><?php echo htmlspecialchars($footer_row['span1']); ?></span> <strong class="px-1 sitename"><?php echo htmlspecialchars($footer_row['strong']); ?></strong> <span><?php echo htmlspecialchars($footer_row['span2']); ?></span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">Michael</a>
        </div>
      </div>
    </div>
  </footer>






    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>
