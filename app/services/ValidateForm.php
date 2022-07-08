<?php


namespace app\services;


class ValidateForm
{
    public $data = [];

    public function __construct($data) {
        $this->data = $data;
    }

    function validate_date_form() {

        if (!$this->data_empty($this->data))  {
            return false;
        }

        if (!$this->validate_emails($this->data['email']))  {
            return false;
        }

        if (!$this->confirm_pass($this->data['password1'], $this->data['password2']))  {
            return false;
        }

        return true;
    }

    function data_empty($data) {

        if(!empty($data)) {

            foreach ($data as $dat) {

                if (empty($dat)) {
                    return false;
                }
            }
        }

        return true;
    }

    function confirm_pass($password1, $password2) {

        if(!empty($password1) && !empty($password2) && $password1 === $password2) {

            return true;
        }
        return false;
    }

    function validate_emails($email) {

        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

            return true;
        }

        return false;
    }

}