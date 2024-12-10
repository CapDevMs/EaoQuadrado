<?php

class DotEnvEnvironment
{

   public function load($path): void
   {
       $lines = file($path . '/.env');
       foreach ($lines as $line) {
           [$key, $value] = explode('=', $line, 2);
           $key = trim($key);
           $value = trim(str_replace("'", "", $value));

           putenv(sprintf('%s=%s', $key, $value));
           $_ENV[$key] = $value;
           $_SERVER[$key] = $value;
       }
   }
}

(new DotEnvEnvironment)->load($_SERVER['DOCUMENT_ROOT'] . '/EaoQuadrado/src');