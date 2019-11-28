<?php

class genre{

    private $_id;
    private $_libelle;
    private $_selected = false;


    public function __construct(){
    }

    public function hydrate($arrEvenement){
        foreach($arrEvenement as $key=>$value){
            $setterName = "set".ucfirst($key);
            if (method_exists($this, $setterName)){
                $this->$setterName($value);
            }
        }
    }

    /** SETTERS **/
    public function setId_genre($data){
        $this->_id = $data;
    }

    public function setLibele($data){
        $this->_libelle = $data;
    }

    public function setSelected($data){
        $this->_selected = $data;
    }

    /** GETTERS **/
    public function getId(){
        return $this->_id;
    }

    public function getLibelle(){
        return $this->_libelle;
    }

    public function getSelected(){
        return $this->_selected;
    }
}