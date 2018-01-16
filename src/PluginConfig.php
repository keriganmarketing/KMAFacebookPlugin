<?php

namespace KMAFacebook;

class PluginConfig
{
    public $pluginDir;
    public $pluginSlug;
    public $pluginName;

    public function __construct()
    {
        $this->pluginSlug = plugin_basename(dirname(dirname(__FILE__)));
        $this->pluginName = plugin_basename(dirname(dirname(__FILE__)));
        $this->pluginDir = dirname(dirname(__FILE__));
    }

    public function getVar($var)
    {
        return $this->{$var};
    }

    public function setVar($var, $val)
    {
        $this->{$var} = $val;
    }

}