<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\espace_event;
use App\Models\reservation;
use App\Models\reservation_chambre;
use App\Models\reservation_espace;
use App\Models\reservations_service;
use App\Models\roomstype;
use Illuminate\Http\Request;

class reservController extends Controller
{
    public function traiterFormulaire(Request $request)
    {
function teste($var){

    if(isset($var)!==false && !empty($var)){
        return 1;
    }
}
if($request->has('confirmer') && teste($request->input('email'))==1){
    $date_d = $request->input('date_d');
    $date_f = $request->input('date_f');
       if(teste($request->input('date_f'))==1&& teste($request->input('date_d'))==1){
    $reservation=new reservation();

    $email = $request->input('email');
    $resultat = client::where('email', '$email')->pluck('id')->get();
    $reservation->id_client=$resultat;
  
    $resultat1 = reservation::latest()->pluck('id')->first();


    $reservation->date_debut=$date_d ;
    $reservation->date_fin=$date_f;
$chambre = $request->input('chambre');
        $espace_event = $request->input('espace_event');
     
        $service = $request->input('service');
       
        if(teste($request->input('chambre'))==1){
    $resultat = roomstype::where('type', '$chambre')->pluck('id')->get();
       $reserv_chambre=new reservation_chambre();
       $reserv_chambre->idroomtype =$resultat;
       $reserv_chambre->idreservation=$resultat1;
       $reserv_chambre->save();
        }
        if(teste($request->input('espace_event'))==1){
            $resultat = espace_event::where('name', '$espace_event')->pluck('id')->get();
               $reserv_espace=new reservation_espace();
               $reserv_espace->idespace =$resultat;
               $reserv_espace->idreserv=$resultat1;
               $reserv_espace->save();
                }
                if(teste($request->input('service'))==1){
                    $resultat = roomstype::where('servicename', '$service')->pluck('id')->get();
                       $reserv_service=new reservations_service();
                       $reserv_service->id_service =$resultat;
                       $reserv_service->id_reservation=$resultat1;
                       $reserv_service->save();
                        }
                        

     
   
     
        return redirect()->route('reserve.blade.php');
    }
}

}
}