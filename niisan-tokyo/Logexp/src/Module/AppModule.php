<?php

namespace Logexp\Module;

use BEAR\Package\PackageModule;
use Ray\Di\AbstractModule;
use Ray\Di\Scope;
use Fluent\Logger\FluentLogger;
use Logexp\Module\Logger\FluentLoggerProvider;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->install(new PackageModule);
        $this->bind(FluentLogger::class)->toProvider(FluentLoggerProvider::class)->in(Scope::SINGLETON);
    }
}
