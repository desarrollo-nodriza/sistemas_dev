<?php

class AutenticarController extends FacturacionElectronicaAppController {
    public $uses = array('FacturacionElectronica.Autenticar');

    public function index() {
        prx('whats');
    }
}