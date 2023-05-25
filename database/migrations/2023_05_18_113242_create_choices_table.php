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
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->string('choice_text');
            $table->boolean('is_correct')->default(false);
            $table->timestamps();

            $table->foreignId('question_id')
            ->constrained('questions');
        });

        // Insert sample choices
        DB::table('choices')->insert([
            ['choice_text' => 'joshua Abinal', 'is_correct' => false, 'question_id' => 1],
            ['choice_text' => 'Rommel Ramos', 'is_correct' => false, 'question_id' => 1],
            ['choice_text' => 'Rasmus Ledorf', 'is_correct' => true, 'question_id' => 1],
            
            ['choice_text' => 'Philippines', 'is_correct' => false, 'question_id' => 2],
            ['choice_text' => 'Hypertext Preprocessor', 'is_correct' => true, 'question_id' => 2],
            ['choice_text' => 'Hypertext Visual', 'is_correct' => false, 'question_id' => 2],

            ['choice_text' => '2000', 'is_correct' => true, 'question_id' => 3],
            ['choice_text' => '3000', 'is_correct' => false, 'question_id' => 3],
            ['choice_text' => '100', 'is_correct' => false, 'question_id' => 3],

            ['choice_text' => 'NASA', 'is_correct' => true, 'question_id' => 4],
            ['choice_text' => 'UNIVAC', 'is_correct' => false, 'question_id' => 4],
            ['choice_text' => 'ENIAC', 'is_correct' => false, 'question_id' => 4],
            
            ['choice_text' => 'Bill Gates', 'is_correct' => false, 'question_id' => 5],
            ['choice_text' => 'Stephen Curry', 'is_correct' => false, 'question_id' => 5],
            ['choice_text' => 'Steve Jobs', 'is_correct' => true, 'question_id' => 5],
            
            ['choice_text' => 'Mouse', 'is_correct' => false, 'question_id' => 6],
            ['choice_text' => 'Printer', 'is_correct' => false, 'question_id' => 6],
            ['choice_text' => 'MotherBoard', 'is_correct' => true, 'question_id' => 6],

            ['choice_text' => 'World Wide Weather', 'is_correct' => false, 'question_id' => 7],
            ['choice_text' => 'Wide World West', 'is_correct' => false, 'question_id' => 7],
            ['choice_text' => 'World Wide Web', 'is_correct' => true, 'question_id' => 7],
            
            ['choice_text' => 'Yahoo', 'is_correct' => false, 'question_id' => 8],
            ['choice_text' => 'An Intranet', 'is_correct' => true, 'question_id' => 8],
            ['choice_text' => 'The Internet', 'is_correct' => false, 'question_id' => 8],

            ['choice_text' => 'Apple', 'is_correct' => false, 'question_id' => 9],
            ['choice_text' => 'Lenovo', 'is_correct' => false, 'question_id' => 9],
            ['choice_text' => 'Lazada', 'is_correct' => true, 'question_id' => 9],

            ['choice_text' => 'Sound Card', 'is_correct' => false, 'question_id' => 10],
            ['choice_text' => 'Lenovo', 'is_correct' => false, 'question_id' => 10],
            ['choice_text' => 'A mouse', 'is_correct' => true, 'question_id' => 10],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
