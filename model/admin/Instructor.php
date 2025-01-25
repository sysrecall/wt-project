<?php
include_once 'db.php';
class Instructor {
    static function getInstructors() {
        $db = new db();
        $conn = $db->open();
        $sql = "SELECT * FROM instructor";
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    static function getInstructor(int $id) {
        $db = new db();
        $conn = $db->open();
        $sql = "SELECT * FROM instructor WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    static function deleteInstructor(int $id) {
        $db = new db();
        $conn = $db->open();
        $sql = "DELETE FROM instructor WHERE id = $id";
        $conn->query($sql);

        $conn->close();
    }

}