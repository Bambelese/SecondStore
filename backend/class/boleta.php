<?php 

    class Boleta{
        public $codBoleta
        public $codProduct
        public $nomProduct
        public $cantidad
        public $precioUni
        public $precioTotal
        public $codCliente
        public $nameClient
        public $apellidoPa
        public $apellidoMa
        public $nroDoc
        public $typeTarjeta
        public $fecha
        public $codClientFromProduct
        public $nameVendedor
        public $apellidoPaVendedor
        public $apellidoMaVendedor
        
        function __construct(){
            $this->Pdo = new PDO("");
        }
    }

    public function Create(){}
    public function Update(){}

?>