<?php

namespace KMAFacebook;

class PluginSetup
{
    protected $pluginDir;
    protected $pluginSlug;
    protected $pluginName;

    public function __construct()
    {
        $config = new PluginConfig();
        $this->pluginDir = $config->getVar('pluginDir');
        $this->pluginSlug = $config->getVar('pluginSlug');
        $this->pluginName = $config->getVar('pluginName');
    }

    public function installPlugin()
    {
        update_option('kma_facebook_pageid',"");
    }

    public function uninstallPlugin()
    {
        delete_option('kma_facebook_pageid');
    }

    public function updatePlugin()
    {
        new PluginUpdater( [
            'slug' => $this->pluginSlug,
            'proper_folder_name' => $this->pluginName,
            'api_url' => 'https://api.github.com/keriganmarketing/KMAFacebookPlugin',
            'raw_url' => 'https://raw.github.com/keriganmarketing/KMAFacebookPlugin/master',
            'github_url' => 'https://github.com/keriganmarketing/KMAFacebookPlugin',
            'zip_url' => 'https://github.com/keriganmarketing/KMAFacebookPlugin/archive/master.zip',
            'sslverify' => true,
            'requires' => '3.0',
            'tested' => '3.3',
            'readme' => 'README.md',
            'access_token' => '',
        ] );
    }
}