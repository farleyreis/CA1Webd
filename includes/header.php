<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="main.js">
  <title>CA1 Web D</title>
</head>

<body>

  <!-- ======= Navbar ======= -->
  <nav id="main-nav">

    <?php include('nav.php'); ?>

  </nav>
  <!-- End Navbar -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">

      <div class="container">
        <div class="row justify-content-between">
          <ul class="gitHP">
            <p>
              <li>This is the link for my gitPod project<a href="http://github.io/https://github.com/farleyreis/PHP-project-1">
                  <ion-icon name="logo-github"></ion-icon></i>
                </a></li>
              <li>This is the link for my github project<a href="https://github.com/farleyreis/PHP-project-1">
                  <ion-icon name="logo-codepen"></ion-icon></i>
                </a></li>

          </ul>
          <p class="p-heading">

            <p>
              “Instructions:
              You are required to develop a web site with multiple pages using the server-side scripting language PHP. You do not need to focus on the aesthetics of your web pages but you should have a consistent look and feel across all of your pages.
              You are required to set up your site on:
              1. your local development environment (e.g. XAMPP, MAMP, WAMP, etc) and
              2. in the cloud using ​Gitpod​ and ​Github​.
              The major requirements for this assignment are outlined below:<p>
                A. Create a ​home page ​that includes your personal information e.g. student name, number, course,
                and CA title. For your home page and other pages, create a header, footer and main part.
                <p>B. PHP include files: ​identify and separate the common / similar parts (e.g. headers, footers, navigation menus) of your code from the rest of the code and use the ​include​ and ​require​ ​files. Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website i.e. it will speed up the development, reduce the amount of code, and achieve a higher level of flexibility and overall consistency across the pages in our website.
                  <P>C. PHP arrays: ​In your site, create a page to display the data from an array into a HTML table with some styling (e.g. Bootstrap). The arrays is as follows:

                    <P>D. PHP forms:​ Create a separate page that will have a form that will allow the user to enter in a country name (can be done from a drop down list) and will return the correct capital. If the country is not in the list, display a message to the user to inform them that this country is not listed (or could not be found).</p>

                    <p>1. A ​zip file​ including all of your files (php files, image folder, css folder, etc.) making sure to keep the site folder structure intactas zip file and upload to Moodle in the appropriate submission portal.<p>
                        <p>2. A video to demonstrate your working site running on your local server.

                          <p>3. A text file that includes the links to your Githob and Github project.
                          </p>

        </div>
      </div>
    </div><!-- End About Section -->

    <table class="table">
      <h4>Country and Capital list </h4>


      <thead class="thead-dark">
        <tr class="table-primary">
          <th scope="col">Country </th>
          <th scope="col">Capital</th>
        </tr>

      </thead>
      <tbody>
        <tr>
          <?php include('countryCapital.php') ?>
        </tr>
      </tbody>
    </table>

    <div id="dropp">
      <?php include('dropList.php') ?>
    </div>
    <p>
  </main><!-- End #main -->


</body>

</html>