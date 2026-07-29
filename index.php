<?php include 'partials/header.php'; ?>

  <section class="desktop-only">
    <aside class="sidebar">
      <div class="sidebar__logo-container">
        <div class="logo-circle">
          <a href="#" style="text-decoration: none;">
            <span class="logo-initial">SJ</span>
          </a>
        </div>
      </div>

      <nav class="sidebar__nav">
        <ul>
          <li><a href="/about"><i class="fas fa-user"></i> About Me</a></li>
          <li><a href="/skills"><i class="fas fa-tools"></i> Skills & Technologies</a></li>
          <li><a href="/portfolio"><i class="fas fa-briefcase"></i> My Portfolio</a></li>
          <li><a href="/coding"><i class="fas fa-code"></i> Coding Examples</a></li>
          <li><a href="/scheme"><i class="fas fa-layer-group"></i> SCS Scheme</a></li>
          <li><a href="/contact"><i class="fas fa-envelope"></i> Contact Me</a></li>
        </ul>
      </nav>
      <div class="sidebar__social">

        <a href="https://mailto:shyjijohn90@gmail.com" target="_blank" aria-label="Email"><i
            class="fas fa-envelope"></i></a>
        <a href="https://www.linkedin.com/in/shyjijohn/" target="_blank" aria-label="LinkedIn"><i
            class="fab fa-linkedin-in"></i></a>
      </div>
    </aside>
  </section>

  <div class="mobile-only">
    <section class="hero-mbl">
      <div class="btn__outline2" id="hamburger-btn">
        <div class="menu_div"></div>
        <div class="menu_div"></div>
        <div class="menu_div"></div>
      </div>

      <div class="hero-mbl__overlay">
        <h1 class="hero-mbl__title">My Name is <span id="name-typed-mbl"></span></h1>
        <p class="hero-mbl__subtitle">I'm a <span id="role-typed-mbl"></span></p>
      </div>
      <!-- <a href="#bio" class="scroll-down">Scroll Down <i class="fas fa-chevron-down"></i></a> -->
    </section>



    <!-- ....... -->

    <!-- Overlay backdrop -->
    <div class="drawer-overlay" id="drawer-overlay"></div>

    <!-- Slide-out drawer -->
    <nav class="mobile-drawer" id="mobile-drawer">
      <button class="drawer-close" id="drawer-close">&times;</button>

      <div class="drawer-scroll-body">
        <div class="drawer-logo">
          <span class="logo-initial">SJ</span>
        </div>

        <ul class="drawer-nav">
          <li><a href="/about"><i class="fas fa-user"></i> About Me</a></li>
          <li><a href="/portfolio"><i class="fas fa-briefcase"></i> My Portfolio</a></li>
          <li><a href="/coding"><i class="fas fa-code"></i> Coding Examples</a></li>
          <li><a href="/scheme"><i class="fas fa-layer-group"></i> SCS Scheme</a></li>
          <li><a href="/contact"><i class="fas fa-envelope"></i> Contact Me</a></li>
        </ul>

        <div class="drawer-social">
          <a href="mailto:shyjijohn90@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
          <a href="https://www.linkedin.com/in/shyjijohn/" target="_blank" aria-label="LinkedIn"><i
              class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </nav>
  </div>

  <!-- ....... -->



  <div class="desktop-only">
    <section class="hero-desk">
      <div class="hero-desk__overlay">
        <h1 class="hero-desk__title">My Name is <span id="name-typed-desk"></span></h1>
        <p class="hero-desk__subtitle">I'm a <span id="role-typed-desk"></span></p>
      </div>
      <!-- <a href="#bio" class="scroll-down">Scroll Down <i class="fas fa-chevron-down"></i></a> -->
    </section>
  </div>


  <div class="wrapper">
    <section class="bio-section" id="about">
      <!-- <div class="container"> -->
      <h2>Professional Profile</h2>
      <p>
        I am a passionate Web Developer specializing in building clean,
        functional, and responsive digital experiences. My journey started with a
        curiosity for how things work on the web, which evolved into a career
        dedicated to coding and continuous learning.
      </p>
      <p>
        Currently, I am part of the <strong>SCS Scheme</strong>, honing my skills in
        modern front-end technologies and best practices.
      </p>
      <!-- </div> -->
    </section>
    <!-- <div class="desktop-only">
      <hr style="display: block; width: 100%;">
    </div> -->


    <section class="focus-section">
      <div class="focus-grid">
        
        <!-- Card 1: What Role You Are Seeking -->
        <div class="focus-card seeking">
          <div class="focus-icon">
            <!-- Target Icon -->
            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
            </svg>
          </div>
          <h3>What I'm Seeking</h3>
          <p>
            An entry-level <strong>Junior Frontend or Full-Stack Developer</strong> role where I can contribute to building clean, responsive web applications. I am eager to join a collaborative engineering team where I can learn from experienced mentors, apply my skills in React, TypeScript, and Node.js, and continuously grow my technical foundation.
          </p>
        </div>

        <!-- Card 2: What Interests You -->
        <div class="focus-card interest">
          <div class="focus-icon">
            <!-- Rocket / Interest Icon -->
            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
            </svg>
          </div>
          <h3>My Core Interests</h3>
          <p>
            I am deeply interested in <strong>user-centric web development</strong> and translating designs into pixel-perfect, interactive UIs. I love the logic of problem solving, whether that's writing clean, maintainable code on the frontend or connecting APIs on the backend. I’m motivated by the challenge of turning ideas into functional digital products that make life easier for users.
          </p>
        </div>

      </div>
    </section>
    <div class="desktop-only">
      <hr style="display: block; width: 100%;">
    </div>



    <section class="skills-section" id="skills">
      <!-- <div class="container"> -->
      <h2 class="skills-title">Skills & Technologies</h2>

      <div class="skills-grid">
        <div class="skills-card frontend">
          <h3>Front-End Development</h3>
          <div class="badge-container">
          <span>HTML5</span><span>CSS3</span><span>Tailwind CSS</span><span>SCSS</span>
          <span>JavaScript</span><span>TypeScript</span><span>React</span><span>jQuery</span>
          <span>AJAX</span><span>MUI</span><span>Framer Motion</span><span>Vite</span>
          </div>
        </div>

        <div class="skills-card backend">
          <h3>Back-End Development</h3>
          <div class="badge-container">
            <span>Node.js</span><span>Express.js</span><span>Laravel</span><span>PHP</span><span>RESTful APIs</span>
          </div>
        </div>

        <div class="skills-card database">
          <h3>Database Management</h3>
          <div class="badge-container">
            <span>MySQL</span><span>Firebase</span>
          </div>
        </div>

        <div class="skills-card cloud">
          <h3>Authentication & Cloud</h3>
          <div class="badge-container">
            <span>Firebase Authentication</span><span>Firebase Hosting</span><span>Clerk</span><span>Cloudinary</span>
          </div>
        </div>

        <div class="skills-card tools">
          <h3>Tools & Practices</h3>
          <div class="badge-container">
            <span>Git</span><span>GitHub</span><span>VS Code</span><span>Postman</span>
            <span>Figma</span><span>Visual Studio</span><span>Responsive Design</span>
            <span>Role-Based Access Control</span><span>API Integration</span><span>Agile Methodologies</span>
          </div>
        </div>
      </div>
    </section>
    <div class="desktop-only">
      <hr style="display: block; width: 100%;">
    </div>



  <section class="career-section">
    <h2 class="career-title">Career Background</h2>
    
    <div class="timeline">
      
      <div class="timeline-item">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <span class="timeline-date">January 2025 – January 2026</span>
          <h3 class="role">Full-Stack Developer (Contract)</h3>
          <span class="company">Travel Industry Client</span>
          <ul class="description-list">
            <li>Independently developed a full-stack travel itinerary management platform for a travel industry client.</li>
            <li>Built mobile-optimized, responsive frontend interfaces using <strong>React, TypeScript, and MUI</strong>.</li>
            <li>Created <strong>Node.js/Express.js</strong> RESTful APIs to manage complex itinerary data, pricing, and user roles via <strong>MySQL JSON structures</strong>.</li>
            <li>Integrated <strong>Clerk</strong> for secure authentication, <strong>Cloudinary</strong> for image handling, and <strong>ChatGPT API</strong> for automated PDF itinerary parsing.</li>
            <li>Collaborated closely with the client to gather requirements and iteratively deploy a tailored solution.</li>
          </ul>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <span class="timeline-date">August 2024 – January 2025</span>
          <h3 class="role">Software Developer</h3>
          <span class="company">Marvenics</span>
          <ul class="description-list">
            <li>Developed responsive dashboards and landing pages for a restaurant table booking application using <strong>React, TypeScript, and MUI</strong>.</li>
            <li>Collaborated closely within an <strong>Agile Scrum</strong> team alongside UI/UX designers and backend developers to deliver features and integrate Node.js APIs.</li>
            <li>Maintained high code quality and component reusability through active participation in peer code reviews and <strong>Git version control</strong>.</li>
            <li>Contributed actively to sprint planning, daily stand-ups, and precise task estimations.</li>
          </ul>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <span class="timeline-date">July 2024 – December 2024</span>
          <h3 class="role">Volunteer Frontend Developer</h3>
          <span class="company">TheITApprentice</span>
          <ul class="description-list">
            <li>Created, enhanced, and reworked multiple responsive landing pages using <strong>TypeScript, React, and MUI</strong>.</li>
            <li>Utilized <strong>Framer Motion</strong> to implement smooth animations and elevate the interactive user experience.</li>
            <li>Ensured layout fluidness and structural integrity across varied screen configurations and mobile viewports.</li>
          </ul>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <span class="timeline-date">2020 – 2021 | India</span>
          <h3 class="role">Junior Software Developer</h3>
          <span class="company">Shadreams</span>
          <!-- <div class="tech-stack-tag mb-3">
            <strong>Tech Stack:</strong> HTML, CSS, Tailwind CSS, MySQL, C#, WPF
          </div> -->
          <ul class="description-list">
            <li>Co-designed and developed a desktop and web-based billing and inventory management application for a small-scale jewellery retail business.</li>
            <li>Simplified UI/UX workflows to enhance day-to-day user efficiency and resolved cross-platform UI rendering bugs in <strong>C# and WPF</strong>.</li>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <div class="desktop-only">
    <hr style="display: block; width: 100%;">
  </div>


    <section class="portfolio" id="portfolio">
      <h2>Portfolio</h2>
      <div class="project-grid">
        <article class="project-card">
          <div class="image-wrapper">
            <img src="./assets/netmatters-homepage.webp" alt="Netmatters Homepage Recreation">
          </div>
          <div class="project-content">
            <h3>Netmatters Homepage Recreation</h3>
            <p class="project-desc">Recreation of the Netmatters company homepage - Built with <strong>HTML</strong>,
              <strong>SCSS</strong>, and <strong>JavaScript</strong> - featuring a responsive layout and CSS animations.
            </p>
            <a href="https://netmatters.shyji-john.netmatters-scs.co.uk/" class="view-project" target="_blank">
              Live Demo <span class="arrow">&rarr;</span>
            <a href="https://github.com/shyjijohn/Netmatters_Homepage" class="view-project" target="_blank">
              Github <span class="arrow">&rarr;</span>
            </a>
          </div>
        </article>
        
        <article class="project-card">
          <div class="image-wrapper">
            <img src="./assets/js-array-pic.webp" alt="Random Picture Mapper">
          </div>
          <div class="project-content">
            <h3>Random Picture Mapper</h3>
            <p class="project-desc">A project developed using <strong>HTML</strong>, <strong>SCSS</strong>, and <strong>JavaScript</strong> that retrieves random images from the web and maps them to individual email addresses.
            </p>
            <a href="https://shyjijohn.github.io/Javascript_Array/" class="view-project" target="_blank">
              Live Demo <span class="arrow">&rarr;</span>
            </a>
            <a href="https://github.com/shyjijohn/Javascript_Array" class="view-project" target="_blank">
              Github <span class="arrow">&rarr;</span>
            </a>
          </div>
        </article>

        <article class="project-card">
          <div class="image-wrapper">
            <img src="./assets/laravel_adminpanel.webp" alt="Corporate Admin Panel">
          </div>
          <div class="project-content">
            <h3>Corporate Admin Panel</h3>
            <p class="project-desc">A mini-CRM admin system built with <strong>Laravel</strong>, <strong>PHP</strong>, and <strong>MySQL</strong> - featuring full CRUD functionality for managing companies and employees, secure authentication, file upload storage, and paginated data tables.
            </p>
            <a href="https://laravel.shyji-john.netmatters-scs.co.uk/" class="view-project" target="_blank">
              Live Demo <span class="arrow">&rarr;</span>
            </a>
            <a href="https://github.com/shyjijohn/Laravel_AdminPanel" class="view-project" target="_blank">
              Github <span class="arrow">&rarr;</span>
            </a>
          </div>
        </article>

        <!-- <article class="project-card">
          <div class="image-wrapper">
            <img src="./assets/padagan.png" alt="Project Name">
          </div>
          <div class="project-content">
            <h3>Project Two</h3>
            <a href="#" class="view-project">
              View Project <span class="arrow">&rarr;</span>
            </a>
          </div>
        </article>
        <article class="project-card">
          <div class="image-wrapper">
            <img src="./assets/portfolio.png" alt="Project Name">
          </div>
          <div class="project-content">
            <h3>Project Three</h3>
            <a href="#" class="view-project">
              View Project <span class="arrow">&rarr;</span>
            </a>
          </div>
        </article> -->

        <article class="project-card">
          <div class="image-wrapper">
            <img src="./assets/gram-biller.webp" alt="Gram Biller">
          </div>
          <div class="project-content">
            <h3>Gram Biller</h3>
            <p class="project-desc">A billing and invoice management application built with <strong>HTML</strong>, <strong>CSS</strong>, and <strong>TypeScript</strong> to create, manage, and organize customer bills efficiently through a simple and user-friendly interface.</p>
            <a href="https://shyjijohn.github.io/Gram-Biller" class="view-project" target="_blank">
              Live Demo <span class="arrow">&rarr;</span>
            </a>
            <a href="https://github.com/shyjijohn/Gram-Biller" class="view-project" target="_blank">
              Github <span class="arrow">&rarr;</span>
            </a>
          </div>
        </article>
        <article class="project-card">
          <div class="image-wrapper">
            <img src="./assets/rate-grapher.webp" alt="Global Currency Converter">
          </div>
          <div class="project-content">
            <h3>Global Currency Converter</h3>
            <p class="project-desc">A responsive web application built with <strong>HTML</strong>, <strong>CSS</strong>, and <strong>JavaScript</strong> for converting currencies quickly and efficiently using live exchange rate data.</p>
            <a href="https://shyjijohn.github.io/Currency-Converter/" class="view-project" target="_blank">
              Live Demo <span class="arrow">&rarr;</span>
            </a>
            <a href="https://github.com/shyjijohn/Currency-Converter" class="view-project" target="_blank">
              Github <span class="arrow">&rarr;</span>
            </a>
          </div>
        </article>
        <article class="project-card">
          <div class="image-wrapper">
            <img src="./assets/solar-system.webp" alt="Solar System">
          </div>
          <div class="project-content">
            <h3>Solar System</h3>
            <p class="project-desc">An interactive visualization of our solar system built with <strong>HTML</strong>, <strong>CSS</strong>, and <strong>JavaScript</strong>.</p>
            <a href="https://shyjijohn.github.io/Solar-System/" class="view-project" target="_blank">
              Live Demo <span class="arrow">&rarr;</span>
            </a>
            <a href="https://github.com/shyjijohn/Solar-System" class="view-project" target="_blank">
              Github <span class="arrow">&rarr;</span>
            </a>
          </div>
        </article>

      </div>
    </section>
    <div class="desktop-only">
      <hr style="display: block; width: 100%;">
    </div>


    <section class="coding-examples" id="coding">
      <h2>Coding Examples</h2>

      <div class="code-example-card">
        <div class="code-example-header">
          <span class="code-dot red"></span>
          <span class="code-dot yellow"></span>
          <span class="code-dot green"></span>
          <span class="code-filename">typingEffect.js</span>
        </div>
        <pre class="code-block"><code><span class="kw">function</span> <span class="fn">startRoleTyping</span>(selector) {
  
        <span class="kw">new</span> <span class="fn">Typed</span>(selector, {
          strings: [<span class="str">'Web Developer'</span>, <span class="str">'Frontend Developer'</span>, <span class="str">'UI/UX Enthusiast'</span>],
          typeSpeed: <span class="num">60</span>,
          backSpeed: <span class="num">40</span>,
          backDelay: <span class="num">1800</span>,
          loop: <span class="kw">true</span>,
          showCursor: <span class="kw">true</span>,
          cursorChar: <span class="str">'|'</span>
        });
      }

        <span class="kw">new</span> <span class="fn">Typed</span>(<span class="str">'#name-typed-desk'</span>, {
          strings: [<span class="str">'Shyji John'</span>],
          typeSpeed: <span class="num">80</span>,
          loop: <span class="kw">false</span>,
          showCursor: <span class="kw">false</span>,
          onComplete: <span class="kw">function</span>() {
            <span class="fn">startRoleTyping</span>(<span class="str">'#role-typed-desk'</span>);
          }
        });
        </code>
        </pre>

        <div class="code-meta">
          <div class="code-meta-item">
            <span class="meta-label">Language</span>
            <span class="meta-value">JavaScript - using the Typed.js library</span>
          </div>
          <div class="code-meta-item">
            <span class="meta-label">What it does</span>
            <span class="meta-value">Animates a typewriter effect on the hero section. First it types the name
              <em>"Shyji John"</em>, and once that completes, it loops through a list of role titles &mdash; <em>Web
                Developer</em>, <em>Frontend Developer</em>, and <em>UI/UX Enthusiast</em> &mdash; typing and deleting
              each one continuously.</span>
          </div>
          <div class="code-meta-item">
            <span class="meta-label">Why I used it</span>
            <span class="meta-value">Animating the name before looping through roles looks smooth and natural.</span>
          </div>
        </div>
      </div>
    </section>

    <div class="code-example-card">
  <div class="code-example-header">
    <span class="code-dot red"></span>
    <span class="code-dot yellow"></span>
    <span class="code-dot green"></span>
    <span class="code-filename">DatabaseSeeder.php</span>
  </div>
  <pre class="code-block"><code><span class="kw">public function</span> <span class="fn">run</span>(): <span class="kw">void</span>
{
    <span class="fn">User</span>::<span class="fn">create</span>([
        <span class="str">'name'</span> => <span class="str">'Admin'</span>,
        <span class="str">'email'</span> => <span class="str">'admin@admin.com'</span>,
        <span class="str">'password'</span> => <span class="fn">Hash</span>::<span class="fn">make</span>(<span class="str">'password'</span>),
    ]);

    <span class="fn">Company</span>::<span class="fn">factory</span>(<span class="num">10</span>)-><span class="fn">create</span>()-><span class="fn">each</span>(<span class="kw">function</span> (<span class="var">$company</span>) {
        <span class="fn">Employee</span>::<span class="fn">factory</span>(<span class="num">5</span>)-><span class="fn">create</span>([<span class="str">'company_id'</span> => <span class="var">$company</span>-><span class="var">id</span>]);
    });
}</code></pre>

  <div class="code-meta">
    <div class="code-meta-item">
      <span class="meta-label">Language</span>
      <span class="meta-value">PHP - using Laravel Factories & Seeders</span>
    </div>
    <div class="code-meta-item">
      <span class="meta-label">What it does</span>
      <span class="meta-value">Seeds the database with default administrator credentials (<em>"admin@admin.com"</em>) and automatically generates mock data for 10 companies and 50 employees for testing.</span>
    </div>
    <div class="code-meta-item">
      <span class="meta-label">Why I used it</span>
      <span class="meta-value">Automates environment setup so the application is immediately testable and functional upon running a fresh database migration.</span>
    </div>
  </div>
</div>
    <div class="desktop-only">
      <hr style="display: block; width: 100%;">
    </div>


    <section class="scs-carousel" id="scheme">
      <h2>SCS Scheme</h2>
      <div class="container">
        <input type="radio" name="scs-slider" id="slide1" checked>
        <input type="radio" name="scs-slider" id="slide2">
        <input type="radio" name="scs-slider" id="slide3">

        <div class="carousel-viewport">
          <div class="carousel-inner">

            <div class="carousel-item">
              <div class="scs-card">
                <!-- <span class="category">SCS Scheme</span> -->
                <h3>Introduction to Scion Coalition Scheme</h3>
                <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in
                  order to give willing candidates the opportunity to enter the industry as web developers.
                  Under the supervision of senior web developers, scions generally aim to complete training
                  within six to nine months. The course is intensive and therefore the level of learning achieved
                  is extensive in a short space of time.</p>
              </div>
            </div>

            <div class="carousel-item">
              <div class="scs-card treehouse-theme">
                <!-- <span class="category">Learning</span> -->
                <h3>Treehouse</h3>
                <p>Treehouse is an online learning community, featuring videos covering a number of topics
                  from basic HTML to C# programming, iOS development, data analysis, and more.
                  By completing courses users can earn points, allowing them to track their progress
                  and see how much they?ve covered in certain areas.</p>
                <div class="score-box">
                  <p>Total Score:</p>
                  <p><strong><a href="https://teamtreehouse.com/xxxxx"
                        target="_blank">teamtreehouse.com/xxxxx</a></strong></p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="scs-card">
                <!-- <span class="category"></span> -->
                <h3>About Netmatters</h3>
                <ul>
                  <li>Established in 2008</li>
                  <li>Norfolk's leading technology company</li>
                  <li>Winner of the Princess Royal Training Award</li>
                  <li>80+ staff, 2 locations across Norfolk</li>
                  <li>Digital Marketing, Website & Software development & IT Support</li>
                  <li>Broad spectrum of clients, working nationwide</li>
                  <li>Operate to strict company values</li>
                </ul>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-dots">
          <label for="slide1"></label>
          <label for="slide2"></label>
          <label for="slide3"></label>
        </div>
      </div>
    </section>
    <div class="desktop-only">
      <hr style="display: block; width: 100%;">
    </div>

    <!-- contact section -->

    <?php include 'contact.php'; ?>




  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
  <!-- <script src="js/mobile-drawer.js"></script> -->
  <script>
    $(document).ready(function () {

      function startRoleTyping(selector) {
        new Typed(selector, {
          strings: ['Web Developer', 'Frontend Developer', 'UI/UX Enthusiast'],
          typeSpeed: 60,
          backSpeed: 40,
          backDelay: 1800,
          loop: true,
          showCursor: true,
          cursorChar: '|'
        });
      }

      // Mobile name → then mobile role
      new Typed('#name-typed-mbl', {
        strings: ['Shyji John'],
        typeSpeed: 80,
        loop: false,
        showCursor: false,
        cursorChar: '|',
        onComplete: function () {
          startRoleTyping('#role-typed-mbl');
        }
      });

      // Desktop name → then desktop role
      new Typed('#name-typed-desk', {
        strings: ['Shyji John'],
        typeSpeed: 80,
        loop: false,
        showCursor: false,
        cursorChar: '|',
        onComplete: function () {
          startRoleTyping('#role-typed-desk');
        }
      });


      // Hamburger menu
      const hamburger = document.getElementById('hamburger-btn');
      const drawer = document.getElementById('mobile-drawer');
      const overlay = document.getElementById('drawer-overlay');
      const closeBtn = document.getElementById('drawer-close');

      function openDrawer() {
        drawer.classList.add('open');
        overlay.classList.add('visible');
      }

      function closeDrawer() {
        drawer.classList.remove('open');
        overlay.classList.remove('visible');
      }

      hamburger.addEventListener('click', openDrawer);
      closeBtn.addEventListener('click', closeDrawer);
      overlay.addEventListener('click', closeDrawer);

      // Close drawer when a nav link is clicked
      document.querySelectorAll('.drawer-nav a').forEach(link => {
        link.addEventListener('click', closeDrawer);
      });

      // Close drawer when switching to desktop layout (e.g. device rotation)
      window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
          closeDrawer();
        }
      });

    });


   
  </script>




  <script>
    // Map URL paths to section IDs
    const pathToSection = {
      '/about':     'about',
      '/skills':    'skills',
      '/portfolio': 'portfolio',
      '/coding':    'coding',
      '/scheme':    'scheme',
      '/contact':   'contact'
    };

    // On page load, scroll to the matching section if path matches
    (function scrollToSection() {
      const section = pathToSection[window.location.pathname];
      if (section) {
        const el = document.getElementById(section);
        if (el) {
          // Small delay so the page fully renders before scrolling
          setTimeout(() => el.scrollIntoView({ behavior: 'smooth' }), 100);
        }
      }
    })();

    // Intercept nav link clicks — push clean URL then smooth-scroll
    document.querySelectorAll('a[href^="/"]').forEach(link => {
      const path = link.getAttribute('href');
      if (pathToSection[path]) {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          history.pushState(null, '', path);
          const el = document.getElementById(pathToSection[path]);
          if (el) el.scrollIntoView({ behavior: 'smooth' });
          // Close mobile drawer if open
          const drawer = document.getElementById('mobileMenu');
          if (drawer && drawer.classList.contains('open')) {
            drawer.classList.remove('open');
          }
        });
      }
    });
  </script>


</body>

</html>