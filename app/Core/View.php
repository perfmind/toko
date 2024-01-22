<?php

namespace App\Core;

use App\Helpers\Session;

class View
{
    protected $session;

    protected $admin;

    public function __construct()
    {
        $this->session = new Session();
        $this->admin = $this->session->get('admin');
    }

    public function getNav()
    {
        $session = $this->session;
        if ($this->admin) {
            include '../app/views/admin/template/nav.php';
        } else {
            include '../app/views/template/nav.php';
        }
    }

    public function getFooter()
    {
        if ($this->admin) {
            include '../app/views/admin/template/footer.php';
        } else {
            include '../app/views/template/footer.php';
        }
    }
}
