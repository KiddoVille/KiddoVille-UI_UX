<?php

    namespace Controller;

    class InventoryManage{
        use MainController;

        public function index(){
            $session = new \Core\Session;
            $session->check_login();
            $data =  $this->store_stats();

            $this->view('Inventory/InventoryManage', $data);
        }

        private function store_stats(){
            $data = [
                "RestockDate" => 0,
                "Categories" => 0,
                "Restocks" => 0
            ];

            $StockModal = new \Modal\Stock;
            $InventoryModal = new \Modal\Inventory;

            $All = $InventoryModal->findall_order("Date", "DESC");
            $dateObj = new \DateTime($All[0]->Date);
            $formattedDateTime = $dateObj->format('M d, Y');
            $data['RestockDate'] = $formattedDateTime;

            $All = $StockModal->findall();
            $categories = [];
            
            foreach ($All as $row) {
                $categories[] = $row->Category;
            }
            
            $uniqueCategories = array_unique($categories);
            $data['Categories'] = count($uniqueCategories);

            $startdate = new \DateTime(date("Y-m-01"));
            $lastdate = new \DateTime(date("Y-m-t"));

            $StockMonthRestocked = $InventoryModal->findFutureDatesWithConditions($startdate, $lastdate, ["Activity" => "Restocked"]);
            foreach ($StockMonthRestocked as $row){
                $data['Restocks'] += $row->Quantity;
            }

            return $data;
        }

        public function StoreInventory() {
            header('Content-Type: application/json');
            $requestData = json_decode(file_get_contents("php://input"), true);
        
            $Category = $requestData['Category'] ?? null;
            $Category = ($Category === 'null' || $Category === 'All') ? null : $Category;
        
            $Status = $requestData['Status'] ?? null;
            $Status = ($Status === 'null' || $Status === 'All') ? null : $Status;
        
            $Pagination = $requestData['Pagination'] ?? 1;
            $itemsPerPage = 5;
            $offset = ($Pagination - 1) * $itemsPerPage;
        
            $StockModal = new \Modal\Stock;
            $InventoryModal = new \Modal\Inventory;
        
            $allStock = $StockModal->findall();
            $filteredStock = [];
        
            foreach ($allStock as $row) {
                if ($Category && $row->Category !== $Category) {
                    continue;
                }
        
                if ($row->Quantity == 0) {
                    $row->Status = "Out of Stock";
                } else if ($row->Quantity < $row->MinQuantity) {
                    $row->Status = "Low Stock";
                } else {
                    $row->Status = "Available";
                }
        
                if ($Status && $row->Status !== $Status) {
                    continue;
                }
        
                $Stocked = $InventoryModal->first([
                    "ItemID" => $row->ItemID,
                    "Activity" => "Restocked"
                ]);
                if (!empty($Stocked)) {
                    $dateObj = new \DateTime($Stocked->Date);
                    $row->Date = $dateObj->format('M d, Y');
                }
        
                // Get issued quantity for the current month
                $row->Issued = 0;
                $startdate = new \DateTime(date("Y-m-01"));
                $lastdate = new \DateTime(date("Y-m-t"));
        
                $Issued = $InventoryModal->findFutureDatesWithConditions(
                    $startdate,
                    $lastdate,
                    ["ItemID" => $row->ItemID, "Activity" => "Returned"],
                    "Date"
                );
        
                if (!empty($Issued)) {
                    foreach ($Issued as $issue) {
                        $row->Issued += $issue->Quantity;
                    }
                }

                $row->ItemID = "IT-" . str_pad($row->ItemID, 4, "0", STR_PAD_LEFT);
        
                $filteredStock[] = $row;
            }
        
            $totalItems = count($filteredStock);
            $pagedStock = array_slice($filteredStock, $offset, $itemsPerPage);
        
            $response = [
                'success' => true,
                'data' => [
                    'Stock' => $pagedStock,
                    'TotalPages' => ceil($totalItems / $itemsPerPage),
                    'CurrentPage' => (int)$Pagination
                ]
            ];
        
            echo json_encode($response);
        }        
    }
?>