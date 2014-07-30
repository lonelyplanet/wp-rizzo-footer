<?php
namespace LonelyPlanet\Rizzo;


defined('ABSPATH') || exit;


include __DIR__ . '/inc/RizzoFooterWidgets.php';
include __DIR__ . '/inc/RizzoRizzoSitemapRowWidgets.php';
include __DIR__ . '/inc/RizzoFooterContent.php';


$wprizzofooter = new RizzoFooterContent();


new RizzoRizzoSitemapRowWidgets(
    array(
        'name'          => 'Rizzo Footer 1',
        'id'            => 'rizzo-footer-1-sidebar',
        'description'   => 'Due to some rules in rizzo, the first widget will be given the class col--footer--last, which causes it to float right.',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s col--footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="title--footer title--list--footer">',
        'after_title'   => '</span>'
    ),
    '<nav id="js-footer-nav" class="row row--sitemap" role="navigation" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope" aria-label="Sitemap">
        <h6 class="accessibility">Sitemap</h6>
        <div class="row__inner row__inner--footer row--sitemap__inner">%s</div>
    </nav>'
);


new RizzoFooterWidgets(
    array(
        'name'          => 'Rizzo Footer 2',
        'id'            => 'rizzo-footer-2-sidebar',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s col--footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="title--footer title--list--footer">',
        'after_title'   => '</span>'
    ),
    '<div class="row row--footer--about" role="contentinfo"><div class="row__inner row__inner--footer">%s</div></div>'
);


new RizzoFooterWidgets(
    array(
        'name'          => 'Rizzo Footer 3',
        'id'            => 'rizzo-footer-3-sidebar',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="title--footer title--list--footer">',
        'after_title'   => '</span>'
    ),
    '<div class="row row--smallprint"><div class="row__inner row__inner--footer row--smallprint__inner">%s</div></div>'
);
