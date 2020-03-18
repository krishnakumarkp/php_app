<?php declare(strict_types=1);
namespace Application\Config;

class Config 
{
    private $productionServers = array('domain.com');
    private $stagingServers    = array('staging.domain.com');
    private $localServers      = array('192.168.100.25');

    public $dbHost;       // Database server
    public $dbName;       // Database name
    public $dbUsername;   // Database username
    public $dbPassword;   // Database password

    public function __construct()
    {
        
        $this->local();
       
    }

    private function local()
    {
        ini_set('display_errors', '1');
        ini_set('log_errors', '1');
        error_reporting(E_ALL);
        define('WEB_ROOT', '/');
        //mysqli_report(MYSQLI_REPORT_ALL);
        
        $this->dbHost       = 'blog-mysql';
        $this->dbName       = 'blogdb';
        $this->dbUsername   = 'root';
        $this->dbPassword   = '12345678';
    }


    public function get($key)
    {
        return $this->$key;
    }
}