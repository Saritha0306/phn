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
        </div>
      </section>
      
      <section class="portfolio">
        <div class="container">
          <h2>My Portfolio</h2>
          <ul>
            <li><a href="#"><img src="portfolio\IMG-20230315-WA0002.jpg" alt="Portfolio Item 1"></a></li>
            <li><a href="#"><img src="img/portfolio2.jpg" alt="Portfolio Item 2"></a></li>
            <li><a href="#"><img src="img/portfolio3.jpg" alt="Portfolio Item 3"></a></li>
            <li><a href="#"><img src="img/portfolio4.jpg" alt="Portfolio Item 4"></a></li>
          </ul>
        </div>
      </section>
      
      <section class="contact">
        <div class="container">
          <h2>Contact Me</h2>
          <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Send Message</button>
          </form>
        </div>
      </section>
    </main>
    
    <footer>
      <div class="container">
        <p>&copy; 2023 My Portfolio</p>
        <p> sarithaverma@gmail.com</p>
      </div>
    </footer>
  </body>
</html>
