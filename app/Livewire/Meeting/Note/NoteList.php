<?php

namespace App\Livewire\Meeting\Note;

use App\Models\Meeting;
use App\Models\Note;
use Illuminate\View\View;
use Livewire\Component;

class NoteList extends Component
{
    public Meeting $meeting;

    public string $newNoteContent;

    public function render(): View
    {
        return view('livewire.meeting.note.note-list')->with([
            'notes' => $this->meeting->notes()->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function postNote(): void
    {
//        $this->validate();
        $note = Note::create([
            'content' => $this->newNoteContent,
            'user_id' => auth()->id(),
        ]);
        $this->meeting->notes()->save($note);
    }

    protected array $rules = [
        'newNoteContent' => 'required|string',
    ];
}
