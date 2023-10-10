<style>
   .expand-collapse {
        margin-left: 10px; /* Adjust margin as needed */
    }

    .expand-collapse button {
        font-size: 14px;
        background-color: transparent;
        border: none;
        text-decoration: underline;
        color: #3b4452;
        cursor: pointer;
    }

    .expand-collapse button:hover {
        text-decoration: none;
    }
/* Container style */


    </style>
<div class="container" >
<div class="row" style="display: flex">
    <div class="column" style="width: 170px; height: 100px; border: 1px solid silver; border-radius: 5px; background: white; margin-top: 40px; margin-left: 20px">
        <p style="font-size: 11px;margin-top:5px;margin-left:10px">TAX CALCULATED AS PER</p>
        <div style="border:1px solid silver ;height:1px;width:117%;margin-top:-10px;margin-left:-12px"></div>
        <p style="color:#41CD2A;font-size:14px;margin-top:20px;margin-left:18px">NEW TAX REGIME</p>
    </div>
    <div class="column" style="width: 170px; height: 100px; border: 1px solid silver; border-radius: 5px; background: white; margin-top: 40px; margin-left: 10px">
        <p style="font-size: 11px;margin-top:5px;margin-left:30px">NET TAX IN ₹</p>
        <div style="border:1px solid silver ;height:1px;width:117%;margin-top:-10px;margin-left:-12px"></div>
        <p style="font-size:24px;margin-top:10px;margin-left:40px">0.00</p>
    </div>
    <div class="column" style="width: 170px; height: 100px; border: 1px solid silver; border-radius: 5px; background: white; margin-top: 40px; margin-left: 10px">
        <p style="font-size: 11px;margin-top:5px;margin-left:30px">TOTAL TAX DUE IN ₹</p>
        <div style="border:1px solid silver ;height:1px;width:117%;margin-top:-10px;margin-left:-12px"></div>
        <p style="font-size:24px;margin-top:10px;margin-left:40px">0.00</p>
    </div>
    <div class="column" style="width: 170px; height: 100px; border: 1px solid silver; border-radius: 5px; background: white; margin-top: 40px; margin-left: 10px">
        <p style="font-size: 11px;margin-top:5px;margin-left:30px">TAX DEDUCTIBLE PER MONTH IN ₹</p>
        <div style="border:1px solid silver ;height:1px;width:117%;margin-top:-10px;margin-left:-12px"></div>
        <p style="font-size:24px;margin-top:10px;margin-left:40px">0.00</p>
    </div>
    <div class="column" style="width: 170px; height: 100px; border: 1px solid silver; border-radius: 5px; background: white; margin-top: 40px; margin-left: 10px">
        <p style="font-size: 11px;margin-top:5px;margin-left:30px">REMAINING MONTHS (SEP 2023 ONWARDS)</p>
        <div style="border:1px solid silver ;height:1px;width:117%;margin-top:-10px;margin-left:-12px"></div>
        <p style="font-size:24px;margin-top:10px;margin-left:40px">7</p>
    </div>
</div>

<div class="row" style="display:flex">
<div _ngcontent-ffh-c446="" class="expand-collapse">
  <button id="collapseExpandBtn" _ngcontent-ffh-c446="" class="btn btn-link ng-star-inserted"><p  style="margin-top:10px">Collapse all</p></button>
  <p style="margin-left:750px;margin-bottom:70px">Value in ₹</p>
</div>
<div class="row" style="width: 850px; height: 50px; border-radius: 5px; border: 1px solid silver; margin-left: 15px; background: white; margin-top: -50px;">
    <div class="column" style="display:flex">
        <p id="expandButton" style="font-size: 14px; margin-top: 15px; padding-left: 10px; cursor: pointer;">+</p>
        <p style="font-weight: normal;margin-top: 14px; margin-left: 20px;">A. Income </p>
        <p style="font-weight: normal;margin-top: 14px; margin-left: 600px;">₹2,28,480.00 </p>
    </div>
</div>

<div id="incomeContainers" style="display: none; width: 850px;">
    <div class="row" style="display: flex; width: 106%;">
        <div class="column" style="height: 40px; background: #AFC8ED; width: 102%; margin-left: 10px; display: flex;margin-top:10px">
            <p style="margin-top: 12px; margin-left: 20px; font-size: 10px;">Items</p>
            <p style="margin-top: 12px; margin-left: 100px; font-size: 10px;">Total</p>
            <div class="column" style="display: flex; white-space: nowrap; width: 100%;margin-left:40px">
                <table style="width: 100%;">
                    <tr style="width: 100%;">
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 40px;">Jan 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Feb 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Mar 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Apr 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">May 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Jun 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Jul 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Aug 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Sep 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Oct 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Nov 2023</td>
                        <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Dec 2023</td>
                        <!-- Add more months here -->
                    </tr>
                </table>
            </div>
        </div>
    <p style="font-weight: normal; margin-top: 4px;background:white;height:40px;width: 890px;margin-left:10px">Monthly Income</p>
    </div>

    @foreach($itStatements as $index => $record)
    <div class="row" style="height:30px;width:106%;display:flex;background:white; margin-bottom: 10px;">
        <div class="column" style="display:flex;height:20px;margin-top:-5px @if(!$loop->last) margin-right: 10px; @endif">
            <p style="margin-top:10px;margin-left:20px;font-size:13px"> {{$record->montly_income_type}}</p>
            <p style="margin-top:10px;margin-left:75px;font-size:10px">{{$record->total}}</p>
            <div class="column" style="display: flex; white-space: nowrap; width: 100%;margin-left:20px;margin-top:5px">
                <table style="width: 100%;margin-top:5px;margin-left:-10px">
                    <tr style="width: 100%;">
                        <td style="font-size: 10px; margin-top: px; margin-left: 90px;">{{$record->Jan_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 10px;">{{$record->Feb_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 90px;">{{$record->Mar_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 10px;">{{$record->Apr_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 90px;">{{$record->May_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 10px;">{{$record->Jun_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 90px;">{{$record->July_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 10px;">{{$record->Aug_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 90px;">{{$record->Sep_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 10px;">{{$record->Oct_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 90px;">{{$record->Nov_2023}}</td>
                        <td style="font-size: 10px; margin-top: 7px; margin-left: 10px;">{{$record->Dec_2023}}</td>
                        <!-- Add more months here -->
                    </tr>
                </table>
            </div>
        </div>
    </div>
    @endforeach
</div>


    <div class="container" style="width: 106%; margin-left: -10px; margin-top: 5px;">
    <div class="row" style="width: 850px; height: 50px; border-radius: 5px; border: 1px solid silver; margin-left: 12px; background: white; margin-top: 20px;">
        <div class="column" style="display: flex;">
            <p id="expandButton2" style="font-size: 14px; margin-top: 15px; padding-left: 10px; cursor: pointer;">+</p>
            <p style="font-weight: normal; margin-top: 14px; margin-left: 20px;">B. Deductions</p>
            <p style="font-weight: normal; margin-top: 14px; margin-left: 540px;">₹1,13,320.00</p>
        </div>
        <div style="border: 1px solid silver; height: 1px; width: 98%; margin-top: -5px;"></div>
        <div id="incomeContainer2" style="display: none; width: 850px;">
            <div class="row" style="display: flex; width: 103%;">
                <div class="column" style="height: 40px; background: #AFC8ED; width: 103%; margin-left: 0; display: flex; margin-top: -3px;">
                    <p style="margin-top: 12px; margin-left: 20px; font-size: 10px;">Items</p>
                    <p style="margin-top: 12px; margin-left: 100px; font-size: 10px;">Total</p>
                    <div class="column" style="display: flex; white-space: nowrap; width: 100%; margin-left: 30px;">
                        <table style="width: 100%;">
                            <tr style="width: 100%;">
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 40px;">Jan 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Feb 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">Mar 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">Apr 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">May 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">Jun 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">July 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">Aug 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">Sep 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">Oct 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">Nov 2023</td>
                                <td style="font-size: 10px; margin-top: 12px; margin-left: 30px;">Dec 2023</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="border: 1px solid silver; height: 1px; width: 98%;"></div>
                <div class="row" style="height: 120px; width: 100%; margin-left: 0; display: flex; background: white;">
                    <div class="column" style="display: flex; margin-top: 5px; margin-left: 0;">
                        <p style="margin-top: 23px; margin-left: 20px; font-size: 13px; width: 100px;">PF</p>
                        <p style="margin-top: 24px; margin-left: 20px; font-size: 10px; width: 50px;">15,000</p>
                        <div class="column" style="display: flex; white-space: nowrap; width: 100%; margin-left: 30px; margin-top: 10px;">
                            <table style="width: 100%;">
                                <tr style="width: 100%;">
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 10px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 10px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 10px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="column" style="display: flex; margin-top: 5px; margin-left: 0;">
                        <p style="margin-top: 23px; margin-left: 9px; font-size: 10px; width: 100px;">PROTAX</p>
                        <p style="margin-top: 24px; margin-left: 30px; font-size: 10px; width: 50px;">15,000</p>
                        <div class="column" style="display: flex; white-space: nowrap; width: 100%; margin-left: 30px; margin-top: 10px;">
                            <table style="width: 100%;">
                                <tr style="width: 100%;">
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 10px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 10px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 10px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 5px; margin-left: 30px;">1,250</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
</div>
                <div class="row" style="height: 40px; width: 103%; background: #C3C7CD; ">
                    <div class="column" style="display: flex; margin-top: 2px; margin-left: -8px; width: 900px;">
                        <p style="margin-top: 13px; margin-left: 20px; font-size: 13px; width: 110px;">Total</p>
                        <p style="margin-top: 13px; margin-left: 20px; font-size: 10px; width: 120px;">₹2,28,480.00</p>
                        <div class="column" style="display: flex; white-space: nowrap; width: 100%; margin-top: -10px;">
                            <table style="width: 100%;">
                                <tr style="width: 100%;">
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: -100px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: -20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 10px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 30px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 30px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 20px;">1,250</td>
                                    <td style="font-size: 10px; margin-top: 12px; margin-left: 30px;">1,250</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    
                </div>
</div>
                <div class="container" style="width: 106%; margin-left: -30px;margin-top:5px">
    <div class="row" style="width: 840px; height: 50px; border-radius: 5px; border: 1px solid silver; margin-left: 13px; background: white; margin-top: 20px;">
        <div class="column" style="display: flex">
            <p id="expandButton3" style="font-size: 14px; margin-top: 15px; padding-left: 10px; cursor: pointer;">+</p>
            <p style="font-weight: normal; margin-top: 14px; margin-left: 20px;">C. Perquisites</p>
            <p style="font-weight: normal; margin-top: 14px; margin-left: 590px;">₹0.00</p>
        </div>
        <div style="border: 1px solid silver; height: 1px; width: 98%; margin-top: -5px;"></div>
        <div id="incomeContainer3" style="display: none; width: 850px;">
            <div class="row" style="display: flex; width: 103%;">
                
           
                <div class="row" style="height:40px; width: 100%; margin-left: 0; display: flex; background: white;">
                    <div class="column" style="display: flex; margin-top: 5px;;">
                        <p style=" margin-left: 270px; font-size: 12px; ">No data to display !!!</p>
                        
                    </div>
                    

    </div>
</div>
   
</div>
<div class="container" style="width: 106%; margin-left: -30px;margin-top:20px">
    <div class="row" style="width: 840px; height: 50px; border-radius: 5px; border: 1px solid silver; margin-left: 13px; background: white; margin-top: 20px;">
        <div class="column" style="display: flex">
            <p id="expandButton4" style="font-size: 14px; margin-top: 15px; padding-left: 10px; cursor: pointer;">+</p>
            <p style="font-weight: normal; margin-top: 14px; margin-left: 20px;">
D. Income Excluded From Tax</p>
            <p style="font-weight: normal; margin-top: 14px; margin-left: 500px;">₹0.00</p>
        </div>
        <div style="border: 1px solid silver; height: 1px; width: 98%; margin-top: -5px;"></div>
        <div id="incomeContainer4" style="display: none; width: 850px;">
            <div class="row" style="display: flex; width: 103%;">
                
           
                <div class="row" style="height:40px; width: 100%; margin-left: 0; display: flex; background: white;">
                    <div class="column" style="display: flex; margin-top: 5px;;">
                        <p style=" margin-left: 270px; font-size: 12px; ">No data to display !!!</p>
                        
                    </div>
                    

    </div>
</div>
  


</div>
<div class="row" style="height:50px;width:850px;border-radius:5px;border:1px soloid silver;background:#DCDEE0;margin-left:5px;margin-top:15px">
<b style="font-size:14px;margin-left:20px;margin-top:12px">E. Gross Salary (A + C - D)</b>
<p style="font-size:14px;margin-left:720px;margin-top:-17px">₹2,28,480.00</p>
</div>
</div>
</div>

<div class="container" style="width: 106%; margin-left: -16px; margin-top: 90px;">
    <div class="row" style="width: 850px; height: 50px; border-radius: 5px; border: 1px solid silver; margin-left: 12px; background: white; margin-top: 20px;">
        <div class="column" style="display: flex;">
            <p id="expandButton5" style="font-size: 14px; margin-top: 15px; padding-left: 10px; cursor: pointer;">+</p>
            <p style="font-weight: normal; margin-top: 14px; margin-left: 20px;">G. Income From Previous Employer</p>
            <p style="font-weight: normal; margin-top: 14px; margin-left: 450px;">₹0.00</p>
        </div>
        <div style="border: 1px solid silver; height: 1px; width: 98%; margin-top: -5px;"></div>
        <div id="incomeContainer5" style="display: none; width: 850px;">
            <div class="row" style="display: flex; width: 103%;">
                <div class="column" style="height: 40px; background: #AFC8ED; width: 103%; margin-left: 0; display: flex; margin-top: -3px;">
                    <p style="margin-top: 12px; margin-left: 20px; font-size: 13px;">Items</p>
                    <p style="margin-top: 12px; margin-left: 680px; font-size: 13px;">Total</p>
                    
                </div>
                <div style="border: 1px solid silver; height: 1px; width: 98%;"></div>
                <div class="row" style="height: 130px; width: 100%; margin-left: 0; display: flex; background: white;">
                    <div class="column" style="display: flex; margin-top: -5px;">
                        <p style="margin-top: 23px; margin-left: 20px; font-size: 13px; width: 100px;">TOTAL INCOME</p>
                        <p style="margin-top: 24px; margin-left: 620px; font-size: 14px; width: 50px;">0</p>
    
                    </div>
                    <div class="column" style="display: flex; margin-top: -30px;">
                        <p style="margin-top: 23px; margin-left: 18px; font-size: 13px; width: 100px;">INCOME TAX</p>
                        <p style="margin-top: 24px; margin-left: 620px; font-size: 13px; width: 50px;">0</p>

                    </div>
                    <div class="column" style="display: flex; margin-top: -30px;">
                        <p style="margin-top: 23px; margin-left: 18px; font-size: 13px; width: 170px;">PROFESSIONAL TAX</p>
                        <p style="margin-top: 24px; margin-left: 550px; font-size: 13px; width: 50px;">0</p>

                    </div>
                    <div class="column" style="display: flex; margin-top: -30px;">
                        <p style="margin-top: 23px; margin-left: 18px; font-size: 13px; width: 170px;">PROVIDENT FUND</p>
                        <p style="margin-top: 24px; margin-left: 550px; font-size: 13px; width: 50px;">0</p>

                    </div>
                </div>
          </div>
                


                    
                </div>
              
</div>
</div>

</div>



</div>
</div>
</div>
</div>

<script>
// Get the button element by its ID
const collapseExpandBtn = document.getElementById('collapseExpandBtn');

// Add a click event listener to toggle the text
collapseExpandBtn.addEventListener('click', function() {
  if (collapseExpandBtn.textContent === 'Collapse all') {
    collapseExpandBtn.textContent = 'Expand all';
    // Implement the logic to collapse all here
  } else {
    collapseExpandBtn.textContent = 'Collapse all';
    // Implement the logic to expand all here
  }
});

// Get references to the button and containers
const expandButton = document.getElementById('expandButton');
const incomeContainers = document.getElementById('incomeContainers');

// Add a click event listener to toggle visibility
expandButton.addEventListener('click', function () {
    if (incomeContainers.style.display === 'none' || incomeContainers.style.display === '') {
        incomeContainers.style.display = 'block';
        expandButton.textContent = '-';
    } else {
        incomeContainers.style.display = 'none';
        expandButton.textContent = '+';
    }
});
const expandButton2 = document.getElementById('expandButton2');
    const incomeContainer2 = document.getElementById('incomeContainer2');

    // Add a click event listener to toggle visibility
    expandButton2.addEventListener('click', function () {
        if (incomeContainer2.style.display === 'none' || incomeContainer2.style.display === '') {
            incomeContainer2.style.display = 'block';
            expandButton2.textContent = '-';
        } else {
            incomeContainer2.style.display = 'none';
            expandButton2.textContent = '+';
        }
    });
    const expandButton3 = document.getElementById('expandButton3');
    const incomeContainer3 = document.getElementById('incomeContainer3');

    // Add a click event listener to toggle visibility
    expandButton3.addEventListener('click', function () {
        if (incomeContainer3.style.display === 'none' || incomeContainer3.style.display === '') {
            incomeContainer3.style.display = 'block';
            expandButton3.textContent = '-';
        } else {
            incomeContainer3.style.display = 'none';
            expandButton3.textContent = '+';
        }
    });
    const expandButton4 = document.getElementById('expandButton4');
    const incomeContainer4 = document.getElementById('incomeContainer4');

    // Add a click event listener to toggle visibility
    expandButton4.addEventListener('click', function () {
        if (incomeContainer4.style.display === 'none' || incomeContainer4.style.display === '') {
            incomeContainer4.style.display = 'block';
            expandButton4.textContent = '-';
        } else {
            incomeContainer4.style.display = 'none';
            expandButton4.textContent = '+';
        }
    });
    const expandButton5 = document.getElementById('expandButton5');
    const incomeContainer5 = document.getElementById('incomeContainer5');

    // Add a click event listener to toggle visibility
    expandButton5.addEventListener('click', function () {
        if (incomeContainer5.style.display === 'none' || incomeContainer5.style.display === '') {
            incomeContainer5.style.display = 'block';
            expandButton5.textContent = '-';
        } else {
            incomeContainer5.style.display = 'none';
            expandButton5.textContent = '+';
        }
    });



</script>

