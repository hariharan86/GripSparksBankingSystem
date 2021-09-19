<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SmartBank</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Header Section -->
    <header class="header" >
      <nav class="nav bd_grid" >
        <div>
          <a href="#" class="nav_logo">SmartBank</a>
        </div>

        <div class="nav_menu" id="nav_menu">
          <ul class="nav_list">
            <li class="nav_items">
              <a href="#home" class="nav_link active">Home</a>
            </li>
            <li class="nav_items">
              <a href="#about" class="nav_link active">About</a>
            </li>
                     </ul>
        </div>

        <div class="nav_toggle" id="nav_toggle">
          <i class="bx bx-menu-alt-right"></i>
        </div>
      </nav>
    </header>

    <main class="main">
      <!-- HOME SECTION -->
      <section class="home bd_grid" id="home">
        <div class="home_data" data-aos="fade-down">
          <h1 class="home_title">
            Hi, <br />Welcome To <span class="home_title-color">SmartBank</span
            ><br /><h4>enjoy our services</h4>
          </h1>
          <a href="viewcustomers.php" class="button"> Customers</a>
        </div>

        <div class="home_social">
          <a href="#" class="home_social-icon" data-aos="fade-down"
            ><i class="bx bxl-facebook-circle"></i
          ></a>
          <a
            href="#"
            class="home_social-icon"
            data-aos="fade-down"
            data-aos-delay="250"
            ><i class="bx bxl-instagram"></i
          ></a>
          <a
            href="#"
            class="home_social-icon"
            data-aos="fade-down"
            data-aos-delay="300"
            ><i class="bx bxl-twitter"></i
          ></a>
          <a
            href="#"
            class="home_social-icon"
            data-aos="fade-down"
            data-aos-delay="350"
            ><i class="bx bxl-github"></i
          ></a>
        </div>

        <div class="home_img" data-aos="fade-down" data-aos-delay="500">
          

            <img src="./assets/img/logo.jpg" alt="" width="900px;" height="900px;" />          </div>



        </div>
      </section>

      <!-- ABOUT SECTION -->
      <section class="about section" id="about">
        <h2 class="section-title" data-aos="fade-down">About</h2>

        <div class="about_container bd_grid">
          <div class="about_img" data-aos="fade-down" data-aos-delay="50">
           <img src="./assets/img/about.jpg"  width="400px;">
          </div>

          <div>
            <h2
              class="about_subtitle"
              data-aos="fade-down"
              data-aos-delay="350"
            >
              SmartBank
            </h2>
            <p class="about_text" data-aos="fade-down" data-aos-delay="450">
             Our bank(SmartBank) provides a service of secure, fast, hassle-free transactions and many more.our products are likely easy to navigate and accessible on any device. we're trying to give our best to you.keep supporting us 
            </p>
          </div>
        </div>
      </section>    

      <!-- Footer Section -->
      <footer class="footer">
        <p class="footer_title" data-aos="fade-down">Hariharan</p>

        <div class="footer_socials">
          <a
            href="#"
            class="footer_icon"
            data-aos="fade-down"
            data-aos-delay="250"
            ><i class="bx bxl-facebook-circle"></i
          ></a>
          <a
            href="#"
            class="footer_icon"
            data-aos="fade-down"
            data-aos-delay="350"
            ><i class="bx bxl-instagram"></i
          ></a>
          <a
            href="#"
            class="footer_icon"
            data-aos="fade-down"
            data-aos-delay="450"
            ><i class="bx bxl-twitter"></i
          ></a>
          <a
            href="#"
            class="footer_icon"
            data-aos="fade-down"
            data-aos-delay="550"
            ><i class="bx bxl-github"></i
          ></a>
        </div>

        <p data-aos="fade-down" data-aos-delay="650">
          &#169; 2021 copyright all right reserved
        </p>
      </footer>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="">
      // SHOW MENU

const showMenu = (toggleId, navId) => {
      const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId)

      if(toggle && nav){
            toggle.addEventListener('click', () =>{
                  nav.classList.toggle('show')
            });
      }
}

showMenu('nav_toggle','nav_menu')

// ACTIVE & REMOVE ACTIVE
const navLink = document.querySelectorAll('.nav_link')
navLink.forEach(n => n.classList.remove('active'))

function linkAction(){
      navLink.forEach(n => n.classList.remove('active'))
      this.classList.add('active')

      const navMenu = document.getElementById('nav_menu')
      navMenu.classList.remove('show')
}

navLink.forEach(n => n.addEventListener('click', linkAction))
    </script>

    <script>
      AOS.init({
        duration: 1200,
        once: false,
      });
    </script>
  </body>
</html>
