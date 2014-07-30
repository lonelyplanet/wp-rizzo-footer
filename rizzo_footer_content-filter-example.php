<?php
namespace LonelyPlanet\Rizzo;

function rizzo_footer_smallprint($html)
{
    $year = date('Y');

    $smallprint = <<<SMALLPRINT

<div class="row row--smallprint">

    <div class="row__inner row__inner--footer row--smallprint__inner">
        <div class="wv--split--left text--legal copy--disclaimer">
            <p>&copy; {$year} Lonely Planet. All rights reserved. No part of this site may be reproduced without our written permission.</p>
        </div>
        <div class='wv--split--right form--international'>
            <div class='split--right__inner nav--inline form--language media'>
                <label class='nav__item form--language__label title--footer media__img'>International</label>
                <div class='media__body'>
                    <form action='http://www.lonelyplanet.com/international'>
                        <div class='dropdown js-select-group-manager'>
                            <label class='dropdown__value js-select-overlay icon--chevron-down--after' for='languageSelect'>English</label>
                            <select class='dropdown__select js-select' data-form-submit='true' id='languageSelect' name='language'>
                                <option value='en'>English</option>
                                <option value='in'>English (India)</option>
                                <option value='de'>Deutsch</option>
                                <option value='fr'>Fran&#231;ais</option>
                                <option value='es'>Espa&#241;ol</option>
                                <option value='it'>Italiano</option>
                                <option value='ru'>&#x420;&#x443;&#x441;&#x441;&#x43A;&#x438;&#x439;</option>
                                <option value='br'>Portugu&ecirc;s</option>
                            </select>
                        </div>

                        <noscript>
                            <input class='btn btn--blue' type='submit' value='Go'>
                        </noscript>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

SMALLPRINT;

    return $html . $smallprint;
}
add_filter('rizzo_footer_content', __NAMESPACE__ . '\rizzo_footer_smallprint', 12, 1);



function rizzo_footer_more_content($html)
{
    $content = file_get_contents('some-more-content.html');
    return $html . $content;
}
add_filter('rizzo_footer_content', __NAMESPACE__ . '\rizzo_footer_more_content', 12, 1);
