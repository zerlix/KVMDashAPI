<?php

namespace Zerlix\KvmDash\Api\Controller;

use Zerlix\KvmDash\Api\Controller\Host\HostController;
use Zerlix\KvmDash\Api\Controller\Qemu\QemuController;
use Zerlix\KvmDash\Api\Controller\Lxc\LxcController;

class Controller
{
    private $hostController;
    private $qemuController;
    private $lxcController;

    public function __construct()
    {
        $this->qemuController = new QemuController();
        $this->hostController = new HostController();
        $this->lxcController = new LxcController();
    }

    public function handle(string $route, string $method): array
    {
        // remove the /api/ prefix from the route
        $route = str_replace('/api/', '', $route);


        // validate method
        if (!in_array($method, ['GET', 'POST', 'PUT', 'DELETE'])) {
            return [
                'status' => 'error',
                'message' => 'Invalid HTTP method'
            ];
        }

        /* 
            handle the host routes
        */
        if (str_starts_with($route, 'host')) {
            return $this->hostController->handle($route, $method);
        }

        /* 
            handle the qemu routes
        */
        if (str_starts_with($route, 'qemu')) {
            return $this->qemuController->handle($route, $method);
        }

        if (str_starts_with($route, 'lxc')) {
            return $this->lxcController->handle($route, $method);
        }
        
        // return an error if the route is not found
        return [
            'status' => 'error',
            'message' => 'Controller: Route not found'
        ];
    }
}
