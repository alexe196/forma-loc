<?php

namespace app\services;

class Users
{
    private static $instance = null;

    private static $users_arr = array(
        ['id' => 1, 'email' => 'test1@gmail.com', 'name' => 'anton', 'lastname'=>'krasovski', 'pass' => '123'],
        ['id' => 2, 'email' => 'test2@gmail.com', 'name' => 'misha', 'lastname'=>'sengoy', 'pass' => '124'],
        ['id' => 3, 'email' => 'test3@gmail.com', 'name' => 'vasia', 'lastname'=>'orlenko', 'pass' => '125'],
        ['id' => 4, 'email' => 'test4@gmail.com', 'name' => 'alexei', 'lastname'=>'berezko', 'pass' => '126'],
        ['id' => 5, 'email' => 'test5@gmail.com', 'name' => 'masha', 'lastname'=>'syrjina', 'pass' => '127'],
        ['id' => 6, 'email' => 'test6@gmail.com', 'name' => 'igor', 'lastname'=>'syslov', 'pass' => '128'],
        ['id' => 7, 'email' => 'test7@gmail.com', 'name' => 'sasha', 'lastname'=>'gribov', 'pass' => '129'],
        ['id' => 8, 'email' => 'test8@gmail.com', 'name' => 'ruslan', 'lastname'=>'efremov', 'pass' => '1211'],
        ['id' => 9, 'email' => 'test9@gmail.com', 'name' => 'petia', 'lastname'=>'vasichkin', 'pass' => '1212'],
        ['id' => 10, 'email' => 'test10@gmail.com', 'name' => 'sveta', 'lastname'=>'tomina', 'pass' => '1213'],
    );


    public static function getInstance() {

        if (null === self::$instance) {

            self::$instance = new self();
        }

        return self::$instance;
    }

    private static function user_validate($email) {

        if(!empty(self::$users_arr)) {

            foreach(self::$users_arr as $user) {
                if ($user['email'] == $email) {
                    return false;
                }
            }
        }

        return true;
    }

    public static function add_users($email, $name, $lastname, $pass) {
        if(!empty($email). !empty($name) && self::user_validate($email)) {
            self::$users_arr[count(self::$users_arr)] = array('id' => self::get_id(), 'email' => $email, 'name' => $name,
                                       'lastname' => $lastname, 'pass' => $pass);

            return true;
        }

        return false;
    }

    public static function get_id() {
        return self::$users_arr[count(self::$users_arr)-1]['id'] + 1;
    }

    private function __clone() {}
    private function __construct() {}

}