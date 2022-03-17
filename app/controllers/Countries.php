<?php
class Countries extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Landenoverzicht'
        ];

        $this->view('index', $data);
    }
}