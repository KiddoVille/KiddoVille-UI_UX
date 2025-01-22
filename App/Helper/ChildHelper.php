<?php

    namespace App\Helpers;

    class ChildHelper
    {
        public function store_child()
        {
            $session = new \Core\Session;
            $UserID = $session->get('USERID');

            // Fetch ParentID based on the current user's ID
            $parent = new \Modal\ParentUser;
            $pre = $parent->first(['UserID' => $UserID]);
            $ParentID = $pre->ParentID;

            // Fetch all children for the ParentID
            $child = new \Modal\Child;
            $children = $child->where_norder(['ParentID' => $ParentID]);

            return $children;
        }
    }

?>