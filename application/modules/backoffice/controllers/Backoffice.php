<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Backoffice extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('backoffice/auth', 'refresh');
        }else{
            redirect('backoffice/dashboard', 'refresh');
        }
    }

    public function index()
    {
        $data['page'] = "backoffice/backoffice/view_backoffice";
        $this->template->template_view($data);
    }

   
}

