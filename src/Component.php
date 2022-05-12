<?php

namespace D2\Theme;

abstract class Component
{
    public function __construct(
        protected array $config
    ) {}

    abstract public function init();
}
