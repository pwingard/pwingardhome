<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/fave.ico">
    <script type='text/javascript' >
                var today = new Date();
                var year = today.getFullYear();
//                var setupYr = 2016;
//                var addedYrs = year-setupYr;
//                console.log(addedYrs);
    </script>

    <title>Peter Wingard Senior Software Engineer</title>

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
    <!-- Custom styles for this template -->
    <link href="narrow.css" rel="stylesheet">

    <script type='text/javascript' src='/twc_includes/js/jquery-1.11.1.min.js'></script>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.html">Examples</a></li>
            <li role="presentation" class="active"><a href="#">Tech Skills</a></li>
            <li role="presentation"><a href="contact/contact.html">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Skills</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
        <h4>Ad System's Backend</h4>
            <p>Salesforce, DFP, Operative, Creatives, Targeting, Data mining, etc. > 3 yrs exp</p>
          <h4>PHP/MySQL</h4>
          <!--addedYrs-->
            <p><?php echo calYrsSince(2006);?> yrs exp</p>
          <h4>Javascript</h4>
            <p>
                JS: <?php echo calYrsSince(2011);?> yrs exp<br />
                jQuery: <?php echo calYrsSince(2012);?> yrs exp<br />
                Ajax: <?php echo calYrsSince(2012);//initially 4?> yrs exp<br />
                AngularJS: 1 yrs exp
            </p>
          <h4>HTML/CSS</h4>
            <p> > 10 yrs exp</p>           
          <h4>Bootstrap</h4>
            <p> <?php echo calYrsSince(2014);?> yrs exp</p>
            <h4>Automated Testing</h4>
            <p>Facebook’s PHP WebDriver<br />Selenium server<br />PHPUnit<br /> 
                BrowserStack<br />PhantomJS<br />Appium<br />1 yr exp
            </p>
        </div>
        <div class="col-lg-6">
          <h4>LAMP</h4>
            <p>Full stack: <?php echo calYrsSince(2012);?> yrs exp<br />
                (Linux, Apache, MySQL, PHP) </p>
          <h4>Salesforce</h4>
            <p> GUI, API: 3 yrs exp</p>
          <h4>DFP</h4>
            <p>DoubleClick For Publishers (Google): <br />
                API: 2 yrs exp</p>
          <h4>APIs</h4>
            <p>Variety of APIs: <?php echo calYrsSince(2008);?> yrs exp (Google, Twitter, PayPal, Operative, etc.)<br />
            Creating APIs: 3 yrs exp</p>
            <h4>Other</h4>
            <p>Git: <?php echo calYrsSince(2012);?> yrs exp<br />Operative API: 3 yrs exp<br />Terminal: <?php echo calYrsSince(2012);?> yr exp<br />Netbeans<br />PhpMyAdmin<br />Filezilla<br />SquelPro<br />Firebug<br />Chrome Dev Tools...
            </p>
            <h4>Also Rans</h4>
            <p>JSOM, XML, DOM, Objects<br />MVC, yii, OOP<br />Wordpress, SlickGrid, ad systems<br />and more...</p>
            
        </div>
      </div>
        
      <footer class="footer">

            <p>
                <a href="https://github.com/pwingard">Git</a>&nbsp;&middot;&nbsp;
                <a href="https://www.linkedin.com/in/pwingard">LinkedIn</a>
            </p>
          
            <p>&copy; <span id="year"></span> | Peter Wingard</p>
          
            <script type='text/javascript' >
                $('#year').text(year);
            </script>
          
            <small>Site written and tested for Mac Chrome</small>
            
      </footer>

    </div> <!-- /container -->
  </body>
</html>
<?php

function calYrsSince($yrs){
   $curYr=date("Y");
   return $curYr-$yrs;
}
?>


