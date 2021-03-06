<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\PaymentEmail;

use Auth;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Reservation::with([
            'user'
        ])->get();
        
        return view('pages.admin.reservation.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User();
        $user_id = "";
        $data_user = User::where('email', $request->email)->first();
        if(!$data_user){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make('Coba1234$');
            $user->save();
            $user_id = $user->id;
            
        }else{
            $user_id = $data_user->id;
        }

        Auth::loginUsingID($user_id,true);

        $reservation= Reservation::create([
            'users_id' => $user_id,
            'travel_paket' => $request->travel_paket,
            'participant_count' => $request->participant_count,
            'travel_price' => $request->travel_price,
            'travel_url' => $request->travel_url,
            'note' => $request->note,
            'travel_date' => $request->travel_date,
            'status' => '0',
            'travel_image' => $request->travel_image,
            'travel_city' => $request->travel_city
        ]);

        $emails = [$request->email, "fajarsubeki06@gmail.com"];

        \Mail::to($emails)->send(new PaymentEmail($reservation));

        $returnUrl = 'detail_my_package/' . $reservation->id . '/' . $request->travel_url; 

        return redirect($returnUrl);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $item = Reservation::findOrFail($id);
        $item = Reservation::with([
            'user'
        ])->findOrFail($id);
        return view('pages.admin.reservation.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Reservation::findOrFail($id);
        $item->update($data);

        return redirect()->route('reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Reservation::findOrFail($id);
        $item->delete();

        return redirect()->route('reservation.index');
    }
}
