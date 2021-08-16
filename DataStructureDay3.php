<?php

interface TreeInterface
{
    //public function init($array);
    // public function getNode($id);
    // public function getNodes($id);
    // public function getParent($id);
    public function get($array);
    public function toString(); // Print nested <ul, li>

    // you can add more functions
}

class Node
{
    protected $id;
    protected $parentId;
    protected $name;
    protected $directNodes = [
        ['id' => 1, 'name' => "Node A",  'parent_id' => 0],
        ['id' => 2, 'name' => "Node B",  'parent_id' => 0],
        ['id' => 3, 'name' => "Node A1", 'parent_id' => 1],
        ['id' => 4, 'name' => "Node A2", 'parent_id' => 1],
    ];
    // you can add more attributes or functions
}

class Tree extends Node implements TreeInterface
{

    public function toString()
    {
        $text = "<ul>";
        for ($i = 0; $i < count($this->directNodes); $i++) {
            if ($this->directNodes[$i]['parent_id'] == 0) {
                $text = $text . "<li>" . $this->directNodes[$i]['name'] . "<ul>";
                foreach ($this->directNodes as $arr) {
                    if ($arr['parent_id'] == $this->directNodes[$i]['id']) {
                        $text = $text . " <li>" . $arr['name'] . "</li>";
                    }
                }
                $text = $text . "</ul>";
            }
        }
        $text = $text . "</li><ul>";
        echo $text;
    }
    public function get($id)
    {
        foreach ($this->directNodes as $arr) {
            if ($arr["id"] == $id) {
                return $arr;
            }
        }
    }
}





$tree = new Tree();

var_dump($tree->get(4));

$tree->toString();
?>
