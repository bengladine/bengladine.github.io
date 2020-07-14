<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      $title = "AI Bot";
      $styleSheetName = "style.css";
      include "head.php";
    ?>
  </head>
  <body>
    <nav>
      <?php include "navBar.php" ?>
    </nav>
    <div class="container">
      <article>
        <h1>The AI Bot in Elite Engine</h1>
        <hr>
        <h2>The goal</h2>
        <p>The purpose of this project was to write AI-behavior for an agent that is dropped
        in a premade world. The world consists of zombie-bots that chase the agent once the
        agent comes to close. There are also med-kits that is used to heal the agent and coins
        that will attribute to the overal score. Guns are layed out across to map too and can
        be used to shoot and kill enemies.
        </p>
        <hr>
        <h2>The process</h2>
        <p>To write the behavior, I made usage of a Selective Behavior tree. By checking the most
        important stats such as health and surroundings first, the AI always act in terms of safety
        first.
        </p>
        <p>With the usage of a blackboard, I could save any type of data that the agent was receiving
          (such as: what's in the FOV, what do I have in my inventory and so on) and use this info
          in the Behavior actions and conditionals.
        </p>
        <p>Below there's a short video of how the AI acted.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/bwFsLjqPp_U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <hr>
        <h2>Take aways</h2>
        <p>A behavior tree is something that's quite flexible and easy to expand. It's not too hard to implement and gives
        great results. The usage of the blackboard is something handy too and could be used with other
        projects.</p>
      </article>
    </div>
    <?php include "footer.php" ?>
  </body>
</html>
