<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/paint.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <nav style="opacity: 0.8;" class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span id="typewriter-text"></span>
                <span class="cursor"></span>
            </a>
            <div class="links">
                <ul class="navbar-nav justify-content-end  flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#aboutme">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a id="contactme" class="nav-link" href="index.php#contactme">Contact me</a>
                    </li>
                    <li class="proj">
                        <a class="nav-link" href="projects.php">Projects<svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
                            </svg></a>
                        <ul class="dropdown">
                            <li class="drop1"><a href="web-development.php">Web Developmet</a></li>
                            <li class="drop2"><a href="">Software Developmet</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PortFolio<span>.</span></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav d-flex justify-content-center flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#aboutme">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#skills">Skills</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="project.php" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Projects
                            </a>
                            <ul id="dropdown" class="dropdown-menu bg-transparent">
                            <li><a class="dropdown-item" href="projects.php">Projects</a></li>
                                <li><a class="dropdown-item" href="web-development.php">Web development</a></li>
                                <li><a class="dropdown-item" href="#">Software development</a></li>
                                <li>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contactme">Contact Me</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="mainnet">
        <div class="main-content">
            <div class="header">
                <h2>Hi! I am</h2>
                <h1>Ryan Jay</h1>

            </div>
            <div class="description">
                <p>I am a dedicated, self-assured, and eager learner who is constantly looking for opportunities to pick
                    up
                    the new abilities.
                    I particularly want to put my knowledge and experience in programming. Learning programming is like
                    unlocking a new language that empowers me to create and innovate. Just as I learn and adapt to new
                    information, programming involves constant learning and problem-solving. It's a journey of growth
                    and discovery that opens up endless possibilities for creativity and development</p>
            </div>
            <div class="buttons">
                <?php

                ?>
                <a href="download.php?file=cv.pdf" class="btn">Download my CV</a>
                <a href="#contactme" class="btn">Contact me</a>
            </div>
            <div class="home-sci">
                <a href="https://www.facebook.com/ryanjay.antiquerra"><i class='bi bi-facebook'></i></a>
                <a href="https://github.com/RyanJayAntiquerra"><i class='bi bi-github'></i></a>
                <a href="https://www.linkedin.com/in/ryan-jay-antiquera-0a2330311/"><i class='bi bi-linkedin'></i></a>
            </div>
        </div>
    </div>
    <div class="about-me" id="aboutme">
        <div class="aboutmetext">
            <h1>About <span>Me</span></h1>
        </div>
        <div class="my-img">
            <img src="assets/ryan2.png" alt="">
        </div>
        <div class="my-description">
            <h4>Hi there! Glad to see you here!.</h4>
            <p>
                Seeking for a company where I
                can put my programming and
                database skills to good use! I'm a
                quick learner and great at solving
                problems logically. I want to use
                my experience to contribute to
                my first job
            </p>
        </div>
    </div>
    <div class="exp-text">
        <h1>My <span>Journey</span></h1>
    </div>
    <div class="real-exp">
        <div class="my-exp">
            <div class="elem1">
                <div class="hider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-mortarboard" viewBox="0 0 16 16">
                        <path
                            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                        <path
                            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                    </svg>
                    <span>College</span>
                </div>
                <p class="name">Laguna University</p>
                <p class="name">Sta. Cruz, Laguna</p>
                <P class="name">2023 - 2024</P>
            </div>
            <div class="elem2">
                <div class="hider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-mortarboard" viewBox="0 0 16 16">
                        <path
                            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                        <path
                            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                    </svg>
                    <span>Senior HighSchool</span>
                </div>
                <p class="name">San Antonio de Padua College</p>
                <p class="name">Pila, Laguna</p>
                <p class="name">2019 - 2020</P>
            </div>
            <div class="elem3">
                <div class="hider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-mortarboard" viewBox="0 0 16 16">
                        <path
                            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                        <path
                            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                    </svg>
                    <span>Elementary</span>
                </div>
                <p class="name">Tubuan Elementary School</p>
                <p class="name">Tubuan, Pila, Laguna</p>
                <P class="name">2013 - 2014</P>
            </div>
        </div>
        <div class="my-exp2">
            <div class="elem4">
                <div class="hider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-person-workspace" viewBox="0 0 16 16">
                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        <path
                            d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                    </svg>
                    <span>Web Developer (Intern)</span>
                </div>
                <p class="name">Provincial Capitol of Laguna</p>
                <p class="name">Sta. Cruz, Laguna</p>
                <P class="name">January - July, 2024</P>
            </div>
            <div class="elem5">
                <div class="hider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-person-workspace" viewBox="0 0 16 16">
                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        <path
                            d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                    </svg>
                    <span>Technical Support (Intern)</span>
                </div>
                <p class="name">Provincial Capitol of Laguna</p>
                <p class="name">Sta. Cruz, Laguna</p>
                <P class="name">January - July, 2024</P>
            </div>

        </div>
    </div>

    <div class="my-skills" id="skills">
        <h1>My <span>Skills</span></h1>
    </div>
    <div class="skills">
        <div class="table">
            <div class="progress-text">
                <h1>HTML</h1>
                <h1>90%</h1>
            </div>
            <div class="progress">
                <div class="bar">

                </div>
            </div>
            <div class="progress-text">
                <h1>CSS</h1>
                <h1>80%</h1>
            </div>
            <div class="progress">
                <div class="bar2">

                </div>
            </div>
            <div class="progress-text">
                <h1>C#</h1>
                <h1>70%</h1>
            </div>
            <div class="progress">
                <div class="bar3">

                </div>
            </div>
            <div class="progress-text">
                <h1>PHP</h1>
                <h1>80%</h1>
            </div>
            <div class="progress">
                <div class="bar4">
                </div>
            </div>
        </div>
        <div class="table">
            <div class="progress-text">
                <h1>VB</h1>
                <h1>80%</h1>
            </div>
            <div class="progress">
                <div class="bar5">

                </div>
            </div>
            <div class="progress-text">
                <h1>Java</h1>
                <h1>70%</h1>
            </div>
            <div class="progress">
                <div class="bar6">

                </div>
            </div>
            <div class="progress-text">
                <h1>MySQL</h1>
                <h1>60%</h1>
            </div>
            <div class="progress">
                <div class="bar7">

                </div>
            </div>
            <div class="progress-text">
                <h1>Laravel Framework</h1>
                <h1>50%</h1>
            </div>
            <div class="progress">
                <div class="bar8">
                </div>
            </div>
        </div>
    </div>
    <div class="contactme" id="contactme">
        <div class="my-contact">
            <div class="contact-header">
                <h1>Contact <span>Me</span></h1>
            </div>
            <div class="listcontact">
                <div class="linkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                    </svg>
                    <p><a href="https://www.linkedin.com/in/ryan-jay-antiquera-0a2330311/">LinkedIn</a></p>
                </div>
                <div class="linkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>
                    <p>Brgy. Tubuan, Pila, Laguna</p>
                </div>
                <div class="linkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                    <p>+63 9533311681</p>
                </div>
                <div class="linkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                    </svg>
                    <p>antiqueraryanjay4@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
<script>
    const constantTexts = [
        "Ryan Jay D. Antiquerra ",
        "A Web Developer. ",
        "A Software Developer. ",
        // Add more constant texts as needed
    ];

    const eraseDelay = 1000; // Delay before erasing (in milliseconds)
    const typingSpeed = 100; // Typing speed (milliseconds per character)
    const eraseSpeed = 50; // Erasing speed (milliseconds per character)

    function typewriterEffect(textElement, texts, typingSpeed, eraseSpeed, eraseDelay) {
        let textIndex = 0;
        let charIndex = 0;
        let isTyping = true;

        function typeCharacter() {
            textElement.textContent += texts[textIndex].charAt(charIndex);
            charIndex++;
            if (charIndex >= texts[textIndex].length) {
                isTyping = false;
                setTimeout(eraseText, eraseDelay);
            } else {
                setTimeout(typeCharacter, typingSpeed);
            }
        }

        function eraseText() {
            const currentText = textElement.textContent;
            if (currentText.length > 0) {
                textElement.textContent = currentText.slice(0, -1);
                setTimeout(eraseText, eraseSpeed);
            } else {
                charIndex = 0;
                textIndex = (textIndex + 1) % texts.length; // Move to the next text
                isTyping = true;
                setTimeout(typeCharacter, typingSpeed);
            }
        }

        typeCharacter();
    }

    const typewriterSpan = document.getElementById('typewriter-text');
    typewriterSpan.textContent = ''; // Clear initial text (if any)

    typewriterEffect(typewriterSpan, constantTexts, typingSpeed, eraseSpeed, eraseDelay);
</script>