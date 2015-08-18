<?php
/**
 * trace delegate
 *
 * Filename: LibSAETrace.class.php
 *
 * @author liyan
 * @since 2014 7 28
 */
class LibSAETrace implements ITraceDelegate {

    function __construct() {
        DAssert::assert(function_exists('sae_debug'), 'function sae_debug not exists!');
    }

    public function write($msg, $level, $file = '', $line = '') {
        $trace = sprintf('%s[%s, %s]', $msg, $file, $line);
        sae_debug($trace);
    }

}
