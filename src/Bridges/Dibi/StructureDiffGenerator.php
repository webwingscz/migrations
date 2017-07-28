<?php

namespace Nextras\Migrations\Bridges\Dibi;

use Nextras\Migrations\IDiffGenerator;

class StructureDiffGenerator implements IDiffGenerator {

    public function __construct() {

    }

    /**
     * @return string
     */
    public function getExtension() {
        return 'sql';
    }

    /**
     * @return string
     */
    public function generateContent() {
        $content = "SET NAMES utf8;" . PHP_EOL;
        $content = "SET time_zone = '+00:00';" . PHP_EOL;
        $content = "SET foreign_key_checks = 0;" . PHP_EOL;
        $content = "SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';" . PHP_EOL;
        return $content;
    }

}
