<?php
class Roulette {
    private static $rooms = array();

    public static function createRoom($roomName) {
        if (isset(self::$rooms[$roomName])) {
            throw new Exception('Room already exists');
        }
        self::$rooms[$roomName] = array();
    }

    public static function addElement($roomName, $element) {
        if (!isset(self::$rooms[$roomName])) {
            throw new Exception('Room does not exist');
        }
        array_push(self::$rooms[$roomName], $element);
    }

    public static function spin($roomName) {
        if (!isset(self::$rooms[$roomName])) {
            throw new Exception('Room does not exist');
        }
        if (count(self::$rooms[$roomName]) < 2) {
            throw new Exception('Not enough elements for a spin');
        }
        $randomIndex = array_rand(self::$rooms[$roomName]);
        $selectedElement = self::$rooms[$roomName][$randomIndex];
        unset(self::$rooms[$roomName][$randomIndex]);

        return $selectedElement;
    }
}
