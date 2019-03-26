<?php

class IPDetails
{
    protected $connection;
    protected $details;

    public function __construct()
    {
        $dbhost = "";
        $dbuser = "";
        $dbpassword = "";
        $dbname = "";
        $this->connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
    }

    public function get_details()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
        return $this->details = json_decode($json);
    }

    public function add_details()
    {
        try
        {
            $stmt = $this->connection->prepare("INSERT INTO portfolio_logs (ip, geo, time) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $this->details->ip, $this->details->loc, date("Y-m-d H:i:s"));
            $stmt->execute();
            $stmt->close();
            $this->connection->close();
        } catch (Exception $ex)
        {
            echo $ex->getMessage();
            $stmt->close();
            $this->connection->close();
        }
    }
}