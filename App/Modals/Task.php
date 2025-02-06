<?php

namespace Modal;

defined('ROOTPATH') or exit('Access Denied!');

class Task {
    use Modal;

    protected $table = 'tasks';
    protected $allowedColumns = [
        "MediaID",
        "TeacherID",
        "Deadline",
        "AgeGroup"
    ];
}
