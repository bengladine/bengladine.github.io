<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      $title="The Robot";
      $styleSheetName="style.css";
      include "head.php";
    ?>
  </head>
  <body>
    <nav>
      <?php include "navBar.php" ?>
    </nav>
    <div class="container">
      <article style="padding-top: 80px;">
        <h1>Optimizing, texturing and rigging a premade model</h1>
        <hr>
        <h2>The goal</h2>
        <p>In this project, the goals were to optimize a high poly model, getting ahold of the program
           Substance Painter and the process of texturing with PBR materials and finally, rigging the
           model so that it's ready to be posed for a render.
        </p>
        <hr>
        <h2>The process</h2>
        <p>The process went as follows:
          <ol>
            <li>A high poly model was used to bake a normalmap.</li>
            <li>The high poly model was then reduced to a low poly version.</li>
            <li>The normalmap and the lower poly model were then imported in Substance Painter.</li>
            <li>Changes on the normal, metallic, diffuse, opacity - and heightmap such as paint, stamps, dents,
               bulletholes and relief patterns were applied.</li>
            <li>All textures were then import in Unreal Engine 4 along with the optimized model.</li>
            <li>A pose was set up and renders were taken.</li>
          </ol>
        </p>
        <hr>
        <h2>Results and take aways</h2>
        <p>
          While it's not the point of being the best in this task, it's a plus to understand the pipeline
          of optimizing a model and (trying) to make it look as good as you can. Whenever you will work
          with artists, you will have a general idea of how long something could take, making communication
          all the better.
          <div = "imageContainer">
            <img src="./Resources/Robot/robot_1.png" class="galleryImage">
            <img src="./Resources/Robot/robot_2.png" class="galleryImage">
            <img src="./Resources/Robot/robot_3.png" class="galleryImage">
            <img src="./Resources/Robot/robot_4.png" class="galleryImage">
          </div>
        </p>
      </article>
    </div>
    <?php include "footer.php" ?>
    <?php include "modal.php" ?>
  </body>
</html>
