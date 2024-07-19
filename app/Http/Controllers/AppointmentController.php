<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function booking($id){
        $doctor = DB::select('select * from doctors where id=?', [$id])[0];
            return view('booking_appointment',compact('doctor'));
    }

    public function handleappointment(Request $request)
    {
        $fname = $request->fname;
        $lname = $request->lname;
        $national_id = $request->national_id;
        $doctor_name = $request->doctor_name;
        $phone = $request->phone;
        $code = $request->code;
        $address = $request->address;
        $date = $request->date;
        $time = $request->time;
        $today = now();
        $error_date = '';

        $this->validate($request, [
            'address' => 'required',
            'time' => 'required',
            'date' => [
                'required',
                function ($attribute, $value, $fail) use ($time) {
                    if (strtotime($value) < strtotime(now())) {
                        $fail('The date must be today or later.');
                    }

                    // Assuming checkDatetimeValidation is a separate function
                    if ($this->checkDatetimeValidation($value, $time)) {
                        $fail("Appointment already booked");
                    }
                },
            ],

        ]);

        // Insert appointment into database using DB::insert
        DB::insert("insert into appointment (fname, lname, address, national_id, doctor_name, phone, code, time, date) 
            values (?, ?, ?, ?, ?, ?, ?, ?, ?)",
            [$fname, $lname, $address, $national_id, $doctor_name, $phone, $code, $time, $date]);

        return redirect(route('appointmentCard'));
    }

    // Custom validation function
    private function checkDatetimeValidation($date, $time)
    {
        $existingAppointment = DB::table('appointment')
        ->where('date', $date)
        ->where('time', $time)
        ->exists();

    return $existingAppointment;
    }
        
    public function dashboard()
    {
        $patients= DB::select("select * from appointment");
        return view('dashboard', ['patients'=>$patients]);
       
    }
    
    public function appointmentCard()
    {
        $appointment= DB::select("select * from appointment");
        return view('appointmentCard', ['appointment'=>$appointment]);

       
    }

    public function delete_booking($id){
        DB::delete("delete from appointment where id =?",[$id]);
        return redirect(route('appointmentCard'));
    }

    public function delete_appointment($id){
        DB::delete("delete from appointment where id =?",[$id]);
        return redirect(route('dashboard'));
    }
        
        
}
