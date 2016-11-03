<?php

class Kernel
{
    protected $view;
    protected $routes;

    public function __construct($view, $routes)
    {
        $this->view = $view;
        $this->routes = $routes;
    }

    public function handle($request)
    {
        if (!array_key_exists('page', $request->query)) {
            throw new InvalidArgumentException('You should provide "page" parameter like ?page=some-page', 401);
        }

        $response = $this->matchRoute($request);

        $this->view->render($response);
    }

    protected function matchRoute($request)
    {
        $page = $request->query['page'];

        if (!array_key_exists($page, $this->routes)) {
            throw new InvalidArgumentException(sprintf('Page %s was not found', $page), 404);
        }

        $controller = new $this->routes[$page]['controller']();

        $response = call_user_func(array($controller, sprintf('%s%s', $this->routes[$page]['action'], 'Action')), $request);

        return $response;
    }
}
