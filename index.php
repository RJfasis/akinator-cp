<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--font-->
  <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">

  <!-- Bootstrap Core CSS -->
  <link href="./bootstrap.css" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->
  <link href="./one-page-wonder.css" rel="stylesheet" type="text/css">

  <title>Laundry Recommender</title>

</head>
<body>
  <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="#">Laundry Seer</a>
             </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                     <li>
                         <a href="#about">About</a>
                     </li>
                     <li>
                         <a href="#mechanisms">Mechanisms</a>
                     </li>
                     <li>
                         <a href="#contact">Contact</a>
                     </li>
                 </ul>
             </div>
             <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
     </nav>
     <!-- Full Width Image Header -->
         <header class="header-image">
             <div class="headline">
                 <div class="container">
                     <h1>Laundry Seer</h1>
                     <h2>Should I do my laundry today?</h2>
                 </div>
             </div>
         </header>
<br />

          <form action="laundry.php" method="get" class="form-inline" align="right" >
             <select name="province"  class="form-control" style="background-color: white;
              padding-left: 20px;
              padding-right: 200px;">
               <option selected disabled>Select your province</option>
               <option value="amnatcharoen">Amnat Charoen</option>
               <option value="angthong">Ang Thong</option>
               <option value="bangkok">Bangkok</option>
               <option value="buengkan">Bueng Kan</option>
               <option value="buriram">Buriram</option>
               <option value="chachoengsao">Chachoengsao</option>
               <option value="chainat">Chai Nat</option>
               <option value="chaiyaphum">Chaiyaphum</option>
               <option value="chanthaburi">Chanthaburi</option>
               <option value="chiangmai">Chiang Mai</option>
               <option value="chiangrai">Chiang Rai</option>
               <option value="chonburi">Chonburi</option>
               <option value="chumphon">Chumphon</option>
               <option value="kalasin">Kalasin</option>
               <option value="kamphaengphet">Kamphaeng Phet</option>
               <option value="kanchanaburi">Kanchanaburi</option>
               <option value="khonkaen">Khon Kaen</option>
               <option value="krabi">Krabi</option>
               <option value="lampang">Lampang</option>
               <option value="lamphun">Lamphun</option>
               <option value="loei">Loei</option>
               <option value="lopburi">Lopburi</option>
               <option value="maehongson">Mae Hong Son</option>
               <option value="mahasarakham">Maha Sarakham</option>
               <option value="mukdahan">Mukdahan</option>
               <option value="nakhonnayok">Nakhon Nayok</option>
               <option value="nakhonpathom">Nakhon Pathom</option>
               <option value="nakhonphanom">Nakhon Phanom</option>
               <option value="nakhonratchasima">Nakhon Ratchasima</option>
               <option value="nakhonsawan">Nakhon Sawan</option>
               <option value="nakhonsithammarat">Nakhon Si Thammarat</option>
               <option value="nan">Nan</option>
               <option value="narathiwat">Narathiwat</option>
               <option value="nongbualamphu">Nong Bua Lam Phu</option>
               <option value="nongkhai">Nong Khai</option>
               <option value="nonthaburi">Nonthaburi</option>
               <option value="pathumthani">Pathum Thani</option>
               <option value="pattani">Pattani</option>
               <option value="phangnga">Phang Nga</option>
               <option value="phatthalung">Phatthalung</option>
               <option value="phayao">Phayao</option>
               <option value="phetchabun">Phetchabun</option>
               <option value="phetchaburi">Phetchaburi</option>
               <option value="phichit">Phichit</option>
               <option value="phitsanulok">Phitsanulok</option>
               <option value="phranakhonsiayutthaya">Phra Nakhon Si Ayutthaya</option>
               <option value="phrae">Phrae</option>
               <option value="phuket">Phuket</option>
               <option value="prachinburi">Prachinburi</option>
               <option value="prachuapkhirikhan">Prachuap Khiri Khan</option>
               <option value="ranong">Ranong</option>
               <option value="ratchaburi">Ratchaburi</option>
               <option value="rayong">Rayong</option>
               <option value="roiet">Roi Et</option>
               <option value="sakaeo">Sa Kaeo</option>
               <option value="sakonnakhon">Sakon Nakhon</option>
               <option value="samutprakan">Samut Prakan</option>
               <option value="samutsakhon">Samut Sakhon</option>
               <option value="samutsongkhram">Samut Songkhram</option>
               <option value="saraburi">Saraburi</option>
               <option value="satun">Satun</option>
               <option value="singburi">Sing Buri</option>
               <option value="sisaket">Sisaket</option>
               <option value="songkhla">Songkhla</option>
               <option value="sukhothai">Sukhothai</option>
               <option value="suphanburi">Suphan Buri</option>
               <option value="suratthani">Surat Thani</option>
               <option value="surin">Surin</option>
               <option value="tak">Tak</option>
               <option value="trang">Trang</option>
               <option value="trat">Trat</option>
               <option value="ubonratchathani">Ubon Ratchathani</option>
               <option value="udonthani">Udon Thani</option>
               <option value="uthaithani">Uthai Thani</option>
               <option value="uttaradit">Uttaradit</option>
               <option value="yala">Yala</option>
               <option value="yasothon">Yasothon</option>
             </select>	&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default" >Submit</button>&nbsp;&nbsp;&nbsp;

          </form>


         <!-- Page Content -->
         <div class="container">

             <hr class="featurette-divider" id="about" >

             <!-- First Featurette -->
             <div class="featurette" >
                 <img class="featurette-image img-circle img-responsive pull-right" src="https://pbs.twimg.com/profile_images/720298646630084608/wb7LSoAc.jpg">
                 <h2 class="featurette-heading">Current weather
                     <span class="text-muted">from openweathermap</span>
                 </h2>
                 <p class="lead">Using openweathermap's API, We can access your area's current weather conditions such as percentage of humidity, temperature, sunset times etc. and predict whether you should do your laundry or not! </p>
             </div>

             <hr class="featurette-divider" id="mechanisms">

             <!-- Second Featurette -->
             <div class="featurette" >
                 <img class="featurette-image img-circle img-responsive pull-left" src="http://www.allyke.com/wp-content/uploads/2016/06/tech-machinelearning.png">
                 <h2 class="featurette-heading"> Get the answer from
                     <span class="text-muted"> a decision tree.</span>
                 </h2>
                 <p class="lead">Building the optimum decision tree (by looking at the infomation gain) from training datesets allows us to construct a model that gives the YES/NO answer regarding whether or not you should do your laundry. </p>
             </div>

             <hr class="featurette-divider" id="contact">

             <!-- Third Featurette -->
             <div class="featurette" >
                 <img class="featurette-image img-circle img-responsive pull-right" src="http://fitpastors.com/wp-content/themes/fitpastors/images/staff-wellness.png">
                 <h2 class="featurette-heading">This project would
                     <span class="text-muted">not have been possible without</span>
                 </h2>
                 <p class="lead">Asst.Prof. Dr. SUKREE SINTHUPINYO, the teacher who taught us the most</p>
                 <p class="lead">and, of course, the team including 5630648621, 563xxxxxxx and 563xxxxxxx.</p>

             </div>

             <hr class="featurette-divider">

             <!-- Footer -->
             <footer>
                 <div class="row">
                     <div class="col-lg-12">
                         <p>Copyright &copy; Laundry Seer 2016</p>
                     </div>
                 </div>
             </footer>

         </div>
         <!-- /.container -->



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
