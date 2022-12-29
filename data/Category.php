<?php
class Category
{
    private string $name;
    private bool $expensive;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {

        if (trim($name) != "") {
            $this->name = $name;
        } else {
            $this->name = "kosong";
        }
    }

    public function  isexpensive()
    {
        return $this->expensive;
    }

    public function setexpensive(bool $expensive)
    {
        $this->expensive = $expensive;
    }
}
