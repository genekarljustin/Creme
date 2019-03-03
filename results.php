<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Results</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    />
    <link rel="stylesheet" href="results.css" />
    <link rel="shortcut icon" href="../image/logo.jpg" />
  </head>
  <body>
    <div class="section">
      <h1>
        The crème team thanks you! You got <?php $correctAnswers = 0; if
        (($_POST['answers1']) == "1") { $correctAnswers++; } if
        (isset($_POST['answers2']) == "1") { $correctAnswers++; } if
        (($_POST['answers3']) == "950") { $correctAnswers++; } if
        (($_POST['answers4']) == "750") { $correctAnswers++; } if
        (($_POST['answers5']) == "290") { $correctAnswers++; } if
        (($_POST['answers6']) == "465") { $correctAnswers++; } if
        (($_POST['answers7']) == "630") { $correctAnswers++; } if
        (($_POST['answers8']) == "500") { $correctAnswers++; } if
        (($_POST['answers9']) == "600") { $correctAnswers++; } if
        (($_POST['answers10']) == "99") { $correctAnswers++; } echo
        "$correctAnswers"; ?> / 10 correct!

        <a href="../priceIsRight/priceIsRight.html" class="button"
          >Try again? Click here!</a
        >
      </h1>

      <!-- The video -->
      <video autoplay muted loop id="myVideo">
        <source src="../video/video.mp4" type="video/mp4" />
      </video>
    </div>

    <p id="footer">
      <span> Created by Seth Claur, Michelle Tran and Justin Arandia </span>
      <span> &nbsp;2018 &copy; crème Montréal </span> <br />
    </p>
  </body>
</html>
