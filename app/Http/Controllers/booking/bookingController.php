<?php

namespace App\Http\Controllers\booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\booking\Booking;
use App\Models\venue\Venue;
use PDF;


class bookingController extends Controller
{
    //
    public function index()
    {
        $book_data= Booking::all();
        return view ('booking.displayBooking', [
         "book_data" => $book_data,
        ]);
    }

    public function add()
    {
        $venue_data= Venue::all();
        
        return view ('booking.addBooking', [
            "venue_data" => $venue_data,

        ]);
    }

    public function store(Request $request)
    {
        $booking= new Booking;
        $booking->book_name= $request->input('name');
        $booking->book_venue= $request->input('venue');
        $booking->book_phone= $request->input('phone');
        $booking->book_people= $request->input('people');
        $booking->book_date= $request->input('date');
        $booking->book_timestart= $request->input('start');
        $booking->book_timeend= $request->input('end');
        $booking->created_at = now();

        $this->validate($request,[
            'name'=>'required',
            'venue'=> 'required',
            'phone'=> 'required',
            'people'=> 'required',
            'date'=> 'required',
            'start'=> 'required',
        ]);
        $booking->save();
        return redirect()->route('booking.index');
    }

    public function edit($id)
    {
       
        $book_data= Booking::where('id', $id)->get();
        $venue_data= Venue::all();

        return view ('booking.editBooking', [
            "venue_data" => $venue_data,
            "book_data" => $book_data,
        ]);
    }

    public function update(Request $request, $id)
    {
       
        Booking::where('id', $id)
        ->update([
            'book_name'=> $request->input('name'),
            'book_venue'=> $request->input('venue'),
            'book_phone'=> $request->input('phone'),
            'book_people'=> $request->input('people'),
            'book_date'=> $request->input('date'),
            'book_timestart'=> $request->input('start'),
            'book_timeend'=> $request->input('end'),
            'updated_at' => now()
        ]);

        return redirect()->route('booking.index');

    }

    public function delete($id)
    {
        $booking= Booking::where('id',$id)->first();

        Booking::where('id',$id)->delete();
        
        return redirect()->back();

    }

    // public function pdfdownload($id)
    // {
    //     $book_data = Booking::select('*')->where('id', $id)->first();

    //     // return view ('booking.pdfbooking', [
    //     //     "book_data" => $book_data,

    //     // ]);

    //     $data = ['view' => $book_data];
    //     $pdf = PDF::loadView('booking.pdfbooking', $data);

    //     return $pdf->download('booking'.$id.'.pdf');
    // }
}
