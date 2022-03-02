<!-- Con questo script si effettuerà il logout -->
<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Login -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Calcolo IMC </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Login" />
		<meta name="keywords" content="fitness" />
<!-- File .css external, messo nella repository css/style.css -->
	 <link rel="stylesheet" type="text/css" href="css/styles.css">
 </head>

<!-- METTERE IL LOGO UNA VOLTA PREPARATO SIA AL login SIA AL registration FORM -->

 <body style="
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-image: url(images/IMG.jpeg);
  background-size: cover;
  ">
  <div class="container">
    <div class="title">Logout</div>
    <div class="content">
      <form action="logout1.php" method='post'>

        <div class="user-details">

          <div class="input-box">
            <span class="details">Sei sicuro di effettuare il Logout?</span>
        <div class="button">
          <input type="submit" value="Logout">
        </div>
				<hr>
				<br>
        <div class="details" style="
        align-items: center; justify-content: center; display: flex;">
          <a href="index.php">
          Torna alla Home Principale!
          </a>
        </div>

      </form>
    </div>
  </div>

</body>
</html>
