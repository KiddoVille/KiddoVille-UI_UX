<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Stock{
        use Modal;

        protected $table = 'Stock';
        protected $allowedColumns = [
            'ItemID',
            'Item',
            'Category',
            'Quantity',
            'MinQuantity',
            'Stock',
            'Image',
            'ImageType'
        ];
    }
