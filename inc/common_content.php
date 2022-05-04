<?php
function get_common_content($lang = null)
{
    $common_content = [
        'pl' => [
            'details' => [
                'hq_title' => 'SIEDZIBA FIRMY',
                'street' => 'ul.',
                'country' => 'Polska',
                'attention' => 'UWAGA',
                'legal_info' => 'Informacje zawarte w materiałach reklamowych Osiedle Spacerowe, nie stanowią oferty handlowej w
                    rozumieniu przepisów Kodeksu Cywilnego.',
            ],
            'contact' => [
                'head' => 'Skontaktuj się z nami',
                'content' => 'Zastanawiasz się na kupnem domu, ale potrzebujesz dodatkowych informacji? <br/> Skontaktuj się z nami.',
                'data_admin' => 'Administratorem danych jest firma SPACEROWA RESIDENCE Sp. z o.o. Sp. komandytowa, ul. Ułańska 13, 52-213 Wrocław. Podanie danych jest dobrowolne, powyższe dane będą przetwarzane przez firmę SPACEROWA RESIDENCE Sp. z o.o. Sp. komandytowa, w celu przekazania informacji o ofercie handlowej (telefonicznie lub e-mailowo). Przysługuje Państwu prawo dostępu do treści swoich danych, ich poprawiania lub usunięcia. Wszelką korespondencję w sprawach związanych z przetwarzaniem danych osobowych, o którym mowa powyżej, należy kierować na adres: firmy SPACEROWA RESIDENCE Sp. z o.o. Sp. komandytowa, ul. Ułańska 13, 52-213 Wrocław z dopiskiem „Dane Osobowe”.',
            ],
        ],
        'es' => [
            'details' => [
                'hq_title' => 'SEDE DE LA EMPRESA',
                'street' => '',
                'country' => 'Polonia',
                'attention' => 'NOTA',
                'legal_info' => 'La información contenida en los materiales publicitarios „ Apartamientos Spacerowe” no constituye una oferta comercial en el sentido de las disposiciones del Código Civil.',
            ],
            'contact' => [
                'head' => 'Contáctenos',
                'content' => '¿Estás pensando en comprar una casa, pero necesitas más información? <br/> Contáctenos',
                'data_admin' => 'El responsable del tratamiento es la empresa SPACEROWA RESIDENCE Sp. z o. o. Sociedad comanditaria, ul. Ułańska 13, 52-213 Wrocław. La indicación de los datos es voluntaria, los datos arriba mencionados son tratados por la empresa SPACEROWA RESIDENCE Sp. z o. o. Sp. komandytowa para transmitir información sobre la oferta comercial (por teléfono o correo electrónico). Tiene derecho a acceder, corregir o eliminar sus datos. Toda la correspondencia relacionada con el tratamiento de datos personales mencionado anteriormente deberá dirigirse a la siguiente dirección: Empresa SPACEROWA RESIDENCE Sp. z o. o. Sp. komandytowa, ul. Ułańska 13, 52-213 Wrocław con la nota de „Datos personales”.',
            ],
        ]
    ];

    switch ($lang) {
        case 'es':
            return $common_content['es'];
        default:
            return $common_content['pl'];
    }
}