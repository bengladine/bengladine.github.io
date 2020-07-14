<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      $title = "Portal in Overlord";
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
        <h1>Portal in the Overlord Engine</h1>
        <hr>
        <h2>The goal</h2>
        <p>Recreating the portal effect in DAE's Overlord Engine. The goal was to understand
          the renderingpipeline better and learn more about hlsl, but it turned out to be
          more about understanding the Portal effect.
        </p>
        <hr>
        <h2>The process</h2>
        <p>Understanding how portals work is the first step before start typing the code.
          We'll call the entrance portal P1 and the exit portal P2.
          Both portals have a camera placed in the middle and are looking away from the wall/ceiling or floor they are placed upon.
          These camera's make a snapshot every frame and the result is saved. The result from P1's camera will be placed on P2's
          mesh as a texture and vice versa. Everything is drawn besides the portals, the snapshot is taken and after
          that we draw the portals with their new texture. Other effects such as maintaining of momentum was also implemented.
        </p>
        <hr>
        <h2>Conclusion</h2>
        <p>The full effect is not fully implemented. Things like that the camera should rotate
          along with the players' look direction or a good cutout of the snapshot that fits perfectly
          on the portal. These are really the finishing touches that make portals look great and
          realistic.
        </p>
        <p>  This was by far my least favourite project. The reason for this was because we were working
          with DAE's custom engine. It's definitely not the same as working with Unity or Unreal Engine 4.
          Memory leaks that happened on a irregular basis, no documentation and everything feels half finished.
          It would be good, to finish the portals in another engine.
        </p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/csOpuLjWeYg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </article>
    </div>
    <?php include "footer.php" ?>
  </body>
</html>
