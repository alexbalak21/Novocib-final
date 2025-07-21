<?php
class Product
{
    static function gen(string $product_title, $url = "", $id = 0)
    {
        $product = get_product_by_title($product_title);
        if ($product_title === "" && $url !== "") $product = get_product_by_url($url);
        if ($product === null && $id !== 0) $product = get_product_by_id((int) $id);
        ob_start(); ?>
        <div class="table-responsive">
            <table class="table product mb-2">
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell">#REF</th>
                        <th class="text-center">SIZE</th>
                        <th class="text-center d-none d-md-table-cell">PRICE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="d-none d-md-table-cell"><?= "#" . $product['reference'] ?></td>
                        <td class="text-center"><?= $product['title'] ?><br><?= $product['size'] ?></td>
                        <td class="d-none d-md-table-cell text-center"><?= $product['price'] . ".00 €" ?></td>
                        <td class="text-end pe-3">
                            <div class="d-block d-md-none text-end mb-1 fw-bold">
                                <?= $product['price'] . ".00 €" ?>
                            </div>
                            <a class="btn btn-primary" href="/inquiry?ref=<?= $product['reference'] ?>&amp;price=<?= $product['price'] ?>&amp;product=<?= $product['title'] ?>&volume=<?= $product['size'] ?>">
                                Inquiry <i class="fa-solid fa-comment"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-muted text-center">
            <em>Updated on <?= date('F jS, Y', strtotime($product['updated_on'])) ?>.</em><br />
        </p>
<?php return ob_get_clean();
    }
}
