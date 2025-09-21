<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Services; // نفس الاسم اللي تستخدمه عندك

class ServicesSearch extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap'; // ترقيم Bootstrap (v4/v5)

    public string $search = '';

    // حفظ قيمة البحث في الاستعلام (اختياري)
    protected $queryString = ['search' => ['except' => '']];

    public function updatingSearch(): void
    {
        $this->resetPage(); // يرجع للصفحة الأولى عند تغيير البحث
    }

    public function render()
    {
        $services = Services::query()
            ->when($this->search !== '', fn($q) =>
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('slug', 'like', '%' . $this->search . '%')
            )
            ->latest()
            ->paginate(10);

        return view('livewire.services-search', compact('services'));
    }
}
