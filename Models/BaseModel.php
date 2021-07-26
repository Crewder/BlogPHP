<?php


class BaseModel
{

    public function hydrate(array $data)
    {
        foreach ($data as $attribut => $value) {
            $method = 'set' . ucfirst($attribut);

            if (is_callable([$this, $method])) {
                $this->$method($value);
            }
        }
    }

}