<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    $title = "R&D on Plantgrowth";
    $styleSheetName = "style.css";
    include "head.php";
     ?>
  </head>
  <body>
    <nav><?php include "navBar.php"; ?></nav>
    <div class="container">
      <article style="padding-top: 80px;">
        <h1>Research and Development at Aeroplane</h2>
        <hr>
        <h2>The goal</h2>
        <p>Find a way of creating a procedural plant or tree within Unity that grows over time by the usage of
        resources such as light or temperature.
        </p>
        <hr>
        <h2>The process</h2>
        <p>The Algorithmic Beauty of Plants by Aristid Lindenmayer and Przemysław Prusinkiewicz definitely served as a red
        thread during this project. While a lot of seperate research was done on the biological mechanics of plants,
        a system such as Astrid Lindenmayer's L-system, was a must. Once you went through the book and go outside for a walk,
        it's easy to find an L-system structure in just about every plant or tree.
        </p>
        <p>
          By using Aeroplane's custom node based implementation, I designed a program that tackles the girth, elasticity and
          the skeleton of any type of plant. The user only has to look at the plant he or she wants to create and translate
          this in the custom-made L-system. By adding resources and suppliers to the scene, depending on the income, the plant
          will grow differently, with either more flowers and less leaves or vice versa. Branching angles are usually random, set
          between an amount of degrees that the user defines.
        </p>
        <p>
          What makes the growing effect is that the plant or tree is build up from segments. Segments that over time grow in
          girth and length. The girth along with the elasticty factor (determined by the user) determines how much a branch
          will bend.
        </p>
        <div>
          <img style="padding-bottom: 0; max-width: 100%;" src="./Resources/Aeroplane/ResearchAtAeroplane.png">
          <h4><i>The growth of the same plant over time.</i></h4>
        </div>
        <div>
          <img style="padding-bottom: 0; max-width: 100%;" src="./Resources/Aeroplane/ResearchAtAeroplane_2.png">
          <h4><i>Depending on the current energy of the plant, the plant will decide to grow a lot of fruits attached to
            one branch, or few fruits with an extra leaf that serves as an extra energy collector.
          </i></h4>
        </div>
        <p>
          The L-system works by defining a set of rules the plant needs to follow. These rules consist of prerequisites and results.
          Once a prerequisite applies, the plant will grow in a way the result is structured. The cool thing about this application,
          is that an infinite amount of results can be created for a single prerequisite. Every result will then have a chance percentage,
          also changeable by the user.
          This, in combination with random angles and resource management, creates a different looking plant everytime while keeping that
          same look and feel.
        </p>
        <hr>
        <h2>Conclusion, take aways and further development</h2>
        <p>
          With the usage of the L-system we can just about make any plant we want. What is required is to understand its language and translate
          the plant's structure to rules. What would make that process way easier is to create a slider-based application, where you could define
          the starting point of where a tree starts branching and the frequency of it, the starting and max girth and the elasticity.
        </p>
        <p>
          When doing research about plants, you come to realise that there is a lot to dive into. The danger is not to dive too deep,
          but take the information that you need in order to create your own model.
        </p>
      </article>
    </div>
    <?php include "footer.php" ?>
  </body>
</html>
