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
                            $session->set(['USERID' => $result->UserID]);
                            $session->set(['Logged_In' => true]);
        
                            if($result->Role === "User"){
                                $parent = new \Modal\ParentUser;
                                $pre = $parent->first(['UserID' => $result -> UserID]);
                                if(empty($pre)){
                                    redirect('Onbording/ParentUser');
                                }
                                else{
                                    $lastseen = date('Y-m-d H:i:s');
                                    $parent->update(["UserID" => $result->UserID],["Last_Seen"=>$lastseen]);

                                    $child = new \Modal\Child;
                                    $children = $child->where_norder(["ParentID"=> $pre->ParentID]);
                                    if(!$children){
                                        redirect('Onbording/Child');
                                    }
                                    else{
                                        redirect('Parent/Home');
                                    }
                                }
                            }
                            if($result->Role === "Teacher"){
                                $teacher = new \Modal\Teacher;
                                $lastseen = date('Y-m-d H:i:s');
                                $teacher->update(["UserID" => $result->UserID],["Last_Seen"=>$lastseen]);

                                redirect('Teacher/Home');
                            }
                            if($result->Role === "Maid"){
                                $maid = new \Modal\Maid;
                                $lastseen = date('Y-m-d H:i:s');
                                $maid->update(["UserID" => $result->UserID],["Last_Seen"=>$lastseen]);
                                redirect('Maid/Home');
                            }
                            if($result->Role === "Manager"){
                                $Manager = new \Modal\Manager;
                                $lastseen = date('Y-m-d H:i:s');
                                $Manager->update(["UserID" => $result->UserID],["Last_Seen"=>$lastseen]);
                                redirect('Manager/Home');
                            }
                            if($result->Role === "Receptionist"){
                                $receptionist = new \Modal\Receptionist;
                                $lastseen = date('Y-m-d H:i:s');
                                $receptionist->update(["UserID" => $result->UserID],["Last_Seen"=>$lastseen]);
                                redirect('Receptionist/Home');
                            }
                            if($result->Role === "Doctor"){
                                $doctor = new \Modal\Doctor;
                                $lastseen = date('Y-m-d H:i:s');
                                $doctor->update(["UserID" => $result->UserID],["Last_Seen"=>$lastseen]);
                                redirect('Doctor/Home');
                            }
                            if($result->Role){
                                redirect('_404');
                            }
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