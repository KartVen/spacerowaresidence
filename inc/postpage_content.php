<?php
function get_postpage_content($lang = null)
{

    $postpage_content = [
        'pl' => [
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
            ],
            'cross_section' => 'Elewacje, przekroje'
        ],
        'es' => [
            'cover' => [
                'Osiedle Spacerowe',
                'Casa No'
            ],
            'table' => [
                'prize_total' => 'Precio (total)',
                'prize_meter' => 'Precio (por metro)',
                'usable_area' => 'Superficie útil',
                'garden_area' => 'Superficie jardín',
                'corner' => 'Esquinera',
                'build_type' => 'Tipo',
                'build_height' => 'La altura del apartamento',
                'status' => 'Estado',
                'occupied' => 'vendido',
                'reservation' => 'reservado',
                'free' => 'libre'
            ],
            'cross_section' => 'Fachadas, secciones transversales'
        ]
    ];

    switch ($lang) {
        case 'es':
            return $postpage_content['es'];
        default:
            return $postpage_content['pl'];
    }
}
