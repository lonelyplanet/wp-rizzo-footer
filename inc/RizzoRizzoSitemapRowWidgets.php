<?php
namespace LonelyPlanet\Rizzo;

class RizzoRizzoSitemapRowWidgets extends RizzoFooterWidgets
{
    protected function get_widgets()
    {
        $widgets = parent::get_widgets();

        if ($widgets !== '') {
            $class_name = 'col--footer';

            // The first col--footer needs to be col--footer--last due to css floating.
            $widgets = substr_replace(
                $widgets,
                'col--footer--last',
                stripos( $widgets, $class_name ),
                strlen( $class_name )
            );

        }

        return $widgets;
    }

}