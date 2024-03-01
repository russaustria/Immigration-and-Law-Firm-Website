<?php session_start(); ?>
<?php require('components/header.php');?>
<style>
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1;
    }

    .message-panel {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        z-index: 1;
    }

    .close-button {
        cursor: pointer;
        color: #333;
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
        display: block;
    }

  /* Style to hide the scrollbar */
  body.no-scroll {
    overflow: hidden;
  }

  /* Style to make the panel cover the entire viewport */
  #paymentPanel {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh; /* Full viewport height */
    background-color: rgba(0, 0, 0, 0.5); /* semi-transparent background */
    display: none; /* initially hidden */
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  /* Style for the panel content */
  #paymentPanelContent {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }


  #selectedServicesPayment {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

    #question-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
      z-index: 1;
    }

    #question-mark {
      background-color: rgb(15, 15, 159);
      color: #fff;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
    }

    #panelquestion {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        padding: 10px;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: black;
        z-index: 1;

    }

    #closeButton {
        background: none;
        border: none;
        cursor: pointer;
        float: right;
    }

    #closeButton i {
        color: #000; /* Set the color you prefer */
    }

    @media screen and (max-width: 768px) {
        #panelquestion {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        padding: 10px;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: black;
        z-index: 1;

    }

    #closeButton {
        background: none;
        border: none;
        cursor: pointer;
        float: right;
    }

    #closeButton i {
        color: #000; /* Set the color you prefer */
    }
    }
</style>
<body class="vh-100 overflow-auto" >

  <div id="panelquestion">
    <button id="closeButton" onclick="closePanel()"><i class="fas fa-times" onclick="closePanel()"></i></button>
    <p><center>When will you receive your documents? <br>
        <b> Hard Copies: </b> <br> 3-4 Weeks <br>
        <b> Soft Copies: </b> <br> 8-10 Days (NBI)<br> 2-3 Weeks (Other Documents)
    </p>
</div>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <div>
            <a class="navbar-brand" href="#"><img src="assets/img/pinoypro1.png" class="logo-icon" alt="logo icon"></a>
		</div>
        
        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Sidebar -->
        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <!--Sidebar header -->
            <div class="offcanvas-header text-black border-bottom">
            <a class="navbar-brand" href="#"><img src="assets/img/pinoypro.png" class="logo-icon-sidebar" alt="logo icon"></a>
            </div>
            <!--Sidebar body-->
            <div class="offcanvas-body">
             <ul class="navbar-nav justify-content-end flex-grow-1 align-items-center">

                <li class="nav-item mx-2">
                    <a class="nav-link " aria-current="page" href="index.php"><b>Home</b></a>
                </li>

                </ul>
                <div class="header-social-links d-flex align-items-center">
                    <a href="https://www.twitter.com/@pinoy_pros" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100093461941851" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/@pinoypros" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.tiktok.com/@pinoy_pros" class="tiktok"><i class="bi bi-tiktok"></i></i></a>
                </div>
            </div>
        </div>
    </div>
    </nav>
    <div class="news-container">
        <div class="title">
            <a href="https://www.globaldocumentsolutions.com/how-to-get-an-apostille-for-the-philippines-in-canada/#:~:text=Now%2C%20Canadian%20documents%20require%20only,validation%20process%20for%20both%20countries.">
                Breaking News
            </a>
        </div>
        

        <ul>
            <li>
                Documents for use in the Philippines no longer need Philippine Embassy authentication. Instead, they can be authenticated solely by Official Document Services of Canadian provinces. This simplifies the process, removing the previous requirement for dual authentication, easing transactions between Canada and the Philippines. Click The Breaking News for more Information.
            </li>
            
        </ul>
    </div>
    <form action="validation.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-title">
                <h2 class="text-center mb-5">Request/Order</h2>
            </div> 

            <!-- Company 2 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card border-0">
                    <a>
                    <img src="assets/img/kabalikatsolutions.jpg" class="card-img-top" alt="...">
                    
                    <div class="card-body" style="color:black;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">                            
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" data-price="165.50" name ="order[]" value="NBI Clearance (Renewal)" id="NBI Clearance (Renewal)">
                            <label class="form-check-label" for="flexCheckDefault">
                            NBI Clearance <br> (Renewal)
                            </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" data-price="195.50" name="order[]" value="NBI Clearance (New Applicant)" id="NBI_Clearance_New_Applicant">
                                <label class="form-check-label" for="NBI_Clearance_New_Applicant">
                                    NBI Clearance <br> (New Applicant) <br> (2015 and below)
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" data-price="100.00" name ="order[]"  value="Police Clearance (Local)" id="Police Clearance (Local)">
                                <label class="form-check-label" for="flexCheckDefault">
                                Police Clearance (Local)
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  name ="order[]"  value="Police Clearance (International)" id="Police Clearance (International)">
                                <label class="form-check-label" for="flexCheckDefault">
                                Police Clearance (International)
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" data-price="140.00"  name ="order[]"  value="Authentication" id="Authentication">
                              <label class="form-check-label" for="flexCheckDefault">
                                Authentication
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" data-price="100.00"  name ="order[]"  value="PSA-Marriage Certificate" id="PSA-Marriage Certificate">
                              <label class="form-check-label" for="flexCheckDefault">
                                PSA-Marriage Certificate
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" data-price="100.00"  name ="order[]"  value="PSA-Certificate of No Marriage" id="PSA-Certificate of No Marriage">
                              <label class="form-check-label" for="flexCheckDefault">
                                PSA-Certificate of No Marriage
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" data-price="100.00"  name ="order[]"  value="PSA-Birth Certificate" id="PSA-Birth Certificate">
                              <label class="form-check-label" for="flexCheckDefault">
                                PSA-Birth Certificate
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" data-price="100.00"  name ="order[]"  value="PSA-Death Certificate" id="PSA-Death Certificate">
                              <label class="form-check-label" for="flexCheckDefault">
                                PSA-Death Certificate
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" data-price="195.00"  name ="order[]"  value="Affidavit of Denial (If w/ NBI HIT)" id="Affidavit of Denial (If w/ NBI HIT)">
                              <label class="form-check-label" for="flexCheckDefault">
                                Affidavit of Denial with Notary (If w/ NBI HIT)
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" data-price="150.00" name ="order[]"  value="Certified True Copy NNAS" id="Certified True Copy NNAS">
                              <label class="form-check-label" for="flexCheckDefault">
                                NNAS <br> (Certification and 2 Certified IDs)
                              </label>
                            </div>
                        </li>
                    </ul>
                    </div>
                   </a>
                </div>
            </div>
            
            <!-- Company 2 -->
            <div class="col-md-6 col-lg-3 mb-4">
            <div class="card border-0">
                    <a>
                    <img src="assets/img/bilis_pera.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="color:black;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">                            
                                <div class="form-check" id="bilisperaform">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Remittance" id="Remittance">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remittance
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check" id="bilisperaform">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Consumer Loan" id="Consumer Loan">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Consumer Loan
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check" id="bilisperaform"> 
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Remit Now, Pay Later" id="Remit Now, Pay Later">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remit Now, Pay Later
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check" id="bilisperaform">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Immigrate Now, Pay Later" id="Immigrate Now, Pay Later">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Immigrate Now, Pay Later
                                </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                   </a>
                </div>
            </div>
            
            <!-- Company 3 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card border-0">
                    <a>
                        <img src="assets/img/bilis_voyage.jpg" class="card-img-top" alt="Company 4">
                    
                    <div class="card-body" style="color:black;">
                    
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">                            
                                <div class="form-check" id="bilisalisform">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Airline Ticket" id="Airline Ticket">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Airline Ticket
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check" id="bilisalisform">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Vacation Packages" id="Vacation Packages">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Vacation Packages
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check" id="bilisalisform">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Fly Now, Pay Later" id="Fly Now, Pay Later">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Fly Now, Pay Later
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check" id="bilisalisform">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Enjoy Now, Pay Later" id="Enjoy Now, Pay Later">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Enjoy Now, Pay Later
                                </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </a>
                </div>
            </div>

            <!-- Company 4 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card border-0">
                    <a>
                        <img src="assets/img/pinoylegal.jpg" class="card-img-top" alt="Company 2">
                    
                    <div class="card-body" style="color:black;">
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item">                            
                                <div class="form-check" id="pinoylegalform">
                                <input class="form-check-input" type="checkbox" data-price="100.00" name ="order[]"  value="Immigration" id="Immigration">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Immigration
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Divorce & Small Claims" id="Divorce & Small Claims">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Divorce & Small Claims
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Recognition of Divorce (Philippines)" id="Recognition of Divorce (Philippines)">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Recognition of Divorce (Philippines)
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Annulment & International Adoption" id="Annulment & International Adoption">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Annulment <br> (For Philippines use) & International Adoption
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Will & Power of Attorney" id="Will & Power of Attorney">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Will & Power of Attorney <br> (For Philippines use)
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Registration of Will & POA" id="Registration of Will & POA">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Registration of Will & POA <br> (For Philippines use)
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Notary / Commissioner of Oaths" id="Notary / Commissioner of Oaths">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Notary / Commissioner of Oaths <br> (For Philippines use) 
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="SPA, Affidavits & Other Legal Documents" id="SPA, Affidavits & Other Legal Documents">
                                <label class="form-check-label" for="flexCheckDefault">
                                    SPA, Affidavits & Other Legal Documents <br> (For Philippines use)
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Incorporation & Business Registration" id="Incorporation & Business Registration">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Incorporation & Business Registration
                                </label>
                                </div>
                            </li>
                        </ul>                      
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

        <div class="overlay" id="messageOverlay">
            <div class="message-panel">
                <p>You have selected NBI Clearance (New Applicant). <br> <br> Please PREPARE your VALID ID, 2x2 PICTURE and PASSPORT. <br> <br> For clients residing in TORONTO, <br> we kindly request you to visit our office located <br> at 2-3770 Bathurst St, 2nd Floor, Unit 1, North York, ON M3H 3M6 <br> for the purpose of fingerprinting. <br> <br> For clients residing in MONTREAL, <br> we kindly request you to call <br> (647) 938-4686 <br> before visiting our office located <br> at 3820 Ave Van Horne, Montreal, QC H3S 1R8 <br> for the purpose of fingerprinting. <br> <br> For clients residing OUTSIDE TORONTO and MONTREAL, <br> we kindly request you to call our hotline <br> (416) 439-2350 <br> <br>
                You can now close this tab. <br> Begin typing your information and payment below. <br> Please Keep the Receipt <br> Thank you!  </p>
                <span class="close-button" onclick="closeMessagePanel()">Close</span>
            </div>
        </div>

        <div id="paymentPanel">

        </div>

    <hr>
          <div>
          <div class="text-center">
                    <div class="headings">
                    <h3>Amount to be Paid: <br>$ <span id="total">TBD</span></h3>
                <p>Please review the total amount and selected services before confirming your payment. <br> Make sure to SCREENSHOT the RECEIPT</p>
                <p>If the "Amount to be Paid" is still TBD after ticking the checkbox <br> (To Be Discussed) <br> Call our hotline <br> <b>Toronto Branch</b>  <br> (416) 439-2350 <br> <b>Montreal Branch</b><br> (647) 938-4686 </p>
            
                <h4>Selected Services:</h4>
                <ul id="selectedServicesPayment"> </ul>
                <br>
                    </div>
                </div> 
                <hr>
                <div class="text-center">
                <button class="btn btn-secondary align-items-center" id="btn-pt1" type="button" data-bs-toggle="collapse" data-bs-target="#collapsepart1" aria-expanded="false" aria-controls="collapsepart1">
                    <div class="headings">
                        Part 1: Client's Information
                    </div>
                </button>
                </div>   
                
                <div class="collapse" id="collapsepart1">
                    <div class="card card-body border-0">
                        <div class="col">
                            <div class="panel mx-auto p-3 bg-white text-dark">
                                <div class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-3">
                                        <label for="FullName" class="label">Full Name:</label>
                                        <input type="text" class="form-control" id="FullName" name="FullName" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="LastNameatBirth" class="label">Last Name at Birth:</label>
                                        <input type="text" class="form-control" id="LastNameatBirth" name="LastNameatBirth" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="MarriedLastName" class="label">Married Last Name (If applicable):</label>
                                        <input type="text" class="form-control" id="MarriedLastName" name="MarriedLastName">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="Occupation" class="label">Occupation:</label>
                                        <input type="text" class="form-control" id="Occupation" name="Occupation" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="panel mx-auto p-3 bg-white text-dark">
                                 <div class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-4">
                                        <label for="CurrentAddress" class="label">Current Address (Include Province, City and Postal Code):</label>
                                        <input type="text" class="form-control" id="CurrentAddress" name="CurrentAddress" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="EmailAddress" class="label">Email Address:</label>
                                        <input type="text" class="form-control" id="EmailAddress" name="EmailAddress" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="PhoneNumber" class="label">Phone Number:</label>
                                        <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" required>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="panel mx-auto p-3 bg-white text-dark">
                                <div class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-3">
                                        <label for="fileInputValidID" class="label">Upload valid ID:</label>
                                        <input type="file" class="form-control" id="fileInputValidID" name="fileInputValidID" accept=".pdf, .jpeg, .jpg" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="fileInputPassport" class="label">Upload Passport:</label>
                                        <input type="file" class="form-control" id="fileInputPassport" name="fileInputPassport" accept=".pdf, .jpeg, .jpg">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="fileInput2x2" class="label">Upload 2x2 ID (For NBI Renewal):</label>
                                        <input type="file" class="form-control" id="fileInput2x2" name="fileInput2x2" accept=".pdf, .jpeg, .jpg">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="fileInputOldNBI" class="label">Upload Old NBI (For NBI Renewal):</label>
                                        <input type="file" class="form-control" id="fileInputOldNBI" name="fileInputOldNBI" accept=".pdf, .jpeg, .jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-primary align-items-center" type="button" id="questionButton">
                                When will you receive your documents?
                            </button>
                        </div>
                    </div>
                </div>

            <hr>
            <div>
                <div class="text-center">
                    <button class="btn btn-secondary align-items-center" id="btn-pt2" type="button"  data-bs-toggle="collapse" data-bs-target="#collapsepart2" aria-expanded="false" aria-controls="collapseExample">
                        <div class="headings">
                            Part 2: Client's Additional Information
                        </div>
                    </button>
                </div>        
                  <div class="collapse" id="collapsepart2">
                    <div class="card card-body border-0">
                        <div class="col">
                            <div class="panel mx-auto p-3 bg-white text-dark">
                                <div class="row">
                                    <div class="col">
                                        <label for="DateofBirth" class="label">Date of Birth</label>
                                        <input type="date" class="form-control" name="DateofBirth" id="DateofBirth">
                                    </div>
                                    <div class="col">
                                        <label for="PlaceofBirth" class="label">Place of Birth</label>
                                        <input type="text" class="form-control" placeholder="Place of Birth" name="PlaceofBirth" id="PlaceofBirth">
                                    </div>
                                </div>
                                <br>
                                <div class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-4">
                                        <label for="MaritalStatus" class="label">Marital Status:</label>
                                        <input type="text" class="form-control" id="MaritalStatus" name="MaritalStatus">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="PlaceofMarriage" class="label">Place of Marriage:</label>
                                        <input type="text" class="form-control" id="PlaceofMarriage" name="PlaceofMarriage">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="DateofRegistrationifLate" class="label">Date of Registration (If certificate was registered late):</label>
                                        <input type="text" class="form-control" id="DateofRegistrationifLate" name="DateofRegistrationifLate">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="Citizenship" class="label">Citizenship</label>
                                        <input type="text" class="form-control" name="Citizenship" id="Citizenship">
                                    </div>
                                    <div class="col">
                                        <label for="StatusinCanada" class="label">Status in Canada</label>
                                        <input type="text" class="form-control" name="StatusinCanada" id="StatusinCanada">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="SpouseName" class="label">Spouse Name</label>
                                        <input type="text" class="form-control" name="SpouseName" id="SpouseName">
                                    </div>
                                    <div class="col">
                                        <label for="SpouseBirthplace" class="label">Spouse Birthplace</label>
                                        <input type="text" class="form-control"name="SpouseBirthplace" id="SpouseBirthplace">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="FathersName" class="label">Father's Name</label>
                                        <input type="text" class="form-control" name="FathersName" id="FathersName">
                                    </div>
                                    <div class="col">
                                        <label for="FathersBirthplace" class="label">Father's Birthplace</label>
                                        <input type="text" class="form-control" name="FathersBirthplace" id="FathersBirthplace">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="MothersMaidenName" class="label">Mother's Maiden Name</label>
                                        <input type="text" class="form-control" name="MothersMaidenName" id="MothersMaidenName">
                                    </div>
                                    <div class="col">
                                        <label for="MothersBirthplace" class="label">Mother's Birthplace</label>
                                        <input type="text" class="form-control" name="MothersBirthplace" id="MothersBirthplace">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
            <hr>
            <div>
                <div class="text-center">
                    <button class="btn btn-secondary align-items-center" id="btn-pt3" type="button"  data-bs-toggle="collapse" data-bs-target="#collapsepart3" aria-expanded="false" aria-controls="collapseExample">
                        <div class="headings">
                            Part 3: Remittance Information (Receipient)
                        </div>
                    </button>
                </div>        
                  <div class="collapse" id="collapsepart3">
                    <br>
                    <div class="card card-body border-0">
                        <div class="col">
                            <div class="panel mx-auto p-3 bg-white text-dark">
                                <div class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-4">
                                        <label for="RemittanceFullName" class="label">Full Name:</label>
                                        <input type="text" class="form-control" id="RemittanceFullName" name="RemittanceFullName" >
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="RemittanceCurrentAddress" class="label">Current Address:</label>
                                        <input type="text" class="form-control" id="RemittanceCurrentAddress" name="RemittanceCurrentAddress" >
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="RemittancePhoneNumber" class="label">Phone Number:</label>
                                        <input type="text" class="form-control" id="RemittancePhoneNumber" name="RemittancePhoneNumber">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="panel mx-auto p-3 bg-white text-dark">
                                 <div class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-4">
                                        <label for="RemittanceEmail" class="label">Email Address:</label>
                                        <input type="text" class="form-control" id="RemittanceEmail" name="RemittanceEmail" >
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="RemittanceAccountNumber" class="label">Account Number:</label>
                                        <input type="text" class="form-control" id="RemittanceAccountNumber" name="RemittanceAccountNumber" >
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="RemittanceBank" class="label">Bank:</label>
                                        <input type="text" class="form-control" id="RemittanceBank" name="RemittanceBank" >
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="panel mx-auto p-3 bg-white text-dark">
                                 <div class="row gx-3 gy-2 align-items-center">
                                    <div class="col-sm-4">
                                        <label for="RemittanceBranchName" class="label">Branch Name:</label>
                                        <input type="text" class="form-control" id="RemittanceBranchName" name="RemittanceBranchName" >
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="RemittanceTransaction" class="label">Transaction Type:</label>
                                        <input type="text" class="form-control" id="RemittanceTransaction" name="RemittanceTransaction" >
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="RemittanceAmount" class="label">Amount:</label>
                                        <input type="text" class="form-control" id="RemittanceAmount" name="RemittanceAmount" >
                                    </div>
                                 </div>
                            </div>
                        </div>

                    </div>
                </div>
            <hr>
            <div class="text-center">
            <button class="btn btn-secondary align-items-center" onclick="window.open('https://square.link/u/FYAeyJ2a', '_blank')" id="btn-pt4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsepart4" aria-expanded="false" aria-controls="collapsepart4">
                Part 4: Proceed to Payment
            </button>
            </div>
            <hr>
            <div class="text-center">
                <button class="btn btn-secondary align-items-center" id="btn-pt5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsepart5" aria-expanded="false" aria-controls="collapsepart5">
                    <div class="headings">
                        Part 5: Upload & Submit
                    </div>
                </button>
                <div class="collapse" id="collapsepart5">
                    <div class="card card-body border-0">
                        <div class="col">
                        <div class="row justify-content-center">
                                <div class="col-sm-3 mx-auto">
                                    <label for="fileUploadReceipt" class="label">Upload Receipt:</label>
                                    <input type="file" class="form-control" id="fileUploadReceipt" name="fileUploadReceipt" accept=".pdf, .jpeg, .jpg" onchange="checkFileUpload()">
                                    <br>
                                    <button class="btn btn-primary btn-lg" type="submit" name="save_multiple_checkbox" id="submitFileButton" disabled>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>  
            <hr>
          </div>  
        </form>
        <div class="container-flex my-5">

            <footer class="bg-light text-center text-black">
            <!-- Grid container -->
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgb(15, 15, 159);">
                <a class="text-white">© 2023 Copyright:</a>
                <a class="text-white">pinoypro.com</a>
            </div>
            <!-- Copyright -->
            </footer>

          </div>

        </div>
      </div>
    <script src="assets/js/index_page.js"></script>
    

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Add an event listener to the checkbox
        document.getElementById("NBI_Clearance_New_Applicant").addEventListener("change", function () {
            // Check if the checkbox is checked
            if (this.checked) {
                // If checked, show the message panel
                openMessagePanel();
            }
        });
    });

    function openMessagePanel() {
        document.getElementById("messageOverlay").style.display = "flex";
    }

    function closeMessagePanel() {
        document.getElementById("messageOverlay").style.display = "none";
    }
</script>

<script>
        $(document).ready(function () {

        // Your other code inside $(document).ready() if any

        // Define the displaySelectedServices function
        function displaySelectedServices(targetId) {
            var selectedServices = [];
            $('.form-check-input:checked').each(function () {
                selectedServices.push($(this).parent().text().trim());
            });
            $('#' + targetId).empty();
            selectedServices.forEach(function (service) {
                $('#' + targetId).append('<li>' + service + '</li>');
            });
        }

        // Example of triggering the function on a button click
        $('#someButton').on('click', function () {
            // Replace 'targetId' with the actual ID you want to use
            displaySelectedServices('targetId');
        });

        // Event listener for checkbox changes
        $('.form-check-input').on('change', function () {
            displaySelectedServices('selectedServicesPayment');
        });

        // Other event triggers or functionality as needed

        });

    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.form-check-input');
        const totalElement = document.getElementById('total');

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                updateTotal();
            });
        });

        function updateTotal() {
            let total = 0;
            let hasDataPrice = false;

            checkboxes.forEach(function (checkbox) {
                const dataPrice = checkbox.getAttribute('data-price');
                if (checkbox.checked && dataPrice !== null) {
                    total += parseFloat(dataPrice);
                    hasDataPrice = true;
                }
            });

            totalElement.textContent = hasDataPrice ? total.toFixed(2) : 'TBD';
        }
    });
</script>

<script>
    function toggleFileUploadPanel() {
      var fileUploadPanel = document.getElementById('fileUploadPanel');
      fileUploadPanel.style.display = fileUploadPanel.style.display === 'none' ? 'block' : 'none';
    }

    function checkFileUpload() {
      var fileInput = document.getElementById('fileUploadReceipt');
      var submitFileButton = document.getElementById('submitFileButton');

      if (fileInput.files.length > 0) {
        submitFileButton.disabled = false;
      } else {
        submitFileButton.disabled = true;
      }
    }
  </script>

<script>
    document.getElementById('questionButton').addEventListener('click', function() {
        var panel = document.getElementById('panelquestion');
        panel.style.display = (panel.style.display === 'none' || panel.style.display === '') ? 'block' : 'none';
    });

    document.getElementById('closeButton').addEventListener('click', function() {
        var panel = document.getElementById('panelquestion');
        panel.style.display = 'none';
    });
</script>

    
</body>
</html>