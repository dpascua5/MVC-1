class productosModelo
{
    private $db;
    private $productos;
    public function __construct()
    {
        require_once("conectar.php");
        $this->db=conectar::conexion();
        $this->productos=array();
        

    }
    public function getProductos()
    {

    }
}