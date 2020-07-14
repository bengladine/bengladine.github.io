<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    $title="Creating a level";
    $styleSheetName="style.css";
    include "head.php";
     ?>

  </head>
  <body>
    <nav>
      <?php include "navBar.php"; ?>
    </nav>
  <div class="container">
    <article style="padding-top: 80px;">
      <h1>Creating a level in Unreal Engine 4</h1>
      <hr>
      <h2>The goal</h2>
      <p>The goal of this project, was to create a small level, set within a SCI-FI environment and with basic shapes. These shapes were imported in Unreal Engine 4,
      the engine in which we will present our level.</p>
      <hr>
      <h2>The process</h2>
      <p>The first steps are creating a blockout. Getting the overal shape of the level, before continuing on the details.
      After the blockout was made, you run as a player through to determine if it has the right feel or not.</p>
      <img class="image" src="./Resources/LevelEditing/blockout.png">
      <p>Following that, meshes are implemented.</p>
      <img class="image" src="./Resources/LevelEditing/addingMeshes.png">
      <p>Materials were finetuned and lightning was added along with a couple more meshes. </p>
      <img class="image" src="./Resources/LevelEditing/addingMeshes_2.png">
      <p>Once a room was finished, it was time to start working on the other rooms. It is good to get the feeling of the first room right, in order to apply this
        to other rooms. That way, when something is wrong, you won't have to change this everywhere.</p>
      <div class="imageContainer">
        <img src="./Resources/LevelEditing/hallway.png" class="hoverImage galleryImage">
        <img src="./Resources/LevelEditing/LevelEditing_Main.png" class="hoverImage galleryImage">
        <img src="./Resources/LevelEditing/weaponRoom.png" class="hoverImage galleryImage">
        <img src="./Resources/LevelEditing/hallway_2.png" class="hoverImage galleryImage">
        <img src="./Resources/LevelEditing/controlRoom.png" class="hoverImage galleryImage">
        <img src="./Resources/LevelEditing/addingMeshes_2.png" class="hoverImage galleryImage">
      </div>
      <hr>
      <h2>Take aways</h2>
      <p>This project mostly taught me about working with Unreal 4's work
        flow and its Material Editor. Basic usage of Blueprints was also
        a part of it. It's worth noting that through designing a level,
         the thought-process and experimenting must not be underestimated.
         Questions like: "Is this button obvious enough?",
         "Will people even find this entrance?",
         "If I pull this switch, is it noticable what it does?"
         are returned on a regular basis.
      </p>
    </article>
  </div>
  <?php include "footer.php" ?>
  <?php include "modal.php" ?>
  </body>
</html>
