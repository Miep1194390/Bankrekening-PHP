<?php
require_once('connect.php');


class Bankrekening
{
    private $persoon;
    private $rekeningnummer;
    private $saldo;
    private $kredietlimiet;

    public function __construct($persoon, $rekeningnummer, $saldo = 0, $kredietlimiet = 0)
    {
        $this->persoon = $persoon;
        $this->rekeningnummer = $rekeningnummer;
        $this->saldo = $saldo;
        $this->kredietlimiet = $kredietlimiet;
    }

    public function getPersoon()
    {
        return $this->persoon;
    }

    public function getRekeningnummer()
    {
        return $this->rekeningnummer;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getKredietlimiet()
    {
        return $this->kredietlimiet;
    }

    public function setPersoon($persoon)
    {
        $this->persoon = $persoon;
    }

    public function setRekeningnummer($rekeningnummer)
    {
        $this->rekeningnummer = $rekeningnummer;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function setKredietlimiet($kredietlimiet)
    {
        $this->kredietlimiet = $kredietlimiet;
    }

    public function storten($bedrag)
    {
        $this->saldo += $bedrag;
    }

    public function opnemen($bedrag)
    {
        $maximaalOpneembaarBedrag = $this->saldo + $this->kredietlimiet;
        if ($bedrag <= $maximaalOpneembaarBedrag) {
            $this->saldo -= $bedrag;
            return true;
        }
        return false;
    }
}

?>