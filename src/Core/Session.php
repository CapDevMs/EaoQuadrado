<?php

namespace Core;

class Session
{
    public function __construct()
    {
        if (!session_id()) {
            session_start();
        }

        if (!isset($_SESSION['__flash'])) {
            $_SESSION['__flash'] = [];
            $_SESSION['__flash_lifetime'] = [];
        }

        $this->manageFlashLifecycle();
    }

    protected function manageFlashLifecycle()
    {
        foreach ($_SESSION['__flash_lifetime'] as $key => $lifetime) {
            if ($lifetime <= 0) {
                unset($_SESSION['__flash'][$key]);
                unset($_SESSION['__flash_lifetime'][$key]);
            } else {
                $_SESSION['__flash_lifetime'][$key]--;
            }
        }
    }

    public function set(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $_SESSION[$key] ?? $_SESSION['__flash'][$key] ?? $default;
    }


    public function has(string $key): bool
    {
        return isset($_SESSION[$key]) || isset($_SESSION['__flash'][$key]);
    }

    public function remove(string $key): void
    {
        unset($_SESSION[$key]);
    }

    // Flash (mensagem temporária)
    public function flash(string $key, mixed $value): void
    {
        $_SESSION['__flash'][$key] = $value;
        $_SESSION['__flash_lifetime'][$key] = 1;
    }

    public function getFlash(string $key, mixed $default = null): mixed
    {
        return $_SESSION['__flash'][$key] ?? $default;
    }

    public function all(): array
    {
        return $_SESSION;
    }

    public function clear(): void
    {
        session_unset();
        session_destroy();
    }
}
