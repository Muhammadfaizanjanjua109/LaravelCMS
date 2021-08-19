<?php
use App\MOdels\clasec;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
             Schema::dropIfExists('sections');
            $table->increments('id');
            $table->string('section_name','255');
            $table->integer('clasec_id')->unsigned();
            $table->timestamps();
            $table->foreign('clasec_id')->references('id')->on('clasecs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
