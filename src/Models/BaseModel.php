<?php
declare(strict_types=1);


class BaseModel
{

    public function hydrate(array $data) : void
    {
        foreach ($data as $attribut => $value) {
            $method = 'set' . ucfirst($attribut);

            if (is_callable([$this, $method])) {
                $this->$method($value);
            }
        }
    }

}