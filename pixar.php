<?php $currentTitle = 'Pixar'; include'inc/html-top.inc';?>
<!--Z-Pattern Layout-->
  <body>
    <header class="pixar-header">
      <!--Maybe header with Pixar's signature logo or/and something-->
      <img src="images/pixar/pixar.png" title="pixarlogo" alt="pixarlogo">
    </header>
    <!--navigation bar-->
    <?php include "inc/nav.inc" ?>
    <div class="container">
      <article>

        <h2>About</h2>
         <p>Pixar, also referred to as Pixar Animation Studios, is an American computer animation film studio based in Emeryville, California that is a subsidiary of The Walt Disney Company. Pixar began in 1979 as the Graphics Group, part of the Lucasfilm computer division, before its spin-out as a corporation in 1986, with funding by Apple Inc. co-founder Steve Jobs, who became the majority shareholder. Disney purchased Pixar in 2006 at a valuation of $7.4 billion, a transaction that resulted in Jobs becoming Disney's largest single shareholder at the time. Pixar is best known for CGI-animated feature films created with RenderMan, Pixar's own implementation of the industry-standard RenderMan image-rendering application programming interface, used to generate high-quality images</p>
         <br>
        <h2>Brief History</h2>
        <p>Pixar got its start in 1974 when New York Institute of Technology's (NYIT) founder Alexander Schure, who was also the owner of a traditional animation studio, established the Computer Graphics Lab (CGL), recruited computer scientists who shared his ambitions about creating the world's first computer-animated film. Edwin Catmull and Malcolm Blanchard were the first to be hired and were soon joined by Alvy Ray Smith and David DiFrancesco some months later, which were the four original members of the Computer Graphics Lab. Schure kept pouring money into the computer graphics lab, an estimated $15 million, giving the group everything they desired and driving NYIT into serious financial troubles. Eventually, the group realized they needed to work in a real film studio in order to reach their goal, and when George Lucas approached them and offered them a job at his studio, six employees decided to move over to Lucasfilm. During the following months, they gradually resigned from CGL, found temporary jobs for about a year to avoid making Schure suspicious, before they joined The Graphics Group at Lucasfilm.</p>
        <h3>Today</h3>
        <p>In 2006, Disney ultimately agreed to buy Pixar for approximately $7.4 billion in an all-stock deal. Following Pixar shareholder approval, the acquisition was completed May 5, 2006. The transaction catapulted Steve Jobs, who was the majority shareholder of Pixar with 50.1%, to Disney's largest individual shareholder with 7% and a new seat on its board of directors. Jobs' new Disney holdings exceeded holdings belonging to ex-CEO Michael Eisner, the previous top shareholder, who still held 1.7%; and Disney Director Emeritus Roy E. Disney, who held almost 1% of the corporation's shares. Pixar shareholders received 2.3 shares of Disney common stock for each share of Pixar common stock redeemed.</p>
        <br>

        <h2>Featured Films</h2>
        <p>Pixar has produced nineteen feature films, beginning with Toy Story (1995), which was the first-ever computer-animated feature film, and its most recent being Coco (2017). All 19 of its films have debuted with CinemaScore ratings of at least an "A−," indicating positive receptions with audiences. The studio has also produced several short films. As of July 2017, its feature films have earned approximately $11 billion at the worldwide box office, with an average worldwide gross of $634 million per film. Finding Nemo (2003), along with its sequel Finding Dory (2016), as well as Toy Story 3 (2010) are among the 50 highest-grossing films of all time, with the lattermost film being the third all-time highest-grossing animated film with a gross of $1.063 billion. Fourteen of Pixar's films are also among the 50 highest-grossing animated films of all time.</p>

      </article>

      <div class="posters">
        <ul>
        <br>
        <br>
       <br>
        <li><img src="images/pixar/toystory.jpeg" alt="pic of toy story"></li>
        <li><p>Toy Story</p></li>
        <br>
        <li><img src="images/pixar/nemo.jpg" alt="pic of nemo"></li>
        <li><p>Finding Nemo</p></li>
        <br>
        <li><img src="images/pixar/insideout.jpeg" alt="pic of inside out"></li>
        <li><p>Inside Out</p></li>
        <br>
        <li><img src="images/pixar/coco.jpg" alt="pic of coco"></li>
        <li><p>Coco</p></li>
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
