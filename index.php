<?php 
include('includes/header.php'); 
include('db_connect.php'); // Add database connection
?>

<div class="container mt-5">
    <section class="hero-section text-center mb-5">
        <img src="images/about-hero.png" alt="Global flavors" class="img-fluid">
        <h1 class="mt-4">Explore World Flavors with Food Fusion</h1>
    </section>

    <div class="row g-5">
        <?php
        $result = $conn->query("SELECT * FROM about_info");
        while ($row = $result->fetch_assoc()) {
            if (str_contains($row['title'], 'Purpose')) {
                echo "<div class='col-md-4'><div class='card h-100'><div class='card-body'>";
                echo "<h3 class='text-warning'>{$row['title']}</h3>";
                echo "<p>{$row['content']}</p>";
                echo "</div></div></div>";
            } elseif (str_contains($row['title'], 'Vision') || str_contains($row['title'], 'Mission')) {
                echo "<div class='col-md-6'>";
                echo "<h3>{$row['title']}</h3>";
                echo "<p>{$row['content']}</p>";
                echo "</div>";
            }
        }
        ?>
    </div>

    <!-- Certifications stay static unless you want those in DB too -->
    <section class="certifications mt-5">
        <h4>Our Certifications</h4>
        <div class="d-flex flex-wrap gap-4">
            <img src="images/iso-cert.png" alt="ISO" style="width: 80px">
            <img src="images/halal-cert.png" alt="Halal" style="width: 80px">
            <img src="images/fda-cert.png" alt="FDA" style="width: 80px">
        </div>
    </section>

    <!-- Core values -->
    <section class="core-values mt-5">
        <h3>Our Core Values</h3>
        <div class="row g-4 mt-3">
            <?php
            $values = $conn->query("SELECT * FROM about_info WHERE title LIKE 'Core Value:%'");
            while ($val = $values->fetch_assoc()) {
                echo "<div class='col-md-3'><div class='card text-center h-100'><div class='card-body'>";
                echo "<h5>" . str_replace('Core Value: ', '', $val['title']) . "</h5>";
                echo "<p>{$val['content']}</p>";
                echo "</div></div></div>";
            }
            ?>
        </div>
    </section>
</div>

<?php 
$conn->close();
include('includes/footer.php'); 
?>
