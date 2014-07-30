# WP Rizzo Footer

This plugin hooks into the filters provided by the WP Rizzo plugin to provide widget areas for the footer.
You can drag and drop widgets into Rizzo Footer 1-3 in the WordPress admin.

If you want custom html to be in a widget, you can use the text/html widget that WordPress provides, or 
you can create and register your own custom widget.

## Features

* Three widget areas
* Filters

## Filtering

If you want to add your own custom html to the footer, you can filter the html and add your own to it.
To have it show up higher or lower in the footer, all you need to do is change the priority in the add_filter function call.

```php
<?php
namespace Your\Namespace;

function my_rizzo_footer_content($html)
{
    $content = <<<CONTENT

<div class="row">

    <div class="row__inner row__inner--footer">
        <p>Hello World.</p>
    </div>

</div>

CONTENT;

    return $html . $content;
}
add_filter('rizzo_footer_content', __NAMESPACE__ . '\my_rizzo_footer_content', 10, 1);
?>
```

I've also provided a couple more examples in [rizzo_footer_content-filter-example.php](rizzo_footer_content-filter-example.php).
