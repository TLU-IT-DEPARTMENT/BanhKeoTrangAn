<?php

class Config {

    protected static $setting = array();

    public static function get($key) {
        return isset(self::$setting[$key]) ? self::$setting[$key] : null;
    }

    public static function set($key, $values) {
        self::$setting[$key] = $values;
    }

}
