<?php

namespace Alexlist\Lowrapper;

interface ConverterInterface
{
    /**
     * Convert formats
     * @param LowrapperParameters $parameters
     * @return mixed
     * @throws LowrapperException
     */
    public function convert(LowrapperParameters $parameters);
}
