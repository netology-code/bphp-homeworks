<?php
/**
 * Order page with check
 * Uses for building page from string
 *
 * @uses $data array with params
 * @var string $order string with complete html-code
 */

$order = $data['order'];
?>

<div class="row">
    <div class="col-12">
            <div class="row">
                <div class="col-10 offset-1 order322">
                    <?php echo $order; ?>
                </div>
            </div>
    </div>
</div>