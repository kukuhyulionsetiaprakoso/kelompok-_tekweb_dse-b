<?php
class Home extends CI_Controller
{
    function index()
    {
        $this->load->view('templates/navbar');
        $this->load->view('pages/halamanUtama');
        $this->load->view('templates/footer');
    }
}
