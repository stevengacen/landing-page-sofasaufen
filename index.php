<!DOCTYPE html>
<html lang="de">

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
            <li><a class="link" href="#section2">Ziele</a></li>
            <div class="arrow-down"></div>
          </div>
          <div class="linkbox">
            <li><a class="link" href="#section4">mitmachen</a></li>
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
          <a class="linkb" href="#section1">START</a>
          <a class="linkb" href="#section2">ZIELE</a>
          <a class="linkb" href="#section4">MITMACHEN</a>
          <a class="linkb" href="#section5">FAQ</a>
      </div>



    </nav>
    <div class="social">
      <!-- socialmedia iconbox -->
      <ul class="ulicon">
        <!-- schwarze icons (standard) -->
        <li> <a href="https://www.instagram.com"><img src="images/social_media_icons/insta.png" class="icons" alt="instagram"></a></li>
        <li> <a href="https://www.twitter.com"><img src="images/social_media_icons/twitter.png" class="icons" alt="twitter"></a></li>
        <li> <a href="https://discord.gg/HUJQFQ"><img src="images/social_media_icons/discord2.png" class="icons" alt="discord"></a></li>
      </ul>
      <ul class="ulicon2">
        <!-- weiße icons (hovermodus) -->
        <li> <img src="images/social_media_icons/insta_white.png" class="icons_white" alt=""></li> <!-- kein alternativ Text da bei schwarzen icons schon vorhanden -->
        <li> <img src="images/social_media_icons/twitter_white.png" class="icons_white" alt=""></li>
        <li> <img src="images/social_media_icons/discord2_white.png" class="icons_white" alt=""></li>
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
            <button type="prev" name="prev" id="prev" onclick="changePrev()">⮨</button> <!-- onclick verschieben in javascript -->
            <button type="next" name="next" id="next" onclick="changeNext()">⮩</button>
            <img id="slide" name="slide" />
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
            <h2>Ziele</h2>
            <p class="textabschnitt2">
              Mit #sofasaufen versuchen Wir Sicherheit aber auch das alltägliche
              Leben ein Stück weit wieder zurück zu bringen. <br>
              In Zeiten von Corona raus zugehen ist unsicher für Dich und deine Mitmenschen <br>
              Aber auf Spieleabende, Bartouren, Partys und weiteres zu verzichten raubt uns vielleicht
              irgendwann den Verstand. <br>
            </p>
            <h3>Was also tun fragst du dich?</h3>

            <p class="textabschnitt2">
              Mach mit und sei ein Teil einer stetig wachsenden Community! <br>
              Bei uns auf dem Discord kannst du dich mit Freunden virtuell treffen und social drinking
              neu erleben!. <br><br>
            </p>
            <input class="submit" type="button" onclick="location.href='#section4';" value="Mach mit!" />

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
            <h2>Dein #sofasaufen Moment</h2>
            <p class="textabschnitt">
              Seid ein teil unserer bewegung und sendet uns eure coolsten #sofasaufen Momente zu.
              ladet hier einfach Bilder hoch wie ihr mit euren Freunden social drinking auf unserem Discord genießt.
            </p>
            <br class="abstand">

            <!-- FORMULAR FILE UPLOAD -->
            <form action="index.php" method="post" enctype="multipart/form-data">
              <div class="textfields">
                <div class="nameboxes">
                  <label for="vorn">Vorname</label>
                  <input type="text" name="vorn" id="vorn" placeholder=" Max">
                </div>
                <div class="nameboxes">
                  <label for="nachn">Nachname</label>
                  <input type="text" name="nachn" id="nachn" placeholder=" Mustermann">
                </div>
              </div>
              <label for="email">E-Mail Adresse</label>
              <input type="email" name="email" class="email" placeholder=" placeholder@mail.com">
              <div class="subfile">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Bild hochladen" name="submit" class="submit">
              </div>
            </form>
            <br>

            <div class="join">
              <h2>Kommt auf unseren Discord Server</h2>
              <p class="textabschnitt">
                Ihr seid noch kein Teil unserer Discord Community? Na dann wirds aber Zeit! <br class="abstand">
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
              <p class="textabschnitt">Hier werden die am häufig gestelltesten Fragen beantwortet.</p>

              <button class="accordion">Wie kann ich mitmachen?</button> <!-- Frage -->
              <div class="accordion-content">
                <p>
                  Komm auf unseren Discord, lade deine Freunde ein und schnappt euch alle ein Getränk eurer Wahl! <br>
                  Hier der Link zu unserem Discord: <a href="https://discord.gg/HUJQFQ">#sofasaufen auf Discord</a> 
                </p>
              </div>

              <button class="accordion">Kann man euch unterstützen?</button> <!-- Frage -->
              <div class="accordion-content">
                <p>
                  Du unterstützt uns am besten wenn du möglichst vielen deiner Freunde von uns erzählst. <br>
                  Darüber hinaus kannst du uns deine coolsten #sofasaufen-Momente zuschicken oder einfach unseren hashtag auf social Media verbreiten<br>
                  Je Größer unsere Initiative #sofasaufen wird, desto sichere bleiben Wir alle!
                </p>
              </div>

              <button class="accordion">Ist die Teilnahme kostenpflichtig?</button> <!-- Frage -->
              <div class="accordion-content">
                <p>
                  Du kannst völlig kostenfrei unserem Discor-Server beitreten, da Discord keine kostenpflichtige Software ist. <br>
                  Auch unseren hashtag auf social Media zu verbreiten ist kostenlos. <br>
                  Selbst ein cooles Bild von dir und deinen Freunden zu machen und uns zuschicken kostet dich höchstens 3 Klicks.
                </p>
              </div>

              <button class="accordion">Du hast noch Fragen?</button> <!-- Frage -->
              <div class="accordion-content">
                <!-- Formular um Frage zu stellen -->
                <form id="q_area_form" action="index.php" method="post">
                  <div class="q_area">
                    <label for="email_text">Deine Frage:</label>
                    <textarea id="textarea" name="textarea" placeholder=" Stell uns hier deine Fragen..."></textarea><br>
                    <label for="email_text">E-Mail Adresse:</label>
                    <div class="q_area2">
                      <input type="email" name="email_text" class="email" placeholder=" placeholder@mail.com">
                      <input type="submit" class="submit" name="submit_text" value="senden" />
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
        bald steht hier was cooles <br>
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
    $errorstr1 = "-Es wurde keine gültige E-Mail Adresse angegeben.";
    $errorstr2 = "-Es wurde keine Frage gestellt.";

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
      echo "<script> alert('Deine Frage wurde an uns versendet')</script>";
    } else {
      $errorsStr = implode("\\n ", $errors);
      echo "<script> alert('HOPPLA! - Das hat nicht geklappt \\nÜberprüfe folgende Fehlerquellen:{$errorsStr}'); window.location.href = 'index.php#section5' </script>";
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
    $errorstr1 = "-Die Datei überschreitet eine Größe von 500 kilobyte.";
    $errorstr2 = "-Die Datei entspricht keines der folgenden Formate: JPG, JPEG, PNG & GIF.";
    $errorstr3 = "-Es wurde kein Nachname angegeben.";
    $errorstr4 = "-Es wurde kein Vorname angegeben.";
    $errorstr5 = "-Es wurde keine gültige E-Mail Adresse angegeben.";


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
      echo "<script> alert('GLÜCKWUNSCH! \\nDein persönlicher #sofasaufen Moment wurde erfolgreich hochgeladen! \\n" . basename($_FILES["fileToUpload"]["name"]) . "')</script>";
    } else {
      $errorsStr = implode("\\n ", $errors);
      echo "<script> alert('HOPPLA! - Das hat nicht geklappt \\nÜberprüfe folgende Fehlerquellen:{$errorsStr}'); window.location.href = 'index.php#section4' </script>";
    }
  }
  ?>


  <!-- JavaScripts -->
  <script type="text/javascript" src="accordion.js"></script> <!-- Script for Akkordion-Menü (FAQ) -->
  <script type="text/javascript" src="burger.js"></script> <!-- Script for Akkordion-Menü (FAQ) -->
  <script type="text/javascript" src="slide.js"></script> <!-- Script for Slideshow -->

</body>

</html>