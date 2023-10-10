<?php

namespace App\Livewire;
use App\Models\ITStatement;
use Livewire\Component;


class Itstatement1 extends Component
{
    public $itStatements;
    public $monthlyIncomeType ;

 
    public $filteredData;

    public function mount()
    {
        // Retrieve data for the specified monthly_income_type
        $this->filteredData = Itstatement1::all('monthly_income_type', $this->monthlyIncomeType);

    }

  
    public function render()
    {
         $this->itStatements = ITStatement::all();
        // Fetch the data from the ITStatement model
        try {
            $this->itStatements = ITStatement::all();
        } catch (\Exception $e) {
            // Handle any exceptions here, such as database connection errors
            // You can log the error or handle it in a way that makes sense for your application
            // For now, you can set $this->itStatements to an empty array or null to avoid the error
            $this->itStatements = [];
        }

        return view('livewire.itstatement1', ['itStatements' => $this->itStatements]);
    }
    
}