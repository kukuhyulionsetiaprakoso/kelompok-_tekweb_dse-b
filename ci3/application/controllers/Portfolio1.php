<?php
class Portfolio1 extends CI_Controller
{
    function index()
    {
        $this->load->view('templates/navbar');
        $this->load->view('pages/portfolio1');
        $this->load->view('templates/footer');
    }
}
