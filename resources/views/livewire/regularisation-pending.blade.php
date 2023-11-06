<div>
<style>
        .container {
            width: 200px;
            height: 150px;
            background-color: #fff; /* White background color */
            border: 1px solid #888; /* Gray border color */
            margin: 10px;
            padding: 10px;
            display: inline-block;
        }
        .container-group {
            display: flex;
            
        }
        .container-group .container {
            flex: 1; /* Distribute available space equally among containers */
        }
        .container2-below {
            flex: 1; /* Take up the same amount of space as Container 1 */
        }
        .cirlce{
            height:0.75rem; width:0.75rem; background: #778899; border-radius:50%;
        }
        .v-line{
            height:100px; width:0.5px; background: #778899; border-right:1px solid #778899; margin-left:5px;
        }
        .group h5{
            font-weight: 400;
            font-size: 1rem;
            white-space: nowrap; /* Prevent text from wrapping */
            overflow: hidden; /* Hide overflowing text */
            text-overflow: ellipsis;
            margin-top:0.975rem;
        }
        .group {
            margin-left:10px;
        }
     
        .container3 {
            width: 650px; /* Set the desired width for Container 3 */
            height: 350px; /* Set the desired height for Container 3 */
            background-color: #fff;
            border: 1px solid #888;
            margin: 10px;
            padding: 10px;
        }
        .table-with-margins {
            margin-top: 20px; /* Add margin above the table */
            margin-bottom: 20px;
             /* Add margin below the table */
             /* Add margin below the table */
            

        }
       
    .header-row th {
        background-color: rgb(2, 17, 79); /* Blue background color */
        color: #fff; /* White text color */
    }
        .combined-table {
            display: flex;
            flex-direction: row; /* Display tables in a horizontal row */
        }

        .combined-table table {
            flex: 1; /* Allow each table to take up equal space */
        }
          .table-container {
            width: 100%; /* Set the table container's width to 100% */
            /* Add a horizontal scrollbar if needed */
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .cell-space {
           padding: 10px; /* Add space inside the header cells */
        }
        .scrollable-area {
            width: 100%; /* Set the width of the scrollable area to 100% */
            overflow-x: auto; /* Add a horizontal scrollbar if needed */
        }
        .vertical-line {
                border-left: 1px solid #000;
                padding-left: 5px;
        }
        .overflow-cell {
             white-space: nowrap; /* Prevent text from wrapping to the next line */
             overflow: hidden;    /* Hide overflowing text */
             text-overflow: ellipsis; /* Show ellipsis (...) for truncated text */
             max-width: 100px; /* Adjust the maximum width as needed */
        }
        .header-row {
              border-top: 1px solid #000; /* Add a 1px solid black border above the header row */
              border-bottom: 1px solid #000; /* Add a 1px solid black border below the header row */
           }
</style>
<body> 
   <div class="container-group">
        <div class="container">
            Container 1
        </div>
        <div class="container container2-below"style="height:220px;">
        <div class="side-container ">
            <h6 style="color: #778899; font-size: 0.875rem; font-weight: 500; text-align:start;"> Application Timeline </h6>
           <div  style="display:flex; ">
           <div style="margin-top:20px;">
             <div class="cirlce"></div>
             <div class="v-line"></div>
            <div class=cirlce></div>
             </div>
              <div style="display:flex; flex-direction:column; gap:40px;">
              <div class="group">
               <div >
                  <h5 style="color: #778899; font-size: 0.825rem; font-weight: 400; text-align:start;">Approved<br>
                <span>by <span style="color: #778899; font-size: 0.825rem; font-weight: 500;text-align:start;">GYAN PRABODH DASARI</span></span><br>
                <span style="color: #778899; font-size: 0.725rem; font-weight: 400;text-align:start;">22 Sep, 2023     7:01 AM</span>
                    </h5>
               </div>
           </div>
           <div class="group">
               <div >
                  <h5 style="color: #778899; font-size: 0.825rem; font-weight: 400; text-align:start;">Submitted<br>
                <span style="color: #778899; font-size: 0.725rem; font-weight: 400;text-align:start;">22 Sep, 2023     10:44 PM</span>
                    </h5>
               </div>
           </div>
              </div>
           
           </div>
             
        </div>
        </div>
    </div>
<div class="container3">
       Dates Applied for Regularisation
    <div class="table-container">
       
                 <div class="combined-table">
                    <table class="table-with-margins">
                        <thead>
                            <tr class="header-row">
                                <th class="cell-space">Date</th>
                                <th class="cell-space">Approve/Reject</th>
                                <th class="cell-space">Approver&nbsp;Remarks</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr class="header-row">
                                <td class="cell-space">01st November</td>
                                <td class="cell-space"></td>
                                <td class="cell-space">Good</td>
                               
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
        <div class="scrollable-area">
            <table class="table-with-margins">
                    <thead>
                  
                        <tr class="header-row">
                            <th class="vertical-line cell-space">Shift</th>
                            <th class="cell-space">First&nbsp;In&nbsp;Time</th>
                            <th class="cell-space">Last&nbsp;Out&nbsp;Time</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="header-row">
                            <td class="vertical-line overflow-cell cell-space">10:00 am to 07:00 pm</td>
                            <td class="cell-space">10:00 am</td>
                            <td class="cell-space">07:00 pm</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
        </div>
                </div>
         </div>         
  </div> 
</div>
    
</body>
</div>
