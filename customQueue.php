<?php

class Queue
{
    private $queue = [];
    private $front = 0;
    private $rear = 0;

    public function enqueue($value)
    {
        $this->queue[$this->rear] = $value;
        $this->rear++;
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null; // or throw
        }
        $value = $this->queue[$this->front];
        unset($this->queue[$this->front]);
        $this->front++;
        return $value;
    }

    public function front()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->queue[$this->front];
    }

    public function isEmpty()
    {
        return $this->front === $this->rear;
    }
}

// ======= TEST =======
$queue = new Queue();
$queue->enqueue(100);
$queue->enqueue(200);
$queue->enqueue(300);

echo $queue->dequeue() . PHP_EOL; // 100
echo $queue->front() . PHP_EOL;   // 200
