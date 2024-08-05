<?php

namespace config\router;

class Router
{
    public function __construct()
    {
        // Obtem a URL
        $request = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
        $request = parse_url($request, PHP_URL_PATH); // Remove query string
        $request = trim($request, '/'); // Remove barras no início e no final

        // Divide a URL em partes a partir da "/"
        $parts = explode('/', $request);

        // Define o Controller, Method e Parâmetro.
        $controllerFolder = isset($parts[0]) ? $parts[0] : 'home';
        $controllerName = isset($parts[0]) ? ucfirst($parts[0]) . 'Controller' : 'LoginController';
        $methodName = isset($parts[1]) ? $parts[1] : 'index';
        $params = isset($parts[2]) ? $parts[2] : [];

        // Define o caminho do controller
        $controllerClass = 'App\\' . $controllerFolder . '\\' . $controllerName;

        // Verifica se o controller existe
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();

            // Verifica se o method existe no controller
            if (method_exists($controller, $methodName)) {
                $controller->$methodName($params);
            } else {
                echo "Método '$methodName' não encontrado no controller '$controllerName'.\n";
            }
        } else {
            echo "Controller '$controllerClass' não encontrado.\n";
        }
    }
}
