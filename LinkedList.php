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
            $this->lastNode = $this->firstNode;
            $node->link = $this->firstNode;
        }
        $this->firstNode = $node;
        $this->count++;
    }

    public function addLastNode($data)
    {
        $node = new Node($data);
        $node->link = $this->firstNode;
        $this->firstNode = $node;
        if (!$this->lastNode) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    function size()
    {
        return $this->count;
    }

    function addNode($index, $element)
    {
        if ($index <= 1) {
            $this->addFisrtNode($element);
        } else if ($index >= $this->size()) {
            $this->addLastNode($element);
        } else {
            $node = new Node($element);
            $current = $this->firstNode;
            $previous = $this->firstNode;
            for ($i = 1; $i < $index; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $node->next = $current;
            $previous->next = $node;
            $this->count++;
        }
    }

    function showList()
    {
        $list = [];
        $current = $this->firstNode;
        while ($this->lastNode) {
            array_push($list, $current->getData());
            $current = $current->link;
        }
        return $list;
    }

    public function emptyList()
    {
        $this->firstNode = NULL;
    }
}