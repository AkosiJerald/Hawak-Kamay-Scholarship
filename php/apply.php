<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@800&family=Arimo&family=Barlow:wght@500&family=Bebas+Neue&family=Dancing+Script&family=Lobster&family=Montserrat:wght@100;400&family=Quicksand:wght@300&family=Roboto:wght@300&family=Tilt+Warp&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/apply.css">
    <title>apply</title>
</heada>
<body >
    <div class="main-header p-0">
        <div class="logo">
            <img src="../images/araullo-university-logo.jpg">
        </div>
        <div class="title-head">APPLY FOR SCHOLARSHIP</div>
        <div class="navigation">
            <a class="navi1" href="../html/home.html">HOME</a>
            <a class="navi2" href="../html/topics.html">BENEFITS & CONTACT</a>
            <a class="navi3" href="../html/info.html">BRANCES</a>
            <a class="navi3" href="../php/apply.php">APPLY</a>
        </div>

        <div class="searchbar">
            <input class="searchtopic" type="search" placeholder="Searh more">
        </div>

    </div>

    <div id="content">
        <div id="left">
            <div class="container">
                <h3>Phinma Araullo University</h3>
            <p style=" color: rgb(24, 47, 126);"> Continue your dreams and aspiration with the help of PHINMA AU and Hawak Kamay Scholarship</p>
            </div>
        </div>
        <div id="right">
            <div class="title">
                <P>Enrollment Form</P>
            </div>
            <form method="post" action="insert.php" onsubmit="sumbit()">
                <label for="Full Name">Fullname</label>
                <br>
                <input type="text" id="f_name" name="Firstname" placeholder="Firstname" required> 
                <input type="text" id="l_name" name="Lastname" placeholder="Lastname" required> 
                <br> 
                <label for="Email">Email</label>
                <br>
                <input type="email" id="e_mail" name="Email" placeholder="ex:au.gmail.com" required> 
                <br>
                <label for="Birtday">Birtday</label>
                <br>
                <input type="date" id="_day" name="Birtday" style="width: 165px;" required>
                <br>
                <label for="phone">Phone No.</label>
                <br>
                <input type="text" id="num" name="Phone" placeholder="+63" required>
                <br>
                <label for="phone">Complete Address</label>
                <br>
                <input type="text" id="address" name="Address" placeholder="Ex:Barangay Bitas, Maharlika Highway, Cabanatuan City, Philippines" style="width: 600px;" required>
                <br>
                <label for="Course">Course:</label>
                <select id="_Course" name="Course" required>
                    <option value="Choose">choose</option>
                    <option value="BSIT">Bachelor of Science in Information technology</option>
                    <option value="BSED">Bachelor of Secondary Education  </option>
                    <option value="BSA">Bachelor of Science in Accountancy </option>
                    <option value="BSAcT">Bachelor of Science in Accounting Technology</option>
                    <option value="BPS">Bachelor in Political Science</option>
                    <option value="BSP">Bachelor of Science in Pharmacy</option>
                    <option value="BSN">Bachelor of Science in Nursing </option>
                    <option value="BSHRM">Bachelor of Science in Hotel Restaurant and Management</option>
                    <option value="BSTM">Bachelor of Science in Tourism Management</option>
                    <option value="BSCE">Bachelor of Science in Civil Engineering </option>

                </select>
                <br>
                <label for="School">Campus you like to enroll:</label>
                <select id="_campus" name="Campus" required>
                    <option value="Choose">choose</option>
                    <option value="San Jose">San Jose</option>
                    <option value="Araullo Main - Cabanatuan">Araullo Main - Cabanatuan</option>
                    <option value="Araullo South - Cabanatuan">Araullo South - Cabanatuan</option>
                </select>
                <br>
                <label for="school">Last School Attended</label>
                <br>
                <input type="text" id="_school" name="Lschool" placeholder="Ex:Phinma Aruallo-South" style="width: 600px;"required>
                <br>
                <label for="Full Name">Mother Name</label>
                <br>
                <input type="text" id="f_fname" name="Father_FName" placeholder="Firstname" required> 
                <input type="text" id="f_lname" name="Father_LName" placeholder="Lastname" required> 
                <br>
                <label for="Full Name">Father Name</label>
                <br>
                <input type="text" id="m_fname" name="Mother_FName" placeholder="Firstname" required > 
                <input type="text" id="m_lname" name="Mother_LName" placeholder="Lastname" required>
                <br>


                <button type="submit" value="submit">Apply</button>

                <p>Thaks for submitting</p>
            </form>
        </div>
    </div>
</body>
</html>