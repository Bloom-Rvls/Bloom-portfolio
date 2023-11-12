
<?php

use App\Message;

require_once 'src/Message.php';

$errors = null;
$success = null;

$recipient = 'angelicaravelonjohanison@gmail.com';
$subject = htmlentities($_POST['object']);
$name = htmlentities($_POST['name']);
$message = htmlentities($_POST['message']);
$mail = $_POST['mail'];
$headers = 'From : '. $_POST['mail'];

if(isset($name) && isset($message) && isset($mail) && isset($subject)) {
     $userMail = new Message($name, $mail, $subject, $message);
     if($userMail->isValid()) {
          $return = mail($recipient, $subject, $message, $headers);
          $success = true;
     } else {
          $errors = $userMail->getErrors();
     }
     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/loader.css">
     <title>Bloom</title>
</head>
<body>
     <!-- ************************ pre-loader ***************************** -->
     <div id="loader">
          <div class="loader-inner">
               <div class="loader-line-wrap">
                    <div class="loader-line"></div>
               </div>
               <div class="loader-line-wrap">
                    <div class="loader-line"></div>
               </div>
               <div class="loader-line-wrap">
                    <div class="loader-line"></div>
               </div>
               <div class="loader-line-wrap">
                    <div class="loader-line"></div>
               </div>
               <div class="loader-line-wrap">
                    <div class="loader-line"></div>
               </div>
          </div>
     </div>


     <!-- ************************ all content container ***************************** -->
     <div id="container">
          <!-- ************************ navigation bar ***************************** -->
          <nav id="nav-bar">
               <div id="brand">
                    <h3>Bloom</h3>
               </div>
               <ul class="myNav" id="my-nav">
                    <li class="navItem"><a href="#about-section" class="navLink">About</a></li>
                    <li class="navItem"><a href="#skills-section" class="navLink">Skills</a></li>
                    <li class="navItem"><a href="#projects-section" class="navLink">Projects</a></li>
                    <li class="navItem"><a href="#contact-section" class="navLink">Contact</a></li>
                    <li class="navItem"><a href="#diploma-certification" class="navLink">Certifications</a></li>
               </ul>
               <div class="iconBar">
                    <a href="#" id="icon-link"><i class="fa fa-bars" ></i></a>
               </div>
          </nav>

          <!-- ************************ header section ***************************** -->
          <header id="about-section">
               
               <div id="about-content">
                    <div id="about-me">
                         <h2>Hi there, welcome here!</h2>
                         <p>I’m <span class="about">Angélica</span>, I’m a <span class="about">junior backend developer</span> and I’m a second master’s degree student in computer siences  from Madagascar.</p>
                         <p>I have always been passionate about technology and everything surrounded it.</p>
                         <p>Apart my passion for technology, I’m a big animal lovers too.</p>
                         <div id="cv-button">
                              <a href="https://drive.google.com/file/d/1BJx4tUijyMZIDk-W76M1t0chvqpnAxdF/view?usp=drive_link" target="_blank">
                                   <button>View CV</button>
                              </a>
                         </div>
                    </div>
                    <div>
                         <img src="assets/images/profil.jpg" alt="profil picture" id="profil">
                    </div>
               </div>
               
          </header>

          <!-- ************************ skills section ***************************** -->
          <section id="skills-section">
               <div id="section-title">
                    <h1>Skills</h1>
               </div>
               
               <div class="skills">
                    <div class="singleSkill">
                         <img src="assets/images/skills/html-5.png" alt="html icon" class="icon">
                         <p>HTML 5</p>
                    </div>
                    <div class="singleSkill">
                         <img src="assets/images/skills/css-3.png" alt="css icon" class="icon">
                         <p>CSS 3</p>
                    </div>
                    <div class="singleSkill">
                         <img src="assets/images/skills/js.png" alt="javascript icon" class="icon">
                         <p>JavaScript</p>
                    </div>
                    <div class="singleSkill">
                         <img src="assets/images/skills/Bootstrap_logo.png" alt="bootstrap icon" class="icon">
                         <p>Bootstrap 4</p>
                    </div>
                    <div class="singleSkill">
                         <img src="assets/images/skills/php (1).png" alt="php icon" class="icon">
                         <p>PHP</p>
                    </div>
               </div>

               <div class="skills">
                    <div class="singleSkill">
                         <img src="assets/images/skills/base-de-donnees.png" alt="sql icon" class="icon">
                         <p>SQL</p>
                    </div>
                    <div class="singleSkill">
                         <img src="assets/images/skills/laravel-icon-497x512-uwybstke.png" alt="laravel icon" class="icon">
                         <p>Laravel</p>
                    </div>
                    <div class="singleSkill">
                         <img src="assets/images/skills/mysql.png" alt="mysql icon" class="icon">
                         <p>Mysql</p>
                    </div>
                    <div class="singleSkill">
                         <img src="assets/images/skills/photoshop.png" alt="photoshop icon" class="icon">
                         <p>PhotoShop</p>
                    </div>
                    <div class="singleSkill">
                         <img src="assets/images/skills/inkscape-logo-2.png" alt="inkscape icon" class="icon">
                         <p>Inkscape</p>
                    </div>
               </div>

          </section>

          <!-- ************************ dimploma and certification ***************************** -->
          <section id="diploma-certification">
               <div id="section-title">
                    <h1>Diplomas and certifications</h1>
               </div>

               <a href="https://drive.google.com/file/d/1-CS-AIFsZwghoXimtrjPlUs1ibm-PFG7/view?usp=drive_link" class="certificate">
                    <img src="assets/images/diplome.png" alt="" class="icon">
                    <p>Diplomas</p>
               </a>
               <a href="https://drive.google.com/file/d/1-Ap48xmqGLAfeiitK4sYjs0c_MYowLrg/view?usp=drive_link" class="certificate">
                    <img src="assets/images/certificat.png" alt="" class="icon">
                    <p>Certifications</p>
               </a>
          </section>

          <!-- ************************ projects section ***************************** -->
          <section id="projects-section">
               <div id="section-title">
                    <h1>Recent projects</h1>
               </div>
               
               <!-- Team projects -->
               <h3>Team projects</h3>
               <div id="team" class="cardGroup">
                    <div class="card">
                         <img src="assets/images/fantaro/Logo FANTARO.jpeg" alt="fantaro">
                         <div class="card-title">
                              <h4>Fantaro</h4>
                              <p class="techno"> Flutter  Dart</p>
                         </div>
                         <div class="card-content">
                              <p>Mobile application which inform its users about the dangers that may exist in the world and at the same time offers solutions.</p>
                              <a href="#">Download app </a>
                         </div>
                    </div>

                    <div class="card">
                         <img src="assets/images/trash/poubelle.jpg" alt="automatic trash">
                         <div class="card-title">
                              <h4>Automatic trash</h4>
                              <p class="techno"> Arduino  MIT app inventor</p>
                         </div>
                         <div class="card-content">
                              <p>A trash which can open automatically at a certain distance and close automatically after a while. It can also be commanded by a special mobile application that we made with MIT app inventor. </p>
                              <a href="#myModal" id="modalLink">View demo </a>
                         </div>
                    </div>

                    <div id="myModal" class="modal">
                         <!-- Modal content -->
                         <div class="modal-content">
                           <span class="close">&times;</span>
                           <video src="assets/video/Zara_Larsson_-_Lush_Life_(Lyrics)(360p).mp4" controls></video>
                         </div>
                    </div>
               </div>

               <!-- Personnal projects -->
               <h3 style="margin-top: 100px;">Personal projects</h3>
               <div id="personal" class="cardGroup"> 
                    <div class="card">
                         <img src="assets/images/gessing number/number-guessing-game.jpg" alt="gessing number game">
                         <div class="card-title">
                              <h4>Gessing number game</h4>
                              <p class="techno"> Html 5  bootstrap 4  javasript</p>
                         </div>
                         <div class="card-content">
                              <p>A little game which invited people to find a mysterious number between 1 and 10  in free try otherwise they lose. </p>
                              <a href="https://github.com/Bloom-Rvls/gessing_number_game.git">See code source </a>
                         </div>
                    </div>

                    <div class="card">
                         <img src="assets/images/light-dark-mode/light_dark.jpg" alt="light dark mode">
                         <div class="card-title">
                              <h4>Light and dark mode</h4>
                              <p class="techno"> Html 5  bootstrap 4  javascript</p>
                         </div>
                         <div class="card-content">
                              <p>A little light and dark mode system made principaly with javaScript. The user just have to select an option to chage the color mode. </p>
                              <a href="https://github.com/Bloom-Rvls/light_dark_mode.git">See code source </a>
                         </div>
                    </div>

                    <div class="card">
                         <img src="assets/images/blog/blog.png" alt="image d'un blog">
                         <div class="card-title">
                              <h4>Blog</h4>
                              <p class="techno"> Html 5  bootstrap 4  php sql  Mysql</p>
                         </div>
                         <div class="card-content">
                              <p>A web site made principaly with php which show a list of all articles sotcked in a database, details of each article and have an administration system within we can create new article, modify or delete an existing article. </p>
                              <a href="https://github.com/Bloom-Rvls/Blog-project.git">See code source </a>
                         </div>
                    </div>
               </div>
          </section>


          <!-- ************************ footer ***************************** -->
          <footer>
               <div id="section-title">
                    <h1>Contact me</h1>
               </div>

               <div id="footer-section">

                    <?php if (!empty($errors)): ?>
                         <p id="error">Erreur, mail non envoyé!</p>
                    <?php endif; ?>

                    <?php if ($success): ?>
                         <p id="success">Votre mail a bien été envoyé!</p>
                    <?php endif; ?>

                    <div id="contact-section">
                         <div id="social-link">
                              <a href="https://web.facebook.com/bloom.ravel" class="fa fa-facebook"></a>
                              <a href="https://github.com/Bloom-Rvls" class="fa fa-github"></a>
                              <a href="https://www.linkedin.com/in/ang%C3%A9lica-ravelonjohanison-b43185262/" class="fa fa-linkedin"></a>
                         </div>
          
                         <div id="contact-form">

                              <form method="post"> 
                                   <div class="fullBlock" id="text-area">
                                        <textarea name="message" id="message" class="inputT" placeholder="Write your message here" required></textarea>
                                        <?php if(isset($errors['message'])): ?>
                                             <div style="color: red; font-size:smaller;"><?= $errors['message']?></div>
                                        <?php endif; ?>
                                   </div>
                                   <div class="smallBlock">
                                        <input type="text" id="name" class="inputT" name="name" placeholder="Your name" required>
                                        <?php if(isset($errors['name'])): ?>
                                             <div style="color: red;font-size:smaller;"><?= $errors['name']?></div>
                                        <?php endif; ?>
                                   </div>
                                   <div class="smallBlock">
                                        <input type="email" name="mail" class="inputT" id="mail" placeholder="Mail adress" required>
                                        <?php if(isset($errors['mail'])): ?>
                                             <div style="color: red;font-size:smaller;"><?= $errors['mail']?></div>
                                        <?php endif; ?>
                                   </div>
                                   <div class="fullBlock">
                                        <input type="text" name="object" class="inputT" id="object" placeholder="Object" required>
                                        <?php if(isset($errors['object'])): ?>
                                             <div style="color: red;font-size:smaller;"><?= $errors['object']?></div>
                                        <?php endif; ?>
                                   </div>
                                   <div class="fullBlock">
                                        <input type="submit" value="Send" id="send-mail">
                                   </div>
                              </form>
                         </div>     
                    </div>
                    
               </div>   
          </footer>

          <!-- ************************ back to top ***************************** -->
          
          <a href="#nav-bar" id="back-to-top"><i class="fa fa-arrow-circle-up"></i></a>
          
     </div>

     <script src="js/script.js"></script>
     <script src="js/modal.js"></script>
</body>
</html>