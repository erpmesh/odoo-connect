<?php

use erpmesh\phplib\AbstractApplicationHandler;

// implement the handle class
class OdooHandler extends AbstractApplicationHandler
{
    private $url, $db, $uid, $username, $password;

    public function __construct($url = null, $db = null, $username = null, $password = null)
    {
        //Default
        if (!$url) $url = $_ENV['ODOO_URL'];
        if (!$db) $db = $_ENV['ODOO_DB_NAME'];
        if (!$username) $username = $_ENV['ODOO_DB_USER'] ? $_ENV['ODOO_DB_USER'] : 'admin';
        if (!$password) $password = $_ENV['ODOO_DB_PASSWORD'] ? $_ENV['ODOO_DB_PASSWORD'] : 'admin';

        $this->url = $url;
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;

        $common = ripcord::client("{$this->url}/xmlrpc/2/common");
        $this->uid = $common->authenticate($db, $username, $password, array());
    }

    public function CreatePO($docHeader, $docDetailAr)
    {
        $models = ripcord::client("{$this->url}/xmlrpc/2/object");
        $id = $models->execute_kw($this->db, $this->uid, $this->password,
            'res.partner', 'create',
            [
                ['name' => "New Partner"]
            ]
        );
        return $id;

//        $search_id = $models->execute_kw($db, $uid, $password,
//            'product.product', 'search', array(
//                array(array('default_code', '=', '7wonder'))));
//        var_dump($search_id);
//        return;
//
//        $result = $models->execute_kw($db, $uid, $password,
//            'product.template', 'search_read',
//            array(array(array('active', '=', true))),
//            array('fields'=>array('name', 'list_price'), 'limit'=>5));
//        var_dump($result);
//
//
//        $name = "New Product2";
//        $product_template_id = $models->execute_kw($db, $uid, $password,
//            'product.template', 'create',
//            array(array('name'=>$name)));

    }

    public function CreateSO($docHeader, $docDetailAr)
    {
        //create SO to your application
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }
}
