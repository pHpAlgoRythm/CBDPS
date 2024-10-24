<?php  
        session_start();

        include_once('../layout/components/Data.php');
?>

<?php 

    $userData = new userData();
    $userData->retrival();
    $userData->retriveBrgy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrgyDocs</title>
    <link rel="stylesheet" href="../../../public/css/userDashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <nav>
            <div>
                
                <h1 class="logo">BrgyDocs</h1>
            </div>

            <div class="navigation">
                <i class='bx bx-home' style='color:#f9f3f3' id="welcome" title="Home"></i>
                <i class='bx bx-file-blank' style='color:#f5f2f2' id="request" title="Request Page"></i>
                <i class='bx bx-error-circle' style='color:#f5efef' id="report" title="Report Anomaly"  ></i>
                <i class='bx bx-bell' style='color:#ecebeb' id="notifIcon"title="Notifications"></i>
                <i class='bx bx-user' style='color:#ecebeb' id="userMenu" title="Menu"></i>
            </div>
            
        </nav>
    </header>


   <section class="welcome">

        <div class="brgyLogo">
                <img src="" alt="Barangay Logo">
                <h1>Barangay <?php echo $userData->brgyName; ?></h1>
        </div>

        <div>
            
            <h1>WELCOME🥳</h1><br>
            <p><strong><?php echo $userData->fullName;  ?> </strong>This app is here to help you in requesting your documents from your Barangay</p>
        </div>

   </section>

   <section class="requestDocs">

    <h1>Services</h1>

        <div class="docs">

            <div class="papers">
                
                <div class="content">
                    <h3><strong>Barangay Business Clearance</strong> </h3>
                   
                    <p><strong>Description:</strong>A clearance required for businesses operating within the barangay jurisdiction.</p>
                    
                    <p><strong>Common Uses: </strong> 
                        <ul> 
                            <li>Business permits</li> 
                            <li>Renewals</li> 
                            <li>Applications</li>
                        </ul> 
                    </p>

                </div>

                <div class="docImg">
                    <img src="../../../public/images/clearance.jpg" alt="">
                </div>
                <i class='bx bx-check-circle' style='color:#10bb16' title="Available" ></i>

            </div>

            <div class="papers">
                
                <div class="content">

                    <h3><strong>Barangay Clearance</strong> </h3>
                    <p><strong>Description:</strong> A document issued by the barangay that certifies the residency and good standing of an individual within the barangay.</p>
                    <p><strong>Common Uses: </strong> 
                        <ul> 
                            <li>Employment</li>
                             <li>Business permits</li> 
                             <li>Legal matters </li> 
                             <li>Government transactions</li>   
                        </ul> 
                    </p>

                </div>

                <div class="docImg">
                    <img src="../../../public/images/documents.jpg" alt="">
                </div>

                <i class='bx bx-check-circle' style='color:#10bb16' title="Available" ></i>

            </div>

            <div class="papers">
                
                <div class="content">

                    <h3><strong>Certificate of Indigency</strong> </h3>
                    <p><strong>Description:</strong>A certificate that identifies a resident as financially disadvantaged or indigent.</p>
                    <p><strong>Common Uses: </strong> 
                        <ul> 
                            <li>Applying for scholarships</li>
                             <li>government financial assistance</li> 
                             <li>medical support </li> 
                        </ul> 
                    </p>

                </div>

                <div class="docImg">
                    <img src="../../../public/images/certificate.jpg" alt="">
                </div>

                <i class='bx bx-check-circle' style='color:#10bb16' title="Available" ></i>

            </div>

            <div class="papers">
                
                <div class="content">

                    <h3><strong>Certificate of Residency</strong> </h3>
                    <p><strong>Description:</strong>A certificate verifying that a person is a resident of the barangay.</p>
                    <p><strong>Common Uses: </strong> 
                        <ul> 
                            <li>For school requirements</li>
                             <li>proof of residency for various applications</li> 
                        </ul> 
                    </p>

                </div>

                <div class="docImg">
                    <img src="../../../public/images/certificate.jpg" alt="">
                </div>

                <i class='bx bx-check-circle' style='color:#10bb16' title="Available" ></i>

            </div>
            
            <div class="papers">
                
                <div class="content">

                    <h3><strong>Certificate of Solo Parent</strong> </h3>
                    <p><strong>Description:</strong>A document that certifies an individual is a solo parent, as recognized by the barangay.</p>
                    <p><strong>Common Uses: </strong> 
                        <ul> 
                            <li>Application for government benefits for solo parents</li>
                        </ul> 
                    </p>

                </div>

                <div class="docImg">
                    <img src="../../../public/images/certificate.jpg" alt="">
                </div>

                <i class='bx bx-check-circle' style='color:#10bb16' title="Available" ></i>

            </div>

            <div class="papers">
                
                <div class="content">

                    <h3><strong>Request for Summon <br>(For Barangay-Level Cases)</strong> </h3>
                    <p><strong>Description:</strong>A request for the issuance of a summon by the barangay for cases involving mediation or resolution at the barangay level.</p>
                    <p><strong>Common Uses: </strong> 
                        <ul> 
                            <li>Disputes between residents</li>
                            <li>small civil cases</li>
                            <li>community mediation</li>
                        </ul> 
                    </p>

                </div>

                <div class="docImg">
                    <img src="../../../public/images/summons.jpeg" alt="">
                </div>

                <i class='bx bx-check-circle' style='color:#10bb16' title="Available" ></i>

            </div>  
           
        </div>

   </section>



   <section class="reportIssue">
    
    <form action="">
       
        <div class="issueContainer">
          
            <h2>Report Issue</h2>
            <p>If you feel unprioritized, unsatisfied with the service, or have encountered abuse, please submit your report below. </p>
           
            <div class="reportForm">
                <div class="division1">
                     <div class="category">
                         <h3 >Type of Report:</h3>

                         <ul> 
                            <li>
                                <input type="radio" id="unprio" name="reportCategory" value="Unprioritized Service" >
                                <label for="unprio">Unprioritized Service</label>
                            </li>

                            <li>
                                <input type="radio" id="unsatisfy" name="reportCategory" value="Unsatisfied with Service"> 
                                <label for="unsatisfy">Unsatisfied with Service</label>
                            </li>

                             <li>
                                <input type="radio" id="abuse" name="reportCategory" value="Abuse or Misconduct">
                                <label for="abuse">Abuse or Misconduct</label>
                                </li>

                        </ul>
                     </div>

                    <div class="reportDescription">

                                <textarea  name="description" id="description" maxlength="500" rows="5" cols="40" oninput="updateCount()" placeholder="Please describe the issue you encountered..."></textarea>
                                <p class="char-count"><span id="charCount">500</span> characters left</p>
                    
                    </div>

                </div>

                <div class="division2">
                        <label for="">Attach Request Link to Report:</label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value="">request data from database</option>
                        </select>
                       
                </div>
                
                <div class="hiddenDiv">
                    <input type="text" value="userID">
                </div>

                <button type="submit" class="submitReport">Submit</button>
            </div>
            
        </div>
    
    </form>
   
</section>

<section class="notificationPage">

</section>

<section class="notification">
    <div class="notiContainer">
        <h1>Notifications</h1>
    </div>
</section>

<section class="profileMenu">
    <div class="profileMenuContainer">
        <h1>Menu</h1>
        <div>ProfileSetting</div>
        <div>Request History</div>
        <div>Report History</div>
        <div class="logout"><a href="../../../routes/authRoute.php?action=logout">Log Out</a></div>
    </div>
</section>


   <script src="../../../public/js/userDashboard.js"></script>
</body>
</html>