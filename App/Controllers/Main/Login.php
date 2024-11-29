<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Login{
        use MainController;

        public function index(){
            $Data = [];
            if(isset($_POST['Username']) && isset($_POST['Password'])){
                if (isset($_POST['Username'] )){
                    $user = new \Modal\User;
                    $username = $_POST['Username'];
                    $result = $user->first(['Username' => $username]);

                    if(!empty($result)){
                        if(checkpassword($_POST["Password"],$result->Password)){
                            
                            $session = new \Core\Session;
                            $session->set(['USERNAME' => $result->Username]);
                            $session->set(['Logged_In' => true]);               //to only allow access when loged in

                            $parent = new \Modal\ParentUser;
                            $lastseen = date('Y-m-d H:i:s');
                            $parent->update(["Username" => $username],["Last_Seen"=>$lastseen]);
        
                            if($result->Role === "Unregistered"){
                                $parent = new \Modal\ParentUser;
                                $result = $parent->first(['Username' => $result -> Username]);
                                if(empty($result)){
                                    redirect('Onbording/ParentUser');
                                }
                                else{
                                    redirect('Parent/Home');
                                }
                            }
                            if($result->Role === "Registered"){
                                $parent = new \Modal\ParentUser;
                                $result = $parent->first(['Username' => $result -> Username]);
                                show($result);
                                if(empty($result)){
                                    redirect('Onbording/ParentUser');
                                }
                                else{
                                    redirect('ReParent/Home');
                                }
                            }
                            if($result->Role === "Teacher"){
                                redirect('Teacher/Home');
                            }
                            if($result->Role === "Maid"){
                                redirect('Maid/Home');
                            }
                            if($result->Role === "Manager"){
                                redirect('Manager/Home');
                            }
                            if($result->Role === "Receptionist"){
                                redirect('Receptionist/Home');
                            }
                            if($result->Role === "Doctor"){
                                redirect('Doctor/Home');
                            }
                            // if($result->Role){
                            //     redirect('_404');
                            // }
                        }
                        else{
                            $user->values['uservalue'] = $username;
                            $Data['value'] = $user->values;
                    
                            $user->errors['password'] = "password mismatch";
                            $Data['errors'] = $user->errors;
                        }
                    }else{
                        $user->errors['username'] = "username doesn't exists";
                        $Data['errors'] = $user->errors;

                        $user->values['uservalue'] = $username;
                        $Data['value'] = $user->values;
                    }
                }
            }
            $this->view('Main/Login', $Data);
        }
    }
?>