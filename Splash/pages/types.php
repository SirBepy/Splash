<?php include '../includes/head.php'?>
    <link rel="stylesheet" href="../assets/style/types.css">
    <title>Splash - Types</title>
</head>

<body onload="initAllSlides();">

<?php include '../includes/navbar.php';?>
<div class="slide paddingtop-5em padding-10vw marginbottom-4em">
  <div class="batchholder">
    <div class="typebatch">
      <div class="type" onclick="changeTo(1)">
        <img src="../assets/images/types/bug.svg" alt="Bug-type icon">
      </div>

      <div class="type" onclick="changeTo(2)">
        <img src="../assets/images/types/dark.svg" alt="Dark-type icon">
      </div>

      <div class="type" onclick="changeTo(3)">
        <img src="../assets/images/types/dragon.svg" alt="Dragon-type icon">
      </div>

      <div class="type" onclick="changeTo(4)">
        <img src="../assets/images/types/electric.svg" alt="Electric-type icon">
      </div>

      <div class="type" onclick="changeTo(5)">
        <img src="../assets/images/types/fairy.svg" alt="Fairy-type icon">
      </div>

      <div class="type" onclick="changeTo(6)">
        <img src="../assets/images/types/fighting.svg" alt="Fighting-type icon">
      </div>

      <div class="type" onclick="changeTo(7)">
        <img src="../assets/images/types/fire.svg" alt="Fire-type icon">
      </div>

      <div class="type" onclick="changeTo(8)">
        <img src="../assets/images/types/flying.svg" alt="Flying-type icon">
      </div>

      <div class="type" onclick="changeTo(9)">
        <img src="../assets/images/types/ghost.svg" alt="Ghost-type icon">
      </div>
    </div>

    <div class="typebatch2">
      <div class="type" onclick="changeTo(10)">
        <img src="../assets/images/types/grass.svg" alt="Grass-type icon">
      </div>

      <div class="type" onclick="changeTo(11)">
        <img src="../assets/images/types/ground.svg" alt="Ground-type icon">
      </div>

      <div class="type" onclick="changeTo(12)">
        <img src="../assets/images/types/ice.svg" alt="Ice-type icon">
      </div>

      <div class="type" onclick="changeTo(13)">
        <img src="../assets/images/types/normal.svg" alt="Normal-type icon">
      </div>

      <div class="type" onclick="changeTo(14)">
        <img src="../assets/images/types/poison.svg" alt="Poison-type icon">
      </div>

      <div class="type" onclick="changeTo(15)">
        <img src="../assets/images/types/psychic.svg" alt="Psychic-type icon">
      </div>

      <div class="type" onclick="changeTo(16)">
        <img src="../assets/images/types/rock.svg" alt="Rock-type icon">
      </div>

      <div class="type" onclick="changeTo(17)">
        <img src="../assets/images/types/steel.svg" alt="Steel-type icon">
      </div>

      <div class="type" onclick="changeTo(18)">
        <img src="../assets/images/types/water.svg" alt="Water-type icon">
      </div>
    </div>
  </div>
  <div id="allSlides"></div>
  </div>
</div>
<script src="../assets/javascript/typefunctions.js"></script>

<?php include '../includes/footer.php';?>