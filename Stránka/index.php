<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style02.css'>
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
                <div><a class="nav-text" href="#intro">intro</a></div>
                <div><a class="nav-text" href="#expertise">expertise</a></div>
                <div><a class="nav-text" href="#my-journey">my journey</a></div>
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
                    <button class="btn-white podnadpis">download cv</button>
                    <button class="btn-transparent podnadpis" onclick="openForm()">contact me</button>
                </div>
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
    <section class="intro" id="intro">
        <div class="intro-content">
            <div class="profile-photo">
                <img src="Ja.png" width="343" height="425">
            </div>
            <div class="intro-content-text">
                <h2 class="podnadpis">intro</h2>
                <h1 class="nadpis">about me</h1>
                <p class="text">
                    lorem ipsum dolor sit amet, consectetur<br>
                    adipiscing elit, sed do eiusmod tempor<br>
                    incididunt ut labore et dolore magna aliqua.
                </p>
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
    <section class="my-journey" id="my-journey">
        <div class="journey-title">
            <h2 class="podnadpis">my journey</h2>
            <h1 class="nadpis">what i went through</h1>
        </div>
        <div class="journey-container">
            <div class="experience">
                <div class="j-c-title">
                    <img src="icons/xp.png" alt="" width="25" height="25">
                    <p class="podnadpis j-c-title-text">experience</p>
                </div>
                <div class="j-c-ex-con">
                    <div class="j-c-accestory">
                        <div class="j-c-a-dot"></div>
                        <div class="j-c-a-line"></div>
                    </div>
                    <div class="j-c-text">
                        <p class="podnadpis">cvti sr</p>
                        <p class="text">web ui/ux</p>
                        <p class="text">2022-2022</p>
                    </div>
                </div>
                <div class="j-c-ex-con">
                    <div class="j-c-accestory">
                        <div class="j-c-a-dot"></div>
                        <div class="j-c-a-line"></div>
                    </div>
                    <div class="j-c-text">
                        <p class="podnadpis">sšemi prague</p>
                        <p class="text">multimedia</p>
                        <p class="text">2022-2022</p>
                    </div>
                </div>
            </div>
            <div class="education">
                <div class="j-c-title">
                    <img src="icons/edu.png" alt="" width="25" height="25">
                    <p class="podnadpis j-c-title-text">education</p>
                </div>
                <div class="j-c-ed-con">
                    <div class="j-c-accestory">
                        <div class="j-c-a-dot"></div>
                        <div class="j-c-a-line"></div>
                    </div>
                    <div class="j-c-text">
                        <p class="podnadpis">spšjm</p>
                        <p class="text">multimedia</p>
                        <p class="text">2019-2023</p>
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
                    <p>A web UI/UX specialist is responsible<br> for 
                        designing user-friendly and <br>visually 
                        appealing interfaces for websites and web applications.</p>
                </div>
                <div class="col-3 ">
                    <p class="podnadpis">graphic-design</p>
                    <p>specialization</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 ">
                    <p class="podnadpis">3d-models</p>
                    <p>specialization</p>
                </div>
                <div class="col-2 ">
                    <p class="podnadpis">photo-edit</p>
                    <p>specialization</p>
                </div>
            </div>
            <div class="your-project">
                <h1 class="nadpis">have a project on your mind?</h1>
                <p>lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod<br>tempor
                        incididunt ut labore et dolore magna aliqua.</p> 
                <a href="#home"><button class="btn-black podnadpis" onclick="openForm()">contact me</button></a>      
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
        <div class="work-nav">
            <div><a>all projects</a></div>
            <div><a>graphic design</a></div>
            <div><a>web designe</a></div>
            <div><a>web app</a></div>
        </div>
        <div class="work-projects">
                <div class="project"></div>
                <div class="project"></div>
                <div class="project"></div>
            </div>
            <div class="work-projects">
                <div class="project"></div>
                <div class="project"></div>
                <div class="project"></div>
        </div>
    </section>

    <section class="footer">
        <div class="footer-content">
            <div class="footer-logo""><img src="Logo.png" width="100" height="100"></div>
            <p class="podnadpis">Copyright © 2023 </p>
            <div class="social">
                <div class="img-wrap"><img src="icons/fb.png" width="25" height="25"></div>
                <div class="img-wrap"><img src="icons/ig.png" width="25" height="25"></div>
                <div class="img-wrap"><img src="icons/pinterest.png" width="25" height="25"></div>
            </div>
        </div>
        
    </section> 
    <div class="scroll"><a href="#home"> ^ </a></div>
</body>
</html>