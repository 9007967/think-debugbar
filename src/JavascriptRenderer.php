<?php

namespace think\debugbar;

class JavascriptRenderer extends \DebugBar\JavascriptRenderer
{
    protected $cssVendors = array(
        'fontawesome' => 'vendor/font-awesome/css/font-awesome.min.css.statics',
        'highlightjs' => 'vendor/highlightjs/styles/github.css.statics'
    );

    protected $jsVendors = array(
        'jquery' => 'vendor/jquery/dist/jquery.min.js.statics',
        'highlightjs' => 'vendor/highlightjs/highlight.pack.js.statics'
    );

    protected $cssFiles = array('debugbar.css.statics', 'widgets.css.statics', 'openhandler.css.statics');

    protected $jsFiles = array('debugbar.js.statics', 'widgets.js.statics', 'openhandler.js.statics');
}
