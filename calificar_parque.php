<?php
	require('./configs/include.php');
	
	class c_calificar_parque extends super_controller {

	public function calificar(){
		$calificacion=new calificacion($this->post);
		if(is_empty($calificacion->get('valor'))){
			throw_exception("Debe ingresar una calificación");
		}
		
		if((($calificacion->get('valor'))<1)&&($calificacion->get('valor'))>5){
			throw_exception("Calificación inválida");
		}

		$this->orm->connect();
		$this->orm->insert_data("normal", $calificacion);
		$this->orm->close();

		$this->type_warning="sucess";
		$this->msg_warning="Claificación registrada";

		$this->temp_aux='message.tpl';
		$this->engine->assign('type_warning',$this->type_warning);
		$this->engine->assign('msg_warning',$this->msg_warning);
	}



	public function display()
	{
		$cod['parque']['codigo']=$_GET["codigo"];
		$options['parque']['lvl2']="one";
		
		$this->orm->connect();
		$this->orm->read_data(array("parque"),$options,$cod);
		$parques = $this->orm->get_objects("parque");
		$this->engine->assign('parques',$parques[0]);
		$this->engine->assign('fecha',date("Y-m-d"));

		$this->orm->close();
		$this->engine->assign('title','Calificar parque');

		$this->engine->display('header.tpl');
		$this->engine->display($this->temp_aux);
		if(isset($_GET["codigo"])){
			$this->engine->display('calificar_parque.tpl');
		}else{
			$this->engine->display('index.tpl');
		}
		$this->engine->display('footer.tpl');
	}


		public function run(){
		try{
			if(isset($this->get->option)){
				$this->{$this->get->option}();
			}
		}catch(Exception $e){
			$this->error=1;			
			$this->msg_warning=$e->getMessage();
			$this->engine->assign('type_warning',$this->type_warning);
			$this->engine->assign('msg_warning',$this->msg_warning);
			$this->temp_aux='message.tpl';
		}
		$this->display();
	}
	}

	$call = new c_calificar_parque();
	$call->run();
?>