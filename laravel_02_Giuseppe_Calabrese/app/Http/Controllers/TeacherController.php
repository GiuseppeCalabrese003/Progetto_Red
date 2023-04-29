<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public  $teachers = [
        ['id'=> 1 , 'name' => 'Davide' , 'surname' => 'Cariola' , 'age' => 31 , 'subject' => 'Laravel'],
        ['id'=> 2 , 'name' => 'Valerio' , 'surname' => 'Vacca' , 'age' => 35 , 'subject' => 'Javascript'],
        ['id'=> 3 , 'name' => 'Roberto' , 'surname' => 'Russo' , 'age' => 33 , 'subject' => 'HTML , CSS'],
    ];

    public function index(){
        return view('docenti' , ['teachers' => $this->teachers]);
    }

    public function show($id){
        foreach($this->teachers as $teacher){
            if($id == $teacher['id']){
                return view('dettaglio-docente', ['teacher' => $teacher]);
            }
        }
    
    }
}
