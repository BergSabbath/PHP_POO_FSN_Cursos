<?php

require_once('Principal.class.php');

    class Cliente extends Principal{

        private $site;


    

        /**
         * Get the value of site
         */ 
        public function getSite()
        {
                return $this->site;
        }

        /**
         * Set the value of site
         *
         * @return  self
         */ 
        public function setSite($site)
        {
                $this->site = $site;

                return $this;
        }
}