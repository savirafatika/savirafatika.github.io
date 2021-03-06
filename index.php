<?php

function get_CURL($url)
{
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   $result = curl_exec($curl);
   curl_close($curl);

   return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCrmaNLTz1x931Ig5Yuauf2w&key=AIzaSyCKPjga80_UnHElAiOBFAtCyjbC5uEMMkE');

$ytbProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

// Latest Video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCKPjga80_UnHElAiOBFAtCyjbC5uEMMkE&channelId=UCrmaNLTz1x931Ig5Yuauf2w&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

$ig = 'https://v1.nocodeapi.com/savirafatika/instagram/TFPzLSyGNRGCMCGu?limit=6';
$result = get_CURL($ig);
$usernameIg = $result['data'][0]['username'];
$photos = [];
foreach ($result['data'] as $ph) {
   $photos[] = $ph['media_url'];
}
?>

<!DOCTYPE html>
<html>

<head>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

   <!-- My CSS -->
   <link rel="stylesheet" href="css/style.css">

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>Home</title>
</head>

<body id="home" class="scrollspy">
   <div class="navbar navbar-fixed" id="navbarku">
      <!-- /.button back to top -->
      <nav class="pink darken-4">
         <div class="container">
            <div class="nav-wrapper">
               <a href="#home" class="brand-logo" style="font-family: Brush Script MT;">Savira's</a>
               <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
               <ul class="right hide-on-med-and-down">
                  <li><a href="#about">About Me</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#expert">Expertise</a></li>
                  <li><a href="#contact">Contact Me</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </div>

   <!-- sidenav -->
   <ul class="sidenav" id="mobile-nav">
      <li><a href="#about">About Me</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#expert">Expertise</a></li>
      <li><a href="#contact">Contact Me</a></li>
   </ul>

   <!-- slider -->
   <div class="slider">
      <ul class="slides">
         <li>
            <img src="img/slider/1.jpg">
            <div class="caption center-align">
               <h3>Experience Excellence Expert!</h3>
               <h5 class="light grey-text text-lighten-3">What you believe can happen.</h5>
            </div>
         </li>
         <li>
            <img src="img/slider/5.jpg">
            <div class="caption right-align">
               <h3>Experience Excellence Expert!</h3>
               <h5 class="light grey-text text-lighten-3">What you believe can happen.</h5>
            </div>
         </li>
         <li>
            <img src="img/slider/3.jpg">
            <div class="caption left-align">
               <h3>Experience Excellence Expert!</h3>
               <h5 class="light grey-text text-lighten-3">What you believe can happen.</h5>
            </div>
         </li>
      </ul>
   </div>

   <!-- About Us -->
   <section id="about" class="about scrollspy">
      <div class="container">
         <div class="row">
            <h3 class="center light pink-text text-darken-4">About Me</h3>
            <div class="col m6 s12 light" style="padding-right: 40px;">
               <h5>Who am i ?</h5>
               <p style="text-align: justify; text-indent: 45px;">Being a web developer is my dream. When studying parts of the website I like several materials: providing suitable colors combined with web layouts, looking for suitable algorithms to be applied in program code, studying frameworks, making database design strategies. Even though I feel tired, I will be happy if the website in my imagination can be realized. All I have to keep doing is finding new experiences and continuing to practice with projects. For those of us who have the same dream, cheer up! do not give up with difficult things, everything must have a solution.</p>
               <ul class="collapsible">
                  <li>
                     <div class="collapsible-header">
                        <i class="material-icons">work</i>Work
                        <span class="badge">
                           <i class="material-icons">arrow_drop_down</i>
                        </span>
                     </div>
                     <div class="collapsible-body">
                        <ul>Practical Assistant Subject:
                           <li>~ Introduction to Information Technology</li>
                           <li>~ Structured Programming</li>
                           <li>~ Advanced Web Programming</li>
                           <li>~ E-Commerce</li>
                        </ul>
                     </div>
                  </li>
                  <!-- <li>
                     <div class="collapsible-header">
                        <i class="material-icons">web</i>Web Project
                        <span class="badge">
                           <i class="material-icons">arrow_drop_down</i>
                        </span>
                     </div>
                     <div class="collapsible-body">
                        <ul>
                           <li>~ Bookstore (IS)</li>
                           <li>~ Library (IS)</li>
                           <li>~ E-Shopper</li>
                           <li>~ Islamic Studies Online Classes</li>
                           <li>~ Selection of Practicum Assistant Admissions (DSS)</li>
                           <li>~ Selection of Catering Menu Package (DSS)</li>
                        </ul>
                     </div>
                  </li> -->
                  <li>
                     <div class="collapsible-header">
                        <i class="material-icons">school</i>Education
                        <span class="badge">
                           <i class="material-icons">arrow_drop_down</i>
                        </span>
                     </div>
                     <div class="collapsible-body">
                        <ul>
                           <li>~ Universitas Amikom Yogyakarta (Sistem Informasi)</li>
                           <li>~ SMK N 2 Magelang (Rekayasa Perangkat Lunak)</li>
                           <li>~ SMP N 8 Magelang</li>
                           <li>~ SD N Rejowinangun Selatan 2</li>
                        </ul>
                     </div>
                  </li>
               </ul>
               <br>
            </div>

            <div class="col m6 s12 light center">
               <br><img src="img/p.jpg" class="circle responsive-img" width="30%" height="30%">
               <h5 class="light">Savira Fatika</h5>
               <span class="btn-flat btn-small new bagde pink darken-4 white-text" style="border-radius: 8px;">Web Developer</span>
               <br><br>
               <p style="text-align: justify; text-indent: 45px;">Minasan Konnichiwa <span>&#128075;&#127995;</span> jibun jishin o shokai suru koto ga dekimasu. Watashi wa Savira Fatika to mooshi-masu, Savira to yobu koto ga dekimasu. Watashi no shumi wa ongaku o kiku koto desu to baiku ni noru koto desu, ie de goro-goro suru no ga suki desu. Watashi wa okashi ga suki desu. Watashi no yume wa web developer ni naru koto desu. Yoroshiku Onegaishimasu.</p>
               <br>
            </div>
         </div>
      </div>
   </section>

   <!-- Portfolio -->
   <section id="portfolio" class="portfolio scrollspy" style="background-color: #fffbfd;">
      <div class="container">
         <h3 class="light center pink-text text-darken-4">Portfolio</h3>
         <div class="row col m4">
            <div class="col m2 s3">
               <img src="img/github.png" class="circle responsive-img">
            </div>
            <div class="col m10 s9" id="connect"></div>
         </div>
         <div class="row info-repo">
            <table class="responsive-table">
               <thead>
                  <tr class="table-info">
                     <th>Repositories Name</th>
                     <th>URL</th>
                     <th>Language</th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
            </table>
         </div>
      </div>
   </section>

   <!-- Expertise -->
   <div id="expert" class="parallax-container scrollspy">
      <div class="parallax"><img src="img/slider/6.jpg"></div>

      <div class="container expert">
         <h3 class="center light white-text">Areas of Expertise</h3>
         <div class="row">
            <div class="col m4 s12">
               <div class="card-panel center">
                  <i class="material-icons medium">integration_instructions</i>
                  <h5>Web Programming</h5>
                  <p>Programming languages: html, css, javascript. Framework: CodeIgniter, Laravel.</p>
               </div>
            </div>
            <div class="col m4 s12">
               <div class="card-panel center">
                  <i class="material-icons medium">developer_board</i>
                  <h5>Web Design</h5>
                  <p>Illustrator, Photoshop. Wireframe / Mockup / Prototype tool: Marvel, Sketch.</p>
               </div>
            </div>
            <div class="col m4 s12">
               <div class="card-panel center">
                  <i class="material-icons medium">filter_drama</i>
                  <h5>DBMS</h5>
                  <p>Database Management System using Ms. Access, SQL Server, MySQL.</p>
               </div>
            </div>
         </div>
      </div>
   </div>


   <!-- Contact Us -->
   <section id="contact" class="contact scrollspy" style="background-color: #fffbfd;">
      <div class="container">
         <h3 class="light center pink-text text-darken-4">Contact Me</h3>
         <div class="row">
            <div class="col m5 s12">
               <div class="card-panel pink darken-4 center white-text">
                  <i class="material-icons">email</i>
                  <h5>Contact</h5>
                  <p>savira.fatika.sf@gmail.com</p>
               </div>
               <ul class="collection with-header">
                  <li class="collection-header">
                     <h4>My Office</h4>
                  </li>
                  <li class="collection-item row">
                     <div class="col m2 s2 center"><i class="material-icons">call</i></div>
                     <div class="col m10 s10">+62 821 3655 2225</div>
                  </li>
                  <li class="collection-item row">
                     <div class="col m2 s2 center"><i class="material-icons">location_on</i></div>
                     <div class="col m10 s10" style="text-align: justify;">Malangan 1 No.432 Kota Magelang, Central Java, Indonesia, 56125.</div>
                  </li>
               </ul>
            </div>

            <div class="col m7 s12">
               <form>
                  <div class="card-panel">
                     <h5>Find me with google maps</h5><br>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31647.437943229223!2d110.20001484864692!3d-7.473010953811199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f5d736ef381%3A0xa0645d8ec4966c24!2sMagelang%2C%20Magelang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1605024252345!5m2!1sen!2sid" style="border:0; width: 100%; height: 267px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
               </form>
            </div>

         </div>
      </div>
   </section>

   <!-- Social Media -->
   <section id="sosmed" class="sosmed scrollspy pink darken-4 white-text" style="background-color: #fffbfd;">
      <div class="container">
         <h3 class="light center">Social Media</h3>
         <div class="row">
            <div class="col m6 s12 center-block">
               <div class="row">
                  <div class="col m4 s3">
                     <img src="<?= $ytbProfilePic; ?>" class="circle responsive-img">
                  </div>
                  <div class="col m7 s9">
                     <h5><?= $channelName; ?></h5>
                     <p><?= $subscriber; ?> Subscribers.</p>
                     <div class="g-ytsubscribe" data-channelid="UCrmaNLTz1x931Ig5Yuauf2w" data-layout="default" data-count="default"></div>
                  </div>
                  <div class="col m1"></div>
               </div>
               <div class="row">
                  <div class="col m11 s12">
                     <iframe width="100%" height="300" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="col m1"></div>
               </div>
            </div>

            <div class="col m6 s12">
               <div class="row">
                  <div class="col m4 s3">
                     <img src="img/p.jpg" class="circle responsive-img">
                  </div>
                  <div class="col m8 s9">
                     <h5>@<?= $usernameIg; ?></h5>
                     <p>500 Followers.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <?php foreach ($photos as $ph) : ?>
                        <div class="ig-thumbnail">
                           <img src="<?= $ph; ?>">
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>

   <!-- footer -->
   <footer class="pink darken-4 white-text center">
      Copyright &copy;
      <script>
         document.write(new Date().getFullYear());
      </script> All rights reserved | Savira's
   </footer>

   <!-- button back to top -->
   <button id="back-to-top-btn">
      <i class="material-icons">arrow_upward</i>
   </button>

   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="js/materialize.min.js"></script>
   <!-- materialize js -->
   <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
         indicators: false,
         height: 500,
         transition: 600,
         interval: 3000
      });

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll, {
         scrollOffset: 50
      });

      const collapsible = document.querySelectorAll('.collapsible');
      M.Collapsible.init(collapsible);
   </script>
   <!-- /materialize js -->

   <!-- back to top -->
   <script src="js/scroll.js"></script>
   <!-- /.back to top -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://apis.google.com/js/platform.js"></script>
   <script src="js/getrepo.js"></script>
   <script src="js/getuser.js"></script>

</body>

</html>