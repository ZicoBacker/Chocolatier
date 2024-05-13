<?php

declare(strict_types=1);

namespace School\app;

use PDO;

abstract class Model
{
    protected ?PDO $PDO = null;

    protected function getConn(): PDO
    {
        if (is_null($this->PDO)) {
            $this->PDO = new PDO($_ENV['DSN']);

            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->PDO;
    }
}