
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <script
      src="https://kit.fontawesome.com/dd8ca4d5e5.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <section id="header">
      <div class="personal_logo">Tasko's</div>

      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.php"
              ><i class="fa fa-shopping-basket" aria-hidden="true"></i
            ></a>
          </li>
          <a href="index.php" id="close"><i class="ri-close-circle-line"></i></a>
          </ul>
      </div>
      <div id="mobile">
        <a href="cart.php"
          ><i class="fa fa-shopping-basket" aria-hidden="true"></i
        ></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

    <section id="page-header" class="about-header">
      <h2>Have a chat with US!</h2>
      <p>Leave a message down below!</p>
    </section>

    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our stores Nation Wide!</h2>
        <h3>Head Office</h3>
        <div>
          <li>
            <i class="fa fa-map"></i>
            <p>Tasko Sweets Stonehill Shop 14 Green Valley Shopping center, Stoneridge drive, Greenstone, Edenvale</p>
          </li>
          <li>
            <i class="fa fa-envelope"></i>
            <p>Contact@example.com</p>
          </li>
          <li>
            <i class="fa fa-phone-alt"></i>
            <p>063 404 8131</p>
          </li>
          <li>
            <i class="fa fa-clock"></i>
            <p>Monday to Friday: 8:30am to 13:00pm</p>
            <p>Saturday: 9:00am to 17:00pm</p>
          </li>
        </div>
      </div>

      <div class="map">
        <iframe
          src=" "
          width="600"
          height="500"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <section id="form-details">
      <form action="">
        <span>Leave a message for us!</span>
        <h2>We would love to hear from you</h2>
        <input type="text" placeholder="Your Name" />
        <input type="text" placeholder="E-mail" />
        <input type="text" placeholder="Subject" />
        <textarea
          name=""
          id=""
          cols="30"
          rows="10"
          placeholder="Your Message"
        ></textarea>
        <button class="normal">Submit!</button>
      </form>

      <div class="people">
        <div>
          <img src="IMG/Person1.jpeg" alt="" />
          <p><span>Bryan Grobler</span>Chief Executive officer<br />Phone: +074 471 1678
           <br/>Email:BryanGrobler@Example.com</p>
        </div>
        <div>
          <img src="IMG/Person2.jpeg" alt="" />
          <p><span>Andrea de Paiva</span>store Manager<br />Phone: +095 6753 1234   
          <br />Email: AndreaDePaiva@example.com</p>
        </div>
        <div>
          <img src="IMG/Person3.jpeg" alt="" />
          <p><span>Kaylee Gounden</span>Branch Manager<br />Phone:+ 011 231 8787 
          <br />Email: KayleeGounden@Example.com</p>
        </div>
      </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up for promotional Newsletters</h4>
        <p>
          Get E-mail Updates about our latest products and
          <span>Weekly offers!</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <h4>Contact</h4>
        <p><strong>Address:</strong>Drive</p>
        <p><strong>Phone:</strong>Drive</p>
        <p><strong>Hours:</strong>Drive</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart </a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>
      <div class="copyright">
        <p>Siveshan Subramani</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
