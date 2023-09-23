<?php

namespace App\Livewire\Employee;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\View\View;
use Livewire\Component;

class EmployeeEdit extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function render(): View
    {
        return view('livewire.employee.employee-edit');
    }

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([
                    TextInput::make('name')
                        ->required()
                        ->autocomplete('off'),
                    TextInput::make('email')
                        ->required()
                        ->autocomplete('off'),
                ]),
            ])
            ->statePath('data');
    }

    public function edit(): void
    {
        dd($this->form->getState());
    }
}
