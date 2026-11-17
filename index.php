<?php include 'top.php'; ?>

<div style="text-align: center; font-family: 'Playfair Display', serif;">
<div class="fond-page" style="padding: 50px 0;">
    <h1>Bienvenue sur Ma Cocotte</h1>
    <p>Le site de cuisine mijotée et en cocotte crée par des étudiants.</p>
    <a href="recettes.php" style="background: #c93b2b; color: white; padding: 10px 20px; border-radius: 10px;">Voir nos recettes</a>

    <div id="carouselExampleCaptions" class="carousel slide w-50 mx-auto my-4">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner rounded">
    <div class="carousel-item active">
      <img src="blanquette-de-veau.jpg" class="d-block w-100 object-fit-cover" alt="Blanquette de veau" style="height: 400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Blanquette de veau</h5>
        <p>Un classique mijoté tout doux.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="boeuf.jpg" class="d-block w-100 object-fit-cover" alt="Boeuf bourguignon" style="height: 400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bœuf bourguignon</h5>
        <p>Un bon plat réconfortant.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pot-feu.jpg" class="d-block w-100 object-fit-cover" alt="Pot-au-feu" style="height: 400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pot-au-feu</h5>
        <p>Généreux et plein de saveurs.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>

<?php include 'bottom.php'; ?>
