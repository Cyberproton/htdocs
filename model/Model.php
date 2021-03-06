<?php

namespace Model;

class Model 
{
    public function load($data) 
    {
        foreach ($data as $key => $value) 
        {
            if (property_exists($this, $key)) 
            {
                $this->{$key} = $value;
            }
        }
    }

    public function validate(): bool 
    {
        return true;
    }
}