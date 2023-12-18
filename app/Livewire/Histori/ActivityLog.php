<?php

namespace App\Livewire\Histori;

use Livewire\Component;
use Livewire\WithPagination;
use app\Models\HistoriLog;

class ActivityLog extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.histori.activity-log', [
            'HistoriLogs' => HistoriLog::paginate(9)
        ]);
    }
}
