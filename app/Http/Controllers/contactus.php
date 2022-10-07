<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Jobs\contactusjob;
use Validator;
class contactus extends Controller
{

    protected function subjectCheck(){

    }
    //
    public function index(Request $req){

        $rules=array(
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'msg'=>'required|min:20'
        );

     $velid= Validator::make($req->all(),$rules);
     if ($velid->fails()) {
        # code...
        return response([
            "error"=>$velid->errors(),
            "errorcode"=>400
    ],200);
     }
        $contact=new Contact;
       $name= $contact->name=$req->name;
       $email= $contact->email=$req->email;
       $mobail= $contact->phone=$req->phone;
       $subject= $contact->subject=$req->subject;
       $msg= $contact->message=$req->msg;
        $contact->save();
        switch ($subject) {
            case "Retail Partnership":
                $departmentUseremail=["paras@roots-and-stalks.com",""];
                $departmentUsername="Paras";
              break;
            case "Career Options":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Bhautik";
              break;
            case "Brand Partnership":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="jaydeep";
              break;
            case "Retail Partnership":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Priyanka";
              break;
            case "Career Options":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Bhavesh";
              break;
            case "Brand Partnership":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Gargi";
              break;
            default:
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Nehal";
             break;

          }
          $data=[
              "department_user_name"=>$departmentUsername,
              "name"=>$name,
              "email"=>$email,
              "mobail"=>$mobail,
              "subject"=>$subject,
              "msg"=>$msg
            ];

            dispatch(new contactusjob($data,$departmentUseremail));
            return response(["msg"=>"Thank you ".$name." for reaching out to us.We will reach out to you as soon as possible !!"]);
    }

}
