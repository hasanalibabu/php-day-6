<?php


namespace App\classes;


class Student
{

    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post = null )
    {
        if (isset($post['search_btn'])){
            $this->text = $post['search'];
        }

    }

    public function getAllStudent(){

        return [
            0 => [
                'name'      => 'Hasan',
                'mobile'    => '123456777',
                'email'     => 'hasan@gmail.com',
                'address'   => 'Mouchak'
            ],
            1 => [
                'name'      => 'Ali',
                'mobile'    => '468646325',
                'email'     => 'ali@gmail.com',
                'address'   => 'Malibagh'
            ],
            2 => [
                'name'      => 'Tonmoy',
                'mobile'    => '2234655656',
                'email'     => 'tonmoy@gmail.com',
                'address'   => 'Dhaka'
            ],
            3 => [
                'name'      => 'Riaj',
                'mobile'    => '43546686',
                'email'     => 'riaj@gmail.com',
                'address'   => 'Wireless'
            ],
            4 => [
                'name'      => 'Soro',
                'mobile'    => '976543685',
                'email'     => 'soro@gmail.com',
                'address'   => 'Jigatola'
            ],

        ];
    }

    public function getStudentBySearchText(){

        $this->students = $this->getAllStudent();
        foreach ($this->students as $std){
            if ($this->text == $std['name']){
                $this->result = $std;
                break;
            }
        }
        return $this->result;
    }
}