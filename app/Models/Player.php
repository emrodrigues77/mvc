<?php

namespace App\Models;

use App\Core\DB;

class Player {
    private $fields;

    public function __set(string $field, $value) {
        $this->fields[$field] = $value;
        return $this;
    }

    public function __get(string $field) {
        return $this->fields[$field];
    }

    public function __isset($field) {
        return isset($this->fields[$field]);
    }

    private function escape($data) {
        if (is_string($data) & !empty($data)) {
            return "'" . addslashes($data) . "'";
        } elseif (is_bool($data)) {
            return $data ? 'TRUE' : 'FALSE';
        } elseif ($data !== '') {
            return $data;
        } else {
            return 'NULL';
        }
    }

    private function prepare($data) {
        $result = array();

        foreach ($data as $k => $v) {

            if (is_scalar($v)) {
                $result[$k] = $this->escape($v);
            }
        }

        return $result;
    }

    public function save() {
        $columns = $this->prepare($this->fields);

        if (!isset($this->id)) {
            $query = "INSERT INTO player (" . implode(', ', array_keys($columns)) . ") "
                . "VALUES (" . implode(', ', array_values($columns)) . ");";
        } else {
            foreach ($columns as $key => $value) {
                if ($key !== 'id') {
                    $definition[] = "{$key}={$value}";
                }
            }
            $query = "UPDATE player SET " . implode(', ', $definition) . " WHERE id='{$this->id}';";
        }

        if ($connection = DB::getConnection()) {
            $command = $connection->prepare($query);

            if ($command->execute()) {
                return $command->rowCount();
            }
        }
        return false;
    }

    public function update() {
    }

    public function remove() {
    }

    public static function all() {
        $connection = DB::getConnection();
        $command = $connection->prepare("SELECT * FROM player");
        $result = array();

        if ($command->execute()) {
            while ($player = $command->fetchObject(Player::class)) {
                $result[] = $player;
            }
        }

        if (count($result) > 0) {
            return $result;
        }

        return false;
    }
}