<?php

function emptyRoomInput($roomName, $roomSubject, $link, $des){
    if (empty($roomName) || empty($roomSubject) || empty($link)|| empty($des)){
        $result = true;
    }
    else {
        $result = false;
    }
    

    return $result;
}
function roomExists($roomName){

}
function invalidLink($link){

}
function createRoom($roomName, $roomSubject, $link, $des){

}