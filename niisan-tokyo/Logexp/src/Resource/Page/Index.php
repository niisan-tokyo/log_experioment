<?php

namespace Logexp\Resource\Page;

use BEAR\Resource\ResourceObject;
use Psr\Log\LoggerInterface;
use Fluent\Logger\FluentLogger;

class Index extends ResourceObject
{
    
    private $logger;

    public function __construct(FluentLogger $logger)
    {
        $this->logger = $logger;
    }

    public function onGet($name = 'BEAR.Sunday')
    {
        $this['greeting'] = 'Hello ' . $name;
        $this['name'] = $name;

        return $this;
    }
    
    public function onPost($score1, $score2, $score3)
    {
        for($num = 1; $num < 4; $num++) {
            $str = 'score'.$num;
            $res[$str] = intval($$str);
        }
        
        $this->logger->post('app.scores', $res);
        
    }
}
