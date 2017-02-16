<?php  // classes pro fungování databáze
class Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=bc_eshop;charset=utf8', 'root', ''); // connection string
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // remove for prodution
    }

    public function insertproducts($name, $price, $size, $color)
    {
        $stmt = $this->db->prepare('INSERT INTO products (name, price, size, color) VALUES (?, ?, ?, ?)'); // names of columns from database
        $stmt->execute([$name, $price, $size, $color]);
        return $this->db->lastInsertId();
    }

    public function getproducts()
    {
        $stmt = $this->db->prepare('SELECT id, name, price, size, color FROM products'); // vybereme položky z tabulky "products"
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getproduct($id)
    {
        $stmt = $this->db->prepare('SELECT id, name, price, size, color FROM products WHERE id = ?'); // vybereme položky z tabulky "products"
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function insertOrder($userid)
    {
        $stmt = $this->db->prepare('INSERT INTO orders (user_id) VALUES (?)');
        $stmt->execute([$userid]);
        return $this->db->lastInsertId();
    }

    public function insertProductsToOrder($product_id, $order_id)
    {
        $stmt = $this->db->prepare('INSERT INTO orders_have_products (product_id, order_id) VALUES (?, ?)');
        $stmt->execute([$product_id, $order_id]);
    }

}