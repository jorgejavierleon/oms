<?php

namespace Database\Seeders;

use App\Models\OneOnOneSuggestion;
use Illuminate\Database\Seeder;

class OneOnOneSuggestionSeeder extends Seeder
{
    protected array $suggestions = [
        "How are you doing? Is there anything specific you'd like to discuss today?",
        "What progress have you made on your current projects or tasks?",
        "Is there anything that's been challenging for you lately? How can I support you?",
        "Are there any obstacles or roadblocks you're facing that I should be aware of?",
        "Do you have any feedback or suggestions on how we can improve our team's processes or workflows?",
        "Are there any specific skills or areas you'd like to develop or receive training in?",
        "What are your long-term career goals, and how can we align your current work to help you achieve them?",
        "How can we foster a better work-life balance for you?",
        "Is there anything you need from me to help you be more successful in your role?",
        "Are there any opportunities for cross-department collaboration that you'd like to explore?",
        "What accomplishments are you most proud of since our last meeting?",
        "Is there anything you'd like to learn from me or any questions you have about my role?",
        "What are your thoughts on the company's recent initiatives or changes?",
        "Do you feel adequately recognized and appreciated for your contributions?",
        "Are there any resources or tools you need to perform your job more effectively?",
        "How would you describe your current level of job satisfaction?",
        "Are there any professional development opportunities or conferences you'd like to attend?",
        "Do you have any suggestions for team-building activities or ways to improve team morale?",
        "Are there any areas where you feel you need additional support or guidance?",
        "Is there anything else you'd like to discuss or any questions you have for me?"
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->suggestions as $suggestion) {
            OneOnOneSuggestion::create([
                'description' => $suggestion,
                'locale' => 'en'
            ]);
        }
    }
}
