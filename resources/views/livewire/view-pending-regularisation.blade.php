<div>
    <style>
         
        .accordion {
            border: 1px solid #ccc;
            margin-bottom: 0.625rem;
            border-radius:5px;
            
            font-family: 'Montserrat', sans-serif;
        }
      .accordion:hover{
        border: 0.0625rem solid #3a9efd;
    

      }

        .accordion-heading {
            cursor: pointer;
            border-radius:5px;
        }

        .accordion-body {
            display: none;
            padding:0;
            margin:0;
            background-color: #fff;
        }

        .accordion-content {
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            align-items:center;
        }
        .content1 {
            display: flex;
            justify-content:start;
            align-items: center;
            gap:0.625rem;
            padding:5px;
            margin-bottom: 0.3125rem;
        }
        .content2 {
            display: flex;
            justify-content:start;
            align-items: center;
            gap:0.625rem;
            margin-bottom: 0.3125rem;
        }

        .accordion-title {
            display: flex;
            background-color: #fff;
            border-radius:5px;
            padding:0 5px;
            align-items:center;
            flex-direction: row;
            justify-content:space-between;
        }
       .arrow-btn{
        background-color:#fff;
        height:22px;
        width:22px;
        display:flex;
        justify-content:center;
        align-items:center;
        border-radius:50%;
        border: 1px solid #ccc;
       }
       .active .container {
           border-color: #3a9efd; /* Blue border when active */
       }

       .active .arrow-btn {
           color: #3a9efd;
           border: 1px solid #3a9efd;
        /* Blue arrow when active */
       }
        .approveBtn{
            background:#007BFF;
            border:1px solid #007BFF;
            padding:2px 5px;
            color:#fff;
            font-size:0.755rem;
            font-weight:500;
            border-radius:5px;
        }
        .rejectBtn{
            background:#fff;
            border:1px solid #007BFF;
            padding:2px 5px;
            color:#007BFF;
            font-size:0.755rem;
            font-weight:500;
            border-radius:5px;
        }
    </style>    
    @if (session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(!empty($regularisationRequests))
        @foreach($regularisationRequests as $r1)
          
            <div class="container mt-1" style="border-radius: 5px;width:100%; " >
                <div class="accordion">
                    <div class="accordion-heading" style="border-radius: 5px; "  onclick="toggleAccordion(this)">
                        <div class="accordion-title">
                            <!-- Display leave details here based on $leaveRequest -->
                            <div class="accordion-content">
                             <div class="accordion-profile" style="display:flex; gap:7px; margin:auto 0;align-items:center;justify-content:center;">
                             
                                        <img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png" alt="Default User Image" style="width: 45px; height: 45px; border-radius: 50%;">
                                       
                                        <div>
                                            
                                            <p style="font-size: 0.755rem; font-weight: 500; text-align: center;margin: auto;">{{$r1->first_name}}&nbsp;{{$r1->last_name}}<br>
      
                                                <span style="color: #778899; font-size: 0.675rem; text-align: start;">#{{$r1->emp_id}}</span>
                                            
                                            </p>
                                            
                                        </div>
                                 </div>
                            </div>
                         
                           

                            <div class="accordion-content">
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <p style="color: #778899; font-size: 0.755rem; font-weight: 500; text-align: center;">
                                        Period <br>
                                        <span style="color: #333; font-size: 0.755rem; font-weight: 500;">
                                         {{\Carbon\Carbon::parse($r1->regularisation_date)->format('d M, Y')}} 
                                        </span> <br>
                                        <span style="color: #36454F; font-size: 0.675rem; font-weight: 400;">
                                            

                                            1
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <!-- Add other details based on your leave request structure -->
                            <div class="arrow-btn" >
                               <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-body"style="background-color:#fff;">
                      <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>
                        <div class="content1">
                           <span style="color: #333; font-size: 0.755rem; font-weight: 500;">No. of days:</span>
                                
                                    <span style="color: #778899; font-size: .795rem; font-weight: 400;">
                                       1
                                    </span>
                               
                            </div>
                        <div class="content1">
                          <span style="color: #333; font-size: 0.755rem; font-weight: 500;">Reason:</span>
                     
                                <span style="font-size: 0.755rem; color:#778899">{{$r1->reason}}</span>
                           
                          
                        </div>
                         <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>
                        <div style="display:flex; flex-direction:row; justify-content:space-between;">
                          <div class="content1">
                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">Applied On <br>
                                
                                    <span style="color: #333; font-size: 0.785rem; font-weight: 500;">
                                    {{\Carbon\Carbon::parse($r1->created_at)->format('d M, Y')}} 
                                   </span>
                               
                               </span> 
                            </div>
                          

                            <div class="content1">
                                <a href="" style="color:#007BFF;font-size:0.755rem;">View Details</a>
                                <button class="rejectBtn" wire:click="reject({{$r1->id}})">Reject</button>
                                <button class="rejectBtn" >Forward</button>
                                <button class="approveBtn btn-primary" wire:click="">Approve</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">
            <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no pending records of any leave transaction to Review</p>
        </div>
    @endif
</div>
