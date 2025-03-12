
  <?php
  require "./header.php";
  require "./navbar.php";

  ?>

    <section id="banner" style="margin-top: 0;  height: 30vh;">
        <h2>CONTACT US</h2>
        <!-- <h2> </h2>
        <button class="normal">Explore More</button> -->
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Our agency locations or contact us</h2>
            <h3>Head office</h3>
            <div>
                <h3>Address</h3>
                <li>
                    <i class="fal fa-map"></i>
                    
                    <p>Plot No 3, Maitri Kunj, Risali
                        Bhilai, Chhattisgarh
                        Pin - 490006</p>
                </li>
                <h3>E-Mail</h3>
                <li>
                    <i class="fal fa-map"></i>
                    <p>info@logixhunt.com</p>
                </li>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </li>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3720.696001802735!2d81.322762!3d21.164493!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293ca38da15f1d%3A0xc8b913d45a523cd8!2sLogixhunt%20-%20Software%20and%20Web%20Development%20Company%20%7C%20Internships%20and%20Training%20in%20Bhilai%20Raipur!5e0!3m2!1sen!2sus!4v1695553657646!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>

    <section id="form-details" class="section-p1">
        <form action="">
            <span>MESSAGE</span>
            <h2>contect Us</h2>
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Phone">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>

    </section>

    <section id="newsletter" class="section-p1">
        <div class="text">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail get updates about our latest product and specials offers.</p>
        </div>
        <div class="form">
            <input type="email" placeholder="Your email address">
            <button class="normal"><a href="/signup/signup.php">Sign Up</a></button>
        </div>
    </section>

<?php
require "./footer.php";
?>