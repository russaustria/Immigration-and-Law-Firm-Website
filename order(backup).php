<?php session_start(); ?>
<?php require('components/header.php');?>
<body class="vh-100 overflow-auto" >

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

                <li class="nav-item mx-2">
                    <a class="nav-link" href="index.php/#about-section"><b>About</b></a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link" href="index.php/#services-section"><b>Services</b></a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link active" href="services.php"><b>Order</b></a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link" href="index.php/#location-section"><b>Contact</b></a>
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
                            <input class="form-check-input" type="checkbox" name ="order[]" value="NBI Clearance" id="NBI Clearance">
                            <label class="form-check-label" for="flexCheckDefault">
                            NBI Clearance
                            </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name ="order[]"  value="Police Clearance (Local)" id="Police Clearance (Local)">
                                <label class="form-check-label" for="flexCheckDefault">
                                Police Clearance (Local)
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Police Clearance (International)" id="Police Clearance (International)">
                                <label class="form-check-label" for="flexCheckDefault">
                                Police Clearance (International)
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name ="order[]"  value="Authentication" id="Authentication">
                              <label class="form-check-label" for="flexCheckDefault">
                                Authentication
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name ="order[]"  value="PSA-Marriage Certificate" id="PSA-Marriage Certificate">
                              <label class="form-check-label" for="flexCheckDefault">
                                PSA-Marriage Certificate
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name ="order[]"  value="PSA-Certificate of No Marriage" id="PSA-Certificate of No Marriage">
                              <label class="form-check-label" for="flexCheckDefault">
                                PSA-Certificate of No Marriage
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name ="order[]"  value="PSA-Birth Certificate" id="PSA-Birth Certificate">
                              <label class="form-check-label" for="flexCheckDefault">
                                PSA-Birth Certificate
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name ="order[]"  value="PSA-Death Certificate" id="PSA-Death Certificate">
                              <label class="form-check-label" for="flexCheckDefault">
                                PSA-Death Certificate
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name ="order[]"  value="Affidavit of Denial (If w/ NBI HIT)" id="Affidavit of Denial (If w/ NBI HIT)">
                              <label class="form-check-label" for="flexCheckDefault">
                                Affidavit of Denial (If w/ NBI HIT)
                              </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name ="order[]"  value="Certified True Copy NNAS" id="Certified True Copy NNAS">
                              <label class="form-check-label" for="flexCheckDefault">
                                Certified True Copy NNAS
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
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Immigration" id="Immigration">
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
                                    Annulment & International Adoption
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Will & Power of Attorney" id="Will & Power of Attorney">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Will & Power of Attorney
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Registration of Will & POA" id="Registration of Will & POA">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Registration of Will & POA
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="Notary / Commissioner of Oaths" id="Notary / Commissioner of Oaths">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Notary / Commissioner of Oaths
                                </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name ="order[]"  value="SPA, Affidavits & Other Legal Documents" id="SPA, Affidavits & Other Legal Documents">
                                <label class="form-check-label" for="flexCheckDefault">
                                    SPA, Affidavits & Other Legal Documents
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

    <hr>
    <div>
                <div class="text-center">
                    <button class="btn align-items-center" id="btn-pt1" type="button"  data-bs-toggle="collapse" data-bs-target="#collapsepart1" aria-expanded="false" aria-controls="collapseExample">
                        <div class="headings">
                            Part 1: Client's Information
                        </div>
                    </button>
                </div>        
                  <div class="collapse" id="collapsepart1">
                  <div class="card card-body border-0">
                        <div class="col"> <!-- Use col-md-3 to create four equal-width columns -->
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Last Name at Birth" name="Last Name" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="First Name" name="First Name" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Married Last Name (If applicable)" name="MarriedLastName">
                            </div>
                        </div>
                        <br>
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Current Address" name="Address" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Province" name="Province" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="City" name="City" required>
                            </div>
                        </div>
                        <br>
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Cell Number" name="Cell Number" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Telephone Number" name="Telephone Number">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Postal Code" name="Postal Code" required>
                            </div>
                        </div>
                        <br>
                        <div class="panel mx-auto p-3 bg-white text-dark">
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Email Address" name="Email Address" required>
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Occupation" name="Occupation" required>
                                    </div>
                                </div>
                        </div>
                        <br>
                        <div class="mb-3 text-center">
                            <label for="fileInput" class="form-label">Choose a file to upload for valid ID:</label>
                            <input type="file" class="form-control" placeholder="Upload an Image" id="fileInput" name="fileInput" accept=".pdf, .jpeg, .jpg" required>
                        </div>
                        </div>
                  </div>
            </div>
            <hr>
            <div>
                <div class="text-center">
                    <button class="btn align-items-center" id="btn-pt2" type="button"  data-bs-toggle="collapse" data-bs-target="#collapsepart2" aria-expanded="false" aria-controls="collapseExample">
                        <div class="headings">
                            Part 2: Client's Additional Information (NBI & PSA)
                        </div>
                    </button>
                </div>        
                  <div class="collapse" id="collapsepart2">
                    <div class="card card-body border-0">
                        <div class="col"> <!-- Use col-md-3 to create four equal-width columns -->
                            <div class="panel mx-auto p-3 bg-white text-dark">
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Date of Birth" name="DateofBirth">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Place of Birth" name="PlaceofBirth">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Marital Status" name="MaritalStatus">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Place of Marriage" name="PlaceofMarriage">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Citizenship" name="Citizenship">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Status in Canada" name="StatusinCanada">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Spouse Name" name="SpouseName">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Spouse Birthplace" name="SpouseBirthplace">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Father's Name" name="FathersName">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Father's Birthplace" name="FathersBirthplace">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Mother's Maiden Name" name="MothersMaidenName">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Mother's Birthplace" name="MothersBirthplace">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                      <input type="text" style="width: 500px;" class="form-control" placeholder="Date of Registration (if marriage certificate was registered late)" name="DoR">
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
                    <button class="btn align-items-center" id="btn-pt3" type="button"  data-bs-toggle="collapse" data-bs-target="#collapsepart3" aria-expanded="false" aria-controls="collapseExample">
                        <div class="headings">
                            Part 3: Remittance Information
                        </div>
                    </button>
                </div>        
                  <div class="collapse" id="collapsepart3">
                    <br>
                    <div class="headings" style="font-size: 17px;">
                        Receipients Information
                    </div>
                    <div class="card card-body border-0">
                        <div class="col"> <!-- Use col-md-3 to create four equal-width columns -->
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Last Name" name="Rlastname">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="First Name" name="Rfirstname">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Middle Name" name="Rmiddlename">
                            </div>
                        </div>
                        <br>
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Current Address" name="Rcurrentaddress">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Province" name="Rprovince">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="City" name="Rcity">
                            </div>
                        </div>
                        <br>
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Email Address" name="Remailaddress">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Phone Number" name="Rphonenumber">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Account Number" name="Raccountnumber">
                            </div>
                        </div>
                        <br>
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Bank" name="bank">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Branch Name" name="branchname">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Transaction Type" name="transaction">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Amount" name="amount" style="width: 500px;">
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>
            </div>
            <hr>
            <div class="text-center">
                <button class="btn btn-primary btn-lg" type="submit" id="submitButton" name="save_multiple_checkbox" style="width: 250px; background-color:rgb(15, 15, 159);">
                        Submit
                </button>
            </div> 
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
  document.getElementById("submitButton").addEventListener("click", function() {
      alert("Thank you for Ordering!");
  });
  </script>
</body>
</html>