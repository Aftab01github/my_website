<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for styling */
        body {
            font-family: Arial, sans-serif;
        }

        


        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: bold;
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }



        .carousel-item {
            height: 100vh;
            min-height: 300px;
            background-size: cover;
            background-position: center;
        }

        #about,
        #services,
        #gallery,
        #contact {
            padding: 60px 0;
        }

        .gallery img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

          .img-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .img-hover:hover {
        transform: scale(1.1); /* Enlarge image */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add shadow */
    }
    </style>
</head>

<div>


   


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Brand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                     <!-- Dropdown for Gallery -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#wedding-photography">Wedding Photography</a></li>
                        <li><a class="dropdown-item" href="#event-photography">Event Photography</a></li>
                        <li><a class="dropdown-item" href="#wedding-videography">Wedding Videography</a></li>
                    </ul>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- Responsive Image with Text Overlay -->

     <section id="home">
        
        
     




    
        

       

        
    <br>

    <!-- Slider -->
    
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://th.bing.com/th/id/R.877fb1737a6765a16bd90938ab564e79?rik=p2%2bn2A60QRtiWw&pid=ImgRaw&r=0');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Our Website</h5>
                    <p>Your tagline goes here</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://th.bing.com/th/id/R.90be3da36ef098ba17c664966713c7ef?rik=HTUEts%2f9SbL0nA&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f08%2fBest-Free-Photos-HD-Nature-Pictures.jpg&ehk=OGW9YK4%2ft9n5c1CXnMLczv2SMaxz%2fcKWsCO8E3Qeb%2fo%3d&risl=&pid=ImgRaw&r=0');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Services</h5>
                    <p>High-quality solutions for your needs</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://wallpapers.com/images/featured/hd-a5u9zq0a0ymy2dug.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Innovative Solutions</h5>
                    <p>Bringing the latest technologies to you</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </section>

    <!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left side: Image -->
            <div class="col-md-6">
                <img src="https://th.bing.com/th/id/OIP.iuvJjIFEqWQfS15aPURrrQHaLH?rs=1&pid=ImgDetMain" class="img-fluid" alt="About Us Image">
            </div>
            <!-- Right side: Text -->
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum metus id mi facilisis fringilla.
                    Vivamus dictum lacus sed urna vehicula, a placerat ligula laoreet. Curabitur eu felis ut ipsum malesuada tincidunt.
                    Nunc nec magna metus. Aenean facilisis erat eu diam scelerisque, vitae cursus nisi tristique.
                </p>
                <p>
                    Nulla facilisi. Sed eget nibh vitae tortor dictum faucibus sit amet nec lectus. Vivamus in arcu auctor, viverra sapien
                    vel, fermentum augue. Fusce malesuada libero a felis suscipit, a finibus sapien ultricies.
                </p>
            </div>
        </div>
    </div>
</section>


    <!-- Services Section -->
    <section id="services" class="text-center bg-light">
        <div class="container">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <!-- Image Box -->
                <div class="image-box mt-3">
                    <a href="#wedding-photography" target="_blank">
                    <img src="https://th.bing.com/th/id/OIP.rhh9E8mtkIRktLihHUZ8pAHaE8?rs=1&pid=ImgDetMain" class="img-fluid rounded img-hover" alt="Service 1 Image">
                </a>
                
                </div><br>
                    <h4>Wedding Photograph</h4>
                    <p>High-quality service description goes here.</p>
                </div>
                <div class="col-md-4">
                      <!-- Image Box -->
                <div class="image-box mt-3">
                    <a href="#event-photography">
                    <img src="https://th.bing.com/th/id/OIP.rhh9E8mtkIRktLihHUZ8pAHaE8?rs=1&pid=ImgDetMain" class="img-fluid rounded img-hover" alt="Service 1 Image">
                </a>
                
                </div><br>
                    <h4>Event Photograph</h4>
                    <p>High-quality service description goes here.</p>
                </div>
                <div class="col-md-4">
                      <!-- Image Box -->
                <div class="image-box mt-3">
                    <a href="#wedding-videography">
                    <img src="https://th.bing.com/th/id/OIP.rhh9E8mtkIRktLihHUZ8pAHaE8?rs=1&pid=ImgDetMain" class="img-fluid rounded img-hover" alt="Service 1 Image">
                </a>

                </div><br>
                    <h4>Wedding videograph</h4>
                    <p>High-quality service description goes here.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
<section id="gallery" class="py-5">
    <div class="container text-center">
        <h2>Gallery</h2>
        <p>Explore our portfolio in different categories</p>

        <!-- Wedding Photography Category -->
        
        <div class="mt-5">
            <section id="wedding-photography">
            <h3>Wedding Photography</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="https://www.seanleblancphotography.com/wp-content/uploads/2019/01/Sean-LeBlanc-Photography-Best-Wedding-Photographs-of-2018-19.jpg" target="_blank">
                    <img src="https://www.seanleblancphotography.com/wp-content/uploads/2019/01/Sean-LeBlanc-Photography-Best-Wedding-Photographs-of-2018-19.jpg"  class="img-fluid rounded img-hover" alt="Wedding Video 1">
                </a>
                </div>
                <div class="col-md-4 mb-4">
                 <a href="https://www.idaliaphotography.com/wp-content/uploads/2017/10/pleasantdale-chateau-wedding-photos_0045-1024x684.jpg" target="_blank">
                    <img src="https://www.idaliaphotography.com/wp-content/uploads/2017/10/pleasantdale-chateau-wedding-photos_0045-1024x684.jpg" class="img-fluid rounded img-hover" alt="Wedding Video 1">
                </a>   
                </div>
                <div class="col-md-4 mb-4">
                    <a href="https://www.seanleblancphotography.com/wp-content/uploads/2019/01/Sean-LeBlanc-Photography-Best-Wedding-Photographs-of-2018-19.jpg" target="_blank">
                    <img src="https://www.seanleblancphotography.com/wp-content/uploads/2019/01/Sean-LeBlanc-Photography-Best-Wedding-Photographs-of-2018-19.jpg" class="img-fluid rounded img-hover" alt="Wedding Video 1">
                </a>

                </div>
                <a href="gallary.php">see more</a>
            </div>
            
            </section>
        </div>

        <!-- Event Photography Category -->
        
         <div class="mt-5">
            <section id="event-photography">
            <h3>Event Photography</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="https://th.bing.com/th/id/OIP.GZ_GCmM8O7KvBN2XVBbKZAHaE8?rs=1&pid=ImgDetMain" target="_blank">
                        <img src="https://th.bing.com/th/id/OIP.GZ_GCmM8O7KvBN2XVBbKZAHaE8?rs=1&pid=ImgDetMain" class="img-fluid rounded img-hover"  alt="Event Photo 1">
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="https://th.bing.com/th/id/OIP.QkZciT4FuZdHCaAXg7LEaAHaE9?pid=ImgDet&w=474&h=317&rs=1" target="_blank">
                        <img src="https://th.bing.com/th/id/OIP.QkZciT4FuZdHCaAXg7LEaAHaE9?pid=ImgDet&w=474&h=317&rs=1" class="img-fluid rounded img-hover" alt="Event Photo 2">
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="https://mixmag.net/assets/uploads/images/_columns2/ava-highlights-lewismcclay.png" target="_blank">
                        <img src="https://mixmag.net/assets/uploads/images/_columns2/ava-highlights-lewismcclay.png" class="img-fluid rounded img-hover" alt="Event Photo 3">
                    </a>
                </div>
                <a href="gallary.php">see more</a>
            </div>
            </section>
        </div>

        <!-- Wedding Videography Category -->

        <div class="mt-5">
            <section id="wedding-videography">
            <h3>Wedding Videography</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="ratio ratio-16x9">
                        <video width="400" height="300" controls>
                            
                            <source src="video/video.mp4" type="video/mp4">
                            
                        </video>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="ratio ratio-16x9">
                    <video width="400" height="300" controls>
                            
                        <source src="video/video.mp4" type="video/mp4">
                        
                    </video>
                </div>
            </div>
                <div class="col-md-4 mb-4">
                    <div class="ratio ratio-16x9">
                    <video width="400" height="300" controls>
                            
                        <source src="video/video.mp4" type="video/mp4">
                        
                    </video>
                </div>
                <a href="gallary.php">see more</a>
                </div>
            </div>
        </div>
        </section>
    </div>
</section>


    <!-- Contact Us Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <!-- Contact Details (Left Side) -->
            <div class="col-md-6">
                <h4>Contact Details</h4>
                <p><strong>Address:</strong> 123 Main Street, City, Country</p>
                <p><strong>Email:</strong> info@example.com</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Business Hours:</strong> Mon - Fri, 9:00 AM - 5:00 PM</p>
                <br>
              <!-- Google Map (Right Side) -->
            <div class="col-md-6">
                <div id="map" style="height: 300px; width: 100%;">
                    <img src="https://th.bing.com/th/id/OIP.yvauclQ-ruJZlVLQBwSYPAHaHa?rs=1&pid=ImgDetMain" height="300" alt="">
                </div>
            </div>
            </div>

            <!-- Contact Form (Right Side) -->
            <div class="col-md-6">
              



                <form action="" method="POST">
                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name"
                        id="name" placeholder="Enter your name" required>
                    </div>

                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <!-- Phone Number Field -->
                    <div class="mb-3">
                        <label for="number" class="form-label">Phone Number</label>
                        <input type="int" class="form-control" name="number" id="number" placeholder="Enter your phone number" required>
                    </div>

                    <!-- Message Field -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Write your message" name="message" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>



            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Your Website. All Rights Reserved.</p>
        </div>
    </footer>



             <!-- Google Maps API Script -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      
</body>

</html>

<?php
// Include database connection
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Insert form data into the contact table
    $query = "INSERT INTO contact (name, email, number, message) VALUES ('$name', '$email', '$number', '$message')";
    if ($conn->query($query)) {
       
    } 
}
?>



