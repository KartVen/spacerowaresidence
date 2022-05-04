<?php
function get_common_content_details($lang = null)
{
    $common_content = get_common_content($lang);
    ?>

    <section id="details">
        <div class="container">
            <div class="details-wrapper">
                <div class="hq-residence">
                    <h4 class="headline"><?php echo $common_content['details']['hq_title'];?></h4>
                    <p>SPACEROWA RESIDENCE Sp. z o.o. Sp. komandytowa</p>
                    <p><?php echo $common_content['details']['street'];?> Ułańska 13</p>
                    <p>Wrocław, 52-213</p>
                    <p><?php echo $common_content['details']['country'];?></p>
                    <p>NIP: 8992849049</p>
                </div>
                <div class="legal-info">
                    <h4 class="headline" style="font-weight:normal;"><?php echo $common_content['details']['attention'];?></h4>
                    <div>
                        <?php echo $common_content['details']['legal_info'];?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
}