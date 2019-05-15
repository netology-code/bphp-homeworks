<?php function PoschitatSchet($a, $b)
{$nu = random_int(1000, 9999);$purch = "<div class=\"order322-line order322-title\">Счёт №$nu</div>";
$syMMa = 0;foreach ($a as $i) {$znach = $b[$i->id];if ($znach > 0) {$sum = $znach * $i->price;
$sum2 = number_format($i->price * $znach,2);$c =  number_format($i->price,2);
$purch .= "<div class=\"order322-line\"><div>$i->name</div><div>$znach * $c ₽ = $sum2 ₽</div></div>";
$syMMa += $sum;}}$se = (int)$b['service'];if($syMMa > 0){if($se === 2){$se1 = number_format($syMMa * 0.10,2);
$purch .= "<div class=\"order322-line\"><div>Скидка 10% (самовывоз)</div><div>- $se1 ₽</div></div>";
$syMMa = $syMMa - (float)$se1;} elseif ($se === 4){$se1 = number_format($syMMa * 0.10,2);
$purch .= "<div class=\"order322-line\"><div>Чаевые 10%</div><div>$se1 ₽</div></div>";
$syMMa = $syMMa + (float)$se1;} elseif ($se === 1){$se1 = number_format($syMMa * 0.10,2);
$purch .= "<div class=\"order322-line\"><div>Доставка</div><div>200.00 ₽</div></div>";
$syMMa = $syMMa + 200;}}else{$purch .= "<div class=\"order322-line\">Ничего не заказано</div>";}
$syMMa = number_format($syMMa,2);$purch .= "<div class=\"order322-total\"><div>Итого: $syMMa ₽</div></div>";return $purch;}