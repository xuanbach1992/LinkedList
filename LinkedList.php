<?php

include_once "Node.php";

class LinkedList
{
    public $firstNode;
    public $lastNode;
    public $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function addFisrtNode($data)
    {
        $node = new Node($data);
        if ($this->firstNode) {
//            $this->lastNode = $this->firstNode;
            $node->link = $this->firstNode;
        }
        if (!$this->lastNode) {
            $this->lastNode = $node;
        }
        $this->firstNode = $node;
        $this->count++;
    }

    public function addLastNode($data)
    {
        $node = new Node($data);
        if ($this->lastNode) {
            $this->lastNode = $node;
        }
        $this->firstNode = $node;
        $this->count++;
    }

    public function addNode($index, $data)
    {
        if ($index == 0) {
            $this->addFisrtNode($data);
        } else {
            $node = new Node($data);
            $previous = $this->firstNode;
            $current = $this->firstNode;
            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->link;
            }
            $node->link = $current;
            $previous->link = $node;
        }
        $this->count++;
    }
}