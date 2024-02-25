<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class roomdetail1controller extends Controller
{

     public function verifier_champs(Request $request){
      $datedebut = request()->input('date_debut');
      $datefin = request()->input('date_fin');
      $datedebutFormatted = str_replace('/', '-', $datedebut);
      $datefinFormatted = str_replace('/', '-', $datefin);
      $year1=explode('-', $datedebut)[0];
      $year2=explode('-', $datefin)[0];
      if($year1!=2024 && $year2!=2024){
        Session::flash('erreur', 'Il faut saisir l\'année en 2024');
      }
     }  
     public function verifdate(request $request) {

        $date_debut = $request->input('date_debut');
        $date_fin = $request->input('date_fin');
        // Récupérer le nom de la chambre à partir de l'input hidden
        $nom_chambre = $request->input('chambre');
        
        // Récupérer l'identifiant de la chambre à partir du nom
        $id_chambre = DB::table('roomstypes')
            ->where('type', '=', $nom_chambre)
            ->value('id');
        
        // Vérifier si les dates de début et de fin de la réservation chevauchent une réservation existante pour cette chambre
        $reservations = DB::table('reservation_chambres')
        ->join('reservations', 'reservation_chambres.idreservation', '=', 'reservations.id')
        ->where('reservation_chambres.idroomtype', '=', $id_chambre)
        ->where(function ($query) use ($date_debut, $date_fin) {
            $query->whereBetween('reservations.date_debut', [$date_debut, $date_fin])
                ->orWhereBetween('reservations.date_fin', [$date_debut, $date_fin])
                ->orWhere(function ($query) use ($date_debut, $date_fin) {
                    $query->where('reservations.date_debut', '<', $date_debut)
                        ->where('reservations.date_fin', '>', $date_debut);
                })
                ->orWhere(function ($query) use ($date_debut, $date_fin) {
                    $query->where('reservations.date_debut', '<', $date_fin)
                        ->where('reservations.date_fin', '>', $date_fin);
                });
        })
        ->get();
        
        // Si $reservations n'est pas vide, cela signifie que la chambre n'est pas disponible pour les dates spécifiées
        if ($reservations->count() === 0) {
            // Chambre disponible
            Session::flash('erreur', "la chambre est disponible");
            return back();
        } else {
            // Chambre non disponible
            Session::flash('erreur', "la chambre n est pas disponible");
            return back();
        }
     }
}

