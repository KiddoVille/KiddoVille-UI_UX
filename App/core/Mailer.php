<?php

    namespace Core;

    defined('ROOTPATH') or exit('Access denied');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    class Mailer
    {
        
        private $mailer;

        public function __construct()
        {
            $this->mailer = new PHPMailer(true);
            $this->setupSMTP();
        }

        private function setupSMTP()
        {
            $this->mailer->isSMTP();
            $this->mailer->Host = 'smtp.gmail.com';
            $this->mailer->SMTPAuth = true;
            $this->mailer->Username = 'auradabdulla@gmail.com';
            $this->mailer->Password = 'vyak bquj vpns kxph';
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mailer->Port = 587;
        }

        public function send($from, $subject, $body, $to = 'auradabdulla@gmail.com' , $fromName = 'App Name')
        {
            try {
                $this->mailer->setFrom($from, $fromName);
                $this->mailer->addAddress($to);
                $this->mailer->isHTML(true);
                $this->mailer->Subject = $subject;
                $this->mailer->Body = $body;

                $this->mailer->send();
                return true;
            } catch (\Exception $e) {
                error_log("Mailer Error: {$this->mailer->ErrorInfo}");
                return false;
            }
        }
    }
?>