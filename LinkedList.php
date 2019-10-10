<?php

include_once "Node.php";

class LinkedList
{
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFisrtNode($data)
    {
        $node = new Node($data);
        if ($this->firstNode) {
            $this->lastNode = $this->firstNode;
            $node->link = $this->firstNode;
        }
        $this->firstNode = $node;
    }

    public function addLastNode($data)
    {
        $node=new Node($data){

    }
    }
}