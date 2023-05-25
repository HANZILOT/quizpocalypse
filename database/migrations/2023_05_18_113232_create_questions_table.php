<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text');
            $table->timestamps();
            $table->foreignId('quiz_id')
            ->constrained('quizzes');
        });

        // Insert sample questions
        DB::table('questions')->insert([
            ['question_text' => 'Who founded PHP?', 'quiz_id' => 1],
            ['question_text' => 'PHP is an acronym for?', 'quiz_id' =>1],
            ['question_text' => 'How many computer languages are in use?', 'quiz_id' => 1],
            ['question_text' => 'Which of these is not an early computer?', 'quiz_id' => 1],
            ['question_text' => 'Who founded Apple Computer?', 'quiz_id' =>1],
            ['question_text' => 'Which of these is not a peripheral, in computer terms?', 'quiz_id' => 1],
            ['question_text' => 'What does the Internet prefix WWW stand for?', 'quiz_id' => 1],
            ['question_text' => 'A local or restricted communications network, especially a private network created using World Wide Web software.', 'quiz_id' =>1],
            ['question_text' => 'Which of these is not a kind of computer?', 'quiz_id' => 1],
            ['question_text' => 'What is the name for a computer pointing device?', 'quiz_id' => 1],
            // Add more questions as needed
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
