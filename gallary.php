<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bootstrap Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </nav>
    <div class="container">
        <h1 class="text-center mt-5">Gallery</h1>

        <!-- Wedding Photograph Section -->
        <div class="container">
            <h2 class="text-center mt-5">Wedding Photograph</h2>
            <div class="row">
                <?php
                include('config.php');

                // Fetch photos from the database
                $result = $conn->query("SELECT * FROM photos WHERE category='Wedding_photograph'");
                if ($result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                        $imagePath = "assets/uploads/" . $row['image'];
                ?>
                    <!-- Gallery Item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="<?= htmlspecialchars($imagePath) ?>" class="card-img-top" alt="Wedding Photograph">
                        </div>
                    </div>
                <?php 
                    endwhile;
                else: 
                ?>
                    <p class="text-center">No wedding photographs found.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Event Photograph Section -->
        <div class="container">
           
            <h2 class="text-center mt-5">Event Photograph</h2>
            <div class="row">
                 <?php
                

                // Fetch photos from the database
                $result = $conn->query("SELECT * FROM photos WHERE category='Event_photograph'");
                if ($result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                        $imagePath = "assets/uploads/" . $row['image'];
                ?>
                <!-- Placeholder for static images -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="<?= htmlspecialchars($imagePath) ?>" class="card-img-top" alt="Event Image 1">
                    </div>
                </div>
                 <?php 
                    endwhile;
                else: 
                ?>
                    <p class="text-center">No wedding photographs found.</p>
                <?php endif; ?>               
                
            </div>
        </div>

        <!-- Wedding Videograph Section -->
        <div class="container">
            <h2 class="text-center mt-5">Wedding Videograph</h2>
            <div class="row">
                <!-- Placeholder for static images -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="image1.jpg" class="card-img-top" alt="Wedding Video Image 1">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="image2.jpg" class="card-img-top" alt="Wedding Video Image 2">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="image3.jpg" class="card-img-top" alt="Wedding Video Image 3">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="image4.jpg" class="card-img-top" alt="Wedding Video Image 4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
