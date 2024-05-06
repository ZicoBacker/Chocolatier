<?php
Class Home extends controller 
{
    public function index() {

        $this->view('index');
    }

    public function SchoolInfo() {

        
        $this->view('School_info');
    }

    public function Form() {

        
        $this->view('Form');
    }

    public function AboutUs() {

        $this->view('AboutUs');
    }
}