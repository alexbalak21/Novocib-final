<?php
class Card
{
  static function get($img_src = "app/img/catalogue/analysis.jpg", $card_title = "", $card_content = "", $btn_link = "", $alt = "")
  {
    ob_start(); ?>
    <div class="box">
      <a href="<?= $btn_link ?>"><img src="<?= $img_src ?>" <?= $alt ?>="<?= $alt ?>" title="Go to <?= $alt ?>" /></a>
      <div class="text-center"><a href="<?= $btn_link ?>"><?= $card_title ?></a></div>
      <div class="card-content"><?= $card_content ?></div>
      <div class="text-center my-4" title="Go to <?= $alt ?>"><a href="<?= $btn_link ?>" class="btn btn-primary">Go to Page</a></div>
    </div>
<?php return ob_get_clean();
  }
}
