<?php

    namespace Controller;

    class PaymentShow{
        use MainController;

        public function index(){
            $payment = new \Modal\Payment;
        
            $payments = $payment->findall();
            
            if (!empty($payments)) {
                $this->view('Receptionist/PaymentShow', ['payments' => $payments]);
            } else {
            // Pass a message to the view if no tasks exist
                $this->view('Receptionist/PaymentShow', ['message' => 'No tasks created yet.']);
            }
           
        }

        public function delete($paymentid = null) {
           
    
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
                $paymentid = $_POST['id'];
                $payment = new \Modal\Payment;
        
                if ($payment->delete($paymentid)) {
                    redirect('Receptionist/PaymentShow'); // Redirect to dashboard
                } else {
                    // Optionally, set a message for failure and redirect
                    redirect('Receptionist/PaymentShow');
                }
            } else {
                // Redirect if accessed via GET or without proper data
                redirect('Receptionist/PaymentShow');
            }
            // Pass message to the view
            
        }
        public function fetch(){
    
            
            $payment = new \Modal\Payment;
            $id = $_POST['id'];
            $data = $payment->where(['id'=>$id]);
            
           // show($data);
        
            if (!empty($data)){
                $this->view('Receptionist/PaymentUpdate', ['data' => $data[0]]);
            } else {
            // Pass a message to the view if no tasks exist
                $this->view('Receptionist/PaymentUpdate', ['message' => 'No tasks created yet.']);
            }
           
        
            
        }
        public function updatePayment(){
            $payment = new \Modal\Payment;
        
           
            $arr = $_POST;
            //var_dump($_POST);
            //$_SESSION['lol'] = $_POST;
            //show($arr);
           
            $data = $payment->update_withid($arr['id'],$arr);

            // if(!empty($data)){
            
            // }
            // else{
            //     $this->view('Receptionist/PaymentUpdate', ['message' => 'Failed to update']);
            // }

        
        
            
                
            // 
            //  Redirect to success page or display a success message
                
            
        }
    
    }
     
     



?>

