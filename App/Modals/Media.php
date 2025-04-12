<?php

namespace Modal;

defined('ROOTPATH') or exit('Access Denied!');

class Media {
    use Modal;

    protected $table = 'media';
    protected $allowedColumns = [
        "MediaType",
        "Title",
        "Description",
        "URL",
        "DateTime",
        "UserID",
        "Size",
        "Format",
        "Views",
        "Downloads",
        "Image",
        "ImageType"
    ];
}
