<?php


trait Data
{
    public string $name;
    public int $id;

    public function getName($name)
    {
        return $name;
    }
    public function getId($id)
    {
        return $id;
    }
}
