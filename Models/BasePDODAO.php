<?php

declare(strict_types=1);

namespace Models;

use PDO;
use PDOStatement;

abstract class BasePDODAO
{
    #region Attributes
    private ?PDO $db = null; // Assure que la propriété est initialisée à null par défaut
    #endregion

    #region Constructor
    // No constructor in this class
    #endregion

    #region Methods
    protected function execRequest(string $sql, array $params = null): PDOStatement|false
    {
        $stmt = $this->getDB()->prepare($sql);
        if ($params !== null) {
            foreach ($params as $key => $value) {
                $stmt->bindValue($key, $value);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    private function getDB(): PDO
    {
        // Vérifie si $db n'est pas encore initialisé, sinon l'initialise
        if ($this->db === null) {
            $this->db = new PDO(
                \Config\Config::get('dsn'),
                \Config\Config::get('user'),
                \Config\Config::get('pass')
            );
        }
        return $this->db;
    }
    #endregion
}
