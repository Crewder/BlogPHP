<?php
declare(strict_types=1);

namespace App\Database;

class DbConfig
{
    private string $login;
    private string $pass;
    private string $db;

    public function __construct($db = 'blog', $login = 'root', $pass = '')
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->db = $db;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }


    /**
     * @return string
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * @return string
     */

    public function getLogin(): string
    {
        return $this->login;
    }


}