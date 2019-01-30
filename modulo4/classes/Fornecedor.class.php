<?php

require_once('Principal.class.php');

    class Fornecedor extends Principal{

        private $produtos, $representante;




        /**
         * Get the value of produtos
         */ 
        public function getProdutos()
        {
                return $this->produtos;
        }

        /**
         * Set the value of produtos
         *
         * @return  self
         */ 
        public function setProdutos($produtos)
        {
                $this->produtos = $produtos;

                return $this;
        }

        /**
         * Get the value of representante
         */ 
        public function getRepresentante()
        {
                return $this->representante;
        }

        /**
         * Set the value of representante
         *
         * @return  self
         */ 
        public function setRepresentante($representante)
        {
                $this->representante = $representante;

                return $this;
        }
}