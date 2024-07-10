<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio</title>
    <link rel="stylesheet" href="css/styles.css">
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
                        <a class="nav-link" aria-current="page" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contactme">Contact me</a>
                    </li>
                    <li class="proj">
                        <a class="nav-link" href="projects.php">Projects<svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short"
                                viewBox="0 0 16 16">
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
                <h1>MY <span>PROJECTS</span></h1>
                <p>Developed Web and Software Applications</p>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="header">
            <h1>PROJECT CATEGORIES</h1>
        </div>
        <div class="section2">
            <div class="firstBox">
                <div class="picture1">
                </div>
                <div class="des">
                    <h3>Web Development</h3>
                    <p>Experience digital innovation.</p>
                </div>
                <div class="buts">
                    <a href="web-development.php" class="btn">DETAILS</a>
                </div>
            </div>
            <div class="secondBox">
                <div class="picture2">

                </div>
                <div class="des">
                    <h3>Systems Developments</h3>
                    <p>Engineered for excellence.</p>
                </div>
                <div class="buts">
                    <a href="" class="btn">DETAILS</a>
                </div>
            </div>
        </div>
        <div class="contactme">
            <div class="information">
                <h5>Contact Information</h5>
                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>
                    <p>Brgy. Tubuan, Pila, Laguna</p>
                </div>
                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                    <p>0953-3311-681</p>
                </div>
                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                    </svg>
                    <p>antiqueraryanjay4@gmail.com</p>
                </div>

            </div>
            <div class="connected">
                <h5>Let's Stay Connected</h5>
                <div class="location2">
                    <a href="https://chatgpt.com/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                    <a href="https://github.com/RyanJayAntiquerra"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                        </svg></a>
                    <a href="https://www.linkedin.com/in/ryan-jay-antiquera-0a2330311/"><svg
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg></a>
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