<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summary', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('img'); // картинка
            $table->text('name'); // имя
            $table->text('surname'); // фамилия
            $table->text('middle_name'); // отчество
            $table->integer('age'); // возраст
            $table->text('city'); // город
            $table->text('education'); // образование
            $table->text('nationality'); // национальность
            $table->text('vacancy'); // вакансия
            $table->text('salary'); // зп
            $table->integer('work');   // опыт работы в числе
            $table->text('work_experience'); // опыт работы
            $table->text('education_all1'); // подробнее об образовании (форма обучения)
            $table->text('education_all2'); // подробнее об образовании (вуз)
            $table->text('about_me'); // обо мне
            $table->text('other_information');   // другие сведения
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('summary');
    }
}
