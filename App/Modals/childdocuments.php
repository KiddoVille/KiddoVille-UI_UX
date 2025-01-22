<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class ChildDocuments{
        use Modal;

        protected $table = 'child_medication_documents';
        protected $allowedColumns = [
            'OriginalName',
            'FileType',
            'UploadedFile',
            'UploadDate',
            'ChildID'
        ];

        public function saveMedicationDocuments($childID, $uploadedFiles) {
            
            if (is_array($uploadedFiles['tmp_name'])) {
                // Multiple files uploaded
                foreach ($uploadedFiles['tmp_name'] as $index => $tmpName) {
                    if ($uploadedFiles['error'][$index] === UPLOAD_ERR_OK) {
                        // Read the file as a BLOB
                        $fileBlob = file_get_contents($tmpName);
        
                        // Prepare the data for insertion
                        $data = [
                            'OriginalName' => $uploadedFiles['name'][$index],
                            'FileType' => $uploadedFiles['type'][$index],   
                            'UploadedFile' => $fileBlob,                    
                            'UploadDate' => date('Y-m-d H:i:s'),         
                            'ChildID' => $childID                          
                        ];
        
                        $this->insert($data);
                    }
                }
            } else {
                $tmpName = $uploadedFiles['tmp_name'];
                if ($uploadedFiles['error'] === UPLOAD_ERR_OK) {
                    $fileBlob = file_get_contents($tmpName);
        
                    $data = [
                        'OriginalName' => $uploadedFiles['name'],
                        'FileType' => $uploadedFiles['type'],    
                        'UploadedFile' => $fileBlob,             
                        'UploadDate' => date('Y-m-d H:i:s'),  
                        'ChildID' => $childID                
                    ];
        
                    $this->insert($data);
                } else {
                    throw new \Exception("File upload error: " . $uploadedFiles['error']);
                }
            }
        }        
        
    }
?>