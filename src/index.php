<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="main.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/add-to-calendar-button@2" async defer></script>
  <title>Register</title>
</head>

<body>
  <div class="container p-3">
    <img class="d-block mx-auto mx-md-0" src="../public/logo.svg" alt="logo" id="logo" />
  </div>

  <div class="row">
    <img src="../public/bgmobile.png" class="col-sm-12 d-sm-none img-fluid" />
  </div>

  <div class="bg-image col-md-12 d-flex align-items-center py-5" style="
        background-image: url('../public/bg.png');
        min-height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        position: relative;
      ">
    <main class="container-fluid">
      <div class="row d-flex align-items-center justify-content-evenly">
        <div class="col-md-5 col-sm-12 text-light mt-4 pt-3">
          <section class="m-2">
            <h1 class="h2 fw-semibold">Stack Overflow Happy Hour</h1>
            <p class="h5">March 30, 2023</p>
            <p class="mt-5 fw-light">
              You're invited to join us for a fantastic “virtual” wine and
              cheese tasting evening on the 30th March. The event will be
              hosted virtually, but the wine & cheese will be as real as it
              gets.
            </p>
            <p class="fw-light">
              This invite-only event offers you an opportunity to meet
              developers and technologists from across the UKI, to learn about
              technology trends and to discuss how to tackle today's pain
              points and common challenges.
            </p>
          </section>
          <hr class="my-5 border border-1 opacity-100" />
          <section class="m-2 fw-light mb-5">
            <p class="h2 fw-semibold">Why attend?</p>
            <ul class="mt-4">
              <li>
                Are you undergoing or planning to undergo cloud
                transformation?
              </li>
              <li>
                Do you have collaboration concerns within your organisation?
              </li>
              <li>
                Would your organisation like to break away from working in
                silos?
              </li>
              <li>
                Would you like to improve efficiencies within your
                organisation?
              </li>
            </ul>
            <p>
              If the answer to any of the above is yes, we can help you!
              Attend and learn how!
            </p>
            <p>
              Also, did we say we are sending you a box including
              <span class="fw-bold">3 beautiful wines & 3 different kinds of cheeses?</span>
              We look forward to seeing you there.
            </p>
          </section>
        </div>
        <div class="col-md-5 col-sm-12 bg-white rounded-3 p-0 m-0 pb-4">
          <div class="p-5 bg-secondary bg-opacity-10">
            <p class="h2 fw-semibold rounded-3 d-flex justify-content-between align-items-center">Register here <add-to-calendar-button name="Stack Overflow Happy Hour" startDate="2023-03-30" startTime="17:00" endDate="2023-03-30" endTime="19:00" timeZone="Europe/Brussels" location="https://stackoverflow.zoom.us/j/87327075536?pwd=cDIzTmtYM09MNDc1c2VVYkdHUWtsUT09" options="'Apple','Google','iCal','Outlook.com','Yahoo'" lightMode="dark"></add-to-calendar-button>
            </p>
          </div>
          <div class="container">
            <form action="connect.php" method="POST" id="form" class="row g-4 m-4 needs-validation" novalidate>
              <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" required />
              </div>
              <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" required />
              </div>
              <div class="col-12">
                <label for="companyname" class="form-label">Company Name</label>
                <input type="text" class="form-control" name="companyname" required />
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Company Email Address</label>
                <input type="email" class="form-control" name="email" required />
              </div>
              <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" required />
              </div>
              <div class="col-md-6">
                <label for="postcode" class="form-label">Postcode</label>
                <input type="text" class="form-control" name="postcode" required />
              </div>
              <div class="d-grid gap-2">
                <button type="submit" name="submit" id="submit" class="text-light fw-semibold btn btn-warning mt-3 p-2">
                  Register
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="app.js"></script>
  <script>
    $("#submit").click(function() {

      $.post($("#form").attr("action"),
        $("#form :input").serializeArray(),
        function(info) {

          $("#response").empty();
          $("#response").html(info);

        });

      $("#form").submit(function() {
        return false;
      });
    });
  </script>

</body>

</html>