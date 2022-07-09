<?php

namespace app\controller;

use app\services\ValidateForm;
use app\services\Log;
use app\services\Users;

class Controller {

    static function index() {
       $users = Users::get_users();
       require_once 'public/view/forma.php';
    }

    static function get_user() {
        ob_start();
        $users = Users::get_users();
        echo require_once 'public/view/user_list.php';
        return ob_end_flush();
    }

    static function add_user()
    {

        $request['name'] = $_POST['name'];
        $request['lastname'] = $_POST['lastname'];
        $request['email'] = $_POST['email'];
        $request['password1'] = $_POST['password1'];
        $request['password2'] = $_POST['password2'];
        $validate = new ValidateForm($request);
        $log = new Log($request);

        if ($validate->validate_date_form()) {

            if (Users::add_users($request['email'], $request['name'], $request['lastname'], $request['password1'])) {

                $arr['status'] = 'succes';
                $arr['text'] = 'User Add';
                $arr['data'] = $request;
                $log->add_write($arr['text']);
                return self::get_user();

            } else {
                $arr['status'] = 'error';
                $arr['text'] = 'Email already exists ';
                $log->add_write($arr['text']);
                return 1;
            }

        }
        $arr['status'] = 'error';
        $arr['text'] = 'The data is not correct';
        $log->add_write($arr['text']);
        return 2;

    }

}