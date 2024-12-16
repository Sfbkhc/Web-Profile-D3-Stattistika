<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DosenStatistika extends Component
{
    /**
     * Data dosen yang dipilih oleh user.
     */
    public $selectedDosen;

    /**
     * Semua data dosen (simulasi atau query ke database).
     */
    private $allDosen = [
        1 => ['id' => 1, 'name' => 'Dr. Budi Santoso', 'expertise' => 'Statistika Terapan', 'email' => 'budi@uho.ac.id'],
        2 => ['id' => 2, 'name' => 'Prof. Anisa Wulandari', 'expertise' => 'Big Data', 'email' => 'anisa@uho.ac.id'],
        3 => ['id' => 3, 'name' => 'Dr. Rizky Hadi', 'expertise' => 'Statistika Matematika', 'email' => 'rizky@uho.ac.id'],
    ];

    /**
     * Create a new component instance.
     *
     * @param int $dosenId
     */
    public function __construct($dosenId = null)
    {
        $this->selectedDosen = $this->getDosenDetail($dosenId);
    }

    /**
     * Fetch detail dosen berdasarkan ID.
     *
     * @param int|null $dosenId
     * @return array|null
     */
    private function getDosenDetail($dosenId): ?array
    {
        return $this->allDosen[$dosenId] ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): View|string
    {
        return view('components.dosen_statistika', [
            'selectedDosen' => $this->selectedDosen,
        ]);
    }
}
