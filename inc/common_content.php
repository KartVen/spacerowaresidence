<?php
function get_common_content($lang = null)
{
    $common_content = [
        'pl' => [
            'hq_title' => 'SIEDZIBA FIRMY',
            'street' => 'ul.',
            'country' => 'Polska',
            'attention' => 'UWAGA',
            'legal_info' => 'Informacje zawarte w materiałach reklamowych Osiedle Spacerowe, nie stanowią oferty handlowej w
                    rozumieniu przepisów Kodeksu Cywilnego.'
        ],
        'es' => [
            'hq_title' => 'SEDE DE LA EMPRESA',
            'street' => '',
            'country' => 'Polonia',
            'attention' => 'NOTA',
            'legal_info' => 'La información contenida en los materiales publicitarios „ Apartamientos Spacerowe” no constituye una oferta comercial en el sentido de las disposiciones del Código Civil.'
        ]
    ];

    switch ($lang) {
        case 'es':
            return $common_content['es'];
        default:
            return $common_content['pl'];
    }
}