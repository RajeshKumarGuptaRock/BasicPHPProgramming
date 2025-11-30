<?php

class Stack
{
    private $stack = [];
    private $top = -1;

    public function push($value)
    {
        $this->top++;
        $this->stack[$this->top] = $value;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return null; // or throw exception
        }
        $value = $this->stack[$this->top];
        unset($this->stack[$this->top]);
        $this->top--;
        return $value;
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->stack[$this->top];
    }

    public function isEmpty()
    {
        return $this->top < 0;
    }
}

// ======= TEST =======
$stack = new Stack();
$stack->push(10);
$stack->push(20);
$stack->push(30);

echo $stack->pop() . PHP_EOL; // 30
echo $stack->peek() . PHP_EOL; // 20
