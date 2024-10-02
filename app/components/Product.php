<?php
class Product
{
    static function gen(string $product_title)
    {
        $product = get_product_by_title($product_title);
        ob_start(); ?>
        <table class="table product mb-2">
            <thead>
                <tr>
                    <th>#REF</th>
                    <th class="text-center">SIZE</th>
                    <th class="text-center">PRICE</th>
                    <th class="pe-5"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $product['reference'] ?></td>
                    <td class="text-center"><strong><?= $product['size'] ?></strong></td>
                    <td class="price text-center"><?= $product['price'] . ".00" ?></td>
                    <td class="text-end pe-3">
                        <a class="btn btn-primary" href="/inquiry?ref=<?= $product['reference'] ?>&product=<?= $product['title'] ?>&volume=<?= $product['size'] ?>">
                            Inquiry
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="text-muted text-center">
            <em>Updated on <?= date('d F Y', strtotime($product['updated_on'])) ?>.</em>
            <br />
        </p>

<?php return ob_get_clean();
    }
} ?>