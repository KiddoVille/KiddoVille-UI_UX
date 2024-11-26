<?php
    class App{
        private $controller = 'Home';
        private $method = 'index';

        private function splitURL(){
            // Set default route to 'home' if 'url' parameter is missing
            $URL = $_GET['url'] ?? 'home';
    
            // Split URL segments by '/'
            $URL = explode('/', trim($URL, "/"));
    
            return $URL;
        }
    
        public function loadController() {
            $URL = $this->splitURL();
            $filename = "../App/Controllers/" . ucfirst($URL[0]) . ".php";
            
            // Check for main controller file
            if (file_exists($filename)) {
                require $filename;
                $this->controller = ucfirst($URL[0]);
                unset($URL[0]);
            } else {
                // Check if subfolder structure is specified
                if (isset($URL[0]) && isset($URL[1])) {
                    $filename = "../App/Controllers/" . ucfirst($URL[0]) . "/" . ucfirst($URL[1]) . ".php";
                    if (file_exists($filename)) {
                        require $filename;
                        $this->controller = ucfirst($URL[1]);
                        unset($URL[1]);
                    } elseif (isset($URL[2])) {
                        // Check for nested subfolder structure
                        $filename = "../App/Controllers/" . ucfirst($URL[0]) . "/" . ucfirst($URL[1]) . "/" . ucfirst($URL[2]) . ".php";
                        if (file_exists($filename)) {
                            require $filename;
                            $this->controller = ucfirst($URL[2]);
                            unset($URL[2]);
                        } else {
                            // Fallback to 404 if no controller is found
                            $this->load404Controller();
                        }
                    } else {
                        // Fallback to 404 if no controller is found
                        $this->load404Controller();
                    }
                } else {
                    // Fallback to 404 if no controller is found
                    $this->load404Controller();
                }
            }

            $controller = new ($this->controller);
            // now we can call a funtion that we need depending on the file location and it's name that is given by the url can use it as a general code for every controller
            // no need to call one by one


            // select method
            if(!empty($URL[1])){
                if(method_exists($controller, $URL[1])){
                    $this->method = $URL[1];
                    $unset($URL[1]);
                }
            }
            call_user_func_array([$controller,$this->method], $URL);
        }

        private function load404Controller() {
            $filename = "../App/Controllers/_404.php";
            if (file_exists($filename)) {
                require $filename;
                $this->controller = '_404';
            } else {
                throw new Exception("404 Controller not found.");
            }
        }
    }

?>