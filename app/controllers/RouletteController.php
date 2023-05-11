<?php
require_once 'models/Roulette.php';

class RouletteController {
    public function handleRequest() {
        $action = $_GET['action'];

        switch ($action) {
            case "spin":
                $roomName = $_GET['room'];
                $element = Roulette::spin($roomName);
                require 'views/roulette.php';
                break;

            case "create":
                $roomName = $_POST['name'];
                Roulette::createRoom($roomName);
                header('Location: index.php?action=room&name=' . $roomName);
                break;

            case "addElement":
                $roomName = $_GET['room'];
                $element = $_POST['element'];
                Roulette::addElement($roomName, $element);
                header('Location: index.php?action=room&name=' . $roomName);
                break;

            case "room":
                $roomName = $_GET['name'];
                require 'views/room.php';
                break;

            default:
                require 'views/home.php';
        }
    }
}
