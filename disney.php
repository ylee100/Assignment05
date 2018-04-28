<?php $currentTitle = 'Disney'; include'inc/html-top.inc';?>
<!--Z-Pattern Layout-->
  <body>
    <header>
      <!--Maybe header with Disney's signature logo or/and something-->
      <img src="images/disney/disney.png" title="disneylogo" alt="disneylogo">
    </header>
        <?php include "inc/nav.inc" ?>
    <!--navigation bar-->
    <div class="container">
      <article>
        <h2>About</h2>
         <p>The Walt Disney Company, commonly known as Disney, is an American diversified multinational mass media and entertainment conglomerate, headquartered at the Walt Disney Studios in Burbank, California. It is the world's second-largest media conglomerate in terms of revenue, after Comcast. Disney was founded on October 16, 1923 – by brothers Walt Disney and Roy O. Disney – as the Disney Brothers Cartoon Studio, and established itself as a leader in the American animation industry before diversifying into live-action film production, television, and theme parks. The company also operated under the names The Walt Disney Studio and then Walt Disney Productions. Taking on its current name in 1986, it expanded its existing operations and also started divisions focused upon the theater, radio, music, publishing and online media</p>
      <br>
        <h2>Brief History</h2>
        <h3>Foundation</h3>
        <p>n early 1923, Kansas City, Missouri, animator Walt Disney created a short film entitled Alice's Wonderland, which featured child actress Virginia Davis interacting with animated characters. After the bankruptcy in 1923 of his previous firm, Laugh-O-Gram Studio, Disney moved to Hollywood to join his brother, Roy O. Disney. Film distributor Margaret J. Winkler of M.J. Winkler Productions contacted Disney with plans to distribute a whole series of Alice Comedies purchased for $1,500 per reel with Disney as a production partner. Walt and Roy Disney formed Disney Brothers Cartoon Studio that same year. More animated films followed after Alice. In January 1926, with the completion of the Disney studio on Hyperion Street, the Disney Brothers Studio's name was changed to the Walt Disney Studio.</p>
        <h3>Today</h3>
        <p>On December 14, 2017, The Walt Disney Company and 21st Century Fox announced their $52 billion deal to merge. The merger largely includes Fox's entertainment assets, including filmed entertainment, cable entertainment, and direct broadcast satellite divisions in the UK, Europe and Asia, but excludes divisions such as the Fox Broadcasting Company, Fox Television Stations, the Fox News Channel, the Fox Business Network, and Fox Sports, all of which will be spun off into an independent company.</p>
      <br>

        <h2>Featured Films</h2>
        <p>The Walt Disney Company studio has produced 56 feature films, beginning with Snow White and the Seven Dwarfs (1937)—one of the first full-length animated feature films and the first one made in the United States—and most recently Moana (2016). Some very famous and successful animations include: Lion King (1994), Zootopia (2015), Tangled (2010), and Frozen (2013). </p>
        <p>Walt Disney Studios Motion Pictures has released the most films that have crossed the $1 billion mark (sixteen, in worldwide grosses) among major Hollywood studios, with eight of the twenty highest-grossing films of all time being distributed by Disney. In addition, Disney is the first of only three studios that have released at least two billion-dollar films in the same year (the others being Warner Bros. and Universal Pictures). Furthermore, Disney is the only studio that has achieved this five times, in 2010, 2013, 2015, 2016 and 2017—2016 of which included four $1 billion releases, a record for any studio. Three of the top five highest-grossing animated films have been released by Disney, as well as sixteen of the twenty highest-grossing G-rated films. In addition, four of the top-five opening weekends were Disney releases. In 2015, Disney achieved its largest yearly box-office gross worldwide and in North America. In 2016, Disney surpassed $7 billion in worldwide yearly box-office gross—the first of any major studio—surpassing the previous 2015 record.</p>
      </article>

      <div class="posters">
        <ul>
         <br>
        <li><img src="images/disney/lionking.jpg" alt="pic of lionking"></li>
        <li><p>the Lion King</p></li>
        <br>
        <li><img src="images/disney/frozen.jpg" alt="pic of frozen"></li>
        <li><p>Frozon</p></li>
        <br>
        <li><img src="images/disney/zootopia.jpg" alt="pic of zootopia"></li>
        <li><p>Zootopia</p></li>
        <br>
        <li><img src="images/disney/moana.jpg" alt="pic of moana"></li>
        <li><p>Moana</p></li>
        <li>
          <h3 class="blink">Please complete this short survey</h3>
        </li>
        <li>
            <?php include "inc/survey.inc";?>
        </li>
      </ul>
    </div>


    </div>



    <?php include'inc/scripts.inc';?>

  </body>
</html>
