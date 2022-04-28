<?php
function get_postpage_content()
{

    $postpage_content = [
        'cover' => [
            'Osiedle Spacerowe',
            'Dom Nr'
        ],
        'table' => [
            'prize_total' => 'Cena (całkowita)',
            'prize_meter' => 'Cena (za metr)',
            'usable_area' => 'Powierzchnia użytkowa',
            'garden_area' => 'Powierzchnia ogródka',
            'corner' => 'Narożny',
            'build_type' => 'Typ',
            'build_height' => 'Wysokość mieszkania',
            'status' => 'Status',
            'occupied' => 'sprzedany',
            'reservation' => 'zarezerwowany',
            'free' => 'wolne'
        ]
    ];


    return $postpage_content;
}
