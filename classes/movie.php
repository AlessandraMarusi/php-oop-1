<?php
class Movie {
    protected $title;
    protected $genre;
    protected $rate;
    protected $pg;
    function __construct($_title, $_genre, $_rate, $_pg) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->rate = $_rate;
        $this->pg = $_pg;
    }

    public function setPg(){
        if($this->pg = 0){
            $this->pg = 'T: Film adatto a tutti.';
        }
        else if ($this->pg = 6){
            $this->pg = '6+: Non adatto ai minori di 6 anni.';
        }
        else if ($this->pg = 14){
            $this->pg = '14+: Vietato ai minori di 14 anni; gli spettatori che hanno compiuto 12 anni sono ammessi alla proiezione se accompagnati da un genitore o da un tutore.';
        }
        else if ($this->pg = 18){
            $this->pg = '18+: Vietato ai minori di 18 anni; gli spettatori che hanno compiuto 16 anni sono ammessi alla proiezione se accompagnati da un genitore o da un tutore.';
        }
    }
    public function getTitle(){
        return $this->title;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getRate(){
        return $this->rate;
    }
    public function getPg(){
        return $this->pg;
    }
}
?>