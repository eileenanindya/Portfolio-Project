<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eileen Anindya | Portfolio</title>
    <link rel="shortcut icon" href="{{ URL('img\icon.png')}}" type="x icon">
    <link rel="stylesheet" href="{{ asset('css\porto.css') }}">
    <link rel="stylesheet" href="{{ asset('css\mediaqueries.css') }}">
</head>
<body>
    <div class="main-container">
        <nav id="desktop-nav">
            <div class="nav">
                <div class="logo">
                    <a href="/">Eileen.</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </nav>

        <nav id="burger-nav">
            <div class="logo">
                <a href="/">Eileen.</a>
            </div>
            <div class="burger-menu">
                <div class="burger-icon" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="menu-links">
                    <li><a href="#about" onclick="toggleMenu()">About</a></li>
                    <li><a href="#skills" onclick="toggleMenu()">Skills</a></li>
                    <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
                    <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
                </div>
            </div>
        </nav>
        
        <section id="hero">
            <div class="hero-left">
                <h1 class="pre-title">Hi🙌</h1>
                <h1 class="hero-name">I'm <span>Eileen Anindya</span></h1>
                <h2 class="pre-title2">Computer Science Student</h2>
                <p class="hero-desc">Hey, glad you're here! Take a stroll through my portfolio—it's where I fuse creativity and tech to bring projects to life.</p>
                <div class="btn-container">
                    <button class="btn btn-color-1" onclick="window.open('{{ URL('https://drive.google.com/file/d/1ApaB2KEWxduGDeaNDjegOxc_0TypM4bI/view?usp=sharing') }}')">Resume</button>
                    <button class="btn btn-color-2" onclick="window.open('{{ URL('https://drive.google.com/file/d/1t4nQoCroBwr9LyobXSH9qT9xBv2kl0xM/view?usp=sharing') }}')">Design Portfolio</button>
                </div>
            </div>
            <div class="hero-right">
                <img src="{{ URL('img\profilee.png')}}" alt="Profile Picture" class="max-w-full mx-auto" width="400">
            </div>
        </section>
        
        <section id="about">
            <p class="section_text_p1">Get To Know More</p>
            <h1 class="about-title">About Me</h1>
            <div class="section-container">
                <div class="about-details-container">
                    <div class="about-container">
                        <div class="details-container">
                        <div class="section__pic-container">
                            <img src="{{ URL('img\sapiens.png')}}" alt="Profile Picture" class="illustration" width="545">
                        </div>
                    </div>
                    <div class="text-container">
                        <div class="desc-container">
                            <p>Hello, I'm Eileen Anindya Putri Maheswari, a second-year computer science student at Bina Nusantara University. Through my projects, I aim to deliver innovative solutions that captivate and inspire. I've worked with Laravel, Unity, C Programming Language, Python, and many more. In my portfolio, you'll find the culmination of my expertise and experiences.</p>
                            <p>Let's connect on LinkedIn!</p>
                            <div class="social-container">
                                <img src="{{ URL('img\linkedin.png')}}" alt="LinkedIn Profile" class="social-icon" onclick="location.href='{{ URL('https://www.linkedin.com/in/eileen-anindya/') }}'">
                                <img src="{{ URL('img\github.png')}}" alt="GitHub Profile" class="social-icon" onclick="location.href='{{ URL('https://github.com/eileenanindya') }}'">
                            </div>
                        </div>
                        <div class="education">
                            <h1>Education</h1>
                        </div>
                        <div class="education-container1">
                            <div class="line">
                                <div></div>
                            </div>
                            <div class="education-info">
                                <h4 class="education-place">BINUS University</h4>
                                <p>Undergraduate - Computer Science</p>
                                <h4 class="education-years">2022 - 2026</h4>
                            </div>
                        </div>
                        <div class="education-container2">
                            <div class="line">
                                <div></div>
                            </div>
                            <div class="education-info">
                                <h4 class="education-place">SMA Negeri 1 Surakarta</h4>
                                <p>Mathematics and natural sciences</p>
                                <h4 class="education-years">2019 - 2022</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <div class="experience main-container">
                <p class="section_text_p1">Let's Explore</p>
                <h1 class="experience-title">What I Learn</h1>
                
                <div class="grid-3">
                    <div class="experiences">
                        <h4>Frontend Development</h4>
                        <div class="article-container">
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>HTML</h3>
                                    <p>Intermediate</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>CSS</h3>
                                    <p>Intermediate</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>JavaScript</h3>
                                    <p>Intermediate</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>Bootstrap</h3>
                                    <p>Basic</p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="experiences">
                        <h4>Backend Development</h4>
                        <div class="article-container">
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>MySQL</h3>
                                    <p>Intermediate</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>Git</h3>
                                    <p>Basic</p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="experiences">
                        <h4>Others</h4>
                        <div class="article-container">
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>C</h3>
                                    <p>Intermediate</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>Python</h3>
                                    <p>Basic</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>Figma</h3>
                                    <p>Intermediate</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>Cisco</h3>
                                    <p>Basic</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>Unity</h3>
                                    <p>Intermediate</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>Java</h3>
                                    <p>Basic</p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ URL('img\checkmark.png')}}" alt="Checkmark Icon" class="icon" width="30" height="30">
                                <div>
                                    <h3>Laravel</h3>
                                    <p>Basic</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="projects main-container">
                <p class="section_text_p1">Browse My Latest</p>
                <h1 class="experience-title">Projects</h1>

                <div class="grid-2">
                    <div class="project">
                        <div class="project-title">
                                <h4>ChemiCute: AR Project</h4>
                            </div>
                        <div class="project-cover">
                            <img src="{{ URL('img\project1.png')}}" alt="Project 1" class="project-img" width="400">
                        </div>
                        <div class="project-info">
                            
                            <div class="project-tags">
                                <div>Unity</div>
                                <div>C#</div>
                            </div>
                            <p>ChemiCute seamlessly integrates augmented reality, educational chemistry content, and captivating gaming mechanics. Developed with Unity and C#, this project offers an immersive journey into a virtual laboratory, allowing users to interact with chemical elements, conduct experiments, and delve into scientific concepts through dynamic gameplay.</p>
                            <div class="btn-container">
                                    <button class="btn btn-color-2 project-btn">Github</button>
                            </div>
                        </div>
                    </div>

                    <div class="project">
                        <div class="project-title">
                                <h4>Hangman: OOP Project</h4>
                            </div>
                        <div class="project-cover">
                            <img src="{{ URL('img\hangmangame.png')}}" alt="Project 2" class="project-img">
                        </div>
                        <div class="project-info">
                            
                            <div class="project-tags">
                                <div>Java</div>
                            </div>
                            <p>Hangman, developed with Java, digitizes the timeless word-guessing game. Featuring a user-friendly interface and a wide array of word options, players of all levels can enjoy the challenge. The game's logic and interactive elements provide an engaging experience. Hangman offers a fun way to test word-solving skills, suitable for players of any level.</p>
                            <div class="btn-container">
                                    <button class="btn btn-color-2 project-btn" onclick="window.open('{{ URL('https://github.com/eileenanindya/Hangman') }}')">Github</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <p class="section_text_contact">Let's Get In Touch</p>
            <h1 class="contact-title">Contact Me</h1>
            <div class="contact main-container">
                
                <div class="contact-left">
                    <form action="https://formspree.io/f/xeqyvzeo" method="POST" class="contact-form">
                        <div>
                            <input type="text" placeholder="Name" name="name">
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-color-2 submit-button">Send Message</button>
                        </div>
                    </form>
                </div>

                <div class="contact-right">
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Location</h4>
                            <p>Malang, Indonesia</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.89 23.654c-7.367 3.367-18.802-18.86-11.601-22.615l2.107-1.039 3.492 6.817-2.083 1.026c-2.189 1.174 2.37 10.08 4.609 8.994.091-.041 2.057-1.007 2.064-1.011l3.522 6.795c-.008.004-1.989.978-2.11 1.033zm-9.438-2.264c-1.476 1.072-3.506 1.17-4.124.106-.47-.809-.311-1.728-.127-2.793.201-1.161.429-2.478-.295-3.71-1.219-2.076-3.897-1.983-5.906-.67l.956 1.463c.829-.542 1.784-.775 2.493-.609 1.653.388 1.151 2.526 1.03 3.229-.212 1.223-.45 2.61.337 3.968 1.243 2.143 4.579 2.076 6.836.316-.412-.407-.811-.843-1.2-1.3z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Phone</h4>
                            <p>08112640999</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Email</h4>
                            <p>eileen.maheswari@binus.ac.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
                <nav>
                <div class="nav-footer">
                    <ul class="nav-links">
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <p>Copyright &#169; 2024 Eileen Anindya. All Rights Reserved.</p>
        </footer>
    </div>

    <script src="{{ asset('js\script.js') }}"></script>
</body>
</html>