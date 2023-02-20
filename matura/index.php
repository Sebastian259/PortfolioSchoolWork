<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/home02.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/intro.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/expertise02.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/journey.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/specialization.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/work.css'>
    <title>SF</title>
</head>
<body>
    <div class="nav-left-accestory"></div>
    <section class="home" id="home">
        <nav class="nav-bar">
            <div class="left">          
            </div>
            <div class="right">
                <div><a class="nav-text" href="#home">home</a></div>
                <div><a class="nav-text" href="#expertise">expertise</a></div>
                <div><a class="nav-text" href="#intro">intro</a></div>
                <div><a class="nav-text" href="#specialization">specialization</a></div>
                <div><a class="nav-text" href="#recent-work">recent works</a></div>
            </div>    
        </nav>
        <div class="home-content">    
            <div class="home-content-text">
                <h2 class="podnadpis">hi, i am</h2>
                <h1 class="nadpis">sebastián fojtík</h1>
                <h2 class="podnadpis">content creator</h2>
                <p class="text">
                    lorem ipsum dolor sit amet, consectetur<br>
                    adipiscing elit, sed do eiusmod tempor<br>
                    incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="btn">
                    <button class="btn-white podnadpis" onclick="download()">download cv</button>
                    <script>
                        function download() {
                            var fileUrl = "Životopis.pdf";
                            var xhr = new XMLHttpRequest();
                            xhr.open("GET", fileUrl, true);
                            xhr.responseType = "blob";
                            xhr.onload = function() {
                            if (xhr.status === 200) {
                                var blob = xhr.response;
                                var link = document.createElement("a");
                                link.href = window.URL.createObjectURL(blob);
                                link.download = "Životopis.pdf";
                                link.click();
                            }
                            };
                            xhr.send();
                        }
                    </script>
                    <button class="btn-transparent podnadpis" onclick="openForm()">contact me</button>
                </div>
            </div>
            <form action="contact.php" method="post" autocomplete="off" class="contact-container" id="myForm">
                <div class="contact-box">
                    <h2 class="nadpis">contanct me</h2>
                    <?php 
                    /*
                    if( isset($errors) && !empty($errors)){
                        // ak existuje pole chyb (bol odoslany formular) a zaroven nie je toto pole prazdne tak to znamena,
                        //ze obsahuje chyby a vypiseme ich pomocou cyklu foreach
                        foreach($errors AS $error)
                            echo "<p>".$error.'</p>';
                    } elseif( isset($errors) ){
                        sendform();
                        echo '<p> Formular was send </p>';
                    }*/
                    ?>
                    <input type="text" class="field podnadpis" placeholder="your name" name="name">
                    <input type="email" class="field podnadpis" placeholder="your email" name="email">
                    <textarea class="field podnadpis" placeholder="your message" name="message"></textarea>
                    <button type="submit" name="submit" class="contact-btn btn-white podnadpis" onclick="closeForm()">send</button>
                    <button class="contact-btn btn-white podnadpis" onclick="closeForm()">close</button>
                </div>
            </form>
            <script>
                function openForm() {
                    document.getElementById("myForm").style.display = "block";
                } 
                function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                } 
            </script>
            <div class="logo""><img src="Logo.png" width="303" height="303"></div>
        </div>
    </section>
    <div class="home-intro-accestory">
        <div class="accestories-content">
            <div class="img-wrap"><img src="icons/exp.png" width="25" height="25"></div>
            <div>
                <p class="text">3 years of</p>
                <p class="text">experience</p>
            </div>
        </div>
        <div class="line"></div>
        <div class="accestories-content">
            <div class="img-wrap"><img src="icons/project-complete.png" width="25" height="25"></div>
            <div>
                <p class="text">20+ projects</p>
                <p class="text">completed</p>
            </div>
        </div>
        <div class="line"></div>
        <div class="accestories-content">
            <div class="img-wrap"><img src="icons/support.png" width="25" height="25"></div>
            <div>
                <p class="text">support</p>
                <p class="text">online 24/7</p>
            </div>
        </div>
    </div>
    <section class="expertise" id="expertise">
        <div class="exp-title">
            <h2 class="podnadpis">expertise</h2>
            <h1 class="nadpis">why chose me</h1>
        </div>
        <div class="exp-container">
            <div class="exp-container-left">
                <div class="exp-left">
                    <div class="exp-text">
                        <p class="text">web developing</p>
                        <p class="text percent">80%</p>
                    </div>
                    <div class="lvl-bar">
                        <div style="width: 80%;" class="curent-lvl"></div>
                    </div>
                </div>
                <div class="exp-left">
                    <div class="exp-text">
                        <p class="text">web ui/ux</p>
                        <p class="text percent">70%</p>
                    </div>
                    <div class="lvl-bar">
                        <div style="width: 70%;" class="curent-lvl"></div>
                    </div>
                </div>
                <div class="exp-left">
                    <div class="exp-text">
                        <p class="text">vector graphic</p>
                        <p class="text percent">90%</p>
                    </div>
                    <div class="lvl-bar">
                        <div style="width: 90%;" class="curent-lvl"></div>
                    </div>
                </div>
                <div class="exp-left">
                    <div class="exp-text">
                        <p class="text">game developing</p>
                        <p class="text percent">50%</p>
                    </div>
                    <div class="lvl-bar">
                        <div style="width: 50%;" class="curent-lvl"></div>
                    </div>
                </div>
            </div>
            <div class="exp-container-right">
                <div class="exp-right">
                    <div class="exp-text">
                        <p class="text">programming</p>
                        <p class="text percent">30%</p>
                    </div>
                    <div class="lvl-bar">
                        <div style="width: 30%;" class="curent-lvl"></div>
                    </div>
                </div>
                <div class="exp-right">
                    <div class="exp-text">
                        <p class="text">graphic design</p>
                        <p class="text percent">80%</p>
                    </div>
                    <div class="lvl-bar">
                        <div style="width: 80%;" class="curent-lvl"></div>
                    </div>
                </div>
                <div class="exp-right">
                    <div class="exp-text">
                        <p class="text">3D modeling</p>
                        <p class="text percent">45%</p>
                    </div>
                    <div class="lvl-bar">
                        <div style="width: 45%;" class="curent-lvl"></div>
                    </div>
                </div>
                <div class="exp-right">
                    <div class="exp-text">
                        <p class="text">photo editing</p>
                        <p class="text percent">100%</p>
                    </div>
                    <div class="lvl-bar">
                        <div style="width: 100%;" class="curent-lvl"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="expertise-intro-accestory">
        <div class="accestories-content">
            <div class="img-wrap"><img src="icons/xp.png" width="25" height="25"></div>
            <div>
                <p class="text">cvti sr</p>
                <p class="text">web ui/ux</p>
            </div>
        </div>
        <div class="line"></div>
        <div class="accestories-content">
            <div class="img-wrap"><img src="icons/xp.png" width="25" height="25"></div>
            <div>
                <p class="text">sšemi prague</p>
                <p class="text">multimedia </p>
            </div>
        </div>
        <div class="line"></div>
        <div class="accestories-content">
            <div class="img-wrap"><img src="icons/edu.png" width="25" height="25"></div>
            <div>
                <p class="text">spšjm</p>
                <p class="text">multimedia</p>
            </div>
        </div>
    </div>
    <section class="intro" id="intro">
        <div class="intro-content">
            <div class="profile-photo">
                <img src="Ja.png" width="343" height="425" style="border-radius: 50px;">
            </div>
            <div class="intro-content-text">
                <h2 class="podnadpis">intro</h2>
                <h1 class="nadpis">about me</h1>
                <p class="text">
                    lorem ipsum dolor sit amet, consectetur<br>
                    adipiscing elit, sed do eiusmod tempor<br>
                    incididunt ut labore et dolore magna aliqua.
                </p>
                <!-- pridať PHP-->
                <div class="intro-contact">
                    <div class="intro-contact-name">
                        <div style="margin: 0; margin-right: 10px"><img src="icons/name.png" width="25" height="25"></div>
                        <div class="intro-contact-text">
                            <p class="text text01">name</p>
                            <p class="text">:</p>
                            <p class="text">sebastián fojtík</p>
                        </div>
                    </div>
                    <div class="intro-contact-name">
                        <div style="margin: 0; margin-right: 10px"><img src="icons/phone.png" width="25" height="25"></div>
                        <div class="intro-contact-text">
                            <p class="text text01">phone</p>
                            <p class="text">:</p>
                            <p class="text">0950 319 942</p>
                        </div>
                    </div>
                    <div class="intro-contact-name">
                        <div style="margin: 0; margin-right: 10px"><img src="icons/email.png" width="25" height="25"></div>
                        <div class="intro-contact-text">
                            <p class="text text01">email</p>
                            <p class="text">:</p>
                            <p class="text">sebik.fojtik@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="my-interests">
                    <h2 class="podnadpis">my interests</h2>
                    <div class="interests-text">
                        <div style="margin-left: 0;">
                            <a><img src="icons/music.png" width="25" height="25">music</a>
                        </div>
                        <div style="margin-left: 0;">
                            <a><img src="icons/sport.png" width="25" height="25">sports</a>
                        </div>
                        <div style="margin-left: 0;">
                            <a><img src="icons/photo.png" width="25" height="25">photo</a>
                        </div>
                        <div style="margin-left: 0;">
                            <a><img src="icons/code.png" width="25" height="25">code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="specialization" id="specialization">
        <div class="spec-title">
            <h2 class="podnadpis">specialization</h2>
            <h1 class="nadpis">what i offer</h1>
        </div>
        <div>
            <div class="row">
                <div class="col-3 ui-ux">
                    <p class="podnadpis">web-ui-ux</p>
                    <p>a web UI/UX specialist is responsible for 
                        designing user-friendly and visually 
                        appealing interfaces for websites and 
                        web applications.</p>
                </div>
                <div class="col-3 ">
                    <p class="podnadpis">graphic-design</p>
                    <p>graphic design is an essential aspect of 
                        visual communication that combines art 
                        and technology to communicate ideas through 
                        images, typography, and layout.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 ">
                    <p class="podnadpis">3d-models</p>
                    <p>3D modeling is the process of creating a 
                        three-dimensional representation of an object 
                        or scene using specialized software. </p>
                </div>
                <div class="col-2 ">
                    <p class="podnadpis">photo-edit</p>
                    <p>photo editing is the process of manipulating 
                        digital images to enhance their quality or 
                        to achieve a specific artistic or aesthetic effect. </p>
                </div>
            </div>
            <div class="your-project">
                <h1 class="nadpis">have a project on your mind?</h1>
                <p><strong>let me turn your ideas into reality!</strong><br>
                    as a skilled professional, i am ready to bring your project 
                    to life, from concept to completion. i specialize in delivering 
                    high-quality results that exceed your expectations, while 
                    staying within your budget and timeline. don't let your project 
                    remain a mere idea, trust me to make it a reality.<br>
                    contact me today and let's make your vision a success!</p> 
                <a href="#home"><button class="btn-white podnadpis" onclick="openForm()">contact me</button></a>      
            </div>
            <form action="contact.php" method="post" autocomplete="off" class="contact-container" id="myForm">
                <div class="contact-box">
                    <h2 class="nadpis">contanct me</h2>
                    <input type="text" class="field podnadpis" placeholder="your name" name="name">
                    <input type="email" class="field podnadpis" placeholder="your email" name="email">
                    <textarea class="field podnadpis" placeholder="your message" name="message"></textarea>
                    <button type="submit" name="submit" class="contact-btn btn-white podnadpis" onclick="closeForm()">send</button>
                    <button class="contact-btn btn-white podnadpis" onclick="closeForm()">close</button>
                </div>
            </form>
        </div>
    </section>
    <section class="work" id="recent-work">
    <div class="work-title">
            <h1 class="nadpis">recent works</h1>
        </div>

        <!-- galeria cez PHP-->
        <div class="work-nav">
            <div><a id="all" onclick="filterProjects(event)">all projects</a></div>
            <div><a id="photo" onclick="filterProjects(event)">photoshoot/edit</a></div>
            <div><a id="web" onclick="filterProjects(event)">web designe</a></div>
            <div><a id="models" onclick="filterProjects(event)">3D models/prints</a></div>
        </div>
        <div class="work-projects">
            <div class="project project-img" id="web"><img src="work/design/design01.png" onclick="window.open(this.src)"></div>
            <!--div class="project project-img" id="models"><img src="work/models/mod01.png" onclick="window.open(this.src)"></div>
            <div class="project project-img" id="photo"><img src="work/photo/photo01.png" onclick="window.open(this.src)"></div>

            <div class="project project-img" id="models"><img src="work/models/mod02.png" onclick="window.open(this.src)"></div>
            <div class="project project-img" id="photo"><img src="work/photo/photo02.png" onclick="window.open(this.src)"></div>
            <div class="project project-img" id="models"><img src="work/models/mod03.png" onclick="window.open(this.src)"></div>

            <div class="project project-img" id="photo"><img src="work/photo/photo03.png" onclick="window.open(this.src)"></div>
            <div class="project project-img" id="models"><img src="work/models/mod04.png" onclick="window.open(this.src)"></div>
            <div class="project project-img" id="models"><img src="work/models/mod05.jpg" onclick="window.open(this.src)"></div-->
            <?php include_once 'WorkImgDataDisplay.php';?> 
        </div>
        <script>
            function filterProjects(event) {
                // Get the id of the clicked link
                const id = event.target.id;

                // Get all the projects
                const projects = document.querySelectorAll('.project');

                // Loop through each project
                for (let i = 0; i < projects.length; i++) {
                    const project = projects[i];
                    // If the project's id matches the clicked link's id, display it, otherwise hide it
                    if (project.id === id) {
                        project.style.display = 'inline-block';
                    } else if(id === "all"){
                        project.style.display = 'inline-block';
                    } else {
                        project.style.display = 'none';
                    }
                }
                }

                // Get all the filter links
                const filterLinks = document.querySelectorAll('.work-nav a');

                // Add a click event listener to each filter link
                for (let i = 0; i < filterLinks.length; i++) {
                filterLinks[i].addEventListener('click', filterProjects);
                }
        </script>
        <div class="my-game">
            <h1 class="nadpis">Bored?</h1>
            <p>try something more old-school</p> 
            <a class="btn-white podnadpis" href="work/game/pacman.html" target="_blank">play right now</a>      
        </div>
    </section>

    <section class="footer">
        <div class="footer-content">
            <!--div class="footer-logo""><img src="Logo.png" width="100" height="100"></div>
            <p class="podnadpis">copyright © 2023 </p>
            <div class="social">
                <div class="img-wrap"><img src="icons/fb.png" width="25" height="25"></div>
                <div class="img-wrap"><img src="icons/ig.png" width="25" height="25"></div>
                <div class="img-wrap"><img src="icons/pinterest.png" width="25" height="25"></div>
            </div-->
            <?php include_once 'DataDisplay.php';?> 
        </div>
        
    </section> 
    <div class="scroll"><a href="#home"> ^ </a></div>
</body>
</html>