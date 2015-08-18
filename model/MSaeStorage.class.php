<?php
/**
 *
 * Filename: MSaeStorage.class.php
 *
 * @author liyan
 * @since 2015 8 18
 */
class MSaeStorage {

    const E_SAESTORAGE_NOT_EXISTS = 0x01;

    private static $saeStorage;

    private static getSaeStorage() {
        if (is_null(self::$saeStorage)) {
            if (!class_exists('SaeStorage')) {
                throw new Exception("class SaeStorage not exists", E_SAESTORAGE_NOT_EXISTS);
            }
            self::$saeStorage = new SaeStorage();
        }
        return self::$saeStorage;
    }

    public static function write($domain, $filepath, $data) {
        $s = self::getSaeStorage();
        return $s->write($domain, $filepath, $data);
    }

    public static function getUrl($domain, $path) {
        $s = self::getSaeStorage();
        return $s->getUrl($domain, $path);
    }

}
