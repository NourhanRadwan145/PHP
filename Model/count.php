<?php
class Count {
    private $counter;

    public function __construct() {
        $this->counter = 0;
    }

    public function increment() {
        $this->counter++;
    }

    public function getCounter() {
        return $this->counter;
    }
}
?>
