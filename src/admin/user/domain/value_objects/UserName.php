<?php

namespace Src\admin\user\domain\value_objects;

class UserName
{
    private string $name;

    // Validaciones
    public function __construct(string $name)
    {
        if (strlen($name < 3)) {
            throw new \InvalidArgumentException('El usuario debe contener mas de tres caracteres');
        }

        $this->name = $name;
    }

    // Retorna valor validado
    public function value(): string
    {
        return $this->name;
    }
}
