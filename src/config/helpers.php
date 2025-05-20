<?php

function route($route)
{
    header("location: $route");
    exit;
}