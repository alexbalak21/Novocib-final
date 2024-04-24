<?php
class Card
{
  static function get($img_src = "app/static/img/catalogue/analysis.jpg", $card_title = "", $card_content = "", $btn_link = "", $alt = "")
  {
    return <<<CARD
    <div class="box" >
        <img src="$img_src" alt="$alt"/>
        <div class="text-center"><a href="$btn_link">$card_title</a></div>
        <div class="card-content">$card_content</div>
        <div class="text-center my-4"><a href="$btn_link" class="btn btn-primary" >Go to Page</a></div>
    </div>
CARD;
  }
}
