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
                        <li class="navbar__link first"><a href="#about">à propos</a></li>
                        <li class="navbar__link second"><a href="#skills">Compétences</a></li>
                        <li class="navbar__link third"><a href="#projets">Projets réalisés</a></li>
                        <li class="navbar__link four"><a href="#education">Formations</a></li>
                        <li class="navbar__link six"><a href="#contact">Formulaire de contact</a></li>
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
            <div>
                <h1>Aurélie </h1>
            <h5>Développeuse .NET</h5>
            <h5 class="pulse"><a href="#about" ><i class="btn-up material-icons" style="font-size: 30px;">expand_more</i></a></h5>
            </div>
    </section>
    <section id="about">
        <div class="profile-picture">
            <img class="rounded-circle" src="images/moi.jpeg" alt="photo-profile" width="190px">
            <div>
                <span>é</span>tant passionnée par le web, il y'a trois ans, je décide de me reconvertir dans le développement web.<br><span>é</span>tant actuellement en fin de cursus pour l'obtention d'un bachelier en Informatique de gestion, j'ai suivi plusieurs autres formations.<br> Ma forte motivation et ma capacité d'adaptation m'ont donnée une certaine expérience dans divers langages de programmation principalement C#, .NET, Javascript, Angular...
            </div>
            <div>
                <a type="button" href="Docs/cv.pdf" id="small-button" _target="_blank">Télécharger mon cv ici</a>
            </div>
        </div>
        <div id="about-content">
            <div class="wrapper">
                <div class="link_wrapper">
                    <a href="Docs/cv.pdf" class="button1" target="_blank"> Télécharger CV</a>
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
        <h2>Compétences</h2>
        <div id="competence">
            <div class="chart-container">
                <canvas id="chart"></canvas>
            </div>
        </div>
    </section>
    <section id="projets">
        <div class="white-divider"></div>
        <h2>Projets réalisés</h2>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><span class="material-icons">folder</span></div>
                <div class="timeline-panel-container" >
                    <div class="timeline-panel" data-aos="flip-right" data-aos-duration="2000">
                        <div class="timeline-heading">
                            <h3>Projet similaire à Trello:</h3>
                        </div>
                        <div class="timeline-body">
                            <div>
                                <p>Le but de l'application est de mettre en place un outil de gestion de projet en ligne.<br><span><span>Technologies utilisées:</span> Angular, Angular Material, SAAS, ASP.NET Core, EF Core, MySQL, LinQ, API REST</span></p>
                                <p><a href="https://github.com/maffo-gaelle/trello" class="link" target="_blank">Lien vers le repo github</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><span class="material-icons">folder</span></span></div>
                <div class="timeline-panel-container-inverted">
                    <div class="timeline-panel" data-aos="flip-left" data-aos-duration="2000">
                        <div class="timeline-heading">
                            <h3>Application similaire à Stack-Overflow:</h3>
                        </div>
                        <div class="timeline-body">
                            <div>
                                <p>Stack Overflow est un site web proposant des questions et réponses sur un large choix de thèmes concernant la programmation informatique. <br>
                                    <span>Technologies utilisées: </span><span>PHP, Javascrit, Jquery, Ajax, HTML, CSS, Bootstrap, MySQL, architecture MVC; </span></p>
                                <p><a href="https://github.com/maffo-gaelle/stack-overflow" class="link" target="_blank">Lien vers le repo github</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><span class="material-icons">folder</span></span></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel" data-aos="flip-left" data-aos-duration="2000">
                        <div class="timeline-heading">
                            <h3>Projet similaire à Stack-Overflow:</h3>
                        </div>
                        <div class="timeline-body">
                            <div>
                                <p>Stack Overflow est un site web proposant des questions et réponses sur un large choix de thèmes concernant la programmation informatique. <br>
                                    <span>Technologies utilisées: </span><span>C#, EF, LINQ, WPF, architecture MVVM</span></p>
                                    <p><a href="https://github.com/maffo-gaelle/stuck-overflow" class="link" target="_blank">Lien vers le repo github</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><span class="material-icons">folder</span></span></div>
                <div class="timeline-panel-container-inverted">
                    <div class="timeline-panel" data-aos="flip-left" data-aos-duration="2000">
                        <div class="timeline-heading">
                            <h3>Application similaire à Moodle:</h3>
                        </div>
                        <div class="timeline-body">
                            <div>
                                <p>Il s'agit d'une version simplifiée de la plateforme de d'étude Moodle, où sont connectés professeur et étudiants(en cours)</p>
                                <p>C#, EF, LINQ, WPF, architecture MVVM</p>
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
                        <h3 >Application similaire à Trello:</h3>
                        <p>Le but de l'application est de mettre en place un outil de gestion de projet en ligne.<br><span><span>Technologies utilisées:</span> Angular, Angular Material, SAAS, ASP.NET Core, EF Core, MySQL, LinQ, API REST</span></p>
                        <p><a href="https://github.com/maffo-gaelle/trello" class="link" target="_blank">Lien vers le repo github</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div >
                        <h3 >Application similaire à Stack-Overflow:</h3>
                        <p>Stack Overflow est un site web proposant des questions et réponses sur un large choix de thèmes concernant la programmation informatique. <br>
                            <span>Technologies utilisées: </span><span>PHP, Javascrit, Jquery, Ajax, HTML, CSS, Bootstrap, MySQL, architecture MVC; </span></p>
                        <p><a href="https://github.com/maffo-gaelle/stack-overflow" class="link" target="_blank">Lien vers le repo github</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div >
                        <h3 >Application similaire à Stack-Overflow:</h3>
                        <p>Stack Overflow est un site web proposant des questions et réponses sur un large choix de thèmes concernant la programmation informatique. <br>
                            <span>Technologies utilisées: </span><span>C#, EF, LINQ, WPF, architecture MVVM</span></p>
                            <p><a href="https://github.com/maffo-gaelle/stuck-overflow" class="link" target="_blank">Lien vers le repo github</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div >
                        <h3 >Application similaire à Moodle:</h3>
                        <<p>Il s'agit d'une version simplifiée de la plateforme d'étude Moodle, où sont connectés professeurs et étudiants(en cours)</p>
                        <p>C#, EF, LINQ, WPF, architecture MVVM</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="education">
        <div class="red-divider"></div>
        <h2>Formations</h2>
        <div id="education-blocks">
            <div>
                <div class="education-block" >
                    <p> Février 2019 ...</p>
                    <p id="epfc">EPFC</p>
                    <p>Bachelier en Informatique de gestion</p>
                </div>
            </div>
            <div>
                <div class="education-block" >
                    <p> mars 2021 - Août 2021</p>
                    <p>Bruxelles Formation - Cefora</p>
                    <p>Développeur .NET Certifié</p>
                </div>
            </div>
            <div>
                <div class="education-block">
                    <p>Janvier 2021(3 semaines)</p>
                    <p>Bruxelles Formation</p>
                    <p>Les fondamentaux d'ASP.NET Core</p>
                </div>
            </div>
            <div>
                <div class="education-block">
                    <p>Novembre 2020(6 semaines)</p>
                    <p>Bruxelles Formation</p>
                    <p>Les fondamentaux de HTML et CSS</p>
                </div>
            </div>
            <div>
                <div class="education-block">
                    <p>Fevrier 2021(6 semaines)</p>
                    <p>Bruxelles Formation</p>
                    <p>Les fondamentaux de Bootstrap</p>
                </div>
            </div>
        </div>
    </section>
   <section id="contact">
        <div class="white-divider"></div>
        <h2>Formulaire de contact</h2>
        <div>
            <form action="" method="post" id="contact-form" role="form">

                <div class="flex">
                    <div>
                        <label for="firstname">Prénom<sup>*</sup></label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre prénom" value="">
                        <p class="comments"></p>
                    </div>
                    <div>
                        <label for="name">Nom<sup>*</sup></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom" value="">
                        <p class="comments"></p>
                    </div>
                </div>

               <div class="flex">
                    <div>
                        <label for="email">Email<sup>*</sup></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Votre email" value="">
                        <p class="comments"></p>
                    </div>
                    <div>
                        <label for="phone">Telephone</label>
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Votre téléphone">
                        <p class="comments"></p>
                    </div>
               </div>

               <div>
                    <div>
                        <label for="message">Message<sup>*</sup></label>
                        <textarea name="message" id="message" rows="4" class="form-contr0l" placeholder="Votre message" ></textarea>
                        <p class="comments"></p>
                    </div>
                </div>

                <div>
                    <div>
                        <p class="blue"><strong>*Ces informations sont requises</strong></p>
                    </div>
                </div>
                <p class= "thank-you" style="display:none;">Votre message a bien été envoyé. Merci de m'avoir contactée :)</p>
                <div class="containerSubmit">
                    <div>
                        <input type="submit" class="button1" id="button" value="Envoyer">
                    </div>
                </div>
            </form>
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