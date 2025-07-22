<?php

namespace Core;

class Request
{
    protected $data;

    public function __construct()
    {
        $this->data = array_merge($_GET, $_POST);
    }

    public function all()
    {
        return $this->data;
    }

    public function input($key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    public function has($key)
    {
        return isset($this->data[$key]);
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isPost()
    {
        return $this->method() === 'POST';
    }
}
