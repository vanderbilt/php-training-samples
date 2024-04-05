<?php

namespace Readability\Names;

class NameService
{
    public function dataset($config)
    {
        // Check if user has permission to get the list
        if ($config[0] === 4 || $config[0] === 3) {
            return [];
        }

        // Which list is requested?
        if ($config[1] === "alpha") {
            return $this->dataSetA();
        } elseif ($config[1] === "age") {
            return $this->dataSetB();
        } else {
            return [];
        }
    }

    private function dataSetA()
    {
        return [];
    }

    private function dataSetB()
    {
        return [];
    }
}
