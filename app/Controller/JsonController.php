<?php
/**
 * Created by JetBrains PhpStorm.
 * User: g5u89
 * Date: 13-05-07
 * Time: 9:02 PM
 * To change this template use File | Settings | File Templates.
 */
App::uses('CakeEmail', 'Network/Email');

class JsonController extends AppController{

    public $name = 'Json';

    public function beforeFilter(){
        parent::beforeFilter();
        $this->autoRender = false;
        $this->autoLayout = false;
    }

    public function validateEmail(){
        $email = $_POST['email'];
        if (!is_null($email)){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $data['status'] = false;
                $data['email'] = $email;
            } else {
                $data['status'] = true;
                $data['email'] = $email;
            }
        }
        $this->set('data',$data);
        $this->render('json_encode');
    }

    public function sendEmail(){
        $email = $_POST['email'];
        $message = $_POST['message'];
        $gmail = new CakeEmail('gmail');
        $gmail->from($email);
        $gmail->sender(EMAIL_SENDER);
        $gmail->to(EMAIL_RECEIVERS);
        $gmail->replyTo($email);
        $gmail->subject(EMAIL_SUBJECT);
        if($gmail->send(EMAIL_MESSAGE_PREPEND.$message)){
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }
        $this->set('data',$data);
        $this->render('json_encode');
    }

}