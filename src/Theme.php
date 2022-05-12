<?php

namespace D2\Theme;

final class Theme
{
    public function __construct(
        protected array $config
    ) {}

    public function setup()
    {
        foreach ($this->config as $class_name => $class_specific_config) {
            if (class_exists($class_name)) {
                $class = new $class_name($class_specific_config);
                $class->init();
            }
        }
    }
}
