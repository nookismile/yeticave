<?php

/**
 * Форматирует цену лота - разделяет пробелом разряды числа, добавляет знак рубля
 * @param integer $price Цена лота
 * @return string Как цена будет показываться в карточке
 */

function format_price($price) {
    $price = ceil($price);
    if ($price >= 1000) {
        $price = number_format($price, 0, '', ' ');
    }
    return "$price ₽";
}
