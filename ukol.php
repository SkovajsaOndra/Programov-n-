<?php

class Auto {
    public $znacka;
    public $model;
    private $rokVyroby;

    public function __construct($znacka, $model, $rokVyroby) {
        $this->znacka = $znacka;
        $this->model = $model;
        $this->nastavRokVyroby($rokVyroby);
    }

    public function ziskejRokVyroby() {
        return $this->rokVyroby;
    }

    public function nastavRokVyroby($rok) {
        if ($rok > 1885) { // První auto bylo vynalezeno kolem tohoto roku
            $this->rokVyroby = $rok;
        } else {
            echo "Neplatný rok výroby.<br>";
        }
    }

    public function zacitJizdu() {
        echo "Začínám jízdu autem: {$this->znacka} {$this->model}.<br>";
    }

    public function zaparkovat() {
        echo "Auto {$this->znacka} {$this->model} bylo zaparkováno.<br>";
    }
}

class Ridic {
    public $jmeno;
    public $vek;
    public $auto;

    public function __construct($jmeno, $vek, $auto) {
        $this->jmeno = $jmeno;
        $this->vek = $vek;
        $this->auto = $auto;
    }

    public function predstavSe() {
        echo "Ahoj, jmenuji se {$this->jmeno} a je mi {$this->vek} let.<br>";
    }

    public function vlastnimAuto() {
        echo "Jsem řidič auta: {$this->auto->znacka} {$this->auto->model}, vyrobeného v roce {$this->auto->ziskejRokVyroby()}.<br>";
    }

    public function natankovat() {
        echo "Auto {$this->auto->znacka} {$this->auto->model} bylo natankováno.<br>";
    }
}

$auto1 = new Auto("Škoda", "Octavia", 2018);

$ridic1 = new Ridic("Petr", 30, $auto1);

$ridic1->predstavSe();
$ridic1->vlastnimAuto();

$auto1->nastavRokVyroby(2020);
$ridic1->vlastnimAuto();

$auto1->zacitJizdu();
$auto1->zaparkovat();
$ridic1->natankovat();

?>
