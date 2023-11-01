<?php

namespace App\Livewire;
use App\Models\EmployeeDetails;
use App\Models\Regularisations;
use Livewire\Component;

class Regularisation extends Component
{
    public $c=1;
    public $data;
    public $data1;
    public $data7;
    public $manager3;
    public $employee;
    public $data4;
    public $from,$to,$reason;


 
    

    public function storePost()
    {
        $employeeDetails = EmployeeDetails::where('emp_id',auth()->guard('emp')->user()->emp_id)->first();
        $emp_id=$employeeDetails->emp_id;
        
        
        
        try 
        {
            
          
                
           
            
           
           Regularisations::create([
                
                'emp_id'=>$emp_id,
                'from' => $this->from,
                'to' => $this->to,
                'reason'=>$this->reason,
                 'is_withdraw'=>0,
                
            ]);
            
            // $this->from = '';
            // $this->to = '';
            // $this->reason = '';
            
            
        } 
        catch (\Exception $ex) {
            
            session()->flash('error','Something goes wrong!!');
        }
    }
    
    public function withdraw()
    {
        $this->data =Regularisations::where('status', 'pending')->update(['is_withdraw' => 1]);
        
    }
   
    public function render()
    {
        $manager = EmployeeDetails::select('manager_id', 'report_to')->distinct()->get();
        $this->data = Regularisations::where('is_withdraw', '0')->count();
        $this->data1 = Regularisations::where('status', 'pending')->first();
        $this->data4 = Regularisations::where('is_withdraw', '1')->count();
        $this->data7= Regularisations::where('is_withdraw', '1')->get();
        $employee = EmployeeDetails::where('emp_id',auth()->guard('emp')->user()->emp_id)->first();
        
        if ($employee) {
            $this->manager3 = EmployeeDetails::find($employee->manager_id);
            
        }
       
        return view('livewire.regularisation',['count'=>$this->c,'manager1'=>$manager,'count1'=> $this->data,'manager2'=>$this->manager3,'data2'=>$this->data1 ,'data5'=>$this->data4,'data8'=>$this->data7]);
    }
}
