<?php

use Translator\Translator;

Translator::setLocaleByShort($args['locale']);

?>

<section id="details">
    <div class="container">
        <div class="details-wrapper">
            <div class="hq-residence">
                <h4 class="headline"><?= Translator::get('details.hq_title'); ?></h4>
                <p>SPACEROWA RESIDENCE Sp. z o.o. Sp. komandytowa</p>
                <p><?= Translator::get('details.street'); ?> Ułańska 13</p>
                <p>Wrocław, 52-213</p>
                <p><?= Translator::get('details.country'); ?></p>
                <p>NIP: 8992849049</p>
            </div>
            <div class="legal-info">
                <h4 class="headline" style="font-weight:normal;"><?= Translator::get('details.attention');?></h4>
                <div>
                    <?= Translator::get('details.legal_info'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
