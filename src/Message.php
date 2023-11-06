<?php
namespace App;

class Message {

     const LIMIT_NAME = 3;
     const LIMIT_OBJECT = 5;
     const LIMIT_MESSAGE = 10;

     private $name;
     private $mail;
     private $object;
     private $message;

     public function __construct(string $name, string $mail, string $object, string $message)
     {
          $this->name = $name;
          $this->mail = $mail;
          $this->object = $object;
          $this->message = $message;
     }

     public function isValid(): bool //verification des informations saisie
     {
         return empty($this->getErrors());
     }

     public function getErrors(): array
     {
          $errors = [];
          if(strlen($this->name) < self::LIMIT_NAME) {
               $errors['name'] = 'Votre nom est trop court';
          }
          if(strlen($this->object) < self::LIMIT_OBJECT) {
               $errors['object'] = 'Votre objet est trop court';
          }
          if(strlen($this->message) < self::LIMIT_MESSAGE) {
               $errors['message'] = 'Votre message est trop court';
          }
          return $errors;
     }
}