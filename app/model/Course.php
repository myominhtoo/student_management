<?php

namespace App\model;

class Course{

    private $course_id;
    private $course_name;

    public function getCourse_id():string
    {
        return $this->course_id;
    }

    public function getCourse_name():string
    {
        return $this->course_name;
    }

    public function setCourse_id( string $course_id ):void
    {
        $this->course_id = $course_id;
    }

    public function setCourse_name( string $course_name ):void
    {
        $this->course_name = $course_name;
    }

}