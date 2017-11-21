<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.11.2017
 * Time: 20:25
 */

namespace frontend\models;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    const SEND_SUCCESS_MESSAGE = 'Your message has been sent.';
    const SEND_FAILURE_MESSAGE = 'Your message has not been sent';
    const VALIDATE_FAILURE_MESSAGE = 'Please fill out all fields';


    public $name;
    public $email;
    public $phone;
    public $message;

    /**
     * @return array the validation rules
     */
    public function rules()
    {
        return[
            [['name'], 'required', 'message' => 'Please enter your name.'],
            [['email'], 'required', 'message' => 'Please enter your email address.'],
            [['phone'], 'required', 'message' => 'Please enter your phone number.'],
            [['message'], 'required', 'message' => 'Please enter a message.'],
            ['email', 'email', 'message' => 'Not a valid email address'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'name' => 'YOUR NAME *',
            'email' => 'YOUR EMAIL *',
            'phone' => 'YOUR PHONE *',
            'message' => 'YOUR MESSAGE *'
        ];
    }

    /**
     * @param $email
     * @return bool
     */
    public function contact($email)
    {

            $message = 'Name: ' .  $this->name . '<br/>' .
                       'Email: ' .  $this->phone . '<br/>' .
                       'Phone: ' .  $this->phone . '<br/>' .
                       'Message: ' . $this->message;

            return Yii::$app->mailer->compose()
                        ->setTo($email)
                        ->setFrom([$this->email => $this->name])
                        ->setSubject('contact form')
                        ->setHtmlBody($message)
                        ->send();

    }

}