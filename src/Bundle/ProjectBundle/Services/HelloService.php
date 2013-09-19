<?php

// src/Bundle/ProjectBundle/Services/HelloServices.php

namespace Bundle\ProjectBundle\Services;

class HelloService {

//    private $mailer;
//
//    public function __construct(\Swift_Mailer $mailer) {
//        $this->mailer = $mailer;
//    }
//
//    public function hello($name) {
//
//        $message = \Swift_Message::newInstance()
//                ->setTo('mihualin@gmail.com')
//                ->setSubject('Hello Service')
//                ->setBody($name . ' says hi!');
//
//        $this->mailer->send($message);
//
//        return 'Hello, ' . $name;
//    }
    
    function sayHello($name) {
        return "Hello from sayHello method".$name;
    }

}

?>
