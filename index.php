
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Circlearn" />
    <meta
      name="description"
      content="Join The Circle And Learn Together
according to the subjects you are interested in
With Productive Community of Students."
    />
    <!-- HTML Meta Tags -->
    <title>Circlearn</title>
    <meta
      name="description"
      content="Join The Circle And Learn Together
according to the subjects you are interested in
With Productive Community of Students."
    />

    <!-- Facebook Meta Tags -->
    <meta
      property="og:url"
      content="https://sitouxz.github.io/Circlearn-Web/"
    />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Circlearn" />
    <meta
      property="og:description"
      content="Join The Circle And Learn Together
according to the subjects you are interested in
With Productive Community of Students."
    />
    <meta property="og:image" content="./assets/img/Hero-logo.svg" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="sitouxz.github.io" />
    <meta
      property="twitter:url"
      content="https://sitouxz.github.io/Circlearn-Web/"
    />
    <meta name="twitter:title" content="Circlearn" />
    <meta
      name="twitter:description"
      content="Join The Circle And Learn Together
according to the subjects you are interested in
With Productive Community of Students."
    />
    <meta name="twitter:image" content="./assets/img/Hero-logo.svg" />
    <title>Circlearn</title>
    <link
      rel="shortcut icon"
      href="./assets/img/Logo.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/landing-mobile.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <header class="topnav">
      <a href="index.php"><img src="./assets/img/Logo.svg" alt="logo" /></a>
      <nav>
        <ul id="myLinks">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      <?php
                if (isset($_SESSION["nick"])) {
                    echo "
                    <h3>".$_SESSION["nick"]." - Login successfully</h3>
                    ";
                    echo "
                    <a href=\"assets/include/logout.inc.php\">Log-out</a>
                    ";
                }
                else{
                    echo "
                    <div class=\"button\">
                        <a href=\"./pages/login.php\" class=\"login\">Login</a>
                        <a href=\"./pages/login.php\" class=\"sign-up\">Sign Up</a>
                    </div>
                    ";
                }
        ?>
      <a
        href="javascript:void(0);"
        class="icon bar-container"
        onclick="myFunction();
        xfunction(this)
        "
      >
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </a>
    </header>
    <div class="hero">
      <div class="vector">
        <img class="img1" src="./assets/img/Hero-illustration.svg" alt="" />
        <img
          class="img2"
          src="./assets/img/Hero-illustration-top-1.svg"
          alt=""
        />
        <img
          class="img3"
          src="./assets/img/Hero-illustration-top-2.svg"
          alt=""
        />
      </div>
      <div class="title">
        <img class="vector" src="./assets/img/Hero-logo.svg" alt="Logo" />
        <p>
          Join the <b>Circle</b> and learn together <br />
          acording to the subjects you are interested in <br />
          with productive COmmunity of students.
        </p>
        <div class="get-started">
          <a href="./pages/login.html">Get Started</a>
        </div>
      </div>
    </div>
    <div class="info">
      <div class="info-container">
        <div class="item">
          <img class="vector" src="./assets/img/Info-1.svg" alt="Info" />
          <h2>User Friendly</h2>
          <p>
            With simple style and easy to <br />
            use, make learning experience <br />
            more comfortable.
          </p>
        </div>
        <div class="item center">
          <img class="vector" src="./assets/img/Info-2.svg" alt="Info" />
          <h2>Interactive Design</h2>
          <p>
            Equipped with interactive designs and <br />
            animations that make the learning <br />
            process more interesting.
          </p>
        </div>
        <div class="item">
          <img class="vector" src="./assets/img/Info-3.svg" alt="Info" />
          <h2>Interesting Features</h2>
          <p>
            Many interesting features are provided <br />
            to maximize user experience and <br />
            convenience in using circlearn
          </p>
        </div>
      </div>
    </div>

    <div class="features">
      <div class="features-container">
        <div class="features-title">
          <h2>Light, Fast & Powerful</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
            commodo <br />
            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
            magnis <br />
            dis parturient montes, nascetur ridiculus
          </p>
          <p>
            mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
            sem. <br />
            Nulla consequat massa quis enim.
          </p>
        </div>
        <div class="features-list">
          <div class="f-list">
            <img class="vector" src="./assets/img/Dummy-icon.svg" alt="Icon" />
            <h2>Title goes here</h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur <br />
              adipisicing elit. Accusamus sed beatae quaerat <br />
              qui consectetur hic assumenda nulla suscipit aliquam rem.
            </p>
          </div>
          <div class="f-list">
            <img class="vector" src="./assets/img/Dummy-icon.svg" alt="Icon" />
            <h2>Title goes here</h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur <br />
              adipisicing elit. Accusamus sed beatae quaerat <br />
              qui consectetur hic assumenda nulla suscipit aliquam rem.
            </p>
          </div>
        </div>
      </div>
      <img class="vector" src="./assets/img/Features-1.svg" alt="Vector" />
    </div>
    <div class="features more">
      <img class="vector" src="./assets/img/Features-2.svg" alt="Vector" />
      <div class="f-text">
        <h2>Organized Subjects</h2>
        <p>
          Circlearn provides facilities to study together in a <br />
          virtual room that is arranged based on various <br />
          subjects that can be easily choose acocording to <br />
          your interests
        </p>
        <a href="./pages/login.html"
          >Get Started <img src="./assets/img/Features-arrow.svg" alt=""
        /></a>
      </div>
    </div>
    <div class="features">
      <div class="f-text">
        <h2>Amazing Community</h2>
        <p>
          Circlearn helps you to be able to study together <br />
          with people from different backgrounds who have <br />
          interests in the same subject area as you, who can <br />
          discuss with you according to the subject you <br />
          choose
        </p>
        <a href="./pages/login.html"
          >Get Started <img src="./assets/img/Features-arrow.svg" alt=""
        /></a>
      </div>
      <img class="vector" src="./assets/img/Features-3.svg" alt="Vector" />
    </div>
    <div class="cta">
      <img class="vector bg" src="./assets/img/CTA-BG.svg" alt="" />
      <div class="cta-container">
        <img class="vector" src="./assets/img/CTA-Vector.svg" alt="" />
        <div class="cta-text">
          <h2>
            Help us make the best <br />
            study platform ever
          </h2>
          <button>Join Us</button>
        </div>
      </div>
    </div>
    <div class="contact">
      <div class="contact-container">
        <img class="vector" src="./assets/img/Contact-Vector.svg" alt="" />
        <div class="contact-form">
          <h1>Contact Us</h1>
          <label>
            Name <br />
            <input type="text" name="name" placeholder="Name" />
          </label>
          <label>
            Email <br />
            <input type="email" name="email" placeholder="Email" />
          </label>
          <label>
            Message <br />
            <textarea name="message" placeholder="Message..."></textarea>
          </label>
          <button class="submit" type="button">Submit</button>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="footer-container">
        <div class="footer-nav">
          <img src="./assets/img/Footer-logo.svg" alt="Logo" />
          <nav>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </nav>
        </div>
        <div class="copyright">
          <p>&#169; 2021 copyright all right reserved</p>
          <div class="social-media">
            <a href="#"><i class="bx bxl-instagram"> </i></a>
            <a href="#"><i class="bx bxl-twitter"> </i></a>
            <a href="#"><i class="bx bxl-facebook"> </i></a>
          </div>
        </div>
      </div>
    </div>
    <script>
      function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
      function xfunction(x) {
        x.classList.toggle("change");
      }
    </script>
  </body>
</html>
