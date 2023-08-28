<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class Homecontroller extends Controller
{

   public function index()
   {

    if(Auth::id())
       {
           return redirect('home');
       }
       else
       {

        //fetches all  data on doctors and sends to the front view 
      $doctors=Doctor::all();

       return view('user.home',compact('doctors'));
       }

   }


   public function redirect()
   {
    //checks logged in usertype (1:admin/0:use)
       if(Auth::id())
       {
            if(Auth::user()->userType == '0')
            {
               $doctors=Doctor::all();
                return view('user.home',compact('doctors'));
            }
            else
            {
                return view('admin.home');
            }
       }
       else
       {
           return redirect()->back();
       }
   }


   ////submit an appointment
   public function appointmentdata(Request $request)
    {
        $appoint = new appointment;

        $appoint->name = $request->name;
        $appoint->email = $request->email;
        $appoint->phone = $request->phone;
        $appoint->date = $request->date;
        $appoint->message= $request->message;
        $appoint->doctor = $request->doctor;
        $appoint->status = 'In Progress';


      //check if any logged in user
        if(Auth::id())
        {

         //store the  user (id) under userID in appointment table
            $appoint->userID = Auth::user()->id;
        }

        $appoint->save();
        //return redirect()->back();
        return redirect()->back()->with('message','appointment data sucessfully submitted');

    }


    public function myappointment()
    {
        //checks the user logged in
          if(Auth::id())
       {
           if(Auth::user()->userType == 0)
           {
            
                $userid = Auth::user()->id;
                //checks if the id of the logged in user matches with  userID and fetches the record
                $appointments = Appointment::where('userID',$userid)->get();
                return view('user.appointmentlist',compact('appointments'));
           }
            
       }
       else
       {
           return redirect()->back();
       }
        
       
    }



    public function deletemyappointment($id)
    {

        $appointments = Appointment::find($id);

       $appointments->delete();

       return redirect()->back()->with('message','Appointment Deleted Successfully');

    }



}
