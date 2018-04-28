<?php $currentTitle = 'Survey Result'; include'inc/html-top.inc';?>
<!--Z-Pattern Layout-->
  <body>
    <header>
      <h1>Survey Result</h1>
    </header>
    <!--navigation bar-->
    <?php include "inc/nav.inc" ?>
    <div class="container">
      <br /><br /><br />
      <!-- see all data in the table format and can edit-->
      <div class="survey_table">
        <h2>Survey Table</h2><br />
        <span id="result"></span>
        <div id="live_data"><!--have some php?--></div>
      </div>
    </div>
    <a href="index.php">Back to Main</a>
    <?php include'inc/scripts.inc';?>

  </body>
</html>
