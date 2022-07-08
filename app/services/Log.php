<?php

namespace app\services;


class Log
{
    private $file = 'log/log.txt';
    public $params = [];

    public function __construct(array $params) {
        $this->params = $params;
    }

    function set_param() {

        if (!empty($this->params)) {
             $str = implode(" | ", $this->params);
        }

        return $str;
    }

    function add_write($text) {
        $fd = fopen($this->file, 'a+') or die("не удалось создать файл");
        $str = $text.' '.$this->set_param();
        fwrite($fd, $str. PHP_EOL);
        fclose($fd);
    }


}