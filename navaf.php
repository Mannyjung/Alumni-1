    <!-- Nav -->
    <?php
    session_start();
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">SE-NPRU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="indexaf.php">หน้าหลัก<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="list.php">ข้อมูลศิษย์เก่า</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="showsearch.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" id="search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
          </form>
          <?php
          if (isset($_SESSION["email"])) {
            require_once('connect.php');
            $id = $_SESSION['email'];
            $sql = "SELECT * FROM `info` WHERE email = '$id'";
            $stmt = $conn->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            echo '<a class="nav-link" style="color: white;">' . $result['title'], $result['fname'] . '&nbsp;' . $result['lname'] . '</a>';
            echo '<a href="info.php" class="nav-link" style="color: white;">ข้อมูลส่วนตัว</a>';
            echo '<a href="logout.php" class="nav-link" style="color: white;">logout</a>';
          } else {
            header("location:login.php");
          }
          ?>

        </div>
      </div>
    </nav>

    <!-- Nav -->