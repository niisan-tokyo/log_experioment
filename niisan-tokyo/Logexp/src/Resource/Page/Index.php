<?php

namespace Logexp\Resource\Page;

use BEAR\Resource\ResourceObject;

class Index extends ResourceObject
{
    public function onGet($name = 'BEAR.Sunday')
    {
        $this['greeting'] = 'Hello ' . $name;
        $this['name'] = $name;

        return $this;
    }
    
    public function onPost($score1, $score2, $score3)
    {
        
    }
}
