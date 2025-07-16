<?php 
    
    class Prealert
    {
        public $cod;
        private $cas;
        private $pro;
        private $trans;
        private $tipo;
        private $guia;
        private $desc;
        private $cant;
        private $val;
        private $tot;

        function __construct($cod,$cas,$pro,$trans,$tipo,$guia,$desc,$cant,$val,$tot){
           $this->cod=$cod;
           $this->cas=$cas;
           $this->pro=$pro;
           $this->trans=$trans;
           $this->tipo=$tipo;
           $this->guia=$guia;
           $this->desc=$desc;
           $this->cant=$cant;
           $this->val=$val;
           $this->tot=$tot;
        }

        public function setcod($cod)
        {
            $this->cod=$cod;
        }

        public function getcod()
        {
            return $this->cod;
        }
        
        public function setcas( $cas )
        {
            $this->cas=$cas;
        }
        public function get_cas()
        {
            return $this->cas;
        }
        
        public function setPro($pro)
        {
            $this->pro=$pro;
        }
        public function getPro()
        {
            return $this->pro;
        }
        public function setTrans($trans)
        {
            $this->trans=$trans;
        }
        public function getTrans()
        {
            return $this->trans;
        }
        public function setTipo($tipo)
        {
            $this->tipo=$tipo;
        }
        public function getTipo()
        {
            return $this->tipo;
        }
        public function setGuia($guia)
        {
            $this->guia=$guia;
        }
        public function getGuia()
        {
            return $this->guia;
        }
        public function setDesc($desc)
        {
            $this->desc=$desc;
        }
        public function getDesc()
        {
            return $this->desc;
        }
        public function setCant($cant)
        {
            $this->cant=$cant;
        }
        public function getCant()
        {
            return $this->cant;
        }
        public function setVal($val)
        {
            $this->val=$val;
        }
        public function getVal()
        {
            return $this->val;
        }
        public function settot($tot)
        {
            $this->tot=$tot;
        }
        public function gettot()
        {
            return $this->tot;
        }
        /*---------------------------METODOS-------------------------------*/
        public function create(){
            include("model/connection.php");
            /*crear la conexion e instanciar */
	        $llamar = new conexion();
	        $llamar1= $llamar->con();
        /*generar la consulta */
	        $consulta="insert into prealerta_envio (FKCOD_CAS, FKCOD_PRO, FKCOD_EMP_TRANS, FKCOD_TIPO, GUIA_PRE_ENV, DESCRIP_PRE_ENV, CANT_PRE_ENV, VALOR_PRE_ENV, VALOR_TOT_PRE_ENV, FCH_PRE_ENV) values('$this->cas','$this->pro','$this->trans','$this->tipo','$this->guia','$this->desc','$this->cant','$this->val','$this->tot','CURDATE()');";
	    /*procesar consulta */
	        $res=mysqli_query($llamar1,$consulta);
	    //respuesta
	        return $res;
        }
        
        public function read()
        {
            /*crear la conexion*/
            include("model/connection.php");
            //instanciar la clase conexion
              $llamar= new conexion();
              $llamar1= $llamar->con();
            /*generar la consulta */
            $consulta="select * from prealerta_envio;";
            /*procesar consulta */
            $res=mysqli_query($llamar1,$consulta);
            /*retornar una respuesta */
            return mysqli_fetch_all($res,MYSQLI_ASSOC);
        }//fin reporte_gral

    }    
?>