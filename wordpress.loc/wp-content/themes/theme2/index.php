<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&amp;subset=latin-ext" rel="stylesheet">
  
  <?php wp_head(); ?>
</head>
<body>

  <header class="header">
   <div class="header__block">
    <div class="header__wrapper">
      <a href="" class="header__logo">MatchUp</a>
      <ul class="header__nav">
        <li class="nav__item"><a href="#">Student</a></li>
        <li class="nav__item"><a href="#">Pracodawca</a></li>
        <li class="nav__item"><a href="#">Kontakt</a></li>
      </ul>
    </div>
    <div class="header__container">
      <p class="header__motto">Matchup to platforma łącząca pracowników i pracodawców. Za pomocą naszego systemu dopasowania znajdziesz ofertę pracy, która spełnia twoje wymagania. </p>
      <a href="https://landbot.io/u/H-92183-AB8F3APMG9Y0JDKH/index.html" class="header__link button">Start kariery</a>
      </div>
    </div>
  </header>

  <main>
    <div class="main__wrapper">
      <h1 class="main__headline">Jak to działa?</h1>
      <div class="student__wrapper">
        <div class="student__block">
          <div class="student-img__container">
            <img src="<?php bloginfo('template_url'); ?> /img/8.png" alt="" class="student__img" width="708" height="746">
          </div>
          <div class="student-text__container">
            <p class="student__text student__for">Dla studenta</p>
            <p class="student__text student__text--begin">Kliknij „rozpocznij swoją karierę” </p>
            <p class="student__text">Porozmawiaj z naszym botem</p>
            <p class="student__text student__text--third">Czekaj na dopasowaną zgodnie z <br> formularzem ofertę pracy</p>
            <p class="student__text student__text--end">Umów się na spotkanie rekrutacyjne</p>
            <a href="https://landbot.io/u/H-92183-AB8F3APMG9Y0JDKH/index.html" class="student__button button">Start kariery</a>
          </div>
        </div>

        <div class="student__advantages">
         <div class="student-advantages__container">
          <div class="advantages__block advantages__block--student">
            <img src="<?php bloginfo('template_url'); ?> /img/c1.png" alt="" class="advantages__image" width="160" height="100"/>
            <p class="advantages__item">Czas</p>
            <p class="advantages__text">Nie musisz spędzać czasu na portalach pracy i sieciach społecznościowych- jednorazowy upload CV zapewni ci dostęp do wielu ofert pracy</p>
          </div>

          <div class="advantages__block advantages__block--student">
            <img src="<?php bloginfo('template_url'); ?> /img/c2.png" alt="" class="advantages__image" width="160" height="100"/>
            <p class="advantages__item">Dopasowana oferta</p>
            <p class="advantages__text"> Otrzymujesz ofertę, która jest w pełni zgodna z określonymi przez ciebie kryteriami. </p>
          </div>

          <div class="advantages__block advantages__block--student">
            <img src="<?php bloginfo('template_url'); ?> /img/c4.png" alt="" class="advantages__image" width="160" height="100"/>
            <p class="advantages__item">Bezpieczeństwo</p>
            <p class="advantages__text">Matchup korzysta z chronionej bazy danych, dzięki temu twoje dane osobowe nie zostaną wykorzystane w celach innych niż proces rekrutacyjny przeprowadzany przez MatchUp. </p>
          </div>
        </div>
        </div>
      </div>

       <div class="life__container">
         <div class="life__wrapper">
           <h2 class="life__headline">Zmień swoje życie</h2>
           <a href="bot.html" class="life__button button">Start kariery</a>
         </div>
         <div class="life-container__img">
           <img src="<?php bloginfo('template_url'); ?> /img/5.png" alt="" class="life__img" width="693" height="524" />
         </div>
       </div>

        <div class="emp__wrapper">
          <div class="emp__block">
           <div class="emp-text__container">
             <p class="emp__text emp__for">Dla pracodawcy</p>
              <p class="emp__text emp__text--begin">Skontaktuj się z nami przez formularz zgłoszeniowy zamieszczony poniżej </p>
              <p class="emp__text">Określ swoje kryteria wobec kandydata</p>
              <p class="emp__text">Uzyskaj dostęp do wyselekcjonowanych profili kandydatów </p>
              <p class="emp__text emp__text--end">Umów się na spotkanie rekrutacyjne</p>
              <a href="#" class="emp__button button">Kontakt do nas</a>
            </div>
            <div class="emp-img__container">
              <img src="<?php bloginfo('template_url'); ?> /img/4.png" alt="" class="emp__img" width="520" height="544" />
            </div>
          </div>

          <div class="emp__advantages">
            <div class="emp-advantages__container">
              <div class="advantages__block advantages__block--emp">
                <img src="<?php bloginfo('template_url'); ?> /img/c5.png" alt="" class="advantages__image" width="160" height="100"/>
                <p class="advantages__item">Czas</p>
                <p class="advantages__text">za pomocą MatchUp pomijasz wstępną selekcję kandydatów.</p>
              </div>

              <div class="advantages__block advantages__block--emp">
                <img src="<?php bloginfo('template_url'); ?> /img/c7.png" alt="" class="advantages__image" width="160" height="100"/>
                <p class="advantages__item">Dokładność</p>
                <p class="advantages__text">Otrzymane profile w 100% spełniają wcześniej określone kryteria </p>
              </div>

              <div class="advantages__block advantages__block--emp">
                <img src="<?php bloginfo('template_url'); ?> /img/c8.png" alt="" class="advantages__image" width="160" height="100"/>
                <p class="advantages__item">Środowisko</p>
                <p class="advantages__text">MatchUp współpracuje z największymi uniwersytetami w Polsce co pozwała na dostęp do najlepszych kandydatów</p>
              </div>
            </div>
          </div>
        </div>
        <div class="form__container">
          <div class="form-img__container">
            <img src="<?php bloginfo('template_url'); ?> /img/2.png" alt="" class="form__img" width="473" height="525">
          </div>
          <div class="form__wrapper">
            <form action="post" class="form">
              <label class="form__label">
                <p class="form__text">Name </p><input type="text" class="form__name" />
              </label>

              <label class="form__label">
                <p class="form__text">Email Address </p><input type="text" class="form__email" />
              </label>

              <label class="form__label">
                <p class="form__text">Comment </p><textarea  cols="30" rows="10" class="form__textarea"></textarea>
              </label>
            </form>
            <input type="submit" value="Wyślij" class="form__input button"/>
          </div>
        </div>
        </div>

  </main>

  <div class="footer">
    <div class="footer__container">
      <p class="footer__copyright">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, quia!</p>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
