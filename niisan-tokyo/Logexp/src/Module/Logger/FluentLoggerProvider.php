<?php

namespace Logexp\Module\Logger;

use BEAR\AppMeta\AbstractAppMeta;
use Fluent\Logger\FluentLogger;
use Ray\Di\ProviderInterface;

class FluentLoggerProvider implements ProviderInterface
{
    
    /**
     * @var AbstractAppMeta
     */
    private $appMeta;

    public function __construct(AbstractAppMeta $appMeta)
    {
        $this->appMeta = $appMeta;
    }
    
    public function get()
    {
        $logger = new FluentLogger('localhost', '24224');
        return $logger;
        
    }

}