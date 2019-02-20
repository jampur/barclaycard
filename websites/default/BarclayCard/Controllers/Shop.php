<?php
namespace BarclayCard\Controllers;

class Shop {

    public function __construct(){
    }

    public function dashboard_home(){
        return ['template' => 'admindashboard.html.php',
                'title' => 'Dashboard - Admin',
                'variables' => [
                    ]
            ];
    }

    public function access_denied(){
        return ['template' => 'accessdenied.html.php',
                'title' => 'Access denied',
                'variables' => [

                ]
            ];
    }

}
