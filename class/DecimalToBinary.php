<?php
include "class/Stack.php";

class DecimalToBinary implements Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 100)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        if (!$this->isFull()){
            array_unshift($this->stack, $data);
        } else {
            echo "Stack is full now";
        }
    }

    public function pop()
    {
        if ($this->isEmpty()){
            echo "Stack is empty";
        } else {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function isFull()
    {
        return count($this->stack) == $this->limit;
    }

    public function display()
    {
        foreach ($this->stack as $item) {
            echo $item;
        }
    }
}