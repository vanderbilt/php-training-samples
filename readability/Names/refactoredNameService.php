<?php

namespace Readability\Names;

class NameRequestFinal
{
    public function getNames(NameRequest $request): array
    {
        if ($request->isNotPermitted()) {
            return [];
        }

        if ($request->isSortedByName()) {
            return $this->getNamesSortedAlphabetically();
        } elseif ($request->isSortedByAge()) {
            return $this->getNamesSortedByAge();
        } else {
            return $this->getUnsortedNames();
        }
    }

    private function getNamesSortedAlphabetically(): array
    {
        return [];
    }

    private function getNamesSortedByAge(): array
    {
        return [];
    }

    private function getUnsortedNames(): array
    {
        return [];
    }
}
