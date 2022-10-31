
<?php
//タイムスタンプ機能
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->string('astist');
            $table->string('placticeplace');
            $table->string('goal');
            $table->string('musicjanru');
            $table->string('dancetype');
            $table->string('url');
            $table->string('sns');
            $table->string('others');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dance');
    }
}
