<?php

namespace App\Livewire\OneOnOne;

use App\Models\Meeting;
use App\Models\OneOnOneSuggestion;
use App\Models\TalkingPoint;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class OneOnOneEdit extends Component
{
    public const NUMBER_OF_SUGGESTIONS = 5;

    public Collection $suggestions;

    public Meeting $oneOnOne;

    public function render(): View
    {
        return view('livewire.one-on-one.one-on-one-edit');
    }

    public function mount(): void
    {
        $this->suggestions = $this->getSuggestions();
    }

    public function getSuggestions(): Collection
    {
        return OneOnOneSuggestion::inRandomOrder()->limit(self::NUMBER_OF_SUGGESTIONS)->get();
    }

    public function addTalkingPointSuggestion(OneOnOneSuggestion $suggestion): void
    {
        // TODO validate and extract logic to repo
        $lastOrder = $this->oneOnOne->talkingPoints->last()->order_column ?? 0;
        TalkingPoint::create([
            'meeting_id' => $this->oneOnOne->id,
            'description' => $suggestion->description,
            'created_by' => auth()->id(),
            'order_column' => $lastOrder + 1,
        ]);
        $suggestion->uses++;
        $suggestion->save();
        $this->dispatch('talking-point-added');
    }
}
