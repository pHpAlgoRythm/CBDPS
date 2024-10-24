<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrgyDocs registration</title>
    <link rel="stylesheet" href="../../../public/css/registration.css">

</head>
<body>
    <header>
        <nav>
            <div>
                <h1 class="logo">BrgyDocs</h1>
            </div>
            
        </nav>
    </header>

    <main>
        
    <div class="auth">
        <form action="../../../routes/authRoute.php?action=register" method="POST">
        <h1 class="registrationTitle">Registration</h1>

            <h2 class="credentialTitle">Login Credential</h2>

            <div class="credential">

            <label for="userName">Username</label>
            <label for="passWord">Password</label>
            <label for="email">Email</label>
          
           

            <input type="text" name="userName">
            <input type="password" name="passWord">
            <input type="text" name="email" id="">

          </div>

         
            <h2 class="basicInfoTitle">Basic Information</h2>
            
            <div class="basicInfo">

            <label for="fullName">Full Name</label>
            <label for="contactNum">Contact Number</label>
            <label for="age">Age</label>

            <input type="text" name="fullName">
            <input type="text" name="contactNum">
            <input type="text" name="age">
               
            <label for="dateOfBirth">Date of Birth</label>
            <label for="gender">Gender</label>
            <label for="status">Status</label>

            
            <input type="date" name="dateOfBirth">
            <select name="gender" class="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="nonbinary">Non-Binary</option>
            </select>
            <input type="text" name="status">

          </div>

          <h2>Address</h2>

          <div class="address">

            
            <label for="sitio">Sitio/Purok</label>
            <label for="brgy">Barangay</label>
            <label for=""></label>

            <input type="text" name="sitio">
            
            <select name="brgy" id="">
                <option value="1">Barangay 1 (Poblacion)</option>
                <option value="2">Barangay 2 (Poblacion)</option>
                <option value="3">Barangay 3 (Poblacion)</option>
                <option value="4">Barangay 4 (Poblacion)</option>
                <option value="5">Barangay 5 (Poblacion)</option>
                <option value="6">Barangay 6 (Poblacion)</option>
                <option value="7">Barangay 7 (Poblacion)</option>
                <option value="8">Barangay 8 (Poblacion)</option>
                <option value="9">Barangay 9 (Poblacion)</option>
                <option value="10">Bantayan</option>
                <option value="11">Binicuil</option>
                <option value="12">Camingawan</option>
                <option value="13">Camansi</option>
                <option value="14">Camugao</option>
                <option value="15">Carol-an</option>
                <option value="16">Daan Banua</option>
                <option value="17">Hilamonan</option>
                <option value="18">Inapoy</option>
                <option value="19">Linao</option>
                <option value="20">Locotan</option>
                <option value="21">Magballo</option>
                <option value="22">Oringao</option>
                <option value="23">Orong</option>
                <option value="24">Pinaguinpinan</option>
                <option value="25">Salong</option>
                <option value="26">Tabugon</option>
                <option value="27">Tagoc</option>
                <option value="28">Tagukon</option>
                <option value="29">Talubangi</option>
                <option value="30">Tampalon</option>
                <option value="31">Tan-awan</option>
                <option value="32">Tapi</option>
             

            </select>
            
          </div>

          <input type="hidden" name="role" value="resident">

          <button type="submit" class="registerBtn">Register</button>
        </form>
    </div>
          
    
</main>
</body>
</html>