<?php

    #can have many functions depending on what we need 
    #info on user creation, edit delete functions and the url they are associated with
    class Home{
        use Controller;
        // The 'index' method acts as the default action for this controller.
        public function index($a = '', $b = '', $c = '',$d = ''){
            
            $user = new User;
            // $result = $user->where(['name' => 'Abdulla']);
            // $result2 = $user->first(['name' => 'Abdulla']);
            // show($result);
            // show($result2);

            // $result3 = $user->insert(['name' => 'Abdulla', 'age' => 20]);
            // $result3 = $user->insert(['id'=> 4,'name' => 'Abdulla', 'age' => 20]);
            //! insert function will remove the id part beacyse it is not changeble in user Modal

            // $result4 = $user->delete(17,'id');

            // $user->update(2,['name'=>"Abdulla"]);

            // show ($a);
            // show ($b);
            // show ($c);
            // show ($d);

            // show($user->test());


            $this->view('home');
        }

        public function edit($a = '', $b = '', $c = '',$d = ''){
            echo "this is the edit function";
        }
    }
?>