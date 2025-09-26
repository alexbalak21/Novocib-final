<?php
class Products
{
    static function gen(string $product_title)
    {
        $products = find_all_products_by_title($product_title);

        // Find the most recent update date
        $latestDate = null;
        foreach ($products as $product) {
            if (!empty($product['updated_on'])) {
                $currentDate = strtotime($product['updated_on']);
                if ($latestDate === null || $currentDate > $latestDate) {
                    $latestDate = $currentDate;
                }
            }
        }

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
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td class="d-none d-md-table-cell"><?= "#" . $product['reference'] ?></td>
                            <td class="text-center"><?= $product['title'] ?><br><?= $product['size'] ?></td>
                            <td class="text-center d-none d-md-table-cell"><?= $product['price'] . ".00 €" ?></td>
                            <td class="text-end pe-3">
                                <div class="d-block d-md-none text-end mb-1 fw-bold">
                                    <?= $product['price'] . ".00 €" ?>
                                </div>
                                <a class="btn btn-primary"
                                    href="/inquiry?ref=<?= $product['reference'] ?>&amp;price=<?= $product['price'] ?>&amp;product=<?= urlencode($product['title']) ?>&amp;volume=<?= $product['size'] ?>">
                                    Inquiry <i class="fa-solid fa-comment"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php if ($latestDate): ?>
            <p class="text-muted text-center">
                <em>Last updated on : <?= date('F jS, Y', $latestDate) ?>.</em>
                <br />
            </p>
        <?php endif; ?>
<?php return ob_get_clean();
    }
}
?>