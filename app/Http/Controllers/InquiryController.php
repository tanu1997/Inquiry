<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\InquiryController;
use App\Models\Inquiry;
use App\Models\Question;

class InquiryController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $id)
    {
        $quests = Question::findOrFail($id);
      
        // dd($quest);
        //return view('inquiry_form');
        return view('inquiry_form',compact('quests'));
    }

    public function create(Request $request){
      
        $quests = Question::orderBy('id','desc')->first();
        // dd($quests);
        if($quests){
            $questnew = $quests->id + 2 ;
           
           // dd($custnew);
        }else{
            $questnew = 2 ;
        }  
         
         $getInsertedData = Inquiry::updateOrCreate(['id'=>$request['id']],[
             "first_name" => $request['first_name'],
             "question_id" => "Q". $questnew,
             "last_name" => $request['last_name'],
             "email_id" => $request['email_id'],
             "country" => $request['country'],
             "qualifications"=>$request['qualifications'],
             "details"=>$request['details'],
             "question" => $request['question'],
             "description" => $request['description'],
           
           ]);
           if($getInsertedData) 
        {
            return view('inquiry_form',compact('quests'));
        }
         
      
     }  

     public function showQuestion()
     {
        return view('question_form');
     }

     public function createQuestion(Request $request)
     {
        $getInsertedQuestion= Question::updateOrCreate(['id'=>$request['id']],[
            "question" =>$request['question'],
            "status" =>1,

        ]);

        if($getInsertedQuestion)
        {
            return view('question_form');
        }
     
     }
             


}
