<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shovo - Web Developer from Bangladesh</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Defer JS for performance -->
    <script src="/js/script.js" defer></script>
</head>

<body>

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <h1 class="logo">
                <a href="#" aria-label="Homepage">Shovo<span>.</span></a>
            </h1>

            <div class="navbar-actions">
                <button class="theme-btn" aria-label="Change Theme" title="Change Theme" data-theme-btn tabindex="0">
                    <span class="icon" aria-hidden="true"></span>
                </button>
            </div>

            <button class="nav-toggle-btn" aria-label="Toggle Menu" title="Toggle Menu" data-nav-toggle-btn tabindex="0">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
            </button>

            <nav class="navbar" data-navbar aria-label="Main Navigation">
                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link" tabindex="0">Home.</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link" tabindex="0">About.</a>
                    </li>

                    <li>
                        <a href="#skills" class="navbar-link" tabindex="0">Skills.</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="navbar-link" tabindex="0">Portfolio.</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link" tabindex="0">Contact.</a>
                    </li>

                </ul>
            </nav>

        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <figure class="hero-banner">
            <img src="/assets/images/shovo.png" alt="Hero banner image" loading="lazy">
        </figure>
        <div class="hero-content">
            <!-- Hero title removed as requested -->
            <a href="#contact" class="btn btn-primary">Get in touch</a>
        </div>
        <ul class="hero-social-list" aria-label="Social Links">
            <li>
                <a href="#" class="hero-social-link" aria-label="Facebook" tabindex="0">
                    <ion-icon name="logo-facebook" aria-hidden="true"></ion-icon>
                    <span class="span">Facebook</span>
                </a>
            </li>
            <li>
                <a href="#" class="hero-social-link" aria-label="Twitter" tabindex="0">
                    <ion-icon name="logo-twitter" aria-hidden="true"></ion-icon>
                    <span class="span">Twitter</span>
                </a>
            </li>
            <li>
                <a href="#" class="hero-social-link" aria-label="Linkedin" tabindex="0">
                    <ion-icon name="logo-linkedin" aria-hidden="true"></ion-icon>
                    <span class="span">Linkedin</span>
                </a>
            </li>
        </ul>
        <a href="#about" class="scroll-down" aria-label="Scroll to About section">Scroll</a>
    </section>

    <main>
        <article class="container">

            <!-- 
        - #ABOUT
      -->

            <section class="about" id="about">

                <figure class="about-banner">
                    <img src="/assets/images/2.jpg" alt="About Me banner image" loading="lazy">
                </figure>

                <div class="about-content section-content">

                    <p class="section-subtitle">About Me</p>

                    <h2 class="h3 section-title">Need a Creative Product? I can Help You!</h2>

                    <p class="section-text">
                        Hi! I'm Shahriar Ahmed Shovo, and I'm a developer who has passion for building clean web applications with intuitive functionality. I enjoy the process of turning ideas into reality using creative solutions. I'm always curious about learning new skills, tools, and concepts. In addition to working on various solo full stack projects, I have worked with creative teams, which involves daily stand-ups and communications, source control, and project management.
                    </p>

                    <div class="btn-group">
                        <a href="/assets/docs/Shahriar-Ahmed-Shovo-CV.pdf" class="btn btn-secondary" download>Download CV</a>

                        <a href="#contact" class="btn btn-primary">Contact</a>
                    </div>

                </div>

            </section>





            <!-- 
        - #SKILLS
      -->

            <section class="skills" id="skills">

                <div class="skills-content section-content">

                    <p class="section-subtitle">My Skills</p>

                    <h2 class="h3 section-title">What My Programming Skills Include?</h2>

                    <p class="section-text">
                        I develop simple, intuitive and responsive user interfaces that help users get things done with less effort and time using these technologies.
                    </p>

                    <div class="skills-toggle" data-toggle-box>
                        <button class="toggle-btn active" data-toggle-btn tabindex="0">Skills</button>

                        <button class="toggle-btn" data-toggle-btn tabindex="0">Tools</button>
                    </div>

                </div>

                <div class="skills-box" data-skills-box>

                    <ul class="skills-list">

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">HTML5</div>

                                <div class="card-icon">
                                    <img src="/assets/images/html5.png" alt="HTML5 logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">CSS3</div>

                                <div class="card-icon">
                                    <img src="/assets/images/css3.png" alt="CSS3 logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">JavaScript</div>

                                <div class="card-icon">
                                    <img src="/assets/images/javascript.png" alt="JavaScript logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">TypeScript</div>

                                <div class="card-icon">
                                    <img src="/assets/images/typescript.png" alt="TypeScript logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">jQuery</div>

                                <div class="card-icon">
                                    <img src="/assets/images/jquery.png" alt="jQuery logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Bootstrap</div>

                                <div class="card-icon">
                                    <img src="/assets/images/bootstrap.png" alt="Bootstrap logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Angular</div>

                                <div class="card-icon">
                                    <img src="/assets/images/angular.png" alt="Angular logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">React</div>

                                <div class="card-icon">
                                    <img src="/assets/images/react.png" alt="React logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Vue</div>

                                <div class="card-icon">
                                    <img src="/assets/images/vue.png" alt="Vue logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Firebase</div>

                                <div class="card-icon">
                                    <img src="/assets/images/firebase.png" alt="Firebase logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">PugJs</div>

                                <div class="card-icon">
                                    <img src="/assets/images/pugjs.png" alt="PugJs logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">SASS</div>

                                <div class="card-icon">
                                    <img src="/assets/images/sass.png" alt="SASS logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="tools-list">

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Ajax</div>

                                <div class="card-icon">
                                    <img src="/assets/images/ajax.png" alt="Ajax logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Gulp</div>

                                <div class="card-icon">
                                    <img src="/assets/images/gulp.png" alt="Gulp logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Webpack</div>

                                <div class="card-icon">
                                    <img src="/assets/images/webpack.png" alt="Webpack logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Git</div>

                                <div class="card-icon">
                                    <img src="/assets/images/git.png" alt="Git logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Npm</div>

                                <div class="card-icon">
                                    <img src="/assets/images/npm.png" alt="Npm logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Command Line</div>

                                <div class="card-icon">
                                    <img src="/assets/images/command.png" alt="Command Line logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">VS Code</div>

                                <div class="card-icon">
                                    <img src="/assets/images/vs-code.png" alt="VS Code logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Trello</div>

                                <div class="card-icon">
                                    <img src="/assets/images/trello.png" alt="Trello logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">ClickUp</div>

                                <div class="card-icon">
                                    <img src="/assets/images/clickup.png" alt="ClickUp logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Slack</div>

                                <div class="card-icon">
                                    <img src="/assets/images/slack.png" alt="Slack logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Photoshop</div>

                                <div class="card-icon">
                                    <img src="/assets/images/photoshop.png" alt="Photoshop logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Adobe XD</div>

                                <div class="card-icon">
                                    <img src="/assets/images/adobe-xd.png" alt="Adobe XD logo" loading="lazy">
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

            </section>





            <!-- 
        - #PROJECTS
      -->

            <section class="project" id="portfolio">

                <ul class="project-list">

                    <li>
                        <div class="project-content section-content">

                            <p class="section-subtitle">Projects</p>

                            <h2 class="h3 section-title">See My Works Which Will Amaze You!</h2>

                            <p class="section-text">
                                We develop the best quality website that serves for the long-term. Well-documented, clean, easy and elegant interface helps any non-technical clients.
                            </p>

                        </div>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="/assets/images/project-1.png" class="w-100" alt="A macintosh on a yellow background." loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Project 01</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="/assets/images/project-2.png" class="w-100" alt="On a Blue background, a Wacom and a mouse." loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Project 02</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="/assets/images/project-3.png" class="w-100" alt="A Cassette tape on a mellow apricot background." loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Project 03</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="/assets/images/project-4.png" class="w-100" alt="Blue digital watch on a dark liver background." loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Project 04</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="/assets/images/project-5.png" class="w-100" alt="On a dark liver background, Airport luggage car carrying a luggage." loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Project 05</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="/assets/images/project-6.png" class="w-100" alt="On a yellow background, a digital watch and a glass." loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Project 06</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="/assets/images/project-7.png" class="w-100" alt="A fujifilm instant camera on a dark electric blue background." loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Project 07</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <button class="load-more">Load more work</button>
                    </li>

                </ul>

            </section>





            <!-- 
        - #CONTACT
      -->

            <section class="contact" id="contact">

                <div class="contact-content section-content">

                    <p class="section-subtitle">Contact</p>

                    <h2 class="h3 section-title">Have You Any Project? Please Drop a Message</h2>

                    <p class="section-text">
                        Get in touch and let me know how i can help. Fill out the form and i'll be in touch as soon as possible.
                    </p>

                    <ul class="contact-list">

                        <li class="contact-list-item">

                            <div class="contact-item-icon">
                                <ion-icon name="location-outline"></ion-icon>
                            </div>

                            <div class="wrapper">
                                <h3 class="h4 contact-item-title">Address:</h3>

                                <address class="contact-info">
                  #209, Block-A, YKSG-2<br>
                </address>
                            </div>

                        </li>

                        <li class="contact-list-item">

                            <div class="contact-item-icon">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>

                            <div class="wrapper">
                                <h3 class="h4 contact-item-title">Phone:</h3>

                                <a href="tel:01829006269" class="contact-info">01829006269</a>
                            </div>

                        </li>

                        <li class="contact-list-item">

                            <div class="contact-item-icon">
                                <ion-icon name="mail-outline"></ion-icon>
                            </div>

                            <div class="wrapper">
                                <h3 class="h4 contact-item-title">Email:</h3>

                                <a href="mailto:shahriarahmedshovo01@gmail.com" class="contact-info">shahriarahmedshovo01@gmail.com</a>
                            </div>

                        </li>

                        <li>
                            <ul class="contac-social-list">

                                <li>
                                    <a href="#" class="contact-social-link">
                                        <div class="tooltip">Facebook</div>

                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="contact-social-link">
                                        <div class="tooltip">Twitter</div>

                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="contact-social-link">
                                        <div class="tooltip">Linkedin</div>

                                        <ion-icon name="logo-linkedin"></ion-icon>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="contact-social-link">
                                        <div class="tooltip">Youtube</div>

                                        <ion-icon name="logo-youtube"></ion-icon>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>

                </div>

                <form action="" class="contact-form">

                    <div class="form-wrapper">

                        <label for="name" class="form-label">Name</label>

                        <div class="input-wrapper">

                            <input type="text" name="name" id="name" required placeholder="e.g John Doe" class="input-field">

                            <ion-icon name="person-circle"></ion-icon>

                        </div>

                    </div>

                    <div class="form-wrapper">

                        <label for="email" class="form-label">Email</label>

                        <div class="input-wrapper">

                            <input type="email" name="email" id="email" required placeholder="e.g johndoe@mail.com" class="input-field">

                            <ion-icon name="mail"></ion-icon>

                        </div>

                    </div>

                    <div class="form-wrapper">

                        <label for="phone" class="form-label">Phone</label>

                        <div class="input-wrapper">

                            <input type="tel" name="phone" id="phone" required placeholder="Phone Number" class="input-field">

                            <ion-icon name="call"></ion-icon>

                        </div>

                    </div>

                    <div class="form-wrapper">

                        <label for="message" class="form-label">Message</label>

                        <div class="input-wrapper">

                            <textarea name="message" id="message" required placeholder="Write message..." class="input-field"></textarea>

                            <ion-icon name="chatbubbles"></ion-icon>

                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>

            </section>

        </article>
    </main>





    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <p class="h1 logo">
                <a href="#">
          Shovo<span>.</span>
        </a>
            </p>

            <p class="copyright">
                &copy; 2022 <a href="#">codewithshovo</a>. All rights reserved
            </p>

        </div>
    </footer>





    <!-- 
    - #GO TO TOP
  -->

    <a href="#top" class="go-top" data-go-top title="Go to Top">
        <ion-icon name="arrow-up"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script src="/assets/js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>