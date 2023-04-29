<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public $students = [
        ['id'=> 1 , 'name' => 'Giuseppe' , 'surname' => 'Calabrese' , 'age' => 19 , 'subject' => 'CSS'],
        ['id'=> 2 , 'name' => 'Marco' , 'surname' => 'Rossi' , 'age' => 25 , 'subject' => 'HTML'],
        ['id'=> 3 , 'name' => 'Pasquale' , 'surname' => 'Bianchi' , 'age' => 22 , 'subject' => 'LARAVEL'],
        ['id'=> 4 , 'name' => 'Michele' , 'surname' => 'Verdi' , 'age' => 31 , 'subject' => 'PHP'],
    ];

    public function index(){
        return view('studenti' , ['students' => $this->students]);
    }

    public function show($id){
        
        foreach($this->students as $student){
            if($id == $student['id']){
                return view('dettaglio-studente', ['student' => $student]);
            }
        }
    
    
    
    }
}
