<?php 

namespace PhpRouter;

class JSONMessage extends Message {
    
    public function __construct(\stdClass|array $std = null, int $responseCode) {
        parent::__construct(json_encode($std), $responseCode, 'application/json; charset=utf-8');
    }
}