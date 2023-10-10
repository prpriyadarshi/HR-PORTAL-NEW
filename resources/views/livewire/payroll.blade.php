<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left Menu (Conditional)</title>
    <style>
        /* Add this CSS to your stylesheet or style tag */

        /* Container styles */
        .left-menu {
            width: 150px;
            background-color: #fff;
            padding-right: 30px;
            border-right: 1px solid #ccc; /* Add a vertical line to the right of the left menu */
        }

        /* Content styles */
        .content {
            padding: 20px;
        }
        .router-container,
        .document,
        .tab-view,
        .router-container {
            font-family: Open Sans, sans-serif;
            font-size: 14px;
            color: #3b4452;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        /* Container for 2023 content */
        .container-2023 {
            /* Add styles for the 2023 content container */
            background-color: #ffffff;
            padding: 20px;
            height: 500px;
            width: 450px;
            margin-left: 260px;
            border: 1px solid #D9D9D9;
            border-radius: 5px;
            margin-right: 10px; /* Adjust as needed */
            margin-bottom: 20px; /* Adjust as needed */
        }

        /* Container for 2022 content */
        .container-2022 {
            /* Add styles for the 2022 content container */
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #D9D9D9;
            border-radius: 5px;
            margin-right: 10px; /* Adjust as needed */
            margin-bottom: 20px; /* Adjust as needed */
        }
        .letter-request {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            tab-size: 4;
            -webkit-text-size-adjust: 100%;
            visibility: inherit;
            font-family: Open Sans, sans-serif;
            font-size: 14px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #3b4452;
            box-sizing: border-box;
            border: 0 solid;
            --tw-shadow: 0 0 transparent;
            --tw-ring-inset: var(--tw-empty, );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 transparent;
            --tw-ring-shadow: 0 0 transparent;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        /* Remove line styles */
        .title-line {
            display: none; /* Hide the line */
        }

        /* Add your existing styles here */

        /* Document card styles */
        .doc-card {
            margin-bottom: 20px;
        }

        /* Arrow icon styles */
        .fa-caret-right {
            cursor: pointer;
            color: #3b4452;
        }
        .title-line {
            width:100%;
    height: 1px; /* Set the height of the line */
    background-color:  #D9D9D9; /* Set the line color */
    margin-top: 10px; /* Adjust the margin as needed */
    margin-bottom: 2px; /* Adjust the margin as needed */
}
@media screen and (max-width: 768px) {
            .left-menu {
                display: none; /* Hide the left menu on small screens */
            }
            .container-2023 {
                width: 100%; /* Full width on small screens */
                margin: 10px 0; /* Adjust margin for spacing */
            }
        }
    </style>
</head>
<body>
<div class="container">

    <p style="margin-left: 60px;color: blue;  font-family: Open Sans, sans-serif; margin-top: 10px;font-weight:medium;font-size:16px;text-decoration:underline">Payslips</p>

    <div _ngcontent-etd-c531="" class="document col-md-10 col-lg-10 ng-star-inserted">
        <div _ngcontent-etd-c531="" class="tab-view px-2x"><gt-tabs _ngcontent-etd-c531="" class="hydrated"><gt-tab _ngcontent-etd-c531="" class="hydrated"></gt-tab><!----></gt-tabs></div><div _ngcontent-etd-c531="" class="letter-request"><!----></div><div _ngcontent-etd-c531="" class="document-body bg-white m-2x ng-star-inserted">
            <div _ngcontent-etd-c531="" class="document-body-jump-to ng-star-inserted">
                <p _ngcontent-etd-c531="" class="text-5 text-muted text-regular contents" style="padding-top:20px;margin-left:40px">JUMP TO</p>
                <ul _ngcontent-etd-c531="" class="side-page-nav">
                 <div class="side-page-nav-item gt-mb-3 side-page-nav-item-active gt-pl-2 ng-star-inserted">
       
                <span _ngcontent-etd-c531="" class="side-page-nav-item gt-mb-3 ng-star-inserted" style="margin-bottom:-10px;margin-left:40px">2023</span></div>
                <!----><div _ngcontent-etd-c531="" routerlinkactive="side-page-nav-item-active" class="side-page-nav-item gt-mb-3 ng-star-inserted" style="margin-bottom:-10px;margin-left:40px"><span _ngcontent-etd-c531="" class="info text-4">2022</span></div><!----><!----></ul></div>
            <div _ngcontent-etd-c531="" class="document-body-card ng-star-inserted">
                <documents-card _ngcontent-etd-c531="" _nghost-etd-c530="" id="cat_2023" class="ng-star-inserted">
                    <div class="container-2023">
                    <div _ngcontent-etd-c530="" class="doc-card-title text-secondary text-4">2023</div>
                            <div class="title-line"></div>
                        <div _ngcontent-etd-c530="" class="doc-card has-selected">
                            <!-- Remove the year below -->
                            <!--<div _ngcontent-etd-c530="" class="doc-card-title text-secondary text-4">2023</div>-->
                            <!-- Remove the line below -->
                            <!--<div class="title-line"></div>-->
                            <div _ngcontent-etd-c530="" class="card-hover ng-star-inserted" style="margin-top:20px">
                                <div _ngcontent-etd-c530="" class="doc-card-body">
                                    <div _ngcontent-etd-c530="" class="card-left">
                                        <i _ngcontent-etd-c530="" class="fa fa-caret-right" onclick="togglePdf(2023, 1)"></i>
                                    </div>
                                    <div _ngcontent-etd-c530="" class="card-right">
                                        <div _ngcontent-etd-c530="" class="doc-card-body-content">
                                            <span _ngcontent-etd-c530="" class="text-black text-5 text-regular">Aug 2023</span>
                                            <span _ngcontent-etd-c530="" class="text-secondary text-regular text-6" style="margin-left: 170px;font-size: 12px;"> Last updated on 17 Aug, 2023 </span>
                                        </div>
                                        <p _ngcontent-etd-c530="" class="text-secondary text-regular text-6 card-desc">Payroll for the month of Aug 2023</p>
                                    </div>
                                </div>
                            </div>
                            <!-- PDF download link -->
                            <a href="/your-download-route" id="pdfLink2023_1" class="pdf-download" download style="display: none;">Download PDF</a>
                        </div>
                        <div _ngcontent-etd-c530="" class="doc-card has-selected">
                            <!--<div _ngcontent-etd-c530="" class="doc-card-title text-secondary text-4">2023</div>-->
                            <!--<div class="title-line"></div>-->
                            <div _ngcontent-etd-c530="" class="card-hover ng-star-inserted">
                                <div _ngcontent-etd-c530="" class="doc-card-body">
                                    <div _ngcontent-etd-c530="" class="card-left">
                                        <i _ngcontent-etd-c530="" class="fa fa-caret-right" onclick="togglePdf(2023, 2)"></i>
                                    </div>
                                    <div _ngcontent-etd-c530="" class="card-right">
                                        <div _ngcontent-etd-c530="" class="doc-card-body-content">
                                            <span _ngcontent-etd-c530="" class="text-black text-5 text-regular">Sep 2023</span>
                                            <span _ngcontent-etd-c530="" class="text-secondary text-regular text-6" style="margin-left: 170px;font-size: 12px;"> Last updated on 17 Sep, 2023 </span>
                                        </div>
                                        <p _ngcontent-etd-c530="" class="text-secondary text-regular text-6 card-desc">Payroll for the month of Sep 2023</p>
                                    </div>
                                </div>
                            </div>
                            <!-- PDF download link -->
                            <a href="/your-download-route" id="pdfLink2023_2" class="pdf-download" download style="display: none;">Download PDF</a>
                        </div>
                        <div _ngcontent-etd-c530="" class="doc-card has-selected">
                            <!--<div _ngcontent-etd-c530="" class="doc-card-title text-secondary text-4">2023</div>-->
                            <!--<div class="title-line"></div>-->
                            <div _ngcontent-etd-c530="" class="card-hover ng-star-inserted">
                                <div _ngcontent-etd-c530="" class="doc-card-body">
                                    <div _ngcontent-etd-c530="" class="card-left">
                                        <i _ngcontent-etd-c530="" class="fa fa-caret-right" onclick="togglePdf(2023, 3)"></i>
                                    </div>
                                    <div _ngcontent-etd-c530="" class="card-right">
                                        <div _ngcontent-etd-c530="" class="doc-card-body-content">
                                            <span _ngcontent-etd-c530="" class="text-black text-5 text-regular">Oct 2023</span>
                                            <span _ngcontent-etd-c530="" class="text-secondary text-regular text-6" style="margin-left: 170px;font-size: 12px;"> Last updated on 30 Oct, 2023 </span>
                                        </div>
                                        <p _ngcontent-etd-c530="" class="text-secondary text-regular text-6 card-desc">Payroll for the month of Oct 2023</p>
                                    </div>
                                </div>
                            </div>
                            <!-- PDF download link -->
                            <a href="/your-download-route" id="pdfLink2023_3" class="pdf-download" download style="display: none;">Download PDF</a>
                        </div>
                        <div _ngcontent-etd-c530="" class="doc-card has-selected">
                            <!--<div _ngcontent-etd-c530="" class="doc-card-title text-secondary text-4">2023</div>-->
                            <!--<div class="title-line"></div>-->
                            <div _ngcontent-etd-c530="" class="card-hover ng-star-inserted">
                                <div _ngcontent-etd-c530="" class="doc-card-body">
                                    <div _ngcontent-etd-c530="" class="card-left">
                                        <i _ngcontent-etd-c530="" class="fa fa-caret-right" onclick="togglePdf(2023, 4)"></i>
                                    </div>
                                    <div _ngcontent-etd-c530="" class="card-right">
                                        <div _ngcontent-etd-c530="" class="doc-card-body-content">
                                            <span _ngcontent-etd-c530="" class="text-black text-5 text-regular">Nov 2023</span>
                                            <span _ngcontent-etd-c530="" class="text-secondary text-regular text-6" style="margin-left: 170px;font-size: 12px;"> Last updated on 30 Nov, 2023 </span>
                                        </div>
                                        <p _ngcontent-etd-c530="" class="text-secondary text-regular text-6 card-desc">Payroll for the month of Nov 2023</p>
                                    </div>
                                </div>
                            </div>
                            <!-- PDF download link -->
                            <a href="/your-download-route" id="pdfLink2023_4" class="pdf-download" download style="display: none;">Download PDF</a>
                        </div>
                    </div>
                </documents-card>
                <!-- Continue with other document cards -->
            </div>
        </div>
    </div>
</div></div>


<script>
    function togglePdf(year, containerId) {
        var pdfLink = document.getElementById('pdfLink' + year + '_' + containerId);
        if (pdfLink.style.display === 'none') {
            pdfLink.style.display = 'inline-block';
        } else {
            pdfLink.style.display = 'none';
        }
    }
</script>
</body>
</html>
