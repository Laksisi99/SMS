<?php

// students controller

class Students extends Controller
{

    function index($id = null)
    {
        echo "this is the student controller " . $id;
    }

}
