<?php
namespace LonelyPlanet\Rizzo;

class RizzoFooterContent
{
    public function __construct()
    {
        add_filter('rizzo_html_footer-endpoint', array(&$this, 'insert_footer_content') );
    }

    public function insert_footer_content($html)
    {
        $footer_content = apply_filters('rizzo_footer_content', '');

        if ($footer_content !== '') {
            $open_div = "<div class='wrapper--footer js-wrapper'>";
            $html = str_replace($open_div, $open_div . $footer_content, $html);
        }

        return $html;
    }

}