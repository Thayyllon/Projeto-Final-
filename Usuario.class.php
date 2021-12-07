<?php

    class Usuario{
        private $modelo;
        private $fabricante;
        private $cor;
        private $placa;
        private $ano;
        

        public function SetIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function GetIdUsuario(){
            return $this->idUsuario;
        }


        public function SetModelo($modelo){
            $this->modelo = $modelo;
        }

        public function GetModelo(){
            return $this->modelo;
        }


        public function SetFabricante($fabricante){
            $this->fabricante = $fabricante;
        }

        public function GetFabricante(){
            return $this->fabricante;
        }


        public function SetCor($cor){
            $this->cor = $cor;
        }

        public function GetCor(){
            return $this->cor;
        }


        public function SetPlaca($placa){
            $this->placa = $placa;
        }

        public function GetPlaca(){
            return $this->placa;
        }

        public function SetAno($ano){
            $this->ano = $ano;
        }

        public function GetAno(){
            return $this->ano;
        }


    }


?>