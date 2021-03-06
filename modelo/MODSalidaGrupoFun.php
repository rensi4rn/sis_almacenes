<?php
/**
*@package pXP
*@file gen-MODSalidaGrupoFun.php
*@author  (admin)
*@date 18-10-2013 02:54:34
*@description Clase que envia los parametros requeridos a la Base de datos para la ejecucion de las funciones, y que recibe la respuesta del resultado de la ejecucion de las mismas
*/

class MODSalidaGrupoFun extends MODbase{
	
	function __construct(CTParametro $pParam){
		parent::__construct($pParam);
	}
			
	function listarSalidaGrupoFun(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='alm.ft_salida_grupo_fun_sel';
		$this->transaccion='SAL_GRITFU_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion
				
		//Definicion de la lista del resultado del query
		$this->captura('id_salida_grupo_fun','int4');
		$this->captura('id_funcionario','int4');
		$this->captura('id_salida_grupo_item','int4');
		$this->captura('cantidad_sol','numeric');
		$this->captura('observaciones','varchar');
		$this->captura('estado_reg','varchar');
		$this->captura('fecha_reg','timestamp');
		$this->captura('id_usuario_reg','int4');
		$this->captura('fecha_mod','timestamp');
		$this->captura('id_usuario_mod','int4');
		$this->captura('usr_reg','varchar');
		$this->captura('usr_mod','varchar');
		$this->captura('desc_funcionario1', 'text');
		
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function insertarSalidaGrupoFun(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='alm.ft_salida_grupo_fun_ime';
		$this->transaccion='SAL_GRITFU_INS';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_funcionario','id_funcionario','int4');
		$this->setParametro('id_salida_grupo_item','id_salida_grupo_item','int4');
		$this->setParametro('cantidad_sol','cantidad_sol','numeric');
		$this->setParametro('observaciones','observaciones','varchar');
		$this->setParametro('estado_reg','estado_reg','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function modificarSalidaGrupoFun(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='alm.ft_salida_grupo_fun_ime';
		$this->transaccion='SAL_GRITFU_MOD';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_salida_grupo_fun','id_salida_grupo_fun','int4');
		$this->setParametro('id_funcionario','id_funcionario','int4');
		$this->setParametro('id_salida_grupo_item','id_salida_grupo_item','int4');
		$this->setParametro('cantidad_sol','cantidad_sol','numeric');
		$this->setParametro('observaciones','observaciones','varchar');
		$this->setParametro('estado_reg','estado_reg','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function eliminarSalidaGrupoFun(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='alm.ft_salida_grupo_fun_ime';
		$this->transaccion='SAL_GRITFU_ELI';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_salida_grupo_fun','id_salida_grupo_fun','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
}
?>