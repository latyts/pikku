<?php
class Route
{
    public $pattern;
    public $closure;
    public $method;

    function __construct($pattern, $closure)
    {
        $this->pattern = $pattern;
        $this->closure = $closure;
    }
}

class Router
{
    public $routes;

    function __construct()
    {
        $this->routes = [];
    }

    public function get($pattern, $closure)
    {
        $route = new Route($pattern, $closure);
        $route->method = 'GET';
        array_push($this->routes, $route);
    }

    public function resolve()
    {
        $resolvedRoute = null;
        foreach ($this->routes as $route) {
            // TODO:
            //   * handle patterns in route
            //   * handle http methods
            //   * implement request object
            $pattern_matches = $route->pattern == $_SERVER['REQUEST_URI'];
            $method_matches  = $route->method == $_SERVER['REQUEST_METHOD'];
            if ($pattern_matches and $method_matches) {
                $resolvedRoute = $route;
                break;
            } else {
                break;
            }
        }

        if ($resolvedRoute) {
            try {
                $closure = $resolvedRoute->closure;
                $closure($_SERVER);
            } catch (Exception $e) {
                http_response_code(404);
                echo("Not found");
            }
        } else {
            http_response_code(404);
            echo("Not found");
        }
    }
}

function getView($filename)
{
    require_once __DIR__ . '/../views/' . $filename;
}

$router = new Router();

$router->get('/', function($req) {
    getView('posts/posts.php');
});
?>
