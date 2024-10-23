<?php

declare(strict_types=1);

namespace Models;


require_once("Models/BasePDODAO.php");


use PDO;

class UnitDAO extends BasePDODAO
{

    // Récupère toutes les unités
    public function getAll(): array
    {
        $sql = "SELECT * FROM units";
        $stmt = $this->execRequest($sql);

        $units = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $units[] = new Unit(
                $row['id'] ?? null,
                $row['name'],
                (int) $row['cost'],
                $row['origin'],
                $row['url_img']
            );
        }
        return $units;
    }

    // Récupère une unité par son ID
    public function getByID(int $idUnit): ?Unit
    {
        $sql = "SELECT * FROM units WHERE id = :id";
        $stmt = $this->execRequest($sql, [':id' => $idUnit]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Unit(
                $row['id'] ?? null,
                $row['name'],
                (int) $row['cost'],
                $row['origin'],
                $row['url_img']
            );
        }

        return null; // Si aucune unité n'est trouvée
    }
}
