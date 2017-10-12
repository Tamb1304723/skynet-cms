<?php

namespace cms_skynet\sys;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Mvc\View\Engine\Volt\Complier;
use Phalcon\DiInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Db\Adapter\Pdo\Mysql as Database;

class index implements ModuleDefinitionInterface {
    /**
     * Registers the module auto-loader
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null) {
        $loader = new Loader();
        $loader->registerNamespaces([
            'cms_skynet\sys\Controllers' => '../_core/system/controllers/',
            'cms_skynet\sys\Models'      => '../_core/system/models/',
            'cms_skynet\sys\Plugins'     => '../_core/system/plugins/',
            'cms_skynet\sys\Forms'     => '../_core/system/forms/',
        ]);

        $loader->register();
    }

    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di) {
        // Registering a dispatcher
        $di->set('dispatcher', function () {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace('cms_skynet\sys\Controllers\\');
            return $dispatcher;
        });

        // Register Volt as a service
        $di->set("voltService", function ($view, $di) {
            $config = $this->getConfig();
            $volt = new Volt($view, $di);

            $volt->setOptions([
                "compiledPath"  => $config->application->viewsDir,
                "compiledExtension" => ".compiled",
            ]);

            return $volt;
        });

        $di->set("view", function () {
            $view = new View();
            $view->setViewsDir("../_core/system/views/");

            $view->registerEngines([
                ".volt" => "voltService",
            ]);
            return $view;
        });
    }
}
