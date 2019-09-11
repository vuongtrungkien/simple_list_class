<?php


class ArrayList
{
    public $arrayList;

    public function arrList($arr="")
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        }
        $this->arrayList = array();
    }

    public function add($data)
    {
        array_push($this->arrayList, $data);
    }

    public function isInteger($toCheck)
    {
        return is_numeric($toCheck);
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        }
        die("ERROR in ArrayList.get");
    }

}