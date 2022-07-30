<?php

namespace App\model;

class Student{

    private $student_id;
    private $student_name;
    private $registered_date;
    private $status;
    private $course_id;

    public function getStudent_id():string
    {
        return $this->student_id;
    }

    public function getStudent_name():string
    {
        return $this->student_name;
    }

    public function getRegistered_date():string
    {
        return $this->registered_date;
    }

    public function getStatus():int
    {
        return $this->status;
    }

    public function getCourse_Id():int
    {
        return $this->course_id;
    }

    public function setStudent_id( $student_id ):void
    {
        $this->student_id = $student_id;
    }

    public function setStudent_name( $student_name ):void
    {
        $this->student_name = $student_name;
    }

    public function setRegistered_date( $registered_date ):void
    {
        $this->registered_date = $registered_date;
    }

    public function setStatus( $status ):void
    {
        $this->status = $status;
    }

    public function setCourse_id( $course_id ):void
    {
        $this->course_id = $course_id;
    }

}