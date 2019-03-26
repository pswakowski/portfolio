<?php
include_once 'IPDetails.php';
$details = new IPDetails();
$details->get_details();
$details->add_details();
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Przemysław Swakowski</title>
    <meta name="author" content="Przemysław Swakowski">
    <meta content="index, follow" name="robots"/>
    <link rel="shortcut icon" href="img/swakowski_eu.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
    <body>
        <?php if ($details->get_details()->country == 'PL') : ?>
            <header>
                <h2>Ahoj!</h2>
                <h1>Nazywam się <span>Przemysław Swakowski</span>.</h1>
            </header>
            <main>
                <p>Jestem absolwentem Uniwersytetu Technologiczno-Przyrodniczego w Bydgoszczy. Moją pracą dyplomową było stworzenie aplikacji wspomagającej zarządzanie oraz wizualizację zadań w firmie. Jestem otwarty na wszelkie propozycje współpracy. Jeśli chcesz dowiedzieć się więcej, odwiedź mój profil na <a href="https://www.linkedin.com/in/pswakowski/">LinkedIn</a>.</p>
                <p>Posiadam doświadczenie w pozycjonowaniu stron internetowych, natomiast aktualnie rozwijam się jako programista. Technologie, w których się poruszam to: python, PHP oraz .NET Core. Większość moich prac jest open source i można je znaleźć na portalu <a href="https://github.com/pswakowski">GitHub</a>.</p>
                <p>Poza programowaniem możesz mnie znaleźć chodzącego po <a href="https://www.instagram.com/explore/tags/slacklife/">slackline</a> oraz na boisku grającego w piłkę nożną dla <i class="fas fa-star"></i> KS Gwiazda Bydgoszcz.</p>
            </main>
            <footer>
                <span>Kontakt: <i class="fas fa-envelope"></i> pswakowski@gmail.com</span>
            </footer>
        <?php else : ?>
            <header>
                <h2>Hello!</h2>
                <h1>My name is <span>Przemysław Swakowski</span>.</h1>
            </header>
            <main>
                <p>I am a graduate of the University of Science and Technology in Bydgoszcz. My diploma thesis was to create an application supporting management and visualization of tasks in the company. I am open to any cooperation proposals. If you want to learn more, please visit my <a href="https://www.linkedin.com/in/pswakowski/">LinkedIn</a> profile.</p>
                <p>I have experience in SEO, but currently I develop as a programmer. Technologies which I use are: python, PHP and .NET Core. Most of my work is open source and publicly available on <a href="https://github.com/pswakowski">GitHub</a>.</p>
                <p>Outside of programming, you can find me walking on a <a href="https://www.instagram.com/explore/tags/slacklife/">slackline</a> and on the pitch playing football for <i class="fas fa-star"></i> KS Gwiazda Bydgoszcz.</p>
            </main>
            <footer>
                <span>Contact: <i class="fas fa-envelope"></i> pswakowski@gmail.com</span>
            </footer>
        <?php endif; ?>
    </body>
</html>