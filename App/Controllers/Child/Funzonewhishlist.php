<?php

    namespace Controller;
    use App\Helpers\SidebarHelper;

    defined('ROOTPATH') or exit('Access denied');

    class FunzoneWhishlist{
        use MainController;
        public function index(){
            $session = new \Core\Session;
            $session->check_login();
            $session->check_child('Parent');
            $ChildID = $session->get('CHILDID');
    
            $data = [];
            $SidebarHelper = new SidebarHelper();
            $data = $SidebarHelper->store_sidebar();
    
            $ChildModal = new \Modal\Child;
            $select = $ChildModal->first(['ChildID' => $ChildID]);
            $data['child_id'] = $ChildID;
    
            if (!empty($select)) {
                $data2 = $this->selectedchild($select);
                $data = $data + $data2;
            }

            $this->view('Child/funzonewhishlist', $data);
        }

        public function lol() {
            $type = 'All';
            
            $Session = new \core\session;
            $ChildID = $Session->get("CHILDID");
            
            $WhishlistModal = new \Modal\MediaWhishlist;
            $MediaModal = new \Modal\Media;
            $Data = $WhishlistModal->where_order_desc(["ChildID" => $ChildID]);
        
            foreach ($Data as &$row) {
                if ($type !== 'All') {
                    $Media = $MediaModal->first(["MediaID" => $row->MediaID, "MediaType" => $type]);
                } else {
                    $Media = $MediaModal->first(["MediaID" => $row->MediaID]);
                }
        
                if ($Media) {
                    $row->MediaType = !empty($Media->MediaType) ? $Media->MediaType : '';
                    $row->Time = !empty($row->Time) ? $row->Time : '';
                    $row->URL = !empty($Media->URL) ? $Media->URL : '';
                    $row->Image = !empty($Media->Image) ? $Media->Image : '';
                    $row->ImageType = !empty($Media->ImageType) ? $Media->ImageType : '';
    
                    $base64Image = (!empty($row->ImageData) && is_string($row->ImageData))
                        ? 'data:' . $row->ImageType . ';base64,' . base64_encode($row->Image)
                        : null
                    ;

                    if($base64Image){
                        $row->Image = $base64Image;
                    }

                    $row->Title = !empty($Media->Title) ? $Media->Title : '';
                    $row->Description = !empty($Media->Description) ? $Media->Description : '';
                    $row->Format = !empty($Media->Format) ? $Media->Format : '';
                } else {
                    $row = null; // Mark for removal
                }
            }
        
            // Remove all null values (invalid media items)
            $Data = array_filter($Data);
        
            // Re-index array to avoid missing keys
            return array_values($Data);
        }        
        
        public function store_media(){
            header('Content-Type: application/json');
            $requestData = json_decode(file_get_contents("php://input"), true);
            
            $type = $requestData['type'];
            $Session = new \core\session;
            $ChildID = $Session->get("CHILDID");
            
            $WhishlistModal = new \Modal\MediaWhishlist;
            $MediaModal = new \Modal\Media;
            $Data = $WhishlistModal->where_order_desc(["ChildID" => $ChildID]);
        
            foreach ($Data as &$row) {
                if ($type !== 'All') {
                    $Media = $MediaModal->first(["MediaID" => $row->MediaID, "MediaType" => $type]);
                } else {
                    $Media = $MediaModal->first(["MediaID" => $row->MediaID]);
                }
        
                if ($Media) {
                    $row->MediaType = !empty($Media->MediaType) ? $Media->MediaType : '';
                    $row->Time = !empty($row->Time) ? $row->Time : '';
                    $row->URL = !empty($Media->URL) ? $Media->URL : '';
                    $row->Image = !empty($Media->Image) ? $Media->Image : '';
                    $row->ImageType = !empty($Media->ImageType) ? $Media->ImageType : '';

                    $base64Image = (!empty($row->ImageData) && is_string($row->ImageData))
                        ? 'data:' . $row->ImageType . ';base64,' . base64_encode($row->Image)
                        : null
                    ;
                    $row->Image = $base64Image;

                    $row->Title = !empty($Media->Title) ? $Media->Title : '';
                    $row->Description = !empty($Media->Description) ? $Media->Description : '';
                    $row->Format = !empty($Media->Format) ? $Media->Format : '';
                } else {
                    $row = null; // Mark for removal
                }
            }
            $Data = array_filter($Data);
            $Data = array_values($Data);

            if (empty($Data)) {
                echo json_encode(['success' => true, 'message' => 'No events found for the selected filters']);
            } else {
                echo json_encode(['success' => true, 'data' => $Data]);
            }
        }        

        private function selectedchild($selectedchild){
            $data = [];

            $imageData = $selectedchild->Image;
            $imageType = $selectedchild->ImageType;

            // If image data is available, construct the Base64 string using the correct MIME type
            $base64Image = (!empty($imageData) && is_string($imageData))
                ? 'data:' . $imageType . ';base64,' . base64_encode($imageData)
                : null;

            $data['selectedchildren'] = [
                'fullname' => $selectedchild->First_Name . ' ' . $selectedchild->Last_Name,
                'name' => $selectedchild->First_Name,
                'image' => $base64Image,
                'age' => agecalculate($selectedchild->DOB),
                'language' => $selectedchild->Language,
                'religion' => $selectedchild->Religion,
                'id' => str_pad($selectedchild->ChildID, 5, '0', STR_PAD_LEFT),
            ];
            return $data;
        }

        public function setchildsession()
        {

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $request = json_decode(file_get_contents('php://input'), true);
            $response = [];

            $session = new \Core\Session;
            if (isset($request['ChildID'])) {
                $session->set('CHILDID', $request['ChildID']);
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }

            echo json_encode($response);
            exit();
        }

        public function removechildsession()
        {

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $response = [];

            $session = new \Core\Session;
            $ChildID = $session->get("CHILDID");

            if (isset($ChildID)) {
                $session->unset("CHILDID");
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }

            echo json_encode($response);  // Send JSON response
            exit();
        }
    }
?>