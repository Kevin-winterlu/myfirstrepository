<?php 

class User_model {
    private $nama = 'Kevin Winterlu';

    public function getUser()
    {
        return $this->nama;
    }
}