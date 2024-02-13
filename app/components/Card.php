<?php
class Card
{
  static function get($img_src = "", $card_title = "", $card_content = "")
  {
    return <<<CARD
        <div class="card my-3" style="width: 18rem;">
  <img src="$img_src" class="card-img-top" alt="..." style="height: 14rem;">
  <div class="card-body">
    <h5 class="card-title">$card_title</h5>
    <p class="card-text">$card_content</p>
    <div class="text-center"><a href="#" class="btn btn-primary">Go somewhere</a></div>
    
  </div>
</div> 
CARD;
  }
}
