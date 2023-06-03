<?php 
namespace PhpRouter {

    function runCallbackByMethod(string $route, callable $callback, string $method) {
        if(preg_match("@^$route/?$@", $_SERVER['REQUEST_URI'], $matches) && $method == $_SERVER['REQUEST_METHOD']) {
            unset($matches[0]);
            echo $callback(...$matches) . PHP_EOL;
            exit;
        }
    }
    
    function GET(string $route, callable $callback) {
        runCallbackByMethod($route, $callback, 'GET');
    }
    
    function POST(string $route, callable $callback) {
        runCallbackByMethod($route, $callback, 'POST');
    }
    
    function PUT(string $route, callable $callback) {
        runCallbackByMethod($route, $callback, 'PUT');
    }
    
    function DELETE(string $route, callable $callback) {
        runCallbackByMethod($route, $callback, 'DELETE');
    }
}