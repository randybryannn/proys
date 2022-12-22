<?php

class Attendance extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['semestres'] = AttendanceModel::listEqual('semestres');
        $data['page_name'] = "Asistencia";
        $this->views->getView($this, "index", $data);
    }
}
