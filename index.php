<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,600;0,6..96,700;1,6..96,600&family=Permanent+Marker&family=Prata&family=Roboto:ital,wght@0,100;0,300;0,900;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Khalil Berkachi</title>
</head>

<body id="body">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                KHALIL BERKACHI
            </a>
            <!-- <a href="" class="ham"><i class="fa fa-bars"></i></a> -->
            <div class="right">
                <a href="#about">About</a>
                <a href="#work">Works</a>
                <a href="#footer">Contact</a>
            </div>
            <div class="right2">
                <a class="ham" onclick="openmenu()"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </nav>

    <div class="mobile-menu" id="mob" style="display:none;">
        <ul>
            <li><a onclick="openmenu()" href="#about">About</a></li>
            <li><a onclick="openmenu()" href="#work">Works</a></li>
            <li><a onclick="openmenu()" href="#footer">Contact</a></li>
        </ul>
    </div>

    <div class="container">
        <section class="about" id="about">
            <h2 class="title">About</h2>
            <div class="flex" id="bl">
                <div class="text">
                    <p>Certified digital imaging technician specialized in all sorts of on set data wrangling,
                        live color grading/management, scope leadership and deep gamma correction backed up with
                        a vast experience and knowledge on most production grade film cameras and tech.
                    </p>
                    <p>
                        Certified ultimate arm operator, trained by the official ultimate arm team based in California,
                        specialized in fast paced extreme arm/camera movements and more.
                    </p>
                    <p>
                        Highspeed filmography is an engineering tool, specialized in most of phantom Highspeed
                        camera models and the data managemen around them.
                    </p>
                </div>
                <div class="img">
                    <img src="img/about.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="work" id="work">
            <h2 class="title">Works</h2>
            <p class="sub-title">Digital Imaging Technician</p>
            <!-- <p class="sub-works">Formula</p> -->
            <!-- Formula -->
            <p class="subsub-title low2 animate" id="nolow2">Formula E</p>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <video class="video" src="data/FORMULA E.MP4" controls></video>
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" class="bll" src="img/formula2.jpg" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/formula3.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/formula4.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/formula5.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/formula1.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End Formula -->
            <!-- Apple -->
            <p class="subsub-title low2 animate">Apple</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/apple0.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/apple1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/apple2.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/apple3.jpg" class="bll" alt="" />
                </div>

            </div>
            <!-- End Apple -->
            <!-- Aramco -->
            <p class="subsub-title low2 animate">Aramco</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aramco1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aramco2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aramco3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aramco4.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aramco5.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aramco6.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aramco7.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aramco8.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End Aramco -->
            <!--  Dominos -->
            <p class="subsub-title low2 animate">Dominos</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/dominos.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End Dominos -->
            <!-- Hungerstation -->
            <p class="subsub-title low2 animate">Hungerstation</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/hungerstation1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/hungerstation2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/hungerstation3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/hungerstation4.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End Hungerstation -->
            <!-- Lays -->
            <p class="subsub-title low2 animate">Lays</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/lays1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/lays2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/lays3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/lays4.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End Lays -->
            <!--  mdl beast -->
            <p class="subsub-title low2 animate">MDL Beast</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/mdl-beast-1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/mdl-beast-2.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End mdl beast -->
            <!--  mercedes -->
            <p class="subsub-title low2 animate">Mercedes</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/mercedes1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/mercedes2.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End mercedes -->
            <!--  pepsi -->
            <p class="subsub-title low2 animate">Pepsi</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/pepsi.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End pepsi -->
            <!-- neom -->
            <p class="subsub-title low2 animate">Neom</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/neom1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/neom2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/neom3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/neom4.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End neom -->
            <!-- saudi -->
            <p class="subsub-title low2 animate">Saudi</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/saudi1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/saudi2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/saudi3.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- end saudi -->
            <!-- sta -->
            <p class="subsub-title low2 animate">Sta</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sta1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sta2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sta3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sta4.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sta5.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End sta -->
            <!-- toyota -->
            <p class="subsub-title low2 animate">Toyota</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/toyota1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/toyota2.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End toyota -->
            <!-- riyadh -->
            <p class="subsub-title low2 animate">Riyadh</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/riyadh1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/riyadh2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/riyadh3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/riyadh4.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End riyadh -->
            <!-- jawwy -->
            <p class="subsub-title low2 animate">Jawwy</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/jawwy1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/jawwy2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/jawwy3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/jawwy4.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/jawwy5.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/jawwy6.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/jawwy7.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/jawwy8.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- end jawwy -->
            <!-- aloula -->
            <p class="subsub-title low2 animate">Al Oula</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aloula1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aloula2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aloula3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/aloula4.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- End aloula -->
            <!-- Saudi Events -->
            <p class="subsub-title low2 animate">Saudi Events</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/se1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/se2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/se3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/se4.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/se5.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/se6.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/se7.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/se8.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- end Saudi Events -->
            <!-- Saudi Airlines -->
            <p class="subsub-title low2 animate">Saudi Airlines</p>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sa1.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sa2.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sa3.jpg" class="bll" alt="" />
                </div>
            </div>
            <div class="row low">
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sa4.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sa5.jpg" class="bll" alt="" />
                </div>
                <div class="col-lg-4 col-md-4">
                    <img onmouseout="blured()" src="img/sa6.jpg" class="bll" alt="" />
                </div>
            </div>
            <!-- end Saudi Airlines -->
            <!-- nopics -->
            <p class="subsub-title low2 animate">Porsche Panerama</p>
            <p class="subsub-title low2 animate">Lexus</p>
            <p class="subsub-title low2 animate">Coca Cola</p>
            <p class="subsub-title low2 animate">Netflix</p>
            <p class="subsub-title low2 animate">Pizza Hut</p>
            <p class="subsub-title low2 animate">Mobily</p>
            <p class="subsub-title low2 animate">Boulevard World - City</p>
            <p class="subsub-title low2 animate">Kafd</p>
            <p class="subsub-title low2 animate">Sabb</p>
            <p class="subsub-title low2 animate">Falcon's Docu</p>
            <p class="subsub-title low2 animate">Amazon</p>
            <p class="subsub-title low2 animate">Oppo</p>
            <p class="subsub-title low2 animate">Kitkat</p>
            <p class="subsub-title low2 animate">MBC Driven</p>
            <p class="subsub-title low2 animate">Johnson & Johnson</p>
            <!-- end nopics -->

            <p class="sub-title">Ultimate Arm Operator</p>
            <p class="subsub-title low2 animate" id="nolow22">Formula E</p>
            <p class="subsub-title low2 animate">Formula 1</p>
            <p class="subsub-title low2 animate">Aramco</p>
            <p class="subsub-title low2 animate">LAMB – IMDB</p>


            <p class="sub-title">Highspeed Operator</p>
            <p class="subsub-title low2 animate" id="nolow222">Top Chef MBC</p>
            <p class="subsub-title low2 animate">Flyadeal Airlines</p>
        </section>

        <section class="footer" id="footer">
            <div class="flex">
                <div class="col1">
                    <a href="#">
                        KHALIL BERKACHI
                    </a>
                </div>
                <div class="col2">
                    <a href="#about">About</a><br>
                    <a href="#work">Works</a><br>
                    <a href="#footer">Contact</a>
                </div>
                <div class="col3">
                    <a href="mailto:khalil@finalcutlb.com"><i class="fa fa-envelope-o"></i>khalil@finalcutlb.com</a><br>
                    <a href="mailto:kiko.bk72@icloud.com"><i class="fa fa-envelope-o"></i>kiko.bk72@icloud.com</a><br>
                    <a href="tel:+966 55 955 3269"><i class="fa fa-phone"></i>+966 55 955 3269</a><br>
                    <a href="tel:+961 71 717939"><i class="fa fa-phone"></i>+961 71 717 939</a>
                </div>
            </div>
        </section>
    </div>
</body>

</html>