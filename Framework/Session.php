<?php

class Session {

    public function __construct() {
        session_start();
    }

    public function destroy() {
        session_destroy();
    }

    public function setAttribute($name, $value) {
        $_SESSION[$name] = $value;
    }

    public function unsetAttribute($name) {
        unset($_SESSION[$name]);
    }
    
    public function isAttribute($name) {
        return (isset($_SESSION[$name]) && $_SESSION[$name] != "");
    }

    public function getAttribute($name) {
        if ($this->isAttribute($name)) {
            return $_SESSION[$name];
        } else {
            throw new Exception("Attribut '$name' absent de la session");
        }
    }
}