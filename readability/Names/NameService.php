<?php

namespace Readability\Names;

class NameService
{
    public function dataset($config)
    {
        // Check if user has permission to get the list.
        // Only authenticated users and admins should have access to the list.
        if ($config[0] === 1 || $config[0] === 2) {
            return [];
        }

        // Which list is requested?
        if ($config[1] === "alpha") {
            return $this->a();
        } elseif ($config[1] === "age") {
            return $this->b();
        } else {
            return $this->regular();
        }
    }

    private function b()
    {
        return [];
    }

    private function a()
    {
        return [];
    }

    private function regular()
    {
        return [];
    }
}
