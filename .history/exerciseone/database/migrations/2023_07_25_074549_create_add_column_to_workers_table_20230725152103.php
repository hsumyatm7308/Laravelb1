<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       if(Schema::hasColumn('workers','salary')){
        Schema::table('workers', function (Blueprint $table) {
            $table->dropColumn('salary');
        });
       };
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_column_to_workers');

        Schema::table('workers',function(Blueprint $table){
             
        });
    }
};
