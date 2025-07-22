<?php

namespace Core;

class Redirector
{
    protected string $target = '';
    protected int $statusCode = 302;

    public function to(string $url, int $status = 302): static
    {
        $this->target = $url;
        $this->statusCode = $status;
        return $this;
    }

    public function route(string $name, array $params = []): static
    {
        $url = router()->route($name);

        if (!$url) {
            throw new \Exception("Rota nomeada '{$name}' não encontrada.");
        }

        // Substitui parâmetros: {id}, {slug}, etc
        foreach ($params as $key => $value) {
            $url = str_replace("{" . $key . "}", $value, $url);
        }

        $this->target = $url;
        return $this;
    }

    public function with(string $key, mixed $value): static
    {
        session()->flash($key, $value);
        return $this;
    }

    public function back(): void
    {
        $this->target = $_SERVER['HTTP_REFERER'] ?? '/';
        $this->send();
    }

    public function send(): void
    {
        http_response_code($this->statusCode);
        header("Location: {$this->target}");
        exit;
    }

    public function __destruct()
    {
        if ($this->target) {
            $this->send();
        }
    }

}
