<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('reservations', function (Blueprint $table) {
            // Assurez-vous que les noms de colonne et les contraintes sont corrects.
            // Supprimez d'abord les anciennes contraintes de clé étrangère
            $table->dropForeign(['id_client']); // 'client_id' est l'id dans la table 'reservation' qui référence 'clients'
            $table->dropForeign(['idpersonnel']); // 'personnel_id' est l'id dans la table 'reservation' qui référence 'personnels'
            
        
            // Ajoutez les nouvelles contraintes de clé étrangère
            $table->foreign('id_client')->references('id')->on('users')->change();
            $table->foreign('idpersonnel')->references('id')->on('employes')->change();
        });
    }

    public function down() {
        Schema::table('reservations', function (Blueprint $table) {
            // Pour revenir en arrière, supprimez les nouvelles contraintes/clés et recréez les anciennes
            $table->dropForeign(['id_client']);
            $table->dropForeign(['idpersonnel']);
            
            // Assuming you want to revert back to the original state
            $table->foreign('id_client')->references('id')->on('clients')->change(); 
            $table->foreign('idpersonnel')->references('id')->on('personnels')->change();
            // Vous pouvez recréer les anciennes colonnes et contraintes ici
        });
    }
};
