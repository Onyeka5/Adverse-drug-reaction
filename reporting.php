<!DOCTYPE html>

<html lang="en">

<head>
    
    <meta charset="utf-8"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <!-- Favicon-->
    
    <link rel="icon" type="image/x-icon" href="adr.png"/>
    
    <link rel="stylesheet" href="style.css"/>
    
    <title> Adverse Drug Reaction</title>
    
</head>

<body>

<!-- Page Content-->

   <div class="container px-4 px-lg-5">

        <!-- Heading Row-->

        <div class="row gx-4 gx-lg-5 align-items-center my-5">

            <div class="col-lg-12">

                <h1 class="card-title custom-heading">

                    <img src="adreport.png" alt="pharmacovigilance" style="height: 32px; vertical-align: middle;">
                    Adverse Drug Reaction Report
                
                </h1>
            
            </div>
        
        </div>
    
    </div>
    
    <section class="py-5">
    
        <div class="container px-4 px-lg-5">
    
            <div class="row gx-4 gx-lg-5">
    
                <div class="col-lg-6">
    
                     <h2 class="entry-title post-title" itemprop="headline">File an ADR Report</h2>
                    
                    <form id="adrForm" method="post" action="submit.php">
                    
                        <button class="menu-toggle">
                    
                            <span class="screen-reader-text">Menu</span>
                    
                        </button>
                    
                        <div>
                    
                            <img src="adr.png" alt="pharmacovigilance" width="333" height="333">
                    
                        </div>
                    <!-- ADR Form-->
                        <form>
                    
                            <table class="table table-bordered">
                    
                                <h2>Patient details</h2>
                    
                                <tbody>
                    
                                    <tr>
                    
                                        <th><label for="fullname">Full name:</label></th>
                    
                                        <td><input type="text" name="fullname" class="form-control" placeholder="Please provide your full name" required>
                    
                                    </tr>
                                    
                                    <tr>
                                    
                                        <th><label for="dob"> Date of birth:</label></th>
                                    
                                        <td><input type="date" class="form-control" name="dob" required></td>
                                    
                                    </tr>
                                    
                                    <tr>
                                    
                                        <th><label for="age">Age:</label></th>
                                        
                                        <td><input type="number" class="form-control" name="age" placeholder="Please provide your age"required></td>
                                    
                                    </tr>
                                    
                                    <tr>
                                    
                                        <th><label for="phone">Phone number:</label></th>
                                        
                                        <td><input type="tel" name="phone" class="form-control" placeholder="+xxx-xxx-xxx-xxx" required></td>
                                    
                                    </tr>
                                    <tr>
                                    
                                        <th><label for="Gender">Gender</label></th>
                                        
                                        <td><input type="text" name="Gender" class="form-control" placeholder="type your gender" required></td>
                                    
                                    </tr>
                                    <tr>
                                    
                                        <th><label for="email">Email address:</label></th>
                                       
                                        <td><input type="email" name="email" class="form-control" placeholder="please enter your email address" required></td>
                                    
                                    </tr>
                                    
                                    <tr>
                                    
                                        <th><label for="address">Address:</label></th>
                                    
                                        <td><input type="text" class="form-control" name="address" placeholder="please enter your address" required></td>

                                    </tr>
                                    
                                    <tr>
                                    
                                        <th><label for="city">City:</label></th>
                                    
                                        <td><input type="text" name="city" class="form-control" placeholder="please enter your city" required></td>
                                    
                                    </tr>
                                    
                                    <tr>
                                    
                                        <th><label for="state">State:</label></th>
                                        
                                        <td><input type="text" name="state" class="form-control" placeholder="please enter your state" required></td>

                                    </tr>
                                    
                                    <tr>
                                    
                                        <th><label for="postcode">Postal code:</label></th>

                                        <td><input type="text" name="postcode" class="form-control" placeholder="place enter your postal code" required></td>
                                    
                                    </tr>
                                    
                                    <tr>
                                        
                                        <th><label for="country">Country:</label></th>
                                        
                                        <td><input type="text" name="country" class="form-control" placeholder="please enter your country" required></td>
                                    
                                    </tr>
                                    
                                </tbody>
                                
                            </table>

                            <table class="table table-bordered">
                                  
                                <h2> Medical History </h2>
                                
                                <tbody>
                                
                                    <tr>
                                
                                        <th><label for="preexistingconditions">Pre-existing conditions:</label></th>
                                        
                                    <td><input type="text" name="preexistingconditions" class="form-control" style="height: 50px;" size="30" required></td>
                                
                                </tr>
                                
                                <tr>
                                
                                    <th><label for="allergies"> Allergies: </label></th>
                                    
                                    <td><input type="text" name="allergies" class="form-control" placeholder = "please enter your allergies" style="height: 50px;" size="30"required></td>
                                
                                </tr>
                                
                                <tr>
                                
                                    <th><label for="currentmedications">Current medications:</label></th>
                                    
                                    <td><input type="text" name="currentmedications" class="form-control" style="height: 50px;" size="30" required></td>
                                </tr>
                                
                                <tr>
                                
                                <th><label for="pastmedications">Past medications:</label></th>
                                
                                <td><input type="text" name="pastmedications" class="form-control" style="height: 50px;" size="30"required></td>
                                
                                </tr>
                                
                                </tbody>
            
            </table>

            <table class="table table-bordered">
                 <h2> Personal History </h2>
            
              <tbody>
            
                <tr>
            
                  <th><label for="familymedicalhistory">Family medical history:</label></th>
                  
                  <td><input type="text" name="familymedicalhistory" class="form-control" style="height: 80px;" size="40"  required></td>
               
                </tr>
               
                <tr>
               
                  <th><label for="immunizationhistory">Immunization history:</label></th>
               
                  <td><input type="text" name="immunizationhistory" class="form-control" style="height: 80px;" size="40" required></td>
                </tr>
                <tr>
            
                  <th><label for="adversedrugreactiondetails">Adverse drug reaction details:</label></th>
            
                  <td><input type="text" name="adversedrugreactiondetails" class="form-control" style="height: 80px;" size="40"  required></td>
                
                </tr>
                
                 
              </tbody>
            
            </table>

            <table class="table table-bordered">
                
                <h2> Reporting Details </h2>
            
              <tbody>
            
                
                <tr>
                
                  <th><label for="dateofreaction">Date of reaction:</label></th>
                  
                  <td><input type="date" name="dateofreaction" class="form-control" required></td>

                </tr>

                <tr>

                  <th><label for="timeofreactions">Time of reactions:</label></th>

                  <td><input type="time" name="timeofreactions" class="form-control" required></td>

                </tr>

                <tr>

                  <th><label for="drugnames">Medication(s):</label></th>
                  
                  <td><input type="text" name="drugnames" class="form-control" style="height: 80px;" size="40" required></td>
                
                </tr>

                <tr>

                  <th><label for="dosage">Medication dosage:</label></th>

                  <td><input type="text" name="dosage" class="form-control" required></td>
                
                </tr>
                
                <tr>
                
                  <th><label for="routeofadministration"> Route of administration:</label></th>
                  
                  <td>
                  
                    <select id="routeofadministration" name="routeofadministration" class="form-control" required>
                      <option value="">Select Route of Administration</option>
                      <option value="Oral">Oral</option>
                      <option value="Intravenous">Intravenous</option>
                      <option value="Topical">Topical</option>
                      <option value="Inhalation">Inhalation</option>
                    </select>
                  
                  </td>
                
                </tr>
                
                <tr>
                
                  <th><label for="reactiondescription">Reaction description:</label></th>
                  
                  <td><input type="text" name="reactiondescription" class="form-control"   style="height: 80px;" size="30" required></td>
                
                </tr>
                
                <tr>
                
                  <th><label for="symptomsexperienced">Symptoms experienced:</label></th>
                  
                  <td><input type="text" name="symptomsexperienced" class="form-control"   style="height: 80px;" size="40" required></td>

                </tr>

                <tr>
                  
                  <th><label for="severity">Severity of Condition:</label></th>
                  <td>
                    <select id="severity" name="severity" class="form-control" required>
                  
                      <option value="">Select Severity of Condition</option>
                      <option value="Mild">Mild</option>
                      <option value="Moderate">Moderate</option>
                      <option value="Severe">Severe</option>
                  
                    </select>
                  
                  </td>
                
                </tr>
                
                <tr>
                
                  <th><label for="outcomeofthereaction">Outcome of the reaction:</label></th>
                  
                  <td><input type="text" name="outcomeofthereaction" class="form-control"  style="height: 80px;" size="40" required></td>
                
                </tr>
                
                <tr>
                  
                  <th><label for="actiontaken">Action taken:</label></th>
                  
                  <td><input type="text" name="actiontaken" class="form-control" style="height: 80px;" size="40" required></td>
                
                </tr>
                
              
              </tbody>
            
            </table>

            <table class="table table-bordered">
                
                <h2> Further Details </h2>
            
              <tbody>
            
                <tr>
                    
                  <th><label for="healthcareproviderinformation">Healthcare provider information:</label></th>
            
                  <td><input type="text" name="healthcareproviderinformation" class="form-control" placeholder="please provide your healthcare provider information"  style="height: 50px;" size="30" required></td>
                </tr>
                
                <tr>
                
                  <th><label for="pharmacyinformation"> Pharmacy information:</label></th>

                  <td><input type="text" name="pharmacyinformation" class="form-control" placeholder="please provide your healthcare provider information"  style="height: 50px;" size="30" required></td>
                  
                </tr>
                
                <tr>
                
                  <th><label for="occupational"> Occupation:</label></th>

                  <td><input type="text" name="occupational" class="form-control" placeholder="please state your occupation"  style="height: 50px;" size="30" required></td>
                  
                </tr>
                
                <tr>
                
                  <th><label for="lifestylefactors"> Lifestyle:</label></th>

                  <td><input type="text" name="lifestylefactors" class="form-control" placeholder="please state your lifestyle"  style="height: 50px;" size="30" required></td>
                  
                </tr>
                
                 <tr>
                
                  <th><label for="pregnancyandlactationstatus"> Pregnancy and Lactation Status:</label></th>

                  <td><input type="text" name="pregnancyandlactationstatus" class="form-control" placeholder="please state your pregnancy and lactation status"  style="height: 50px;" size="30" required></td>
                  
                </tr>
                
                <tr>
                
                  <th><label for="additionalnotes">Additional Notes:</label></th>
                
                  <td><input type="text" name="additionalnotes" class="form-control"  style="height: 80px;" size="30" required></td>
                </tr>
              
              </tbody>
            
            </table>
                    
                        <div class="d-flex justify-content-between">
                    
                            <input type="submit" name="Submit" class="btn btn-primary">
                    
                            <input type="reset" name="Reset" class="btn btn-secondary">
                    
                        </div>
                    
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </section>

<!-- Footer-->

<footer class="py-5 bg-dark">

  <div class="container px-4 px-lg-5">

    <p class="m-0 text-center text-white">Adverse Drug Reaction Report 2023</p>

  </div>

</footer>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>

</html>
