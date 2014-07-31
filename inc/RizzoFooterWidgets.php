<?php
namespace LonelyPlanet\Rizzo;

class RizzoFooterWidgets extends RizzoWidgets
{
    public function __construct(array $sidebar_args, $format = null)
    {
        parent::__construct($sidebar_args, $format);

        add_filter('rizzo_footer_content', array(&$this, 'get_html'), 10, 1);
    }
}
