$(document).ready(function() {

    var content = document.querySelector('#hambuger-content');
    var sidebarBody = document.querySelector("#hambuger-sidebar-body");
    var sidebar = document.querySelector("#hambuger-sidebar");
    var button = document.querySelector('.hamburger-button');
    var overlay = document.querySelector('#hambuger-overlay');
    var nav = document.querySelector('nav');
    var navbar = document.querySelector('.navbar__link');
    var link = document.querySelectorAll('#hambuger-sidebar-body li.navbar__link');

    sidebarBody.innerHTML = content.innerHTML;
    var link = document.querySelectorAll('#hambuger-sidebar-body li.navbar__link');
    console.log(link);
    console.log(sidebarBody);

    button.addEventListener('click', function(e) {
        e.preventDefault();
        overlay.style.display = 'block';
        sidebar.style.transform = 'translateX(0)';
        nav.classList.toggle('show-nav');
        navbar.classList.toggle('show-nav');
    });


    button.addEventListener('keydown', function(e) {
        if(overlay.style.display === 'block') {
            if(e.repeat === false && e.which === 27) {
                overlay.style.display = 'none';
                sidebar.style.transform = 'translateX(-100%)';
                nav.classList.toggle('show-nav');
            } 
        }
    });

    overlay.addEventListener('click', function(e) {
        e.preventDefault();
        overlay.style.display = 'none';
        sidebar.style.transform = 'translateX(-100%)';
        nav.classList.toggle('show-nav');
    });

    if(link) {
        for(let i = 0; i < link.length; i++) {
            link[i].addEventListener('click', (e) => {
                overlay.style.display = 'none';
                sidebar.style.transform = 'translateX(-100%)';
                nav.classList.toggle('show-nav');
            })
        }
    }

    //scroll dans la fenetre
    $("#more-infos a, .navbar__link a, footer #btn-less").on("click", function(e) {
        e.preventDefault();
        var hash = this.hash;

        $('body,html').animate({scrollTop: $(hash).offset().top}, 1000, function() {
            window.location.hash = hash;
        });
    })
    // Chart

    var ctx = document.getElementById('myChart');
    var data = {
            labels: ['Java', 'Typescript', 'Css/CSS3', 'PHP', 'Angular', 'SQL Server', 'Javascript', 'JQuery', 'WPF', '.NET','ASP MVC', 'C#', 'HTML'],
            datasets: [{
                label: '% de competence',
                data: [40, 60, 65, 70, 75, 80, 85, 85, 87, 90, 90, 92, 95],
                backgroundColor: [
                    'rgba(131, 101, 73, 0.5)',
                    'rgba(135, 102, 71, 0.5)',
                    'rgba(144, 97, 53, 0.5)',
                    'rgba(165, 107, 54, 0.5)',
                    'rgba(178, 111, 48, 0.5)',
                    'rgba(190, 113, 40, 0.5)',
                    'rgba(189, 115, 44, 0.5)',
                    'rgba(228, 135, 47, 0.5)',
                    'rgba(228, 135, 47, 0.5)',
                    'rgba(228, 135, 47, 0.5)',
                    'rgba(228, 135, 47, 0.5)',
                    'rgba(228, 126, 30, 0.5)',
                    'rgba(242, 122, 10, 0.5)'
                ],
                borderColor: [
                    'rgba(131, 101, 73, 1)',
                    'rgba(135, 102, 71, 1)',
                    'rgba(144, 97, 53, 1)',
                    'rgba(165, 107, 54, 1)',
                    'rgba(178, 111, 48, 1)',
                    'rgba(190, 113, 40, 1)',
                    'rgba(189, 115, 44, 1)',
                    'rgba(228, 135, 47, 1)',
                    'rgba(228, 135, 47, 1)',
                    'rgba(228, 135, 47, 1)',
                    'rgba(228, 135, 47, 1)',
                    'rgba(228, 126, 30, 1)',
                    'rgba(242, 122, 10, 1)'
                ],
                borderWidth: 1,
                hoverBackgroundColor:[
                    'rgba(131, 101, 73, 1)',
                    'rgba(135, 102, 71, 1)',
                    'rgba(144, 97, 53, 1)',
                    'rgba(165, 107, 54, 1)',
                    'rgba(178, 111, 48, 1)',
                    'rgba(190, 113, 40, 1)',
                    'rgba(189, 115, 44, 1)',
                    'rgba(228, 135, 47, 1)',
                    'rgba(228, 135, 47, 1)',
                    'rgba(228, 135, 47, 1)',
                    'rgba(228, 135, 47, 1)',
                    'rgba(228, 126, 30, 1)',
                    'rgba(242, 122, 10, 1)'
                ]
            }]
        };
        var options = {
           
            // tooltips: { 
            //     tooltips
            // },
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                  stacked: true,
                  gridLines: {
                    display: false,
                    color: "rgba(255,99,132,0.2)"
                  }
                  
                }],
                xAxes: [{
                  gridLines: {
                    display: false
                  }
                }]
            }
        };

        Chart.Bar('chart', {
            options: options,
            data: data
        });


        $('input, textarea').click(function(e) {
            $('.thank-you').css("display", "none");
        })

        //Formulaire ajax
        $('#contact-form').submit(function(e) {
            console.log("ok");
            e.preventDefault();
            $('.comments').empty();
            var postdata = $('#contact-form').serialize();
            console.log(postdata);
            $.ajax({
                type: 'POST',
                url: 'php/contact.php',
                data: postdata,
                dataType: 'json',
                success: function(json) {
                    console.log("json");
                    if(json.isSuccess) 
                    {
                        $('.thank-you').css("display", "block");
                        $('#contact-form')[0].reset();
                    }
                    else
                    {
                        $('.commentFirstname').text(json.firstnameError);
                        $('.commentName').text(json.nameError);
                        $('.commentEmail').text(json.emailError);
                        $('.commentTel').text(json.phoneError);
                        $('.commentMessage').text(json.messageError);
                        // $('#firstname + .comments').html(json.firstnameError);
                        // $('#name + .comments').html(json.nameError);
                        // $('#email + .comments').html(json.emailError);
                        // $('#phone + .comments').html(json.phoneError);
                        // $('#message + .comments').html(json.messageError);
                        console.log(json.messageError)
                    }                
                }
            });
            // .done(function(response){
            //     let data = JSON.stringify(response);
            //     $("div#res").append(data);
            // })
        
            // //Ce code sera exécuté en cas d'échec - L'erreur est passée à fail()
            // //On peut afficher les informations relatives à la requête et à l'erreur
            // .fail(function(error){
            //     alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
            // })
        
            // //Ce code sera exécuté que la requête soit un succès ou un échec
            // .always(function(){
            //     alert("Requête effectuée");
            // });
        });
});

   