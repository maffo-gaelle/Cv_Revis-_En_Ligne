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
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
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
    
</head>
<body>
    <header>
        <div id="hambuger">
            <div id="hambuger-content">
                <nav>
                    <ul class=" me-auto mb-2 mb-md-0 navbar__links">
                        <li class="navbar__link first"><a href="#presentation">about</a></li>
                        <li class="navbar__link second"><a href="#skills">skills</a></li>
                        <li class="navbar__link third"><a href="#projets">portfolio</a></li>
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
    <section class="accueil" id="accueil">
        <h1 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Well Hey there !</h1>
        <p class="txt-animation"><span class="txt-animation1">I'm Aurélie <strong style="color: #601508">MAFFO</strong>, </span><span class="txt-animation2"></span></span></p>
        <p href="#" class="btn-acc btn-acc1">Portfolio</p>
        <p href="#" class="btn-acc btn-acc2">Skills</p>

        <div class="medias">
            <a href="https://github.com/maffo-gaelle/">
                <div class="media media2">
                    <img src="images/github.svg" alt="git hub icone" class="icone-media">
                </div>
            </a>
            <a href="https://www.linkedin.com/in/gaelle-maffo/">
                <div class="media media1">
                    <span><i class="fa fa-linkedin-square"></i></span>
                </div>
            </a>
            <a href="mailto:gaellemaffo@yahoo.fr">
                <div class="media media3">
                    <i class="fa fa-envelope-o"></i>    
                </div>
            </a>
            
        </div>
        <a href="#presentation">
            <div class="btn-rond">
                <img src="images/arrowDown.svg" alt="logo fleche bas" class="logo-btn-rond-acc">
            </div>
        </a>
        
    </section>

    <!-- section About -->

    <br>
    <section class="presentation" id="presentation">
        <div class="red-divider" style="background-color:#e7e7e7"></div>
        <h2 class="titre-pres" >Who am I ?</h2>
        <div class="container-presentation">
            <div class="fond-forme"> </div>
            <div class="pres-gauche">
                <p>
                    <img class="rounded-circle" src="images/moi.jpeg" alt="photo-profile" width="190px">    
                </p>
                <hr>
                <p>
                    Three years ago, i decided to change my professionnal guidance. I have since developed excellent knowledge in several programming languages including : <span>C#</span>, <span>.NET Core</span>, <span>ASP.NET MVC</span>, <span>ASP.NET Web API</span>, <span>Angular</span>, <span>JavaScript</span>, <span>Sql</span>. I have the appropriate skills to join and bring my expertise to an ambitious developer team. I also looking forward to acquiring new skills. I am an <span>ambitious</span> and <span>determined</span> worker.  I am a <span>reliable</span> and <span>flexible</span> team player with ability to balance multiple tasks and prioritize to meet established schedules and datelines. I remain at your disposal for any question.
                    <p><a href="Docs/cvAurelieMaffo.pdf" target=_blank class="btn-acc btn-acc3">Download resume</a></p>
                </p>
                <br>
            </div>
           
        </div>
    </section>

    <!-- portfolio -->
    <section id="projets" class="portfolio">
        <div class="white-divider"></div>
        <h2>Portfolio</h2>
        <div class="cont-portfolio">
            <div class="item vague1">
                <div class="cont-img-port">
                    <p>
                        <img src="images/ecom-course-image.png" alt="Trello">
                    </p>
                    <hr>
                    <h3>Project similar to Trello</h3>
                    <p>Trello is an online projects management tool. It is based on an organization of projects in boards, lists and cards. Each card representing task. The cards are assignable to members of a team and are mobile from one list to another, thus reflecting the progress of project.<br><br>
                    <span class="technology">Technologies used: </span><span class="tools">FRONTEND: Angular, Angulalar material, Typescript, ... BACKEND: ASP .NET Core, EF Core, MySQL SQlite(tests), Linq, API REST</span></p>
                    <a href="https://github.com/maffo-gaelle/trello" class="link btn-acc4" target="_blank">more on Github</a>
                </div>
            </div>
            <div class="item vague1">
                <div class="cont-img-port">
                    <p class="img-portfolio">
                        <img src="images/image_default_33.png" alt="Trello" >
                    </p>
                    <hr>
                    <h3>Contacts management application</h3>
                    <p>it's an application allowing several registered users to manage their contacts and classify them in different categories.</p><br>
                    <p><span class="technology">Technologies used: </span><span class="tools"> ASP.NET MVC 6, ADO .NET, SQL SERVER(DDL, DML, DRL, T-SQL), API REST, JWT Authenticate implementation, razor pages, JavaScript, Singleton pattern, Abstract Factory pattern, units tests </span></p>
                    <a href="https://github.com/maffo-gaelle/Application_Gestion_Contacts" class="link btn-acc4" target="_blank" >more on Github</a>
                </div>
            </div>
            <div class="item vague2">
                <div class="cont-img-port">
                    <p >
                        <img src="images/dev.jfif" alt="Trello" >
                    </p>
                    <hr>
                    <h3>Pizza App</h3>
                    <p>PizzApp computes the ingredients needed to obtain a dough with the selected features and suggests the amount of yeast to be used. It also lets you save your recipes, reload and share them<br><br>
                    <span class="technology">Technologies used: </span><span class="tools">.NET 5, Entity Framework Core, SQL Server, Architecture MVVM, API Rest, SQlite, Blazor</span></p>
                    <a href="https://github.com/maffo-gaelle/Pizza_Aurelie" target="_blank" class="link btn-acc4">more on Github</a>
                </div>
            </div>
            <div class="item vague3">
                <div class="cont-img-port">
                    <p class="img-portfolio">
                        <img src="images/NET&REAct.jpg" alt="Trello" >
                    </p>
                    <hr>
                    <h3>Ma Coiffeuse Afro(in progress)</h3>
                    <p>Ma Coiffeuse Afro is a beauty and style social platform whose goal is to allow people who will be hairdressers at home and hairdressers to meet each other<br><br>
                    <span class="technology">Technologies used: </span><span class="tools">Backend: .NET 5, ADO .NET, SQL Server, API Rest, JWT authenticate, Session, ... Frontend: React, Javascript ... Analyse: use case diagram, Entity-Relationship diagram, Sequence diagram</span></p>
                    <a href="https://github.com/maffo-gaelle/AFROHairdressingServices" class="link btn-acc4" target="_blank">more on Github</a>
                </div>
            </div>
            <div class="item vague3">
                <div class="cont-img-port">
                    <p class="img-portfolio">
                        <img src="images/xaml1600.png" alt="Trello">
                    </p>
                    <hr>
                    <h3>Project similar to Stack-overflow</h3>
                    <p>Stack Overflow is a knowledge-sharing website,where developers discuss through questions and answers on a wide variety of computer programming.<br><br>
                    <span class="technology">Technologies used: </span><span class="tools">C#, EF, LINQ, WPF, XAML, architecture MVVM </span></p><br>
                    <a href="https://github.com/maffo-gaelle/stack-overflow" class="link btn-acc4" target="_blank">more on Github</a>
                </div>
            </div>
            <div class="item vague2">
                <div class="cont-img-port">
                    <p class="img-portfolio">
                        <img src="images/php3.jpg" alt="Trello">
                    </p>
                    <hr>
                    <h3>Project similar to Stack-overflow</h3>
                    <p>Stack Overflow is a knowledge-sharing website,where developers discuss through questions and answers on a wide variety of computer programming.<br><br>
                    <span class="technology">Technologies used: </span><span class="tools">PHP, Javascrit, Jquery, Ajax requests, HTML, CSS, Bootstrap, MySQL, MVC architecture; </span></p>
                    <a href="https://github.com/maffo-gaelle/stuck-overflow" class="link btn-acc4" target="_blank">more on Github</a>
                </div>
            </div>
           
            
        </div>
    </section>
    <section id="skills">
        <div class="red-divider"></div>
        <h2>Skills</h2>
        <h3 class="skill-title-first">Hard Skills</h3>
        <div id="competence">
            <div id="AllSkills">
                <div >
                    <div class="skill" class="back">
                        <h3>Back-end</h3>
                        <ul style="margin-bottom:3rem;">
                            <li><img src="images/rest.png.crdownload" width="15px" height="12px"> Web API Core(REST) </li>
                            <li><img src="images/ado-removebg-preview.png" width="15px" height="12px"> ADO .Net</li>
                            <li><img src="images/linq-removebg-preview.png" width="20px" height="12px"> LinQ </li>
                            <li><img src="images/core-removebg-preview.png" width="15px" height="12px"> Entity Framework Core</li>
                            <li><img src="images/xaml-removebg-preview.png" width="15px" height="12px"> XAML, WPF, EF</li>
                            <li style='margin-bottom : 10px'><img src="images/php-logo-removebg-preview.png" width="15px" height="12px"> PHP</li>
                            
                        </ul>
                        <h3>Database</h3>
                        <ul style="margin-bottom:3.5rem;" class="ul-flex-adapt1">
                            <li><img src="images/sqlite.png" width="20px" height="15px"> SQlite</li>
                            <li><img src="images/server.png" width="15px" height="12px"> SQL Server </li>
                            <li><img src="images/mysql.png" width="15px" height="12px"> MySql </li>
                            <li><img src="images/oracle.png" width="15px" height="12px"> Oracle </li>
                        </ul>
                        
                    </div>
                    <div class="skill">
                        <h3>Languages</h3>
                        <ul>
                            <li><img src="images/c.png" width="15px" height="12px"> C# </li>
                            <li style="font-size:15.5px"><img src="images/bd.png" width="15px" height="12px"> T-SQL DDL, DRL, DML</li>
                            <li><img src="images/java.png" width="15px" height="12px"> Java</li>
                            <li><img src="images/javascript-logo.png" width="15px" height="12px"> Javascript</li>
                            <li><img src="images/ts.png" width="15px" height="12px"> TypeScript </li>
                        </ul>
                        <h3>Analisys et méthodology</h3>
                        <ul class="ul-flex-adapt2">
                            <li><img src="images/uml.png" width="18px" height="15px"> UML </li>
                            <li><img src="images/agile.png" width="15px" height="12px"> Agile/SCRUM </li>
                        </ul>
                    </div>
                    
                </div>
                <div style="width:3%"></div>
                <div>
                <div class="skill">
                        <h3>Front-end</h3>
                        <ul>
                            <li><img src="images/HTML-CSS-removebg-preview.png" width="15px" height="12px"> HTML/CSS, SASS </li>
                            <li><img src="images/Bootstrap_logo.svg.png" width="15px" height="12px"> Bootstrap</li>
                            <li><img src="images/javascript-logo.png" width="15px" height="12px"> Javascript</li>
                            <li><img src="images/jQ-removebg-preview.png" width="15px" height="12px"> jQuery/Ajax</li>
                            <li><img src="images/asp.png" width="15px" height="12px"> ASP MVC Core (.Net 5)</li>
                            <li><img src="images/asp.png" width="15px" height="12px"> Blazor </li>
                            <li><img src="images/angular.png" width="15px" height="12px">Angular, Material</li>
                        </ul>
                        <h3>Design pattern</h3>
                        <ul>
                            <li>Singleton, transient, scoped</li>
                            <li>Abstract factory</li>
                            <li>Observer</li>
                            <li>Architecture MVC</li>
                            <li>Architecture MVP</li>
                            <li>Architecture MVVV</li>
                            <li></li>
                        </ul>
                    </div>
                   
                    <div class="skill">
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
                        <li style="font-size:15px"><img src="images/azure.png" width="15px" height="12px"> integration Azure continue</li>
                    </ul>
                    </div>
                
                </div>
            </div>
            <div class="chart-container">
                <h2 style="font-size:18px">Diagramm to assess my skills</h2>
                <canvas id="chart"></canvas>
            </div>
        </div>
        <h3 class="skill-title-last ">Soft skills</h3>
        <div id="education">
        
        <div id="education-blocks">
            <div>
                <div class="education-block" >
                    <h4><img src="images/strenght.png" width=40/> Self motivation</h4>
                    <p>I always have a positive attitude and initiative to work well . I'm very ambitious in my way of work. I am both motivated and i pass on my motivation to those whit whom i work.</p>
                </div>
            </div>
            <div>
                <div class="education-block" >
                    <h4><img src="images/flex.png" width=40/>Flexibility</h4>
                    <p>I have the ability to adapt me to new tasks and challenges with confidence</p>

                </div>
            </div>
            <div>
                <div class="education-block">
                <h4><img src="images/adap.png" width=40/>Adaptability</h4>
                    <p>Having lived in several countries, i learnd to adapt to different enviroments and situations. This is what has been of great help to me in the success changing of my professionnal guidance</p>
                    
                </div>
            </div>
            
        </div>
    </section>
    <!-- section education -->
    <section id="exp" class="travail-exp">
    <div class="red-divider"></div>
        <h2 class="titre-travail-exp">Education</h2>
        <div class="con-exp-travail">
            <div class="barre-verticale">
                <div class="boule-ico">
                    <img src="images/dipl-icone.png" alt="icone diplome">
                </div>
                <div class="boule-ico">
                    <img src="images/dipl-icone.png" alt="icone-diplome">
                </div>
                <div class="boule-ico">
                    <img src="images/dipl-icone.png" alt="icone-diplome">
                </div>
                <div class="boule-ico">
                    <img src="images/dipl-icone.png" alt="icone-diplome">
                </div>
                <div class="boule-ico">
                    <img src="images/dipl-icone.png" alt="icone-diplome" class="avion ">
                </div>
            </div>

            <div class="flex-cont-bloc-exp">

                <div class="block block1">
                    <div class="contenu-bloc">
                        <p class="titre-section-bloc">February 2019 - ... </p>
                        <p class="txt-section">EPFC</p>
                        <p class="txt-section-title">Bachelor's Degree in IT Management</p>
                    </div>
                </div>
                <div class="block block2">
                    <div class="contenu-bloc">
                        <p class="titre-section-bloc"> March 2021 - August 2021  </p>
                        <p class="txt-section">Bruxelles Formation - Cefora</p>
                        <p class="txt-section-title">Certified .NET Developer</p>
                    </div>
                </div>
                <div class="block block3">
                    <div class="contenu-bloc">
                        <p class="titre-section-bloc">January 2021(3 weeks)</p>
                        <p class="txt-section">Bruxelles Formation<</p>
                        <p class="txt-section-title">Fundamentals of ASP.NET Core</p>
                    </div>
                </div>
                <div class="block block4">
                    <div class="contenu-bloc">
                        <p class="titre-section-bloc">November 2020(6 weeks)</p>
                        <p class="txt-section">Bruxelles Formation</p>
                        <p class="txt-section-title">Fondamentals of HTML and CSS</p>
                    </div>
                </div>
                <div class="block block5">
                    <div class="contenu-bloc">
                        <p class="titre-section-bloc">February 2021(6 weeks)</p>
                        <p class="txt-section">Bruxelles Formation</p>
                        <p class="txt-section-title">Fondamentals of Bootstrap</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section parallax -->
    <section class="section-parallax">
        <p class="txt-par"></p>
        <p class="txt-par"></p>
        <p class="txt-par"></p>

    </section>

    <section id="contact">
        <div class="white-divider bar-white"></div>
        <h2 class="title-contact" style="margin-top:60px">Contact form</h2>
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
        <a href="#presentation" id="btn-less">
            <i class="btn-up material-icons" style="font-size: 30px;">expand_less</i>
        </a>
        <h5>&copy; 2021 Maffo Aurelie <a href="https://github.com/maffo-gaelle" target="_blank"><i class="fa fa-github"></i></a><a href="https://www.linkedin.com/in/gaelle-maffo/" target="_blank"><i class="fa fa-linkedin-square"></i></a><a href="mailto:gaellemaffo@yahoo.fr"><i class="fa fa-envelope-o"></i></a></h5>
    </footer>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="js/script.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>