<?php
require_once('Principal.class.php');

    class Funcionario extends Principal{

        private $cargo, $salario;


    

        /**
         * Get the value of cargo
         */ 
        public function getCargo()
        {
                return $this->cargo;
        }

        /**
         * Set the value of cargo
         *
         * @return  self
         */ 
        public function setCargo($cargo)
        {
                $this->cargo = $cargo;

                return $this;
        }

        /**
         * Get the value of salario
         */ 
        public function getSalario()
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         *
         * @return  self
         */ 
        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }
        //metodos especificos
        public function validar($n, $t, $e, $c, $s)
        {
            $this->setNome($n);
            $this->setTelefone($t);
            $this->setEmail($e);
            $this->setCargo($c);
            $this->setSalario($s);
        }

        public function exibir()
        {
            echo "Funcionário: {$this->getNome()}<br>";
            echo "Telefone: {$this->getTelefone()}<br>";
            echo "Email: {$this->getEmail()}<br>";
            echo "Cargo: {$this->getCargo()}<br>";
            echo "Salário: {$this->getSalario()}<br>";
            // $this->enviarEmail()."<br>";
        }
        public function enviarEmail()
        {
            echo "Dados do pagamento: {$this->getSalario()}<br><br> ";
        }
}