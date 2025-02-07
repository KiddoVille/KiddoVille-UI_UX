<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Foodtable{
        use MainController;
        public function index(){
            $data = $this-> food_items();
            $this->view('Manager/Foodtable' , $data);
        }

        public function food_items(){
            $data = [];
            $FoodModal = new \Modal\FoodPlan;
            $fooditems = [];
            $today = date('Y-m-d');
            $tomorrow = date('Y-m-d', strtotime('+1 day'));
            $dayAfterTomorrow = date('Y-m-d', strtotime('+2 days'));
            $Foodtoday = $FoodModal->findbyDate($today);
            $Foodtomorrow = $FoodModal->findbyDate($tomorrow);
            $FooddayAfterTomorrow = $FoodModal->findbyDate($dayAfterTomorrow);
            $fooditems = [$Foodtoday, $Foodtomorrow,$FooddayAfterTomorrow];
            return $fooditems; 
        }  
    }