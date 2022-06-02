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
        $consulta=$this->db->query("SELECT * FROM PRODUCTOS");
        while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
        {
            $this->productos[]=$filas;
        }
        return $this->productos;
    }
}