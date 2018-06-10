<!-- Wide card with share menu button -->
<style>
  .demo-card-wide.mdl-card {
    width: 100%;
  }

  .demo-card-wide > .mdl-card__title {
    padding-top: 50%;
    background: url('asset/img/welcome_card.jpg') center / cover;
  }

  .demo-card-wide > .mdl-card__menu {
    color: #fff;
  }
</style>

<div class="mdl-cell mdl-grid mdl-cell--8-col">

<div class="mdl-cell mdl-cell--6-col">
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
    </div>
    <div class="mdl-card__supporting-text">
      <p>
        <b>« Rapide, efficace, originale »</b><br />
        GraphCommunity est un groupe de 11 Esiearques dont l’esprit déborde de créativité pour des conceptions graphiques.<br />
        Nous vous proposons nos services pour créer des outils de communication (affiches, flyers, livrets, logos).
      </p>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple" href="index.php?page=formulaire">
        Mon affiche
        <span class="mdl-button__ripple-container">
          <span class="mdl-ripple">
          </span>
        </span>
      </a>
    </div>
    <div class="mdl-card__menu">
      <button class="mdl-button mdl-button--icon mdl-js-button" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FGraphCommunity.ESIEA%2F&amp;src=sdkprepars', '_blank')">
        <i class="material-icons">share</i>
        <span class="mdl-button__ripple-container">
          <span class="mdl-ripple is-animating" style="width: 92.5097px; height: 92.5097px; transform: translate(-50%, -50%) translate(12px, 18px);">
          </span>
        </span>
      </button>
    </div>
  </div>
</div>



<?php
  $files = scandir('affiches', 1);
  foreach($files as $file) {
    if(is_file('affiches/'. $file)) {
      if(pathinfo($file, PATHINFO_EXTENSION) != 'txt') {
        printf('<div class="mdl-cell mdl-cell--6-col">
          <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title" style="background: url(\'affiches/'. $file .'\') center / contain; background-repeat: no-repeat;">
            </div>
            <div class="mdl-card__supporting-text">
              <p>
                <b>'. $file .'</b>');

        if (file_exists('affiches/'. pathinfo($file, PATHINFO_FILENAME) .'.txt')) {
          printf('<br \>'. file_get_contents('affiches/'. pathinfo($file, PATHINFO_FILENAME) .'.txt'));
        }
        printf('
              </p>
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple" href="index.php?page=formulaire">
                Je veux une Affiche
                <span class="mdl-button__ripple-container">
                  <span class="mdl-ripple">
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>');
      }
    }
  }
?>


</div>
