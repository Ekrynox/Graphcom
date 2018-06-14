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

<?php
file_put_contents("demandes/". time() .".txt", json_encode($_POST));
?>

</div>
