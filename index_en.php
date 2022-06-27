<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> <!-- main font -->

  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/sofasaufen_visuals/logologo.png"> <!-- FAV ICON -->

  <title>#sofasaufen</title>

</head>


<body>

  <!-- HEADER ----------------------------------------------------------------------------------------------------------------------------------->

  <header>
    <div class="logo-container">
      <a href="#section1"><img src="images/sofasaufen_visuals/sofasaufen_logov3.1_alpha3.png" class="logo" alt="logo"></a>
    </div>

    <!-- Navigation -->
    <nav id="myNav">



      <div class="menu">
        <ul class="navlinks">
          <!-- flexbox -->
          <div class="linkbox">
            <li><a class="link" href="#section1">Start</a></li>
            <div class="arrow-down"></div> <!-- Pfeil über jedem Link -->
          </div>
          <div class="linkbox">
            <li><a class="link" href="#section2">Goals</a></li>
            <div class="arrow-down"></div>
          </div>
          <div class="linkbox">
            <li><a class="link" href="#section4">participate</a></li>
            <div class="arrow-down"></div>
          </div>
          <div class="linkbox">
            <li><a class="link" href="#section5">FAQ</a></li>
            <div class="arrow-down"></div>
          </div>
        </ul>
      </div>


      <label id="burger" for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle" />


      <div id="burgermenu" class="burgermenu" style="display: none;">
          <a class="linkb" href="#section1"><span class="arrowright"></span> START </a>
          <a class="linkb" href="#section2"><span class="arrowright"></span> GOALS </a>
          <a class="linkb" href="#section4"><span class="arrowright"></span> PARTICIPATE </a>
          <a class="linkb" href="#section5"><span class="arrowright"></span> FAQ </a>
          <a class="linkb" href="https://www.instagram.com"><span class="arrowright"></span> INSTAGRAM </a>
          <a class="linkb" href="https://www.twitter.com"><span class="arrowright"></span> TWITTER </a>
          <a class="linkb" href="https://discord.gg/HUJQFQ"><span class="arrowright"></span> DISCORD </a>
          <a class="linkb" href="index.php"><span class="arrowright"></span> DE </a>
          <a class="linkb" href="index_en.php"><span class="arrowright"></span> EN </a>
      </div>



    </nav>
    <div class="social">
      <!-- socialmedia iconbox -->
      <ul class="ulicon">
        <!-- schwarze icons (standard) -->
        <li> <a href="https://www.instagram.com"><img src="images/social_media_icons/insta.png" class="icons" alt="instagram"></a></li>
        <li> <a href="https://www.twitter.com"><img src="images/social_media_icons/twitter.png" class="icons" alt="twitter"></a></li>
        <li> <a href="https://discord.gg/HUJQFQ"><img src="images/social_media_icons/discord2.png" class="icons" alt="discord"></a></li>
        <li> <a href="index.php"><img src="images/icons/ger.png" class="icons" alt="ger"></a></li>
        <li> <a href="index_en.php"><img src="images/icons/eng.png" class="icons" alt="eng"></a></li>
      </ul>
      <ul class="ulicon2">
        <!-- weiße icons (hovermodus) -->
        <li> <img src="images/social_media_icons/insta_white.png" class="icons_white" alt=""></li> <!-- kein alternativ Text da bei schwarzen icons schon vorhanden -->
        <li> <img src="images/social_media_icons/twitter_white.png" class="icons_white" alt=""></li>
        <li> <img src="images/social_media_icons/discord2_white.png" class="icons_white" alt=""></li>
        <li> <img src="images/icons/ger.png" class="icons_white" alt="de"></li>
        <li> <img src="images/icons/eng.png" class="icons_white" alt="en"></li>
      </ul>
    </div>
  </header>

  <!-- MAIN PART -->
  <main>

    <!-- SECTION 1 -->
    <section id="section1">
      <div class="page1">
        <div class="content-box-page1">
          <div class="slider-container">
            <button type="prev" name="prev" id="prev" onclick="changePrev()"><i class="fa fa-angle-double-left"></i></button> <!-- onclick verschieben in javascript -->
            <button type="next" name="next" id="next" onclick="changeNext()"><i class="fa fa-angle-double-right"></i></button>
            <div class=imagesizer>
            <img id="slide" name="slide" />
</div>
            <!-- php Abschnitt -->
            <?php                                           // Programm zum automatischem Erstellen von radiobuttons.
            $files = scandir('images/slideshow');           // Bezieht sich auf die Bilder im Ordner "images/slideshow"
            $files_count = count($files) - 2;               // Zählt dort die Bilder, minus zwei wegen "." und ".."
            echo "<div class='rbox'>";                      // erstellt die Box in der die radiobuttons drin sind.
            for ($i = 0; $i <= $files_count - 1; $i++) {    // erstellt in einer Schleife die Buttons mit allen Attributen
              echo "<input type='radio' name='rgroup' id='$i' class='r' value=$i onchange='switchpic()'>
              <label for='$i'>
              <span class='radio'></span>
              </label>";
            }
            echo "</div>";
            ?>

          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 2 -->
    <section id="section2">
      <div class="page2">
        <div class="content-box">



          <div class="textbox">
            <h2>Goals</h2>
            <p class="textabschnitt2">
              With #sofasaufen we try to gain back not only security but also our daily habits <br>
              At the moment for everyone it is not save to go out <br>
              Avoiding game nights, pub crawlings, partys and many other activities might let us lose our minds soon. <br>
            </p>
            <h3>What can I do?</h3>

            <p class="textabschnitt2">
              Join our steadily growing community! <br>
              On the official #sofasaufen discord server, you can meet your close ones again and experience social drinking in a new way!
              <br><br>
            </p>
            <input class="submit" type="button" onclick="location.href='#section4';" value="Join!" />

          </div>

          <div class="textboxplaceholder2">
            <!-- textbox um Seite zu teilen -->
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 4 -->
    <section id="section4">
      <div class="page4">
        <div class="content-box">

          <div class="textboxplaceholder">
            <!-- textbox um Seite zu teilen -->
          </div>

          <div class="textbox2">
            <h2>Your #sofasaufen experience</h2>
            <p class="textabschnitt">
              Be a part of the movement and send us your personal #sofasaufen experience.
              Upload your pictures and let everyone see how much you enjoy social drinking on our discord server.
            </p>
            <br class="abstand">

            <!-- FORMULAR FILE UPLOAD -->
            <form action="index_en.php" method="post" enctype="multipart/form-data">
              <div class="textfields">
                <div class="nameboxes">
                  <label for="vorn">first name</label>
                  <input type="text" name="vorn" id="vorn" placeholder=" Max">
                </div>
                <div class="nameboxes">
                  <label for="nachn">name</label>
                  <input type="text" name="nachn" id="nachn" placeholder=" Mustermann">
                </div>
              </div>
              <label for="email">e-mail address</label>
              <input type="email" name="email" class="email" placeholder=" placeholder@mail.com">
              <div class="subfile">
                <input type="file" value="Select file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload picture" name="submit" class="submit">
              </div>
            </form>
            <br>

            <div class="join">
              <h2>Join our discord server</h2>
              <p class="textabschnitt">
                Still not part of the discord community? Then join now! <br class="abstand">
              </p>
              <a href="https://discord.gg/HUJQFQ">JOIN!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 5 -->
    <section id="section5">
      <div class="page5">
        <div class="content-box">
          <div class="textbox">

            <!-- Akkordion -->
            <div class="container">
              <!-- Container -->
              <h2>FAQ</h2>
              <p class="textabschnitt">Frequently asked questions will be answered here.</p>

              <button class="accordion">How can i participate?</button> <!-- Frage -->
              <div class="accordion-content">
                <p>
                  Join the discord, invite your friends and grab your drinks! <br>
                  Click the link for the discord: <a href="https://discord.gg/HUJQFQ">#sofasaufen on discord</a> 
                </p>
              </div>

              <button class="accordion">Can I support you somehow?</button> <!-- Frage -->
              <div class="accordion-content">
                <p>
                  Best way too support us is to tell everyone about it. <br>
                  Furthermore you can send us your coolest pictures about #sofasaufen and share the hashtag on social media.<br>
                  The bigger the Initiative #sofasaufen the saver will be the world!
                </p>
              </div>

              <button class="accordion">Is it free to join?</button> <!-- Frage -->
              <div class="accordion-content">
                <p>
                  It is absolutely free to join our server. It is also free to download discord. <br>
                  Sharing the social media hashtag is free too. <br>
                  Sending your coolest pictures about #sofasaufen might cost you a few clicks but not a single penny.
                </p>
              </div>

              <button class="accordion">Your question was not answered?</button> <!-- Frage -->
              <div class="accordion-content">
                <!-- Formular um Frage zu stellen -->
                <form id="q_area_form" action="index_en.php" method="post">
                  <div class="q_area">
                    <label for="email_text">Your question:</label>
                    <textarea id="textarea" name="textarea" placeholder=" Ask your question here ..."></textarea><br>
                    <label for="email_text">e-mail address:</label>
                    <div class="q_area2">
                      <input type="email" name="email_text" class="email" placeholder=" placeholder@mail.com">
                      <input type="submit" class="submit" name="submit_text" value="send" />
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>

          <div class="textboxplaceholder2"></div> <!-- textbox um Seite zu teilen -->
        </div>

      </div>
    </section>

  </main>
  <!-- END MAIN PART -->

  <!-- "Zurück hoch-" arrow -->
  <a href="#section1"><img src="images/icons/arrowicon.png" id="backicon" alt="up"></a>

  <!-- FOOTER -->
  <footer>
    <div class=footer>
      <div class="foot_text"> 
        Impressum <br>
        All rights reserved <br>
        Soon this text will be great again <br>
      </div>
      <div class="foot_img">
        <img src="images\sofasaufen_visuals\footerlogo2.png" alt="#sofasaufen_black">
      </div>
    </div>
  </footer>


  <!-- PHP Section -->

  <!-- Text Area to e-mail script -->
  <?php
  if (isset($_POST['submit_text'])) {
    $to = 'gacenbilersteven1@web.de';                                     // An wen..
    $from = isset($_POST['email_text']) ? $_POST['email_text'] : "";      // Von wem..
    $msg = isset($_POST['textarea']) ? $_POST['textarea'] : "";           // Die Nachricht..
    $subject = 'FAQ Frage von ' . $from;                                  // Der Betreff..
    $counter = 0;                                                         // Zähler für Errors
    $sendOk = 1;                                                          // Status ob Versandt möglich ist
    $errors = array();                                                    // Fehler array um weitere Fehler einfach anzuhängen bzw zu entfernen

    // Fehlermeldungen als Variablen um sie geschickt einem array zu übergeben
    $errorstr1 = "-no valid e-mail address found.";
    $errorstr2 = "-no question found.";

    if (empty($from) || !filter_var($from, FILTER_VALIDATE_EMAIL)) {      // Prüfen ob Absender leer oder ungültig
      $errors[$counter] = $errorstr1;
      $counter++;
      $sendOk = 0;
    }
    if (empty($msg)) {                                                    // Prüfen ob Nachricht leer
      $errors[$counter] = $errorstr2;
      $counter++;
      $sendOk = 0;
    }

    if ($sendOk == 1) {                                                   // Sendestatus prüfen
      mail($to, $subject, $msg);
      echo "<script> alert('Your question was submit.')</script>";
    } else {
      $errorsStr = implode("\\n ", $errors);
      echo "<script> alert('Oops! - That did not work \\nCheck the following sources of error:\\n {$errorsStr}'); window.location.href = 'index_en.php#section5' </script>";
    }
  }
  ?>

  <!-- File Upload script -->
  <?php
  if (!empty($_FILES['fileToUpload'])) {      // Erstes If-Statement um keine Alerts beim neuladen einer Seite zu triggern.

    // Variable deklaration  
    $target_dir = "uploads/"; // Zielordner
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //Datei im Zielordner
    $nachname = isset($_POST['nachn']) ? $_POST['nachn'] : "";
    $vorname = isset($_POST['vorn']) ? $_POST['vorn'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";

    //Email an Betreiber von Gast (provisorisch) wie oben
    $to = 'gacenbilersteven1@web.de';
    $from = $email;
    $msg = $vorname . $nachname . ' hat folgenden #sofasaufen Moment zugesendet ' . basename($_FILES["fileToUpload"]["name"]);
    $subject = '#sofasaufen Moment von ' . $from;

    $uploadOk = 1; //Upload status -> 1=OK 0!=OK
    $sendOk = 1; //Sende status -> 1=OK 0!=OK
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $counter = 0; //Zählervariable um die Fehlermeldungen ins Array zu übertragen
    $errors = array(); // Error-array um weitere Fehlerquellen einfach einbinden zu können 

    // Fehlermeldungen als Variablen um sie geschickt einem array zu übergeben
    $errorstr1 = "-The file exceeds a size of 500 kilobyte.";
    $errorstr2 = "-The file does not correspond the following formats: JPG, JPEG, PNG & GIF.";
    $errorstr3 = "-No name was found.";
    $errorstr4 = "-No first name was found.";
    $errorstr5 = "-No valid e-mail address was found.";


    //Checkt die vom User einzutragenden Daten ob sie leer sind
    if (empty(trim($nachname))) {
      $errors[$counter] = $errorstr3;
      $counter++;
      $sendOk = 0;
    }

    if (empty(trim($vorname))) {
      $errors[$counter] = $errorstr4;
      $counter++;
      $sendOk = 0;
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[$counter] = $errorstr5;
      $counter++;
      $sendOk = 0;
    }

    // Checkt Dateigröße < 500kb
    if ($_FILES["fileToUpload"]["size"] > 5120000) {

      $errors[$counter] = $errorstr1;
      $counter++;
      $uploadOk = 0;
    }
    // checkt Dateiformat
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
    ) {
      $errors[$counter] = $errorstr2;
      $counter++;
      $uploadOk = 0;
    }
    // Lädt Datei ggf. hoch und gibt entsprechenden Alert
    if ($sendOk == 1 && $uploadOk == 1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      mail($to, $subject, $msg);
      echo "<script> alert('CONGRATS! \\nYour personal #sofasaufen experience was succesfully uploaded! \\n" . basename($_FILES["fileToUpload"]["name"]) . "')</script>";
    } else {
      $errorsStr = implode("\\n ", $errors);
      echo "<script> alert('Oops! - That did not work \\nCheck the following sources of error:\\n {$errorsStr}'); window.location.href = 'index_en.php#section4' </script>";
    }
  }
  ?>


  <!-- JavaScripts -->
  <script type="text/javascript" src="accordion.js"></script> <!-- Script for Akkordion-Menü (FAQ) -->
  <script type="text/javascript" src="burger.js"></script> <!-- Script for Akkordion-Menü (FAQ) -->
  <script type="text/javascript" src="slide.js"></script> <!-- Script for Slideshow -->

</body>

</html>