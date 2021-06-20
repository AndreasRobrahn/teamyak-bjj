<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="title" content="Team Yak BJJ Flensburg">
    <meta name="description" content="Ein Kampfsportverein in Flensburg, der einzige richtige Brasilian Jiu Jitsu Verein in Flensburg">
    <meta name="keywords" content="BJJ, BJJ Flensburg, Kampfsport Flensburg, Sportvereine Flensburg, Brasilian Jiu Jitsu">
    <meta name="robots" content="index">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Andreas Robrahn">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->
    <link href="{{asset('/bootstrap-4.0.0-dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('js/slick-1.8.1/slick/slick.css')}}"/> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">/ -->
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/c869b225f8.js" crossorigin="anonymous"></script>
    <!-- jquery-->
    <script  src="{{asset('js/jquery.js')}}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- Bootstrap js -->
    <script  src="{{asset('bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
    <!-- Styles -->
    <title>Team Yak BJJ Flensburg</title>
<style media="screen">
.hr1{
   border-top: 1px solid white;
   box-shadow: 0 0 15px 2px black;
   width: 25%;
   /* height: 15px; */
}
</style>
<body>


  <div class="" style="display:block; position: fixed; z-index: 200; top: 40%; margin-left: 0px; color:white;">
    <div class="" id="sidemenuwrapper" >
      <div class="row d-flex align-items-center justify-content-start m-0" >
          <div class="sidemenu text-white">
            <i class="material-icons" onclick="toTheId('contact')">
              email
            </i>
            <div class="popupleft ml-2">
              <span>Schreibe uns</span>
            </div>
          </div>
        </div>
        <div class="row d-flex align-items-center justify-content-start m-0" >
          <div class="sidemenu">
            <i class="material-icons" onclick="toTheId('aboutus')">
              info
            </i>
            <div class="popupleft">
              <span>Uber uns</span>
            </div>
          </div>
      </div>
        <div class="row d-flex align-items-center justify-content-start m-0" >
          <div class="sidemenu">
            <i class="material-icons" onclick="toTheId('aboutbjj')">
              account_tree
            </i>
            <div class="popupleft">
              <span>Brasilian Jiu Jitsu</span>
            </div>
          </div>
      </div>
        <div class="row d-flex align-items-center justify-content-start m-0" >
          <div class="sidemenu">
            <i class="material-icons" onclick="toTheId('current')">
              arrow_upward
            </i>
            <div class="popupleft">
              <span>Zum Anfang</span>
            </div>
          </div>
      </div>
    </div>
  </div>
<div class="container-fluid bg-light p-0">
  <div class="row m-0 sticky-top mainColor" id='stickynavmob'>
    <div class="col d-flex justify-content-center align-items-center">
      <div class="navbar-wrapper">
        <input type="checkbox" id="hamburg" onclick="showSidebar()">
          <label for="hamburg" class="hamburg">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
          </label>
        </div>
    </div>
    <!-- <div class="col-4 p-2">
      <div class="row m-0 justify-content-center align-items-center">
        <a class="fa fa-facebook" href="#"></a>
      </div>
      <div class="row justify-content-center align-items-center">
        <a class="fa fa-instagram" href="#"></a>
      </div>
    </div> -->
    <div class="col p-1 d-flex justify-content-end align-items-center">
      <a href="#"><img src="/images/teamlogo2.jpg" alt="Teamlogo" style="width:110px;height:110px;object-fit:cover;object-position:50% 50%; border-radius: 50%;"></a>
    </div>
    <div class="col-12 p-0">
      <div id="popupmenu" style='display:none; font-size: 1.5em;'>
        <ul class="subissues p-0 w-100" id='targetlist'>
          <a onclick="toTheId('contact')"><li>
            <div class="row m-2 ">
              <div class="col-2 p-0 d-flex justify-content-center align-items-center">
                <i class="material-icons">
                  email
                </i>
              </div>
              <div class="col p-0 d-flex justify-content-start textani1 align-items-center">
                <span>Schreibe uns</span>
              </div>
            </div>
          </li>
        </a>
          <a onclick="toTheId('current')"><li>
            <div class="row m-2">
              <div class="col-2 p-0 d-flex justify-content-center align-items-center">
                <i class="material-icons">
                  arrow_upward
                </i>
              </div>
              <div class="col p-0 d-flex justify-content-start textani1 align-items-center">
                <span>Zum Anfang</span>
              </div>
          </div>
            </li>
          </a>
          <a onclick="toTheId('aboutus')"><li>
            <div class="row m-2">
              <div class="col-2 p-0 d-flex justify-content-center align-items-center">
                <i class="material-icons">
                  info
                </i>
              </div>
              <div class="col p-0 d-flex justify-content-start textani1 align-items-center">
                <span>Über uns</span>
              </div>
          </div>
          </li></a>
          <a onclick="toTheId('aboutbjj')"><li>
            <div class="row m-2">
              <div class="col-2 p-0 d-flex justify-content-center align-items-center">
                <i class="material-icons">
                  account_tree
                </i>
              </div>
              <div class="col p-0 d-flex justify-content-start textani1 align-items-center">
                <span>Historie</span>
              </div>
          </div>
          </li></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="row sticky-top mainColor" id='stickynav'>
    <div class="col d-flex justify-content-center align-items-center">
      <a href="#aboutus "> <span class="headline1">Über uns</span></a>
    </div>
    <div class="col d-flex justify-content-center align-items-center headline1">
      <a href="#training">Training</a>
    </div>
    <div class="col d-flex justify-content-center align-items-center headline1">
      <img src="{{asset('images/teamlogo2.jpg')}}" alt="" style="width:110px;height:110px;object-fit:cover;object-position:50% 50%; border-radius: 50%;">
    </div>
    <div class="col d-flex justify-content-center align-items-center headline">
      <a href="#sport ">Sport</a>
    </div>
    <div class="col d-flex justify-content-center align-items-center headline">
      <a href="#contact ">Kontakt </a>
    </div>
  </div>

  <div class="row m-0 justify-content-center mt-3">
    <div class="col-sm-11 col-md-8 p-0 " id="current">
      <div class="row justify-content-center">
        <p class="text-center headline1">🥋🤼 Team Yak 🤼🥋 <br> Brasilian Jiu Jitsu in Flensburg !</p>
      </div>
      <div class="row m-0 justify-content-center mt-2 mainColor" style="height: 50px;">
          <div class="col w-100 m-2">
              <marquee behavior="scroll" direction="left" style="width: 100%;">
                <div class="" style="font-size: 1.5em; font-weight: 750; color: white;">
                  <p>Breaking News</p>
                </div>
               </marquee>
            </div>
          </div>
          <div class="row m-0 mt-2 p-2">
            <p class="" style="">
              {{DB::table('news')->value('message')}}
            </p>
          </div>
          <div class="row m-0 mt-2 mainColor" style="height: 50px;">
            <div class="col w-100 m-2 ">
              <marquee behavior="scroll" direction="right" style="width: 100%;">
                <div class="" style="font-size: 1.5em; font-weight: 750; color: white;">
                  <p>Breaking News</p>
                </div>
               </marquee>
            </div>
          </div>
    </div>
  </div>
  <div class="row m-0 secondaryColor text-white justify-content-center mt-3">
    <div class="col-sm-11 col-md-8 p-1 " id="aboutus">
      <div class="row m-0">
        <h1><u>Das ist Team Yak</u></h1>
      </div>
      <div class="row m-0">
        <p class="" style="margin-top: 25px;">
          Wir sind das erste BJJ Team Flensburgs. Gegründet wurde das Team Yak 2015 vom Braungurt Eitan Bronschtein. Derzeit Unterrichtet er BJJ im Ninja Sportclub e.V. in Hamburg. Das Training in Flensburg wird von den Brüdern Andreas & Kristoffer Madsen geleitet. Beide tragen einen lila Gurt der ihnen von Eitan Bronschtain 2020 und 2019 übergeben wurde und bringen zusammen mehr als 10 Jahre Erfahrung auf die Matte. Das Team steht für ein offenes Klima, das jede an dem Sport Interessierte Person herzlich aufnimmt und ein Teil des Teams werden lässt.
        </p>
      </div>

      <div class="row m-0 mt-3 ">
          <p class="headline1 text-center"><u>Die Coaches</u></p>
      </div>

      <div class="row">

        <div class="col-sm m-1 d-flex align-items-center">
          <div class="" style="height:auto;">
            <p class="headline">Kristoffer Madsen</p>
            <p>“Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p>
          </div>
        </div>
        <div class="col-sm m-1">
          <img src="https://thumbs.dreamstime.com/z/default-placeholder-fitness-trainer-t-shirt-default-placeholder-fitness-trainer-t-shirt-half-length-portrait-photo-113622062.jpg" class="img-fluid coachimg" alt="toffa">
        </div>
      </div>
      <hr class="">
      <div class="row mt-3">
        <div class="col-sm">
          <img src="https://thumbs.dreamstime.com/z/default-placeholder-fitness-trainer-t-shirt-default-placeholder-fitness-trainer-t-shirt-half-length-portrait-photo-113622062.jpg" class="img-fluid coachimg" alt="andreas2.0">
        </div>
        <div class="col-sm m-1 d-flex align-items-center">
          <div class="">
            <p class="headline">Andreas Madsen</p>
            <p>“Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p>
        </div>
        </div>
      </div>
      <div class="row m-0 justify-content-center">
          <p class="headline">Das Team</p>
      </div>
      <div class="row m-1">
        <div class="col d-flex justify-content-center">
          <img src="https://www.seekpng.com/png/full/991-9910177_team-placeholder-team.png" class="img-fluid bg-white"    alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="row m-1 bg-white justify-content-center mt-3">
    <div class="col-sm-12 col-md-8 p-0 ">
      <p><h3 class="text-center headline1"><u>Unsere Trainingszeiten</u></h3> </p>
      <hr>
      <div class="table-responsive shadow-lg">
      <table class="table table-striped " id="training">
        <thead class="headline" style="background-color: #ffcc5c; opacity: 0.5;">
          <tr>
            <th class="">#</th>
            <th style="font-weight: 700px;">Uhrzeit</th>
            <th>Trainingsinhalt</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Montag</td>
            <td>20.00 Uhr - 21.30 Uhr</td>
            <td>Grappling Fundamentals</td>
          </tr>
          <tr>
            <td>Dienstag</td>
            <td>16.15 Uhr - 17.45 Uhr</td>
            <td>BJJ Technik</td>
          </tr>
          <tr>
            <td>Donnerstag</td>
            <td>16.15 Uhr - 17.45 Uhr</td>
            <td>BJJ Technik</td>
          </tr>
          <tr>
            <td>Freitag</td>
            <td>18.00 Uhr - 19.30 Uhr</td>
            <td>Competition Class</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row m-0 mt-4 justify-content-center w-100" style="height: 500px;">
    <div class="d-flex" style="position:relative; width: 100vw" id='img_training' >

      <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
        <div class="row justify-content-center">
          <div class="col-sm-5 m-2 p-2 d-flex justify-content-center bg-white shadow-lg" style="border-radius: 50px;">
            <div class="">
              <h4 class="text-center">Personal Training</h4>
              <p>Nimm für dein privates Training einfach Kontakt zu uns auf</p>
              <p class="text-center"><button type="button" name="button" class="button">Buchen!</button> </p>
            </div>
          </div>
          <div class="col-sm-5 m-2 p-2 d-flex justify-content-center shadow-lg" style="border-radius: 50px;background-color: #fdf5e6 !important; color:black;">
            <div class="">
              <h4 class="text-center">Group Training</h4>
              <p>Die Teilnahme am Gruppentraining setzt ein <b>negatives Coronatestergebis</b> voraus, dass nicht älter als 48 Stunden ist.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center secondaryColor text-white mt-3">
    <div class="col-sm-11 col-md-8" id="aboutbjj" style="font-weight: 300;">
      <h1 class="headline1"> <u>Brazilian Jiu Jitsu / Grappling</u></h1>

      <p>Brasilianisches Jiu-Jitsu (BJJ) ist eine weiter entwickelte Form des japanischen Jujitsu. Das japanische Jujitsu, auch Nihon Jitsu genannt, konzentriert sich in seiner Anwendung hauptsächlich auf Selbstverteidigungsmechanismen im Stand. BJJ greift den Kampf im Stand mit auf und erweitert ihn mit Techniken am Boden. Der Bodenkampf ist das charakteristische Merkmal dieses Sports. Ein weiteres Unterscheidungsmerkmal dieser Kampfsportarten besteht in der Form des Unterrichts. BJJ vermittelt die Anwendung verschiedenster Techniken, in einen strategischen Kontext, der den Trainierenden offenlegt wie man sich gegen z.B. größere Kontrahenten durchsetzt. Die Simulation einer kämpferischen Auseinandersetzung wird wie in anderen Kampfsportarten als Sparring oder typischer für BJJ als "Rollen" bezeichnet und stellt einen festen Bestandteil des Trainings dar. </p>
      <hr class="hr1">
      <p class="mt-2 mb-2">Der bekannteste Name im brasilianischen Jiu-Jitsu ist der Familienname der Gracies. Die Gracie Familie modellierte ihre eigenen Kampfkunststil mit japanischem Judo und Ju Jitsu als Grundlage. Sie lernten diese Kampfkünste vom Japaner Mitsuyo Ma-eda, der 1914 im Auftrag der japanischen Regierung nach Brasilien reiste, um dort den Grundstein einer japanischen Kolonie in Südamerika zu legen. Mit großem Eifer widmete sich Maeda dieser Aufgabe, die sich mit der Zeit als äußerst schwer zu reali-sieren erwies. Letztlich scheiterte Maeda an der Erfüllung der Aufgabe. Ein einheimi-scher Brasilinaner mit Verbindungen in die Politik, namens Gastao Gracie, unterstüt-ze Maedas Vorhaben der Kolonialisierung Brasiliens. Aus der gemeinsamen Arbeit der zwei Männer wurde eine Freundschaft, die dazu führte, dass Maeda den Söhnen Gastaos im japanischen Judo und Jiu-Jitsu, während seines zweijährigen Aufenthalts in Brasilien, unterrichtete.
      </p>
    <hr class="hr1">
      <p class="mt-2 mb-2">Die Gracie Brüder hatten in vielerlei Hinsicht gute Voraussetzungen in der kurzen Zeit die Kampfkünste zu erlernen und daraus eine neue Kampfkunst zu entwickeln. Eine gute Voraussetzung war bereits ihre schiere Anzahl an Familienmitgliedern.</p>
      <hr class="hr1">
      <p class="mt-2 mb-2">Die Gracie Brüder waren zu viert und alle waren stark involviert im Unterricht Mae-das. Das hatte den Vorteil, dass sie immer genug Trainingspartner hatten, um die Techniken zu üben und zu verfeinern. Die Brüder hatten alle samt viele Kinder, von denen ein Großteil passionierte Schüler*innen und später auch Lehrer*innen wurden. So entwickelte sich die Gracie Familie zu einer Art Forschungsteam, deren For-schungsfeld der unbewaffnete Kampf darstellte.
        Die Gracies wurden nach der Beendigung des Trainings unter Maeda selbst zu Leh-rern der Kampfkünste, womit sie ihren Lebensunterhalt finanzierten. Als Leh-rer*innen hatten die Gracies die Möglichkeit ihre gesamte Zeit dem studieren und verfeinern der Techniken zu widmen.
      </p>
    <hr class="hr1">
      <p class="mt-2 mb-2">Eine weitere positive Voraussetzung für die Entwicklung war, dass die Gracies alle eher durchschnittliche Körpertypen aufwiesen. Somit mussten die Techniken bezogen auf Funktionalität darauf ausgelegt sein, dass sie möglichst effizient ausgeführt wer-den können und keine physische Stärke voraussetzen.
        Der letzte Vorteil, den die Gracies in ihrer Entwicklung nutzten, war ihre Autonomi-tät. In traditionellen Kampfkünsten ist es üblich die Tradition sehr stark zu betonen. Jede Form von Entwicklung und Veränderung steht somit unter keinem guten Licht und wird schnell als Verschmähung der antiken Großmeister verstanden. Da die Gra-cies auf sich allein gestellt waren, mussten sie keine alten Traditionen huldigen und hatten absolute Freiheit darin neue Techniken aufzunehmen und weniger effektive zu verwerfen. (Gracie, 2001)</p>

    </div>

  </div>

  <div class="row justify-content-center text-white">
      <div class="col-3 m-2 p-2 bwrd">
        <img src="{{asset('images/72754548_2191665604459662_3955709311052677120_n.jpg')}}" alt=""  class="img-fluid">
      </div>
      <div class="col-3 m-2 p-2 bwrd">
        <img src="{{asset('images/72754548_2191665604459662_3955709311052677120_n.jpg')}}" alt="" class="img-fluid">
      </div>
      <div class="col-3 m-2 p-2 bwrd">
        <img src="{{asset('images/72754548_2191665604459662_3955709311052677120_n.jpg')}}" alt="" class="img-fluid">
      </div>
  </div>
  <div class="container-fluid m-0 p-0 mt-3 secondaryColor">
  <div class="row m-0 text-white justify-content-center">
      <div class="col-sm-12 col-md-6 p-2">
         <h4 id='contact' class=" headline1"><u>Kontaktformular</u></h4>
      </div>
  </div>
  <form class="" action="{{route('sendNotification')}}" method="post">
    @csrf

  <div class="row m-0 justify-content-center text-white">
    <div class="col-sm-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
      <div class="w-100" style="display:block;">
        <label for="name">Name</label>
        <input type="text" name="name" value="" class="customdg-input" id='name' placeholder='Max Mustermann'>
      </div>
    </div>
  </div>
  <div class="row m-0 justify-content-center text-white">
      <div class="col-sm-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
        <div class="w-100" style="display:block;">
          <label for="name">Email</label>
          <input type="email" name="email" value="" class="customdg-input" id='email' placeholder='max.mustermann@web.de' required>
        </div>
      </div>
  </div>
  <div class="row m-0 justify-content-center text-white">
      <div class="col-sm-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
        <div class="w-100" style="display:block;">
          <label for="subject">Betreff</label>
          <input type="text" name="subject" value="" class="customdg-input" id='subject' placeholder='Training am...'>
        </div>
      </div>
  </div>
  <div class="row m-0 justify-content-center text-white">
      <div class="col-sm-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
        <div class="w-100" style="display:block;">
            <label for="message">Deine Nachricht</label>
             <textarea class="customdg-input" name="message" id='message'placeholer="Nachricht.."> </textarea>
        </div>
      </div>
  </div>
  <div class="row m-0 justify-content-center text-white">
    <button class="button" type="submit" name="button">Senden</button>
  </div>
</form>
</div>

  <div class="row mt-3" style="height: 400px;">
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=24939%20Flensburg,%20Husumer%20Str.%208&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="height: 100%; width: 100%;"></iframe>
        <br>
        </style>
        <a href="https://www.embedgooglemap.net">
          google map website
        </a>
      </div>
    </div>
  </div>
    <div class="container-fluid p-0 text-white">
      <div class="row m-0 border-bottom justify-content-start align-items-start mainColor" >
        <h4 class="headline">Zusätzliche Informationen</h4>
      </div>
      <div class="row m-0 justify-content-start mainColor">
        <p>Adresse: Husumer Str. 8, 24941 Flensburg</p>
      </div>
      <div class="row m-0 justify-content-start mainColor">
        <p>Email: info@teamyak.de</p>
      </div>
      <div class="row m-0 justify-content-start mainColor">
        <p>Social Media: <a class="fa fa-facebook" href="https://de-de.facebook.com/yak.bjj.flensburg/"></a>  <a class="fa fa-instagram" href="https://www.instagram.com/teamyak_bjj/"></a></p>
      </div>
      <div class="row m-0 justify-content-start mainColor">
        <a href="#">Zum Impressum</a>
      </div>
  </div>
</div>

</body>

  <script  src="{{asset('js/main.js')}}"></script>
</html>
