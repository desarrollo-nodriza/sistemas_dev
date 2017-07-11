<?php
App::uses('Component', 'Controller');

include( APP . 'Plugin/FacturacionElectronica/Vendor/Sii/Autenticacion.php');
include( APP . 'Plugin/FacturacionElectronica/Vendor/Sii.php');
include( APP . 'Plugin/FacturacionElectronica/Vendor/Log.php');
include( APP . 'Plugin/FacturacionElectronica/Vendor/FirmaElectronica.php');
include( APP . 'Plugin/FacturacionElectronica/Vendor/XML.php');
include( APP . 'Plugin/FacturacionElectronica/Vendor/Estado.php');

class AutenticarComponent extends Component
{	
	

	public function initialize(Controller $controller)
	{	
		$this->Controller = $controller;
		// solicitar token
		$config = [
		    'firma' => [
		    	'file' => '',
		        //'data' => '', // contenido del archivo certificado.p12
		        'pass' => '',
		    ],
		];

		// trabajar en ambiente de certificación
		\sasco\LibreDTE\Sii::setAmbiente(\sasco\LibreDTE\Sii::CERTIFICACION);

		// trabajar con maullin para certificación
		\sasco\LibreDTE\Sii::setServidor('maullin');

		\sasco\LibreDTE\Log::setBacktrace(true);
		
		// solicitar token
		$token = \sasco\LibreDTE\Sii\Autenticacion::getToken($config['firma']);
		//var_dump($token);

		// si hubo errores se muestran
		foreach (\sasco\LibreDTE\Log::readAll() as $error) {
		    echo $error,"\n";
		}
	}


}