<?php
define("TITLE", "Team | Franklin's Fine Dining");
include('includes/header.php');

?>

<div id="team-members" class="cf">
  <h1>Our Team at Franklin's</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam asperiores necessitatibus laudantium quidem eum
    animi qui exercitationem, hic, suscipit quas et, placeat culpa aliquid deleniti magni minus tenetur in? Deserunt.
  </p>

  <hr>

  <?php
  foreach ($teamMembers as $member) {
  ?>

  <div class="member">
    <img src="img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
    <h2><?php echo $member[name]; ?></h2>
    <p><?php echo $member[bio]; ?></p>
  </div><!-- member -->

  <?php
  }
  ?>
</div><!-- team members -->

<hr>

<?php
include('includes/footer.php');
?>