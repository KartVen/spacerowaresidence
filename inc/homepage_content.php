<?php
function get_homepage_content($lang = null)
{
    $homepage_content = [
        'pl' => [
            'banner' => [
                'Wybierz Swój<br>Wymarzony Dom',
                'Nowe oferta domów. Sprawdź już dzisiaj!'
            ],
            'headline_que' => [
                'Czym jest <span>Osiedle Spacerowe</span>?',
                'Co <span>zyskujesz</span>?'
            ],
            'section' => [
                'info_1' => [
                    'Nasza oferta',
                    '<ul>
                    <li><b>OSIEDLE SPACEROWE</b> to typowe domy jednorodzinne w zabudowie szeregowej.</li>
                    <li><b>Osiedle</b> – niewielkie osiedle (25 domów), ogrodzony teren, mała wspólnota mieszkaniowa.</li>
                    <li>Cały teren zabudowy to około 5.500 m<sup>2</sup>, w tym ok.30% to tereny zielone.</li>
                    <li><b>Typowe</b> – tzn. KAŻDY DOM jest jednopiętrowy (parter + piętro)</li>
                    <li><b>Jednorodzinny, w zabudowie szeregowej</b> – tzn. KAŻDY dom ma swoje, niezależne ściany, z małą pustką powietrzną między nimi. Domy NIE MAJĄ wspólnych ścian, co znacznie poprawia izolację akustyczną.</li>
                    <li><b>Każdy</b> dom posiada <b>własny garaż</b> oraz jedno <b>dodatkowe</b>, <b>dedykowane miejsce parkingowe</b> na terenie osiedla.</li>
                    <li>Każdy dom posiada ogródek.</li>
                </ul>'
                ],
                'info_2' => [
                    'Standard wykonania',
                    '<ul>
                    <li>Stan deweloperski</li>
                    <li><b>Okna</b> PCV 3 szybowe, blacha powlekana.</li>
                    <li>Wszystkie okna oraz drzwi balkonowe – <b>rolety elektryczne (parter i piętro)</b>, sterowane przycisk/pilot.</li>
                    <li>Brama garażowa – segmentowa, elektryczna – sterowana pilotem.</li>
                    <li>Drzwi wejściowe – 2 zamki typu C.</li>
                    <li><b>Ogrzewanie podłogowe w CAŁYM BUDYNKU oraz GARAŻU.</b></li>
                    <li>Piec grzewczy 2 funkcyjny.</li>
                    <li>Gniazda RTV oraz Intern. – <b>w każdym pokoju</b>.</li>
                    <li><b>Wewnętrzna sieć internetowa i RTV</b> wraz z „wyjściem” na zewnętrzną antenę satelitarną.</li>
                    <li>Pomieszczenie <b>pralni</b>.</li>
                </ul>'
                ],
                'info_3' => [
                    'Technologia',
                    '<ul>
                    <li><b>Wysokość wewnętrzna</b> netto – <b>2,7m</b></li>
                    <li><b>1. piętro</b> bez skosów</li>
                    <li>Wszystkie budynki w ciągu zabudowy, posadowione na wspólnej płycie żelbetowej.</li>
                    <li>Ściany – beton komórkowy, <b>ocieplony styropianem</b>.</li>
                    <li>Dach – płyta OSB, gont bitumiczny, <b>ocieplony od wewnątrz</b>.</li>
                    <li>Tynki zewnętrzne – tynk strukturalny; dodatkowy nadzór kanadyjskiej firmy Abrik®.</li>
                    <li>Tynki wewnętrzne – gipsowe, maszynowe.</li>
                    <li>Schody – systemowe, betonowe.</li>
                    <li>Więcej na : <b>www.abrik.com</b>.</li>
                </ul>'
                ],
                'info_4' => [
                    'Inwestycja',
                    '<ul>
                    <li><b>Lokalizacja</b>, <b>wielkość budynków</b> oraz standardowe, ponadnormatywne rozwiązania, z możliwością dalszego sensownego wykończenia, wydają się bardzo dobrym nie tylko rozwiązaniem mieszkaniowym, ale też inwestycją (łatwość obrotu).</li>
                    <li><b>Stosunkowo nieliczne sąsiedztwo</b> — małe, zamknięte osiedle.</li>
                    <li>Bardzo niski <b>poziom hałasu</b> pomimo niewielkiej odległości od głównych ulic i WOW (Wschodnia Obwodnica Wrocławia).</li>
                    <li><b>Przewidywane przekazanie inwestycji – lipiec 2022</b></li>
                </ul>'
                ],
                'info_5' => [
                    'Media',
                    '<ul>
                    <li>Woda miejska.</li>
                    <li>Prąd sieciowy.</li>
                    <li>Kanalizacja miejska.</li>
                    <li>Kanalizacja deszczowa.</li>
                    <li>Gaz sieciowy.</li>
                    <li>Internet (światłowodowy).</li>
                </ul>'
                ],
                'info_6' => [
                    'Nowoczesne rozwiązania energetyczne',
                    '<ul>
                    <li><b>Każdy</b> dom posiada <b>dobrze izolowane ściany</b> z przeszkleniami 3 szybowymi.</li>
                    <li>Ogrzewanie podłogowe w całym budynku (włącznie garażem).</li>
                    <li><b>UWAGA</b></li>
                    <li><b>Ogrzewanie podłogowe</b> – zalety/oszczędności.</li>
                    <li>Zalecane dla alergików</li>
                    <li><b>Dużo mniejsze zużycie gazu</b> – podgrzewanie wody do ogrzewania.</li>
                    <li><ul>
                        <li>dla ogrzewania podłogowego – do temp. <b>ok 30-50°C</b>,</li>
                        <li>dla tradycyjnych grzejników – <b>75 -85°C</b>.</li>
                    </ul></li>
                    <li><b>Oświetlenie terenu wspólnego</b> (drogi wew., parkingi) – lampy fotowoltaiczne, nisko świecące.</li>
                </ul>'
                ],
                'info_7' => [
                    'Sąsiedztwo',
                    '<ul>
                    <li>Osiedle jako <b>teren zamknięty</b>, zlokalizowane jest w obrębie zabudowy niskiej (maks. 1 piętro)
                            domów jedno i dwurodzinnych. Zgodnie z zapisami MPZP, obrębie 100 m wokół, nie powstanie żadna inna inwestycja wielorodzinna.</li>
                    <li>Duża ilość okolicznych terenów zielonych, sprzyja spacerom, posiadaniu zwierząt domowych.</li>
                    <li>W miejscowości Radwanice dzięki staraniom lokalnych władz, znajduje się <b>pełna infrastruktura szkolna i wychowawcza</b>.</li>
                    <li><b>Komunikacja miejska</b> – przystanki przy ul. Wrocławskiej / Melioracyjna – ok. 450 m.</li>
                </ul>'
                ],
                'offer' => [
                    'Nasza oferta'
                ],
                'localisation' => [
                    'Nasza lokalizacja'
                ],
                'visualisation' => [
                    'Wizualizacje wewnętrzne'
                ],
            ],
            'table' => [
                'home' => 'Dom',
                'link' => 'dom',
                'category' => 'domy',
                'build_type' => 'Typ budynku',
                'garden_type' => 'Typ ogródka',
                'usable_area' => 'Powierzchnia użytkowa',
                'addon_area' => 'Powierzchnia dodatkowa',
                'sale_status' => 'Status',
                'prize' => 'Cena',
                'corner' => 'Narożny',
                'type' => 'Typ',
                'occupied' => 'sprzedany',
                'reservation' => 'rezerwacja',
                'free' => 'wolne',
                'garden' => 'Ogródek',
                'terrace' => 'Taras',
                'check' => 'SPRAWDŹ',
            ],
            'legend' => [
                'Legenda',
                'TYP – DOM „POWTARZALNY” TZN. TAKA SAMA POW.UŻYTK. M2',
                'PR – GARAŻ PO PRAWEJ STRONIE PATRZĄC OD ELEWACJI FRONTOWEJ',
                'L – GARAŻ PO LEWEJ STRONIE',
                'OT – OGRÓDEK TYPOWY',
                'OP – OGRÓDEK POWIĘKSZONY',
            ]
        ],
        'es' => [
            'banner' => [
                'Elija su<br>Casa de Ensueño',
                'Una nueva oferta de casas. ¡Compruébalo hoy!'
            ],
            'headline_que' => [
                '¿Por qué <span>nuestra urbanización?</span>?',
                '¿Qué <span>es lo que ganas</span>?'
            ],
            'section' => [
                'info_1' => [
                    'Nuestra Oferta',
                    '<ul>
                        <li><b>LA URBANIZACIÓN „OSIEDLE SPACEROWE”</b> son típicas casas unifamiliares en casas adosadas.</li>
                        <li><b>Asentamiento</b> – pequeño asentamiento (25 casas), zona vallada, pequeña comunidad de viviendas.</li>
                        <li>La superficie total construida es de unos 5. 500 m2, de los cuales aproximadamente el 30% son zonas verdes.</li>
                        <li><b>Típico</b> – es decir, TODA casa es de un piso (planta baja + planta)</li>
                        <li><b>Casa unifamiliar, en casas adosadas</b> – es decir, cada casa tiene sus propias paredes independientes, con un pequeño espacio de aire entre ellas. Las casas NO tienen paredes comunes, lo que mejora significativamente la insonorización.</li>
                        <li>Cada casa tiene su propio garaje y un aparcamiento adicional dedicado en la urbanización.</li>
                        <li>Cada casa tiene un jardín.</li>
                    </ul>'
                ],
                'info_2' => [
                    'Estándar De Ejecución',
                    '<ul>
                    <li>Estado Desarrollador</li>
                    <li>Ventana de PVC 3(3 vidrios/cristales), chapa recubierta.</li>
                    <li>Todas las ventanas y puertas de balcones – las persianas eléctricas (planta baja y planta superior), controladas por tecla/mando a distancia.</li>
                    <li>Puerta de garaje – puerta seccional, eléctrica – con mando a distancia.</li>
                    <li>Puerta de entrada – 2 cerraduras tipo C.</li>
                    <li><b>Suelo radiante en TODO EDIFICIO DE VIVIENDA Y GARAGE.</b></li>
                    <li>Estufa de calefacción 2 en funcionamiento.</li>
                    <li>Enchufes RTV e INTERNET – en cada habitación.</li>
                    <li>La red interna de Internet y RTV con „salida” para una antena parabólica externa.</li>
                    <li>El cuarto de la lavandería.</li>
                </ul>'
                ],
                'info_3' => [
                    'Tecnología',
                    '<ul>
                    <li><b>Altura interior</b> neto – <b>2,7m</b></li>
                    <li><b>1. piętro</b> bez skosów</li>
                    <li>1.Piso sin inclinaciones.</li>
                    <li>Todos los edificios dentro de la construcción, colocados común en una losa de concreto armado.</li>
                    <li>Paredes – hormigón celular, protegido del frío con poliestireno espumado.</li>
                    <li>Techo – placa OSB, tejamanil de betún, aislado desde el interior.</li>
                    <li>Enlucidos exteriores – enlucido estructural.</li>
                    <li>Control adicional de la empresa canadiense Abrik®</li>
                    <li><b>www.abrik.com</b>.</li>
                </ul>'
                ],
                'info_4' => [
                    'Inversión',
                    '<ul>
                    <li>La ubicación, el tamaño de los edificios y las soluciones estándares, con la posibilidad de una transformación posterior, no sólo parecen ser una muy buena solución para la vivienda, sino también una inversión. (simple comercialización).</li>
                    <li>Relativamente poca vecindad – un barrio de vivendas pequeño y cerrado.</li>
                    <li>Muy bajo nivel del ruido a pesar de la corta distancia de las principales carreteras y CEW (La Circunvalación Este de Wroclaw).</li>
                    <li><b>La recepción de la inversión prevista – 07.2022</b></li>
                </ul>'
                ],
                'info_5' => [
                    'Tubos',
                    '<ul>
                    <li>Agua urbana.</li>
                    <li>Energía eléctrica.</li>
                    <li>Alcantarillado urbano.</li>
                    <li>El sistema de alcantarillado de aguas de lluvias.</li>
                    <li>Gas de la red.</li>
                    <li>Internet (fibra óptica).</li>
                </ul>'
                ],
                'info_6' => [
                    'Las innovadoras soluciones energéticas',
                    '<ul>
                    <li>Cada casa tiene paredes bien aisladas con 3 acristalamientos (3 ventanas).</li>
                    <li>Suelo radiante en todo el edificio (incluido el garaje).</li>
                    <li><b>NOTA</b></li>
                    <li><b>Calefacción por suelo radiante – Ventajas/ahorros</b>.</li>
                    <li>Recomendado para los alérgicos</li>
                    <li><b>Mucho menos consumo de gas</b> – calentar el agua para la calefacción.</li>
                    <li><ul>
                        <li>para la calefacción por suelo radiante – hasta temp. aprox. <b>ok 30-50°C</b>,</li>
                        <li>para la calefacción tradicional – <b>75 -85°C</b>.</li>
                    </ul></li>
                    <li>Iluminación del área común (caminos, aparcamientos) – lámparas fotovoltaicas, baja luminosidad.</li>
                </ul>'
                ],
                'info_7' => [
                    'Vecinidad',
                    '<ul>
                        <li>El barrio de viviendas se encuentra como una zona cerrada dentro de la urbanización baja (máx. 1 planta) de viviendas unifamiliares y bifamiliares. Según con MPZP, en dentro de 100 metros no se fundara ninguna otra inversión con varias familias.</li>
                        <li>Un gran número de zonas verdes en los alrededores, favorece paseos, mascotas.</li>
                        <li>En Radwanice, gracias a los esfuerzos de las autoridades locales, existe una <b>completa infraestructura escolar y educativa</b>.</li>
                        <li><b>Transporte público</b>b> – paradas en ul. Wrocławska / Melioracyjna – unos. 450 m.</li>
                    </ul>'
                ],
                'offer' => [
                    'Nusetra Oferta'
                ],
                'localisation' => [
                    'Nuestra ubicación'
                ],
                'visualisation' => [
                    'Visualizaciones interiores'
                ],
            ],
            'table' => [
                'home' => 'Casa',
                'link' => 'casa',
                'category' => 'casas',
                'build_type' => 'Tipo de edificio',
                'garden_type' => 'Tipo de jardín',
                'usable_area' => 'Superficie útil',
                'addon_area' => 'Superficie adicional',
                'sale_status' => 'Estado',
                'prize' => 'Precio',
                'corner' => 'Esquinera',
                'type' => 'Tipo',
                'occupied' => 'vendido',
                'reservation' => 'reservado',
                'free' => 'libre',
                'garden' => 'Jardín',
                'terrace' => 'Terraza',
                'check' => 'REVISA',
            ],
            'legend' => [
                'Leyenda',
                'TIPO – CASA „REPETIBLE” ES DECIR LA MISMA SUPERFICIE ÚTIL',
                'PR – GARAJE A LA DERECHA',
                'L – GARAJE A LA IZQUIERDA',
                'OT – JARDÍN TIPICO',
                'OP – JARDÍN AMPLIADO',
            ]
        ]
    ];

    switch ($lang) {
        case 'es':
            return $homepage_content['es'];
        default:
            return $homepage_content['pl'];
    }
}