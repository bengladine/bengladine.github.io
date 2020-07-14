<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
      $title="Recording and editing foley";
      $styleSheetName="style.css";
      include "head.php";
     ?>
  </head>
  <body>
    <nav>
      <?php include "navBar.php" ?>
    </nav>
    <div class="container" style="margin-top: 60px;">
    <article>
      <h1 style="text-align: center; font-size: 32px;">Recording and editing foley</h1>
      <hr>
      <h2>The goal</h2>
      <p>In this project, the goal was to learn about the audio pipeline when recording for a game.
      What steps need to be taken beforehand, what sounds do we need? How will we reproduce the required sounds?
      After that's settled, you must also know how to record properly, what microphone must be used, a condenser mic or a dynamic mic?
      And lastly, do the recorded sounds need to be edited?</p>
      <hr>
      <h2>Preparing</h2>
      <p>When starting, it's good to setup some pillars that represent what the game is going for.
      This could be: solitude, tension, puzzle-solving, mysterious, ... .
      After that an excel-document must be made where all requested sounds will be listed. It's a good
      habit to rank them from CRUCIAL to NOT-IMPORTANT. This automatically makes you record the most important sounds
      first. Another good habit is to place the sounds in different categories such as: player-sounds, tools and objects and dialogue.
      But most importantly, it is very much needed to experiment with making sounds that will resemble the required sound.
      This is probably the most difficult part of the whole project. Going into the studio unprepared is a lot of time wasted.</p>
      <img style='text-align: center;'class="galleryImage" src="./Resources/recording_excel.png" />
      <hr>
      <h2>Recording</h2>
      <p>Pick the right microphone (condenser or dynamic), know how to set it up, place correctly, record and produce the sound needed, multiple times.
      Always better to record enough instances of the same sound so you're sure you have one good version.
      Don't forget to save and done.</p>
      <hr>
      <h2>Editing and cutting</h2>
      <p>Afterwards, it's time to cut and perhaps edit the recorded sounds. It is best to cut the sound as close as possible to the beginning of it. As you want to
      initiate your sound in the game immediately. Any backgroundnoise must be removed. You can't use sounds that are distorted (this is why you record multiple instances).
      Some sounds require some effects to make them sound more like how you want it to be (this is usually planned upfront).</p>
      <br>
      <div class= "recordingBox">
        <h5>Sound of platforms lowering</h5>
        <audio controls src="Resources/Audio/SFX_Object_AllPlatforms_Lowering.wav" alt="Sound of platforms lowering."></audio>
      </div>
      <div class= "recordingBox">
      <h5>Sound of equipping gadget as the player</h5>
      <audio controls src="Resources/Audio/SFX_Player_EquipGadget.wav" alt="Sound of equipping gadget as the player."></audio>
      </div>
      <div class= "recordingBox">
      <h5>Firing a hook gun</h5>
      <audio controls src="Resources/Audio/SFX_Tool_Hook_Fire.wav" alt="Firing a hook gun."></audio>
      </div>
      <hr>
      <h2>Take aways</h2>
      <p>What I learned from this project is to record good quality sounds, editing out mistakes such as 'plop' sounds when speaking and adapting sounds to my needs. All of this
      was done in the program Reaper. It's very convenient to have a partner with you that checks whether or not a sound was too loud or too quiet. He or she can let you know immediately while recording.</p>
    </article>
  </div>
  <?php include "footer.php" ?>
  <?php include "modal.php" ?>

  </body>
</html>
