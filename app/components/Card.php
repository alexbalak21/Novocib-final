<?php
class Card
{
  static function get($img_src = "app/static/img/catalogue/analysis.jpg", $card_title = "", $card_content = "")
  {
    return <<<CARD
    <div class="box text-center" >
        <img src="$img_src"/>
        <a href=""><h5>$card_title</h5></a>
        <p>$card_content</p>
        <div class="text-center my-4"><a href="#" class="btn btn-primary">Go to Page</a></div>
    </div>
CARD;
  }
}
?>

<style>
  .box {
    width: 20rem;
    box-shadow: 1px 0 1.04rem rgba(21, 21, 21, 0.1);
    margin-top: 6px;
    margin-bottom: 60px;

    h5 {
      margin-top: 20px;
      margin-bottom: 14px;
    }

    img {
      object-fit: cover;
      height: 10rem !important;
      width: 100%;
    }
  }

  .box a h5 {
    color: initial;
  }

  .box a {
    text-decoration: none;
  }

  .box a h5:hover {
    color: var(--novo-blue)
  }
</style>