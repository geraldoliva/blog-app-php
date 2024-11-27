<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Multipage Blog Website</title>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <nav>
      <div class="container nav__container">
        <a href="index.html" class="nav__logo">GO Dev</a>
        <ul class="nav__items">
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
          <!-- <li><a href="signin.html">Sign In</a></li> -->
          <li class="nav__profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg" alt="" />
            </div>
            <ul>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="logout.html">Logout</a></li>
            </ul>
          </li>
        </ul>
        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>
    <!-- ========================= END OF NAV ========================= -->

    <section class="singlepost">
      <div class="container singlepost__container">
        <h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos,
          quia.
        </h2>
        <div class="post__author">
          <div class="post__author-avatar">
            <img src="./images/avatar2.jpg" alt="" />
          </div>
          <div class="post__author-info">
            <h5>By: Jane Doe</h5>
            <small>June 10, 2022 -07:23</small>
          </div>
        </div>
        <div class="singlepost__thumbnail">
          <img src="./images/blog33.jpg" alt="" />
        </div>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, non!
          Natus odit officia nostrum temporibus possimus ratione quibusdam quod
          maxime est enim esse sunt perferendis necessitatibus ad excepturi
          aperiam quas debitis reiciendis, provident deserunt pariatur nulla
          quam rem. Amet, tempore!
        </p>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, non!
          Natus odit officia nostrum temporibus possimus ratione quibusdam quod
          maxime est enim esse sunt perferendis necessitatibus ad excepturi
          aperiam quas debitis reiciendis, provident deserunt pariatur nulla
          quam rem. Amet, tempore!
        </p>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, non!
          Natus odit officia nostrum temporibus possimus ratione quibusdam quod
          maxime est enim esse sunt perferendis necessitatibus ad excepturi
          aperiam quas debitis reiciendis, provident deserunt pariatur nulla
          quam rem. Amet, tempore!
        </p>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, non!
          Natus odit officia nostrum temporibus possimus ratione quibusdam quod
          maxime est enim esse sunt perferendis necessitatibus ad excepturi
          aperiam quas debitis reiciendis, provident deserunt pariatur nulla
          quam rem. Amet, tempore!
        </p>
      </div>
    </section>
    <!-- ========================= END OF SINGLE POST ========================= -->

    <footer>
      <div class="footer__socials">
        <a href="https://youtube.com" target="_blank"
          ><i class="uil uil-youtube"></i
        ></a>
        <a href="https://facebook.com" target="_blank"
          ><i class="uil uil-facebook"></i
        ></a>
        <a href="https://instagram.com" target="_blank"
          ><i class="uil uil-instagram-alt"></i
        ></a>
        <a href="https://linkedin.com" target="_blank"
          ><i class="uil uil-linkedin"></i
        ></a>
        <a href="https://twitter.com" target="_blank"
          ><i class="uil uil-twitter"></i
        ></a>
      </div>
      <div class="container footer__container">
        <article>
          <h4>Categories</h4>
          <ul>
            <li><a href="">Art</a></li>
            <li><a href="">Wild Life</a></li>
            <li><a href="">Travel</a></li>
            <li><a href="">Music</a></li>
            <li><a href="">Science & Technology</a></li>
            <li><a href="">Food</a></li>
          </ul>
        </article>
        <article>
          <h4>Support</h4>
          <ul>
            <li><a href="">Online Support</a></li>
            <li><a href="">Call Numbers</a></li>
            <li><a href="">Emails</a></li>
            <li><a href="">Social Support</a></li>
            <li><a href="">Location</a></li>
          </ul>
        </article>
        <article>
          <h4>Blog</h4>
          <ul>
            <li><a href="">Safety</a></li>
            <li><a href="">Repair</a></li>
            <li><a href="">Recent</a></li>
            <li><a href="">Popular</a></li>
            <li><a href="">Categories</a></li>
          </ul>
        </article>
        <article>
          <h4>Permalinks</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </article>
      </div>
      <div class="footer__copyright">
        <small>Copyright &copy; 2024 GO Dev</small>
      </div>
    </footer>
    <script src="./main.js"></script>
  </body>
</html>
<!-- 2:28:55 -->