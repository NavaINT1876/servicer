<?php

namespace MVF\Servicer;

interface ConfigInterface
{
    public function getName(): string;

    public function skip(): bool;
}
