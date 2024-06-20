<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home()
    {
        return "This is the home page";
    }

    public function about()
    {
        return "This is the about page";
    }

    public function contact()
    {
        return "This is the contact page";
    }

    public function services()
    {
        return "This is the services page";
    }
    
 public function blog()
    {
        return "This is the blog page";
    }
    
 public function products()
    {
        return "This is the products page";
    }
    
 public function galary()
    {
        return "This is the galary page";
    }

    public function student($adm){
        $students = [
            '123' => 'Dennis',
            '124' => 'Stacy',
            '125' => 'Lawrence', 
            '126' => 'Jackline',
            '127' => 'Juliana' ,  
        ];
        if(array_key_exists($adm, $students)){
         return $students[$adm];
        }else{
            return 'student: '.$adm.' not found';
        
        }
    }
    //route that takes a parameter marks. when key in marks it returns the grade(grade/80)
    public function grade($marks){
        if($marks >= 46 && $marks <= 50){
            return 'A+';
        }elseif($marks >= 41 && $marks <= 45){
            return 'A';
        }elseif($marks >= 36 && $marks <= 40){
            return 'B+';
        }elseif($marks >= 31 && $marks <= 35){
            return 'B';
        }elseif($marks >= 26 && $marks <= 30){
            return 'C+';
        }elseif($marks >= 21 && $marks <= 25){
            return 'C';
        }elseif($marks >= 16 && $marks <= 20){
            return 'D+';
        }elseif($marks >= 11 && $marks <= 15){
            return 'D';
        }elseif($marks >= 6 && $marks <= 10){
            return 'E';
        }else{
            return "Invalid marks";
        }
    }
}
/* 
Controllers are meant to handle the logic of your application. They are used to handle user requests and return appropriate responses.
The PageController class is a controller class that extends the base controller class.
Each method in the PageController class corresponds to a route defined in the routes/web.php file.
when a request is made to a route, the corresponding method in the controller class is called to handle the request.(the method returns a response that is sent back to the user)
*/