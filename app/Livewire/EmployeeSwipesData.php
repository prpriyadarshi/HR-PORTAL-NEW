<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\SwipeRecord;
use App\Models\EmployeeDetails;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;
class EmployeeSwipesData extends Component
{
    public $employees;
   
    
    public $search;
  
   
    
    public $notFound;
    public $selectedEmployee;
    public $deviceId;
    public $status;
    public $swipes; 
    public $mobileId;  
   

    public $swipeTime='';
   
    public $loggedInEmpId1 ;
       public function mount()
    {
       
        
        $today = now()->startOfDay(); // Carbon instance representing the start of today
        $userSwipesToday = SwipeRecord::where('emp_id',Auth::guard('emp')->user()->emp_id )
            ->where('created_at', '>=', $today)
            ->where('created_at', '<', $today->copy()->endOfDay())
            ->exists();
        if($userSwipesToday)
        {
              $agent = new Agent();

                 if ($agent->isMobile()) {
                         // The user accessed the component from a mobile device
                         // Add your mobile-specific logic here
                          // For example: $this->emit('mobileAccess');
                     $this->status = 'Mobile';
                 } elseif ($agent->isDesktop()) {
                         // The user accessed the component from a desktop or laptop
                          // Add your desktop-specific logic here
                         // For example: $this->emit('desktopAccess');
                     $this->status = 'Desktop';
                 } else {
                          // Default case if neither mobile nor desktop
                     $this->status = '-';
                 }
        }
        
       
        
        else {
        // User hasn't swiped in today or is not authenticated
        // Add your logic for this case if needed
        $this->status = '-';
        }
        

    
        
       
    }
   
    
    public function updatedDateRange($value)
    {
        // Handle the date range change logic if needed
        list($startDate, $endDate) = explode(' - ', $value);
        // You can update other properties or perform additional actions here

        // For demonstration purposes, I'm emitting an event with the selected date range
        $this->emit('dateRangeUpdated', ['start' => $startDate, 'end' => $endDate]);
    }

   
    public function testMethod()
    {
        
        $currentDate = now()->toDateString(); 
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
        $this->swipes = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
            $query->selectRaw('MIN(id)')
                ->from('swipe_records')
                ->whereIn('emp_id', $employees->pluck('emp_id'))
                ->whereDate('created_at', $currentDate)
                ->groupBy('emp_id');
        })
            ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
            ->when($this->search, function ($query) {
                $query->where(function ($subQuery) {
                    $subQuery->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                });
            })
            ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
            ->get();

    }
    public function showEmployeeDetails($empId)
    {
        // Fetch details of the selected employee based on $empId
        $this->selectedEmployee = EmployeeDetails::where('emp_id', $empId)->first();
    }
    public function downloadFileforSwipes()
    {
        $currentDate = now()->toDateString(); 
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
        $this->loggedInEmpId1 = EmployeeDetails::where('emp_id',Auth::guard('emp')->user()->emp_id)->get();
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
        $this->swipes = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
            $query->selectRaw('MIN(id)')
                ->from('swipe_records')
                ->whereIn('emp_id', $employees->pluck('emp_id'))
                ->whereDate('created_at', $currentDate)
                ->groupBy('emp_id');
        })
        ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
        ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
        ->get();
        $data = [
            ['LIST OF PRESENT EMPLOYEES'],
            ['Employee ID','Employee Name', 'Swipe Date', 'Swipe Time','Shift','In/Out','Door/Address','Status'],
            
        ];
        $employees1=$this->swipes;
        foreach ($employees1 as $employee) {
            $swipeTime1 = Carbon::parse($employee['created_at'])->format('d-m-Y'); // Format the date
            $data[] = [$employee['emp_id'], $employee['first_name'] . ' ' . $employee['last_name'],'=TEXT("' . $swipeTime1 . '","DD-MM-YYYY")',$employee['swipe_time'],'10:00 am to 07:00pm',$employee['in_or_out'],'-','-'];
        }
        // Create a temporary file
        $tempFilePath = storage_path('app/public/' . Str::random(16) . '.csv');
    
        // Open the file for writing
        $file = fopen($tempFilePath, 'w');
    
        // Write the data to the file
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
    
        // Close the file
        fclose($file);
    
        // Set the response headers for download
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="TODAY_PRESENT_EMPLOYEES"',
        ];
    
        // Return the response with the file and headers
        return response()->stream(
            function () use ($tempFilePath) {
                readfile($tempFilePath);
                // Delete the file after it has been streamed
                File::delete($tempFilePath);
            },
            200,
            $headers
        );
    }
    public function render()
    {
        
        $currentDate = now()->toDateString(); 
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
        
       
       
          
       
            $this->swipes = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
                $query->selectRaw('MIN(id)')
                    ->from('swipe_records')
                    ->whereIn('emp_id', $employees->pluck('emp_id'))
                    ->whereDate('created_at', $currentDate)
                    ->groupBy('emp_id');
            })
            ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
            ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
            ->get();
            $nameFilter = $this->search; // Assuming $this->search contains the name filter
            $this->swipes = $this->swipes->filter(function ($swipe) use ($nameFilter) {
                return stripos($swipe->first_name, $nameFilter) !== false || stripos($swipe->last_name, $nameFilter) !== false || stripos($swipe->emp_id, $nameFilter) !== false || stripos($swipe->swipe_time, $nameFilter) !== false;
            });
            if ($this->swipes->isEmpty()) {
                $this->notFound = true; // Set a flag indicating that the name was not found
            } else {
                $this->notFound = false;
            }
       
        
        $todaySwipeIN = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->whereDate('created_at', $currentDate)
        ->where('in_or_out', 'IN')
        ->first();
        
        if ($todaySwipeIN) {
            // Swipe IN time for today
          
            $this->swipeTime = $todaySwipeIN->swipe_time;
          

        } 
       
        return view('livewire.employee-swipes-data',['LoggedInEmpId1'=>$this->loggedInEmpId1,'SignedInEmployees'=>$this->swipes,'SwipeTime'=>$this->swipeTime]);
    }
}
