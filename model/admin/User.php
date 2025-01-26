<?php
include_once 'db.php';

class User {
    static function getUsers($type, $offset = 0, $limit = 10) {
        $db = new db();
        $conn = $db->open();
        if ($limit) {
            $sql = "SELECT * FROM $type LIMIT $offset, $limit";
        } else if ($offset) {
            $sql = "SELECT * FROM $type OFFSET $offset";
        } else {
            $sql = "SELECT * FROM $type";
        }
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }
    static function searchUsers($type, $search_text, $offset = 0, $limit = 10) {
        $db = new Db();
        $conn = $db->open();
        if ($limit) {
            $sql = "SELECT * FROM $type WHERE username LIKE '%$search_text%' OR email LIKE '%$search_text%' LIMIT $offset, $limit ";
        } else if ($offset) {
            $sql = "SELECT * FROM $type WHERE username LIKE '%$search_text%' OR email LIKE '%$search_text%' OFFSET $offset";
        } else {
            $sql = "SELECT * FROM $type WHERE username LIKE '%$search_text%' OR email LIKE '%$search_text%'";
        }
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    static function getUser($type, $id) {
        $db = new db();
        $conn = $db->open();
        $sql = "SELECT * FROM $type WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    static function deleteUser($type, $id) {
        $db = new db();
        $conn = $db->open();
        $sql = "DELETE FROM $type WHERE id = $id";
        $conn->query($sql);

        $conn->close();
    }

}