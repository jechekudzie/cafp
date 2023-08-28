<?php

namespace App\Http\Livewire;

use App\Models\Publication;
use App\Models\PublicationCategory;
use Livewire\Component;
use \Livewire\WithPagination;

class Publications extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $perPage = 5;
    public $search;
    public $publication_category;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.publications', [
            'publications' => Publication::search($this->search)
                ->Category($this->publication_category)
                ->paginate($this->perPage),
            'publication_categories' => PublicationCategory::all()
        ]);
    }
}

