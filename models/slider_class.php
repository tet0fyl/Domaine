<?php

class slider{

    private $_img;
    private $_prefix;


    public function __construct($prefix){
        $this->_prefix = $prefix;
    }

    public function hydrate($arrMedia){
        foreach($arrMedia as $key=>$value){
            $setterName = "set".ucfirst($key);
            if (method_exists($this, $setterName)){
                $this->$setterName($value);
            }
        }
    }

    /** SETTERS **/

    public function setMedia($data){
        $this->setImgSlider($data);

    }

    public function setId_evenement($data){
        $this->setImgSlider($data);
    }

    public function setId_actualite($data){
        $this->setImgSlider($data);
    }

    public function setImgSlider($data){
        $this->_img = $this->_prefix . $data;
    }


    /** GETTERS **/
    public function getImg(){
        return	$this->_img;
    }
}