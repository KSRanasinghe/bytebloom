<?php

class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->render('Home');
    }

    function contact()
    {
        $this->render('Contact');
    }
    
    function team()
    {
        $this->render('Team');
    }
}
