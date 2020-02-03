<?php

class transport{
    pRiVaTe $modelis;
    private $marke;
    private $kaina;
    private $svoris;
    private $variklis;
    private $galingumas;
    private $greitis;
    private $aprasymas;
    private $zmoniusk;

    public function __construct($marke, $modelis)
    {
    $this->marke = $marke;
    $this->modelis = $modelis;
    $this->kaina = $kaina;
    $this->svoris = $svoris;
    $this->variklis = $variklis;
    $this->galingumas = $galingumas;
    $this->greitis = $greitis;
    $this->zmoniusk = $zmoniusk;
    }

    public function show() { //geteris
        $data [] = $this->marke;
        $data [] = $this->modelis;
        $data [] = $this->kaina;
        $data [] = $this->svoris;
        $data [] = $this->variklis;
        $data [] = $this->galingumas;
        $data [] = $this->greitis;
        $data [] = $this->zmoniusk;


        return $data;
    }

}

$transport1 = new transport('Volkswagen', 'Golf');

?>
<ul>
    <?php foreach ($transport1->show() as $item):?>
    <li><?=$item;?></li>
    <?php endforeach;?>
</ul>
