<!DOCTYPE html>
<html>
  <head>
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <h1>My Portfolio</h1>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
    
    <main>
      <section class="hero">
        <div class="container">
          <h2>Welcome to my portfolio!</h2>
          <p>Here you can see some of my best work.</p>
          <a href="#" class="btn">View Portfolio</a>
        </div>
      </section>
      
      <section class="about">
        <div class="container">
          <h2>About Me</h2>
          <p>I am a web designer and developer with over 5 years of experience. I love creating beautiful and functional websites that help businesses achieve their goals.</p>
          <ul>
            <li><strong>Name:</strong> SARITHA VERMA</li>
            <li><strong>Email:</strong> sarithaverma2002@gmail.com</li>
            
          </ul>
        </div>
      </section>
      
      <section class="portfolio">
        <div class="container">
          <h2>My Portfolio</h2>
          <div class="gallery">
            <div class="item">
              <img src="IMG-20230315-WA0002.jpg" alt="Portfolio Item 1">
              <div class="overlay">
                <h3>Portfolio Item 1</h3>
                <a href="#" class="btn">View Details</a>
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio2.jpg" alt="Portfolio Item 2">
              <div class="overlay">
                <h3>Portfolio Item 2</h3>
                <a href="#" class="btn">View Details</a>
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio3.jpg" alt="Portfolio Item 3">
              <div class="overlay">
                <h3>Portfolio Item 3</h3>
                <a href="#" class="btn">View Details</a>
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio4.jpg" alt="Portfolio Item 4">
              <div class="overlay">
                <h3>Portfolio Item 4</h3>
                <a href="#" class="btn">View Details</a>
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio5.jpg" alt="Portfolio Item 5">
              <div class="overlay">
                <h3>Portfolio Item 5</h3>
                <a href="#" class="btn">View Details</a>
                </div>
          </div>
        </div>
      </section>
      <section class="contact">
        <div class="container">
      <h2>Contact Me</h2>
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
         </form>
        </div>
      </section> 
    </main>

    <footer>
      <div class="container">
      <p>&copy; 2023 My Portfolio. All Rights Reserved.</p>
    </div>
    </footer>

     <script src="app.js"></script>
  </body>
</html>
             
