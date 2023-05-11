<?php
session_start();  // Iniciar sesión al comienzo del script

class Roulette {
    public static function createRoom($roomName) {
        if (isset($_SESSION['rooms'][$roomName])) {
            throw new Exception('Room already exists');
        }
        $_SESSION['rooms'][$roomName] = array();
    }

    public static function addElement($roomName, $element) {
        if (!isset($_SESSION['rooms'][$roomName])) {
            throw new Exception('Room does not exist');
        }
        array_push($_SESSION['rooms'][$roomName], $element);
    }

    public static function spin($roomName) {
        if (!isset($_SESSION['rooms'][$roomName])) {
            throw new Exception('Room does not exist');
        }
        if (count($_SESSION['rooms'][$roomName]) < 2) {
            throw new Exception('Not enough elements for a spin');
        }
        $randomIndex = array_rand($_SESSION['rooms'][$roomName]);
        $selectedElement = $_SESSION['rooms'][$roomName][$randomIndex];
        unset($_SESSION['rooms'][$roomName][$randomIndex]);

        return $selectedElement;
    }
}
