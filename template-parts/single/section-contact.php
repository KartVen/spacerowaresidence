<?php

use Translator\Translator;

Translator::setLocaleByShort($args['locale']);

?>

<section id="contact" class="sec-blk">
    <div class="container">
        <div class="sec-row">
            <div class="sec-col-cnt home-col-cnt">
                <h4 class="sec-head">
                    <?= Translator::get('contact.head'); ?>
                </h4>
                <div class="contact-wrapper">
                    <div class="contact-info">
                        <div class="contact-intro">
                            <?= Translator::get('contact.intro'); ?>
                        </div>
                        <ul class="contact-list">
                            <li><a href="tel:+48604082700"><i class="fa fa-phone fa-2x"></i>+48 604 082 700</a></li>
                            <li><a href="mailto:spacerowa.residence@wp.pl"><i class="fa fa-envelope fa-2x"></i>spacerowa.residence@wp.pl</a>
                            </li>
                            <li><a href="https://www.facebook.com/Osiedle-Spacerowe-105859915255925"><i
                                        class="fa fa-facebook fa-2x"></i>Facebook</a></li>
                            <li><a href="https://www.instagram.com/osiedle_spacerowe"><i
                                        class="fa fa-instagram fa-2x"></i>Instagram</a></li>
                        </ul>
                    </div>
                    <div id="contact-form">
                        <?php dynamic_sidebar($args['sidebar']); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-row data-admin">
				<span>
					<?= Translator::get('contact.data_admin'); ?>
				</span>
        </div>
    </div>
</section>
