<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <title>Salary Revision</title>

    <style>

         .text {

            --tw-text-opacity: 1;

  color: rgba(23, 30, 37, );

  font-size:18px;

        }



        .container {

            width: 850px;

            height: 527px;

            margin-top:50px;

        }

        .card{

            width:480px;

            height:200px;
 }
 .container2{

       display: flex;

      max-width: none;

     flex-direction: row;

      justify-content: space-between;

          }
.text1{

margin-top: -2px;

font-size: 12px;

font-weight: 600;

color: rgba(0,0,0,.54);

margin-left: 25px;

}
.text2{

margin-top: 12px;

font-size: 12px;

font-weight: 600;

color: rgba(0,0,0,.54);

margin-left: 25px;

}

.last-revision-duration{

    margin-top:50px;

}

.card1{

    background-color: #F5F5DC;

    margin-top:-15px;

}



    </style>

</head>

<body>

    <div>

        <h1 class="text">Salary Revision</h1>

        <div class="container">

        <div class="card">


@foreach ($salaryRevisions as $salaryRevisions)

        <div class="last-revision-duration" >

        <p class="text-5 text-muted text-secondary" style="margin-left:42px; font-size:15px;margin-top:-35px;">Duration since last revision</p>

        <p  style="margin-left:42px;margin-top:-18px; "><b>{{$salaryRevisions->duration}} Months</b></p>

        </div>



    <hr class="line">

    <div  class="card1" >

    <div class="last-revision">

    <div class="row last-revision-content">



    <div class="col-md-6" style="border-right: 1px solid #ececec;">

                <p class="text-5 text-muted text-secondary" style="margin-left: 20px; font-size: 13px;">Last Revision Period</p>

                <p class="text-3" style="margin-left: 20px;"><b>{{ \Carbon\Carbon::parse($salaryRevisions->last_revision_period)->format('d-m-Y') }}
                </b></b></p>

    </div>



            <div class="col-md-6">

                <p class="text-5 text-muted text-secondary">Last Revision Percentage</p>

                <p><b  style="color: green">+{{ number_format($salaryRevisions->percentageChange, 2) }}%</b></p>


            </div>



        </div>

    </div>

</div>



<div class="col-md-3" >

      <div class="ctc revision time line" style="width:680px;height:200px;margin-top:60px; background-color:white; margin-left:-10px">

       <p style="margin-left:42px; font-size:15px;">CTC Revision Timeline</p><br>

       <p style="margin-left:42px; font-size:13px;">28.75k</p>

<hr class="line" style="margin-top:-25px; border:solid 1px;">

       <p style="margin-left:42px; font-size:13px;" >28.75k</p>

       <p style="margin-left:42px; font-size:13px;" >28.75k </p>

        <p style="margin-left:42px; font-size:13px;">28.75k</p>

<hr class="line" style="margin-top:-25px; border:solid 1px;">

        </div>

      </div><br>





      <div class="row"  style="height: 300px; width:830px;margin-left: 6px;" >



      <div class="card-header d-flex justify-content-between" >

          <p style=" font-size:13px;">CTC Revision Details</p>

        </div>

        <div class="card-header d-flex justify-content-between">



          <p style=" font-size:13px;margin-left:600px;"> Revision Difference</p>

         </div>



<div class="card-header d-flex justify-content-between">

    <div class="container2">

<p class="text1" >Last Revision D...</p>



<p class="text1">Payout Month</p>



<p class="text1">Revised Montly CTC i..</p>



<p class="text1">Previous Montly CTC...</p>



<p class="text1">Duration between revisi...</p>



<p class="text1">Amount in </p>



<p class="text1">Percentage</p>

</div><br>

</div>





<div class="container2"  style="height: 150px; background-color:white;">

<p class="text2" > 20 Jun,2023<p>



<p class="text2">Jun,2023</p>



<p class="text2">28.750.00</p>



<p class="text2" style="margin-left:-10px;">0.00</p>



<p class="text2">0</p>



<p class="text2">0.00 </p>



<p class="text2"></p>

@endforeach

 </div>





</div>







    </div>



</body>

</html>

