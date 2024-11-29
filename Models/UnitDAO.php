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
            $data = [
                'id' => (int)($row['id']),
                'name' => $row['name'],
                'cost' => (int)($row['cost']),
                'origin' => $row['origin'],
                'urlImg' => $row['url_img']
            ];
            $units[] = new Unit($data);
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

    // Ajoute une unité
    public function add(Unit $unit): void
    {
        $sql = "INSERT INTO units (id, name, cost, origin, url_img) VALUES (:id, :name, :cost, :origin, :url_img)";
        $this->execRequest($sql, [
            ':id' => $unit->getId(),
            ':name' => $unit->getName(),
            ':cost' => $unit->getCost(),
            ':origin' => $unit->getOrigin(),
            ':url_img' => $unit->getUrlImg()
        ]);
    }

    // supprime une unité
    public function delete(int $idUnit = -1): void
    {
        $sql = "DELETE FROM units WHERE id = :id";
        $this->execRequest($sql, [':id' => $idUnit]);
    }
}
