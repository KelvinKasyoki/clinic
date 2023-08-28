<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Appointment;
use App\Models\Employee;
use App\Models\Hod;




class AdminController extends Controller
{


/*============================   Doctors  =============================================*/

    //function for displaying doctor data
    public function adddocview()
    {
        return view('admin.add_doctor');

    }


    //function for adding doctor data to DB
     public function uploaddocdata(Request $request)
    {
        
        //data from the view(add_doctor)

        /* image upload
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;*/


        $doc = new doctor;
        $doc->name = $request->name;
        $doc->email = $request->email;
        $doc->address = $request->address;
        $doc->phone = $request->phone;
        $doc->speciality = $request->speciality;
        $doc->room = $request->room;

        $doc->save();
        
        return redirect()->back()->with('message','Doctor Added Successfully');
    }



    //function for display doctor list data
    public function doctorlist()
    {
        $data=Doctor::all();
        return view('Admin.doctorlist',compact('data'));

    }


    //function to  return update doctors data-view
        public function updateDoctorView($id)
        {
            $data = Doctor::find($id);

           return view('Admin.updateDoctorView',compact('data'));

            
        }

    //function to update doctors data
        public function  updatedocdata(Request $request,$id)
        {

        $data  = Doctor::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->speciality = $request->speciality;
        $data->room = $request->room;
        //$image = $request->image;

        /*if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('doctorimage',$imageName);
            $doctor->image = $imageName;
        }*/

        $data->save();

        return redirect()->back()->with('message','Doctor Record Updated Successfully');

        }


        //function to delete doctors data
        public function deletedocdata($id)
        {
            $data = Doctor::find($id);

            $data->delete();

            //return redirect()->back();
            return redirect()->back()->with('message','Doctor Record deleted Successfully');
        }




/*============================   Appointment  =============================================*/

//function to display Appointment list
        public function appointmentlist()
            {

               $appointments = Appointment::all();
               return view('Admin.appointmentlist',compact('appointments'));
                    
             }


        //function to cancel Appointment
        public function cancelAppointment($id)
        {
            $appointments = Appointment::find($id);

            $appointments->status = 'Canceled';

            $appointments->save();

            return redirect()->back();
        }

        //function to approve Appointment
        public function approveAppointment($id)
        {

             $appointments = Appointment::find($id);

            $appointments->status = 'Approved';

            $appointments->save();

            return redirect()->back();
        }

        public function emailView($id)
        {
            $email = Appointment::find($id);
            return view('Admin.emailView',compact('email'));
        }

        public function sendEmail($id)
        {
            $email = Appointment::find($id);

            $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
            ];

            FacadesNotification::send($email, new SendEmailNotification($details));

            return redirect()->back()->with('message','Send Email Successfully');
        }




/*============================   Nurses  =============================================*/
        //function for display nurse list data
    public function nurse_list()
    {
        $data=Nurse::all();
        return view('Admin.nurse_list',compact('data'));

    }


    //function to  return update nurse data-view
        public function update_nurse_View($id)
        {
            $data = Nurse::find($id);

           return view('Admin.update_nurse_View',compact('data'));

            
        }


    
        //function to update nurse data
        public function  update_nurse_data(Request $request,$id)
        {

        $data  = Nurse::find($id);

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->qualification = $request->qualification;
        $data->registered = $request->registered;
        $data->position = $request->position;


        $data->save();

        return redirect()->back()->with('message','Nurse Record Updated Successfully');

        }




//function for displaying nurse data
    public function add_nurse_View()
    {
        return view('admin.add_nurse_View');

    }
    //function for adding nurse data to DB
     public function upload_nurse_data(Request $request)
    {
        

        $nurs = new nurse;
        $nurs->name = $request->name;
        $nurs->phone = $request->phone;
        $nurs->gender = $request->gender;
        $nurs->address = $request->address;
        $nurs->email = $request->email;
        $nurs->qualification = $request->qualification;
        $nurs->registered = $request->registered;
        $nurs->position = $request->position;

        $nurs->save();
        
        return redirect()->back()->with('message','Nurse record Added Successfully');
    }



    //function to delete doctors data
        public function delete_Nurse_data($id)
        {
            $data = Nurse::find($id);

            $data->delete();
            return redirect()->back()->with('message','Record deleted Successfully');
        }


 /*============================   Employees  =============================================*/
        //function for display nurse list data
    public function employee_list()
    {
        $data=Employee::all();
        return view('Admin.employee_list',compact('data'));

    }


    //function for displaying nurse data
    public function add_employee_View()
    {
        return view('Admin.add_employee_View');

    }
    //function for adding nurse data to DB
     public function upload_employee_data(Request $request)
    {
        
        $emp = new employee;
        
        $emp->name = $request->name;
        $emp->phone = $request->phone;
        $emp->gender = $request->gender;
        $emp->address = $request->address;
        $emp->email = $request->email;
        $emp->job = $request->job;
        $emp->status = $request->status;

        $emp->save();
        
        return redirect()->back()->with('message','Employee record Added Successfully');
    }


    //function to  return update nurse data-view
        public function update_employee_View($id)
        {
            $data = Employee::find($id);

           return view('Admin.add_employee_View',compact('data'));

            
        }

        //function to update nurse data
        public function  update_employee_data(Request $request,$id)
        {

        $data  = Employee::find($id);

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->job = $request->job;
        $data->status = $request->status;
        
        $data->save();

        return redirect()->back()->with('message','Employee Record Updated Successfully');

        }


    //function to delete doctors data
        public function delete_employee_data($id)
        {
            $emp = Employee::find($id);

            $emp->delete();
            return redirect()->back()->with('message','Employee Record deleted Successfully');
        }

    




    

}
