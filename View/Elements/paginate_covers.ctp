<?php
	//Primera p‡gina
		echo $this->Paginator->first(
			'' . __('<<'),
			NULL,
			$this->Html->link('' . __('<<'), array()),
			NULL
		);
		echo ' ';
	//Anterior
		echo $this->Paginator->prev(
			__('< Anterior'),
			NULL,
			__('< Anterior'),
			NULL
		);
		echo ' ';
		echo $this->Paginator->numbers(array('modulus'=>2,'separator' => ' ','first' => 2, 'last' => 2));
		echo ' ';
	//Siguiente
		echo $this->Paginator->next(
			__('Siguiente >'),
			NULL,
			__('Siguiente >'),
			NULL
		);
		echo ' ';
	//Ultima p‡gina
		echo $this->Paginator->last(
			__('>>'),
			NULL,
			__('>>'),
			NULL
		);
?>