<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://enigterry.github.io/styles.css">
<link rel="stylesheet" href="https://www.w3school
s.com/w3css/3/w3.css">
  <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
    }

    * {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  </style>
  </head>
  <body>
    <div class="header">
  <h1>EnigTeeWorld</h1>
  <p>Fastest Rising Tech Hub.</p>
  </div>
<!-- Navigation -->
<nav class="w3-bar w3-black">
  <a href="https://enigterry.github.io" class="w3-button w3-bar-item">Home</a>
  <a href="#categories" class="w3-button w3-bar-item">Categories</a>
  <a href="#services" class="w3-button w3-bar-ite
m">Services</a>
  <a href="https://enigterry.github.io/contact.ht
ml" class="w3-button w3-bar-item">Contact</a>
</nav>

    <form method="post" action="subscriberform.php">


<textarea name="message"></textarea>


<input type="submit">


</form>

<?php


if($_POST["message"]) {


mail("terryonaiwu@gmail.com", "subscriber contactus form",


$_POST["thank you for contacting us"]. "From: terryonaiwu@gmail.com");


}


?>
  </body>
  </html>
