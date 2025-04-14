<?php

namespace App\Livewire\Histori;

use App\Models\HistoriLog;
use Livewire\Component;
use Livewire\WithPagination;

class ActivityLog extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.histori.activity-log', [
            'HistoriLogs' => HistoriLog::paginate(9),
        ]);
    }
}
