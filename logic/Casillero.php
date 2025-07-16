<?php 
    include("model/connection.php");
    
    class Casillero
    {
        public $cod;
        private $ema;
        private $nom;
        private $ape;
        private $nro;
        private $tipo;
        private $tlf;
        private $dep;
        private $mun;
        private $dir;
        private $det;
        private $con;

        function __construct($cod,$ema,$nom,$ape,$nro,$tipo,$tlf,$dep,$mun,$dir,$det,$con){
            $this->cod=$cod;
            $this->ema=$ema;
            $this->nom=$nom;
            $this->ape=$ape;
            $this->nro=$nro;
            $this->tipo=$tipo;
            $this->tlf=$tlf;
            $this->dep=$dep;
            $this->mun=$mun;
            $this->dir=$dir;
            $this->det=$det;
            $this->con=$con;
        }

        public function setcod($cod)
        {
            $this->cod=$cod;
        }

        public function getcod()
        {
            return $this->cod;
        }

        public function setema($ema){
            $this->ema=$ema;
        }

        public function getema(){
            return $this->ema;
        }

        public function setnom($nom){
            $this->nom=$nom;
        }
        
        public function getnom(){
            return $this->nom;  
        }
    
        public function setape($ape){
            $this->ape=$ape;
        }
        public function getape(){
            return $this->ape;
        }

        public function setnro($nro){
            $this->nro=$nro;
        }
        public function getnro(){
            return $this->nro;
        }

        public function settipo($tipo){
            $this->tipo=$tipo;
        }
        public function gettipo(){
            return $this->tipo;
        }

        public function settlf($tlf){
            $this->tlf=$tlf;
        }
        public function gettlf(){
            return $this->tlf;
        }

        public function setdep($dep){
            $this->dep=$dep;
        }
        public function getdep(){
            return $this->dep;
        }

        public function setmun($mun){
            $this->mun=$mun;
        }
        public function getMun(){
            return $this->mun;
        }

        public function setdir($dir){
            $this->dir=$dir;
        }
        public function getDir(){
            return $this->dir;
        }

        public function setdet($det){
            $this->det=$det;
        }
        public function getdet(){
            return $this->det;
        }

        public function setcon($con){
            $this->con=$con;
        }
        public function getcon(){
            return $this->con;
        }

        /*---------------------------METODOS-------------------------------*/
        public function create(){
            /*crear la conexion e instanciar */
	        $llamar = new conexion();
	        $llamar1= $llamar->con();
        /*generar la consulta */
	        $consulta="insert into CASILLERO (PKCOD_CAS ,EMA_CAS,NOM_CAS,APE_CAS,NRO_ID_CAS,FKCOD_TIP_DOC,TLF_CAS,FKCOD_DEP,FKCOD_MUN,DIR_CAS,DET_DIR_CAS,CON_CAS) values('$this->cod','$this->ema','$this->nom','$this->ape','$this->nro','$this->tipo','$this->tlf','$this->dep','$this->mun','$this->dir','$this->det','$this->con');";
	    /*procesar consulta */
	        $res=mysqli_query($llamar1,$consulta);
	    //respuesta
	        return $res;
        }
        
        public function select_tipo_documento()
	    {
	        /*crear la conexion*/
	        /*instanciar la clase conexion*/
	        $llamar= new conexion();
	        $llamar1= $llamar->con();
	        /*generar la consulta */
	        $consulta="select * from tipo_documento";
	        /*retornar consulta */
	        return $combo_rol=mysqli_query($llamar1,$consulta);  
	    }//fin metodo combo cargo

        public function select_departamento()
	    {
	        /*crear la conexion*/
	        /*instanciar la clase conexion*/
	        $llamar= new conexion();
	        $llamar1= $llamar->con();
	        /*generar la consulta */
	        $consulta="select * from departamento";
	        /*retornar consulta */
	        return $combo_rol=mysqli_query($llamar1,$consulta);  
	    }//fin metodo combo cargo

        public function select_municipio()
	    {
	        /*crear la conexion*/
	        /*instanciar la clase conexion*/
	        $llamar= new conexion();
	        $llamar1= $llamar->con();
	        /*generar la consulta */
	        $consulta="select * from municipio";
	        /*retornar consulta */
	        return $combo_rol=mysqli_query($llamar1,$consulta);  
	    }//fin metodo combo cargo

        public function verificar($ema,$nro)
	    {
	    /*instanciar la clase conexion*/
	        $llamar= new conexion();
	        $llamar1= $llamar->con();
	    /*generar la consulta */
	        $consulta="SELECT *FROM CASILLERO WHERE EMA_CAS = '$ema' && NRO_ID_CAS='$nro'";
	        return $res = mysqli_query($llamar1,$consulta);  
	    }//FIN VERIFICAR

        public function access($ema,$con)
	    {
	        /*instanciar la clase conexion*/
	        $llamar= new conexion();
	        $llamar1= $llamar->con();
	        /*generar la consulta */
	        $consulta= " SELECT *FROM CASILLERO WHERE EMA_CAS = '$ema' AND CON_CAS = '$con'";
	        return $res = mysqli_query($llamar1,$consulta);
	    }//FIN ACCESO

       
    }    
?>