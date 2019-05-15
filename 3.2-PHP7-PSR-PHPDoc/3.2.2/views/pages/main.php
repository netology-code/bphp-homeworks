<?php
/**
 * Main page with form
 * Uses for building page from an array of cafe menu objects
 *
 * @uses $data array with params
 * @var array $menu array with menu objects
 */

$menu = $data['menu'];
?>
<div class="row">
    <div class="col-12">
        <form action="<?php echo TASK_DOMAIN ?>createOrder.php" method="post" class="form322">
            <h3 class="form-group text-center"> Сформируйте заказ</h3>
            <?php
            foreach ($menu as $menuItem) {
                echo '<div class="form-group row">'
                    . '<div class="col-5">'
                    . $menuItem->name
                    . '</div>'
                    . '<div class="col-5">'
                    . '<input type="number"  min="0" value="0" class="form-control"'
                    . " name=\"{$menuItem->id}\">"
                    . '</div>'
                    . '<div class="col-2 text-right">✕ '
                    . number_format($menuItem->price, 2)
                    . ' ₽</div>'
                    . '</div>';
            }
            ?>
            <hr>
            <div class="form-group"> Обслуживание заказа:</div>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="form-group">
                        <input name="service" type="radio" id="service_1" value="1">
                        <label for="service_1">Доставка (200.00 ₽)</label>
                    </div>
                    <div class="form-group">
                        <input name="service" type="radio" id="service_2" value="2">
                        <label for="service_2">Самовывоз (скидка 10%)</label>
                    </div>
                    <div class="form-group">
                        <input name="service" type="radio" id="service_3" value="3" checked="checked">
                        <label for="service_3">Самообслуживание в кафе</label>
                    </div>
                    <div class="form-group">
                        <input name="service" type="radio" id="service_4" value="4">
                        <label for="service_4">Официант в кафе (чаевые 10%)</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-success btn-block" type="submit">Рассчитать</button>
        </form>
    </div>
</div>