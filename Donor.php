<!DOCTYPE html>
<html>
<head>
  
  <title>BloodConnect</title>
  <style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    /* Header Styles */
    header {
      background-color: #b04759;
      color: #fff;
      padding: 20px;
      text-align: left;
      display: flex;
      justify-content: space-between; /* Align items to the right */
    }
    
    /* Sidebar Styles */
    .sidebar {
      background-color: #f4f4f4;
      float: left;
      width: 200px;
      height: 100vh;
      padding: 20px;
      box-sizing: border-box;
    }
    
    .sidebar h2 {
      color: #333;
    }
    
    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    
    .sidebar li {
      margin-bottom: 10px;
    }
    
    /* Left Side Navigation Buttons */
    .sidebar ul li a {
      display: block;
      padding: 10px;
      background-color: #fff;
      color: #333;
      text-decoration: none;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /*w3chool shadow box*/
      margin-bottom: 10px;
    }
    
    .sidebar ul li a:hover {/* Animation of letter w3chool for more add on*/
      color: #f1f1f1;
    }
    
    /* Logout Button Styles */
    .logout-button {
      display: inline-block;
      padding: 10px;
      background-color: transparent;
      color: #333;
      text-decoration: none;
      border: none;
      font-weight: bold;
      cursor: pointer; /*w3chool */
    }

    /* Main Content Styles */
    .content {
      padding: 20px;
      box-sizing: border-box;
      margin-left: 200px;
    }
    
    /* Responsive Styles */
    @media only screen and (max-width: 600px) {
      .sidebar {
        width: 100%;
        height: auto;
        float: none;
      }
      
      .content {
        margin-left: 0;
      }
    }
    
  </style>
  <script>
    // function displayWelcomeMessage() {
    //   var contentElement = document.getElementById("content");
    //   contentElement.innerHTML = "<h2>Welcome to the admin section!</h2><p>This is the main content area of the admin section.</p>";
    // } **For estra purpose**
    function displayRequests() {
    var contentElement = document.getElementById("content");
    var donorListHTML = "<h2> List of requesting Blood</h2>" +
                        "<div class='donor-list'>" +
                          "<div class='donor-card'>" +
                            "<h3>Juan Dela Criz</h3>" +
                            "<p>Blood Type: O+</p>" +
                            "<p>Age: 30</p>" +
                          "</div>" +
                          "<div class='donor-card'>" +
                            "<h3>Lorem De wat</h3>" +
                            "<p>Blood Type: A-</p>" +
                            "<p>Age: 25</p>" +
                          "</div>" +
                          "<div class='donor-card'>" +
                            "<h3>Michael Jackson</h3>" +
                            "<p>Blood Type: B+</p>" +
                            "<p>Age: 35</p>" +
                          "</div>" +
                        "</div>";
    contentElement.innerHTML = donorListHTML;
  }

  </script>
</head>
<body>
  <header>
    <h1>BloodConnect</h1>
    <a href="login.html" class="logout-button">Logout</a>
    <!--**login.html (sample of link to return to login file**-->
  </header>
  
  <div class="sidebar">
    <h2>Records</h2>
    <ul>
      <li><a href="Homepage.html" class="button">Home</a></li>
            <!-- <li><a href="#" onclick="displayWelcomeMessage();" class="button">Admin</a></li> --> <!--**extre button for add-on**-->
      <li><a href="Donor.php" class="button">Donor</a></li> <!--**Will display the user forms**-->
        <li><a href="#" class="button">Patient</a></li> <!--**Login records or registers?**-->
      <li><a href="#" onclick="displayRequests();" class="button">Blood Requests</a></li> <!--**Display lang**-->
    </ul>
  </div>
  
  <div class="content" id="content">
    <h2>Donor Information</h2>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'donation') or die("Connection Failed" . mysqli_connect_error());
        $sql = "SELECT * FROM form";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo '<table>';
            echo '<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Sex</th><th>Blood Type</th><th>Address</th><th>Date</th></tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['firstname'] . '</td>';
                echo '<td>' . $row['lastname'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['sex'] . '</td>';
                echo '<td>' . $row['bloodtype'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '<td>' . $row['date'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'No records found.';
        }
      
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
