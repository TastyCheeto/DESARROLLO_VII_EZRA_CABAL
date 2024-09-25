<?php

require_once 'Empleado.php';
require_once 'Evaluable.php';

class Gerente extends Empleado implements Evaluable {
    private $departamento;
    private $bono;

    // Constructor
    public function __construct($nombre, $idEmpleado, $salarioBase, $departamento) 
    {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->departamento = $departamento;
        $this->bono = 0;
    }

    // Getter y Setter para $departamento
    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    // Método para asignar bono
    public function asignarBono($monto) {
        $this->bono = $monto;
    }

    // Implementación del método evaluarDesempenio de la interfaz Evaluable
    public function evaluarDesempenio() {
        // Lógica de evaluación específica para Gerente
        return "Evaluación del desempeño del gerente: Todo en orden.";
    }
}
