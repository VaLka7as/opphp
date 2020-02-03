<?php

class transport
{
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
    }

    public function show()
    { //geteris
        $data [] = $this->marke;
        $data [] = $this->modelis;

        return $data;
    }

    public function kaina($kaina)
    {
        $this->kaina = $kaina;
    }

    public function svoris($svoris)
    {
        $this->svoris = $svoris;
    }

    public function variklis($variklis)
    {
        $this->variklis = $variklis;
    }

    public function galingumas($galingumas)
    {
        $this->galingumas = $galingumas;
    }

    public function greitis($greitis)
    {
        $this->greitis = $greitis;
    }

    public function zmoniusk($zmoniusk)
    {
        $this->zmoniusk = $zmoniusk;
    }

    public function show1()
    {
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
$transport1->kaina('500');
$transport1->galingumas('440kw')
?>
<ul>
    <?php foreach ($transport1->show() as $item):?>
    <li><?=$item;?></li>
    <?php endforeach;?>
    <?php foreach ($transport1->show1() as $item):?>
    <li><?=$item;?></li>
    <?php endforeach;?>
</ul>
