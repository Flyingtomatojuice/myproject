<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="jobstyle.css">
    <link rel="icon" href="images/jobs_icon.png">


    <title>Join Our Team</title>
    <script type="text/javascript"> 
    function letters(input)
    {
    var reg = /[^a-z ]/gi;
    input.value = input.value.replace(reg,"");
    }
    function mail(input)
    {
    var reg = /[^a-z0-9@.]/gi;
    input.value = input.value.replace(reg,"");
    }
    </script>
</head>

<body>
    <!--------------------------------------header---------------->
    <header>
        <a href="#home" class="logo"><img src="Visvislogo.png"></a>

        <nav id="navbar" class="navigate">
            <ul>
                <!-----------------------JO ANN EDIT----------------------->
                <li><a href="#home" class=" nav-link active">Top</a></li>
                <li><a href="#about" class=" nav-link">About Us</a></li>
                <li><a href="#product" class=" nav-link">View Jobs</a></li>
                <li><a href="#service" class=" nav-link">Job Offers</a></li>
                <li><a href="#contact" class=" nav-link">Contact Us</a></li>
                <li><a href="index.html">Back</a></li>
            </ul>
        </nav>

        <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("navbar");
        var btns = header.getElementsByClassName("nav-link");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }
        </script>
        <!-----------------------JO ANN EDIT----------------------->

        <div id="menu"><i class="fas fa-bars"></i></div>
    </header>
    <!-------------------------Home------------------->
    <section id="home" class="home">
        <h1>VISVIS LOGISTICS</h1><br>
        <p style="text-transform: none;">Interested in joining our team, but waiting for the right time or the right role?  Send us a message and we'll keep in touch!  We're a quickly growing team that's always looking for awesome talent like you.</p>
    </section>
    <!-------------------------about------------------->
    <section id="about" class="about">
        <div class="about-content">
            <h2>OUR MISSION & VISION</h2><br>
            <h3 style="color:#ffbb00;">VISION</h3>
            <p>Connecting people, businesses, and communities to a better future and safe environment - through logistics.</p><br>
            <h3 style="color:#ffbb00;">MISSION</h3>
            <p>To become the Philippines' preferred supply chain logistics company - applying insights, service quality and innovation to create sustainable growth for business and society.</p>
        </div>
        <div class="image">
            <img src="Visvislogo.png" alt="img">
        </div>
    </section>
    <!-----------------------product--------------------> 
    <section class="product" id="product">
        <!-----------------------JO ANN EDIT----------------------->
        <h1 class="title">VIEW JOBS <span></span></h1>
        <!-----------------------JO ANN EDIT----------------------->
        <div class="cake-product">
            <div class="inner-cake-row">
                <div class="inner-cake-col">
                    <img src="general.png" alt="">
                    <div class="cake-price">

                    </div>
                    <h2>GENERAL MANAGER</h2>
                    <!-----------------------JO ANN EDIT----------------------->
                    <h3> Develop a growing strategy and set goals for your team and organization </p>
                    <!-----------------------JO ANN EDIT----------------------->
                    <p> </p>
                </div>
                <div class="inner-cake-col">
                    <img src="finance.png" alt="">
                    <div class="cake-price">
                        
                    </div>
                    <h2>ACCOUNTING AND FINANCE</h2>
                    <h3> QA for the product/services prices that should be competitive on the market</h3>
                    <p> </p>
                </div>
                <div class="inner-cake-col">
                    <img src="Manager.png" alt="">
                    <div class="cake-price">
                        
                    </div>
                    <h2>MANAGER</h2>
                    <!-----------------------JO ANN EDIT----------------------->
                    <h3>Contributes to team effort by completing relevant tasks an needed </h3>
                    <!-----------------------JO ANN EDIT----------------------->
                    <p> </p>
                </div>
                <div class="inner-cake-col">
                    <img src="quality.png" alt="">
                    <div class="cake-price">
               
                    </div>
                    <h2>QUALITY CONTROL TEAM</h2>
                    <h3> Check the team tasks and progress</h3>
                    <p> </p>
                </div>
                <div class="inner-cake-col">
                    <img src="Hr.png" alt="">
                    <div class="cake-price">
                        <a-hidden="true"></i>
                    </div>
                    <h2>HUMAN RESOURCE TEAM</h2>
                    <h3>Developing plans to meet company objectives </h3>
                    <p> </p>
                </div>
                <div class="inner-cake-col">
                    <img src="supervisor.png" alt="">
                    <div class="cake-price">
                       
                    </div>
                    <h2>SUPERVISOR</h2>
                    <h3> Strengthen  the team cooperation</h3>
                    <p> </p>
                </div>
            </div>
        </div>
    </section>
    <!----------------------service--------------------->
    <section id="service" class="service">
        <!-----------------------JO ANN EDIT----------------------->
        <h1 class="title">JOB <span>OFFERS</span></h1>
        <div class="cake-list " id="container">
            <a class="btn1 active cake-width" data-src="Visvislogo.png">DATA ANALYST QUALITY CONTROL</a>            
            <a class="btn1 cake-width" data-src="Hr.png" style="padding-top:2.3%; padding-bottom:2.3%">HR</a>
            <a class="btn1 cake-width" data-src="Hr.png" style="padding-top:2.3%; padding-bottom:2.3%">SUPERVISOR<br></a>
            <a class="btn1 cake-width" data-src="Visvislogo.png" style="padding-top:1.6%; padding-bottom:1.6%">CREATIVE TEAM</a>
            <a class="btn1 cake-width" data-src="Visvislogo.png" style="padding-top:1.6%; padding-bottom:1.6%">LIAISON DEPARTMENT</a>
            
            <a class="btn1 cake-width" data-src="Visvislogo.png">BUSINESS DEVELOPMENT DEPARTMENT</a>
            <!--/div>

            <div class="cake-list" style="width:100%; border-bottom:.2rem dotted #38b988;"-->
            <a class="btn1 cake-width" data-src="Visvislogo.png">CLIENT RELATION DEPARTMENT</a>
            <a class="btn1 cake-width" data-src="Visvislogo.png">SOCIAL MEDIA MARKETING DEPARTMENT</a>
            <a class="btn1 cake-width" data-src="Visvislogo.png" style="padding-top:1.6%; padding-bottom:1.6%">SALES & MARKETING</a>
            <a class="btn1 cake-width" data-src="Visvislogo.png" style="padding-top:2.3%; padding-bottom:2.3%">OPERATION</a>
            <!-----------------------JO ANN EDIT----------------------->

        </div>
        <div class="cake-row">
            <div class="image">
                <img src="Visvislogo.png" id="cake-img" alt="">
            </div>
            <div class="cake-content">
                <div class="cake-info">
                    <h3 style="color:#38b988;"> VISVIS LOGISTICS SERVICES
                        &nbsp;<i class=></i></h3>
                    <a><i class="fas fa-hand-point-right"></i>DETAILS<br></a>
                    <a><i class="fas fa-hand-point-right"></i>DETAILS<br></a>
                    <a><i class="fas fa-hand-point-right"></i>DETAILS<br></a>
                    <a><i class="fas fa-hand-point-right"></i>DETAILS<br></a>
                    <a><i class="fas fa-hand-point-right"></i>DETAILS<br></a>
                </div>
            </div>
        </div>
    </section>
    <!------------------------contact us--------------->
    <footer class="contact" id="contact">
        <div class="cake-contact">
            <div class="cake-contact-row">
                <div class="cake-contact-col">
                    <img src="Visvislogo.png" alt="img" class="images">
                </div>
                <div class="cake-contact-col">
                    <h1 style="color:#38b988;">Contact Us</h1>
                    <div class="social">
                        <a href="https://web.facebook.com/visvislogisticservices/?_rdc=1&_rdr">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://vt.tiktok.com/ZSe7Fxb2v/">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="https://www.instagram.com/visvislogistics.ph/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <p>Tungkong Mangga, 3023 San Jose del Monte, Philippines<br> </p>
                    <p>We want to hear from you, write us:</p>
                    <form id="formdetails" method="POST" action="insjob.php">
                    <input type="text" name="name" onkeyup="letters(this)" id="name" placeholder="Please Enter Your Name" required>
                    <input type="email" pattern='/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/' name="email" id="email" onkeyup="mail(this)" placeholder="Please Enter Your E-mail" style="text-transform: none;" required>
                    <input type="tel" pattern="^(09)\d{9}$" name="mobile" id="mobile" placeholder="Number Ex. 09123456789" onKeyPress="if(this.value.length==11) return false;"/>
                    <textarea row="8" col="10" name="msg" placeholder="Give Your Opinion"></textarea>
                    <button class="btn" name="submit">Submit<i class="fas fa-angle-right"></i></button>
                </form>
                </div>


        <div class="copyright">
            <a href="#home"><i class="fas fa-arrow-circle-up"></i></a>
            <p>Design By&copy;VISVIS LOGISTICS SERVICES CORPORATION</p>
        </div>
    </footer>
    <!-------------------------jquery------------------------------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#menu').click(function () {
                $(this).toggleClass('fas fa-times');
                $('.navigate').toggleClass('nav-toggle');
            });

            $(window).on('scroll load',function()
            {
                $('#menu').removeClass('fas fa-times');
                $('.navigate').removeClass('nav-toggle');
            });

            $('.service .cake-list .btn1').click(function () {
                $(this).addClass('active').siblings().removeClass('active');

                let src = $(this).attr('data-src');
                $('#cake-img').attr('src', src);
            });

        });

    </script>
</body>

</html>

