<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" media="screen and (max-width: 810px)" href="css/petiteResolution.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <div id="hambuger">
            <div id="hambuger-content">
                <nav>
                    <ul class=" me-auto mb-2 mb-md-0 navbar__links">
                        <li class="navbar__link first"><a href="#about">about</a></li>
                        <li class="navbar__link second"><a href="#skills">skills</a></li>
                        <li class="navbar__link third"><a href="#projets">projects</a></li>
                        <li class="navbar__link four"><a href="#education">Education</a></li>
                        <li class="navbar__link six"><a href="#contact">contact</a></li>
                        <button class="hamburger-button burger-button"><span class="bar"></span></button>
                      </ul>
                </nav>
            </div>
            <div id="hambuger-sidebar">
                <div id="hambuger-sidebar-body"></div>
            </div>
            <div id="hambuger-overlay"></div>
        </div>
    </header>
    <section id="more-infos">
            <div class="info-me-container">
                <div class="text-me" style="display:block">
                    <h1 class="tracking-in-contract">Aurélie <span id="maffo">MAFFO</span></h1>
                    <h5>.NET DEVELOPER</h5>
                    <h5 class="pulse"><a href="#about" ><i class="btn-up material-icons" style="font-size: 30px; color:#000;">expand_more</i></a></h5>
                </div>
            </div>
    </section>
    <section id="about">
        <div class="profile-picture">
            <img class="rounded-circle" src="images/moi.jpeg" alt="photo-profile" width="190px">
            <!-- <div>
                Il y'a trois ans, je décide de changer d'orientation professionnelle. Durant toutes ces années passées, j'ai developpé d'excellentes compétences en plusieurs langages de programmation donc <span>C#</span>, . Je possede aujourd'hui les compétences nécessaires pour intégrer une équipe de developpement et contribuer à la réalisation de projets ambitieux. Je suis une travailleuse <span>efficace</span>, <span>sociable</span> et dotée d'un bon <span>esprit d'équipe</span>. Mes plus grandes forces sont entre autres mon <span>esprit d'initiave</span> et de <span>rigueur</span>, ma <span>forte adaptation</span> et ma méthode de <span>travail autodicdacte</span>. Je reste à votre disposition pour toutes questions.
            </div> -->
            <div>
                Three years ago, i decide to change my professionnal guidance. Since, i developed excellent knowledges in several languages: <span>C#</span>, <span>.NET Frameworks</span>, <span>Angular</span>, <span>JavaScript</span>, <span>Sql</span>, <span>jQuery</span>, and so on. Now, I have good skills to join an ambitious development team and thus, put at its service my know-how. My goal is also to acquire new skills. I am an <span>ambitious</span>, <span>outgoing</span> and <span>determined</span> worker. I enjoy challenges and my assets are among others my <span>team work spirit </span> and my high determination to <span>achieve my goals</span>. I remain at your disposal for any question.
            </div>
            <div>
                <a type="button" href="Docs/cvE.pdf" id="small-button" target="_blank">Download Resume</a>
            </div>
        </div>
        <div id="about-content">
            <div class="wrapper">
                <div class="link_wrapper">
                    <a href="Docs/cvE.pdf" class="button1" target="_blank"> Download CV</a>
                    <div class="icon" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                        <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
   <section id="skills">
        <div class="red-divider"></div>
        <h2>Skills</h2>
        <div id="competence">
            <div id="AllSkills">
                <div >
                    <div id="skill" class="back">
                        <h3>Back-end</h3>
                        <ul>
                            <li><img src="images/rest.png.crdownload" width="15px" height="12px"> Web API Core(REST) </li>
                            <li><img src="images/ado-removebg-preview.png" width="15px" height="12px"> ADO .Net</li>
                            <li><img src="images/linq-removebg-preview.png" width="20px" height="12px"> LinQ </li>
                            <li><img src="images/core-removebg-preview.png" width="15px" height="12px"> Entity Framework Core</li>
                            <li><img src="images/xaml-removebg-preview.png" width="15px" height="12px"> XAML, WPF, EF</li>
                            <li><img src="images/php-logo-removebg-preview.png" width="15px" height="12px"> PHP</li>
                        </ul>
                    </div>
                    <div id="skill">
                        <h3>Languages</h3>
                        <ul>
                            <li><img src="images/c.png" width="15px" height="12px"> C# </li>
                            <li><img src="images/bd.png" width="15px" height="12px"> T-SQL DDL, DRL, DML</li>
                            <li><img src="images/java.png" width="15px" height="12px"> Java</li>
                            <li><img src="images/javascript-logo.png" width="15px" height="12px"> Javascript</li>
                            <li><img src="images/ts.png" width="15px" height="12px"> TypeScript </li>
                        </ul>
                        <h3>Analisys et méthodology</h3>
                        <ul>
                            <li><img src="images/uml.png" width="18px" height="15px"> UML </li>
                            <li><img src="images/agile.png" width="15px" height="12px"> Agile/SCRUM </li>
                        </ul>
                    </div>
                    
                </div>
                <div style="width:3%"></div>
                <div>
                <div id="skill">
                        <h3>Front-end</h3>
                        <ul>
                            <li><img src="images/HTML-CSS-removebg-preview.png" width="15px" height="12px"> HTML/CSS, SASS </li>
                            <li><img src="images/Bootstrap_logo.svg.png" width="15px" height="12px"> Bootstrap</li>
                            <li><img src="images/javascript-logo.png" width="15px" height="12px"> Javascript</li>
                            <li><img src="images/jQ-removebg-preview.png" width="15px" height="12px"> jQuery/Ajax</li>
                            <li><img src="images/asp.png" width="15px" height="12px"> ASP MVC Core (.Net 5)</li>
                            <li><img src="images/angular.png" width="15px" height="12px">Angular, Material</li>
                        </ul>
                    </div>
                   
                    <div id="skill">
                    <h3>Environnements</h3>
                    <ul>
                        <li><img src="images/visualStudio.png" width="15px" height="12px"> Visual Studio 2019 </li>
                        <li><img src="images/vsCode.png" width="15px" height="12px"> Visual Code</li>
                        <li><img src="images/sql-removebg-preview.png" width="18px" height="18px"> SQL Server</li>
                        <li><img src="images/visualParadigme.png" width="15px" height="12px"> Visual paradigm</li>
                        <li></li>
                        <br>
                    </ul>
                    <h3>Azure</h3>
                    <ul>
                        <li><img src="images/azure.png" width="15px" height="12px"> Azure Deployment</li>
                        <li><img src="images/azure.png" width="15px" height="12px"> integration Azure continue</li>
                    </ul>
                    </div>
                
                </div>
            </div>
            <div class="chart-container">
                <h2 style="font-size:18px">Diagramm to assess my skills</h2>
                <canvas id="chart"></canvas>
            </div>
        </div>
    </section>
    <section id="projets">
        <div class="white-divider"></div>
        <h2>Projects</h2>
        <ul class="timeline">
            <li>
                <div class="timeline-panel-container" >
                    <div class="timeline-panel" data-aos="zoom-in" data-aos-duration="2000" style="width:85%">
                        <div class="timeline-heading">
                            <h3><span class="timeline-badge material-icons">folder</span>Project similar to Trello:</h3>
                        </div>
                        <div class="timeline-body">
                            <div>
                                <p>The purpose of the application is to set up an online projects management tool.<br><span><span style="color:#000">Technologies used:</span>Backend ASP.NET Core MVC, EF Core, LinQ, API REST, Injection of dependancies, MySQL, Frontend Angular,  Angular Material, SASS, CSS, HTML ...</span></p>
                                <p><a href="https://github.com/maffo-gaelle/trello" class="link" target="_blank">more informations on Github</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tof">
                    <img src="images/apprendre-a-coder-community-manager.jpg" width="380px" height="100%">
                </div>
            </li>
            <li>
                <div class="timeline-panel-container panel-left">
                    <div class="timeline-panel" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="timeline-heading">
                            <h3><span class="timeline-badge material-icons">folder</span>Application similar to Stack-Overflow:</h3>
                        </div>
                        <div class="timeline-body">
                            <div>
                                <p>Stack Overflow is a knowledge-sharing website,where developers discuss through questions and answers on a wide variety of computer programming.<br>
                                    <span style="color:#000">Technologies used: </span><span>PHP, Javascrit, Jquery, Ajax requests, HTML, CSS, Bootstrap, MySQL, MVC architecture; </span></p>
                                <p><a href="https://github.com/maffo-gaelle/stack-overflow" class="link" target="_blank">more informations on Github</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-panel-container" style="margin-right:30%">
                    <div class="timeline-panel" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="timeline-heading">
                            <h3><span class="timeline-badge material-icons">folder</span>Project similar to Stack-Overflow:</h3>
                        </div>
                        <div class="timeline-body">
                            <div>
                                <p>Stack Overflow is a website offering questions and answers on a wide variety of computer programming topics.</p><br>
                                    <span style="color:#000">Technologies used: </span><span>C#, EF, LINQ, WPF, MVVM achitecture, Observer patter</span></p>
                                    <p><a href="https://github.com/maffo-gaelle/stuck-overflow" class="link" target="_blank">more informations on Github</a></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="timeline-panel-container panel-left">
                    <div class="timeline-panel" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="timeline-heading">
                            <h3><span class="timeline-badge material-icons">folder</span>Contacts management application:(In progress)</h3>
                        </div>
                        <div class="timeline-body">
                            <div>
                                <p>it's an application allowing several registered users to manage their contacts and classify them in different categories.</p>
                                <p><span style="color:#000">Technologies used: </span> ASP.NET MVC 6, ADO .NET, SQL SERVER(DDL, DML, DRL, T-SQL), API REST, JWT Authenticate implementation, razor pages, JavaScript, Singleton pattern, Abstract Factory pattern, units tests ...</p>
                                <p><a href="https://github.com/maffo-gaelle/Application_Gestion_Contacts" class="link" target="_blank">more informations on Github</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div id="min-projet">
            <ul class="projetMin">
                <li>
                    <div>
                        <div >
                        <h3 >Project similar to Trello:</h3>
                        <p>the purpose of the application is to set up an online projects management tool.<br><span><span style="color:#000">Technologies used:</span>Backend ASP.NET Core MVC, EF Core, LinQ, API REST, Injection of dépendancy, MySQL, Frontend Angular,  Angular Material, ...</span></p>
                        <p><a href="https://github.com/maffo-gaelle/trello" class="link" target="_blank">more informations on Github</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div >
                        <h3 >Application similar to Stack-Overflow:</h3>
                        <p>Stack Overflow is a website offering questions and answers on a wide variety of computer programming topics. <br>
                            <span style="color:#000">Technologies used: </span><span>PHP, Javascrit, Jquery, Requêtes Ajax, HTML, CSS, Bootstrap, MySQL, architecture MVC ...</span></p>
                        <p><a href="https://github.com/maffo-gaelle/stack-overflow" class="link" target="_blank">more informations on Github</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div >
                        <h3 >Application similar to Stack-Overflow:</h3>
                        <p>Stack Overflow is a website offering questions and answers on a wide variety of computer programming topics. <br>
                            <span style="color:#000">Technologies used: </span><span>C#, EF, LINQ, WPF, architecture MVVM, Pattern observer, ...</span></p>
                            <p><a href="https://github.com/maffo-gaelle/stuck-overflow" class="link" target="_blank">more informations on Github</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div >
                        <h3 >Contacts management application:(In progress):</h3>
                        <p>it's an application allowing several registered users to manage their contacts and classify them in different categories.</p>
                        <p><span style="color:#000">Technologies used: </span>ASP.NET MVC 6, ADO .NET, SQL SERVER(DDL, DML, DRL, T-SQL), API REST, JWT Authenticate implementation, razor pages, JavaScript, Singleton pattern, Abstract Factory pattern, units tests ...</p>
                        <p><a href="https://github.com/maffo-gaelle/Application_Gestion_Contacts" class="link" target="_blank">more informations on Github</a></p>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="education">
        <div class="red-divider"></div>
        <h2>Education</h2>
        <div id="education-blocks">
            <div>
                <div class="education-block" >
                    <p> February 2019 - ... </p>
                    <p id="epfc">EPFC</p>
                    <p>Bachelor's Degree in IT Management</p>
                </div>
            </div>
            <div>
                <div class="education-block" >
                    <p> March 2021 - August 2021 </p>
                    <p>Bruxelles Formation - Cefora</p>
                    <p>Certified .NET Developer</p>
                </div>
            </div>
            <div>
                <div class="education-block">
                    <p>January 2021(3 weeks)</p>
                    <p>Bruxelles Formation</p>
                    <p>Fundamentals of ASP.NET Core</p>
                </div>
            </div>
            <div>
                <div class="education-block">
                    <p>November 2020(6 weeks)</p>
                    <p>Bruxelles Formation</p>
                    <p>Fondamentals of HTML and CSS</p>
                </div>
            </div>
            <div>
                <div class="education-block">
                    <p>February 2021(6 weeks)</p>
                    <p>Bruxelles Formation</p>
                    <p>Fondamentals of Bootstrap</p>
                </div>
            </div>
        </div>
    </section>
   <section id="contact">
        <div class="white-divider"></div>
        <h2 style="margin-top:60px">Contact form</h2>
        <div class="form_bell">
           <div class="container-form">
                <!-- Formulaire -->
                <form action="" method="post" id="contact-form" role="form">
                    <input type="text" placeholder="First name*" class="styleinput" name="firstname" id="firstname" value=""><br>
                    <p class="comments commentFirstname"></p>
                    <input type="text" placeholder="Last name*" class="styleinput" name="name" id="name" value=""><br>
                    <p class="comments commentName"></p>
                    <input type="text" placeholder="Email*" class="styleinput" name="email" id="email" value=""><br>
                    <p class="comments commentEmail"></p>
                    <input type="tel" placeholder="Phone" class="styleinput" name="phone" id="phone" value=""><br>
                    <p class="comments commentTel"></p>
                    <textarea cols="5" rows="3" placeholder="Message*" class="styleinput" name="message" id="message" value=""></textarea><br>
                    <p class="comments commentMessage"></p>
                    <p class="blue" style="font-size:12px"><strong>*These informations are required</strong></p>
                    <input type="submit" value="Send" class="styleinput" class="containerSubmit">
                    <p class='thank-you' style="display:none">Thank you for contacting me :)</p>
                </form>
                <!-- Ombre -->
                <div class="drop drop-1"></div>
                <div class="drop drop-2"></div>
                <div class="drop drop-3"></div>
                <div class="drop drop-4"></div>
                <div class="drop drop-5"></div>
           </div>
        </div>
    </section>
    <footer class="text-center">
        <a href="#about" id="btn-less">
            <i class="btn-up material-icons" style="font-size: 30px;">expand_less</i>
        </a>
        <h5>&copy; 2021 Maffo Aurelie <a href="https://github.com/maffo-gaelle" target="_blank"><i class="fa fa-github"></i></a><a href="https://www.linkedin.com/in/gaelle-maffo/" target="_blank"><i class="fa fa-linkedin-square"></i></a><a href="mailto:gaellemaffo@yahoo.fr"><i class="fa fa-envelope-o"></i></a></h5>
    </footer> 
    <script>
        AOS.init();
    </script>
</body>
</html>