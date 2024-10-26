<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEWINNOSSH</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
        <div class="menu">
            <div class="logo">
                <a href="#">KEWINNOSSH Co.</a>
            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#inventory">Inventory</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    
     
    <section id="home" class="home">
    <div class="slider">
        <div class="slides">
          
        <div class="slide">
    <img src="image/1.jpeg" alt="Slide 1">
    <div class="text">
        <h1>Welcome to KEWINNOSSH Co.</h1>
        <p>Where innovation meets excellence.</p>
    </div>
</div>

<div class="slide">
    <img src="image/2.jpeg" alt="Slide 2">
    <div class="text">
        <h1>Your Reliable Partner</h1>
        <p>We provide top-notch solutions to streamline your inventory management.</p>
    </div>
</div>

<div class="slide">
    <img src="image/3.jpeg" alt="Slide 3">
    <div class="text">
        <h1>Efficiency at Its Best</h1>
        <p>Optimize your operations with our state-of-the-art inventory system.</p>
    </div>
</div>

<div class="slide">
    <img src="image/4.jpg" alt="Slide 4">
    <div class="text">
        <h1>Leading Innovation</h1>
        <p>Experience cutting-edge solutions designed for modern businesses.</p>
    </div>
</div>

<div class="slide">
    <img src="image/5.jpeg" alt="Slide 5">
    <div class="text">
        <h1>Trusted Expertise</h1>
        <p>Offering dependable services to enhance your operational efficiency.</p>
    </div>
</div>

<div class="slide">
    <img src="image/6.jpg" alt="Slide 6">
    <div class="text">
        <h1>Streamline Your Success</h1>
        <p>Advanced tools to support and grow your business operations.</p>
    </div>
</div>

<div class="slide">
    <img src="image/8.jpg" alt="Slide 8">
    <div class="text">
        <h1>Reliable Solutions</h1>
        <p>Enhance your inventory processes with our expert solutions.</p>
    </div>
</div>


<div class="slide">
    <img src="image/10.jpg" alt="Slide 10">
    <div class="text">
        <h1>Your Path to Innovation</h1>
        <p>Discover the future of inventory management with us.</p>
    </div>
</div>

<div class="slide">
    <img src="image/11.jpg" alt="Slide 11">
    <div class="text">
        <h1>Efficient Solutions</h1>
        <p>Streamline your business processes with our cutting-edge technology.</p>
    </div>
</div>

<div class="slide">
    <img src="image/12.jpg" alt="Slide 12">
    <div class="text">
        <h1>Tailored for You</h1>
        <p>Customized solutions to meet your unique business needs.</p>
    </div>
</div>

<div class="slide">
    <img src="image/13.jpg" alt="Slide 13">
    <div class="text">
        <h1>Optimizing Success</h1>
        <p>Leverage our expertise for unparalleled operational efficiency.</p>
    </div>
</div>

<div class="slide">
    <img src="image/14.jpg" alt="Slide 14">
    <div class="text">
        <h1>Future-Ready Solutions</h1>
        <p>Prepare your business for tomorrow with our advanced tools.</p>
    </div>
</div>

           
        </div>
    </div>
</section>

    
     
    <section id="inventory" class="inventory">
        <div class="inventory-header">
            <h1 class="h1" style="margin-top:10px">Inventory</h1>
            <button onclick="openForm('add')" class="add">Add Product</button>
        </div>
        <div class="table-container">
        <table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Stocks</th>
            <th>Product Price</th>
            <th>Description</th>
            <th>Product Status</th>
            <th>Date of Purchase</th>
            <th>Date Added</th> 
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'product.php';

        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               
                $description = $row["product_description"];
                if (strlen($description) > 10) {
                    $description = substr($description, 0, 10) . '...';
                }
                
                echo "<tr>
                        <td>" . htmlspecialchars($row["product_ID"]) . "</td>
                        <td>" . htmlspecialchars($row["product_name"]) . "</td>
                        <td>" . htmlspecialchars($row["product_stocks"]) . "</td>
                        <td>" . htmlspecialchars($row["product_price"]) . "</td>
                        <td>" . htmlspecialchars($description) . "</td>
                        <td>" . htmlspecialchars($row["product_status"]) . "</td>
                        <td>" . htmlspecialchars($row["date_product_purchase"]) . "</td>
                        <td>" . htmlspecialchars($row["date_product_add"]) . "</td> 
                        <td class='action-buttons'>
                            <button class='edit-btn' onclick='openForm(\"edit\", " . $row["product_ID"] . ")'>Edit</button>
                            <button class='delete-btn' onclick='deleteProduct(" . $row["product_ID"] . ")'>Delete</button>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='11'>No data available</td></tr>";
        }

        $conn->close();
        ?>
    </tbody>
</table>
        </div>
       

        
        <div class="overlay" id="overlay"></div>
        <div class="form-popup" id="productForm">
            <span class="close" onclick="closeForm()">&times;</span>
            <h2>Add New Product</h2>
            <form id="addProductForm" action="add_product.php" method="post">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" required>
                
                <label for="product_stocks">Product Stocks:</label>
                <input type="text" id="product_stocks" name="product_stocks" required>
                
                <label for="product_price">Product Price:</label> 
                <input type="text" id="product_price" name="product_price" required> 

                <label for="product_description">Product Description:</label>
                <input type="text" id="product_description" name="product_description" required>

                <label for="date_product_purchase">Date of Purchase:</label>
                <input type="date" id="date_product_purchase" name="date_product_purchase" required>
                
                <button type="submit">Add Product</button>
            </form>
        </div>



         
        <div class="form-popup" id="editProductForm">
    <span class="close" onclick="closeForm()">&times;</span>
    <h2>Edit Product</h2>
    <form id="editProductDetails" action="edit_product.php" method="post">
        <input type="hidden" id="edit_product_ID" name="product_ID">
        
        <label for="edit_product_name">Product Name:</label>
        <input type="text" id="edit_product_name" name="product_name" required>
        
        <label for="edit_product_stocks">Product Stocks:</label>
        <input type="text" id="edit_product_stocks" name="product_stocks" required>
        
        <label for="edit_product_status">Product Status:</label>
        <select id="edit_product_status" name="product_status" class="styled-select" required>
            <option value="Available">Available</option>
            <option value="Not Available">Not Available</option>
        </select>
        
        <button type="submit">Update Product</button>
    </form>
</div>

    </section>

    <section id="about" class="about">
        <h1>About KEWINNOSSH</h1>
        <p>KEWINNOSSH is a <span class="highlight">dynamic group</span> of Bachelor of Science in Information Technology (BSIT) students from Bataan Heroes College. Our team comprises five passionate individuals: Kent Yao, Erwin Flores, Glenn Steven Magsino, Norle Nabos, and Joshua Dela Cruz. Each member brings unique skills and a shared vision to our projects.</p>
        <p>At KEWINNOSSH, we are committed to pushing the boundaries of technology and innovation. Our collective expertise includes software development, web design, system analysis, and IT solutions. We strive for excellence in our academic endeavors and seek to apply our knowledge to tackle real-world challenges.</p>
        <p>Our journey is fueled by a mutual passion for learning and creating impactful technological solutions. As we continue to grow and evolve, we remain focused on our goal of making a significant contribution to the tech industry and beyond.</p>
    </section>
    
    <section id="contact" class="contact">
    <h1>Contact Us</h1>
  
    <div class="Link">
        <div class="a1">
           <p><a href="https://www.facebook.com/glenn.magsino.121" target="_blank"><i class="fa-brands fa-facebook-f"></i> Facebook</a></p>
         </div>
        <div class="a2">
           <p><a href="https://www.facebook.com/luikent.y" target="_blank"><i class="fa-brands fa-facebook-f"></i> Facebook</a></p>
         </div>
        <div class="a3">
           <p><a href="https://www.facebook.com/erwin.flores.7399786" target="_blank"><i class="fa-brands fa-facebook-f"></i> Facebook</a></p>
         </div>
        <div class="a4">
           <p><a href="https://www.facebook.com/nabos.norle.5" target="_blank"><i class="fa-brands fa-facebook-f"></i> Facebook</a></p>
         </div>
        <div class="a5">
           <p><a href="https://www.facebook.com/JSHMNLDLCRZ" target="_blank"><i class="fa-brands fa-facebook-f"></i> Facebook</a></p>
        </div>
    </div>
    <div class="ShowMore">
        <div class="ShowMore-1">
            Show More
        </div>
        <div class="ShowMore-2">
            Show More
        </div>
        <div class="ShowMore-3">
            Show More
        </div>
        <div class="ShowMore-4">
            Show More
        </div>
        <div class="ShowMore-5">
            Show More
        </div>
    </div>
</section>


    <script>
        function openForm(formType, product_ID) {
            if (formType === 'add') {
                document.getElementById("productForm").classList.add("active");
            } else if (formType === 'edit') {
                fetch(`get_product.php?product_ID=${product_ID}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById("edit_product_ID").value = data.product_ID;
                        document.getElementById("edit_product_name").value = data.product_name;
                        document.getElementById("edit_product_stocks").value = data.product_stocks;
                        document.getElementById("edit_product_status").value = data.product_status;
                        document.getElementById("editProductForm").classList.add("active");
                    })
                    .catch(error => console.error('Error fetching product data:', error));
            }
            document.getElementById("overlay").style.display = "block";
        }
        
        function closeForm() {
            document.getElementById("productForm").classList.remove("active");
            document.getElementById("editProductForm").classList.remove("active");
            document.getElementById("overlay").style.display = "none";
        }

        function deleteProduct(product_ID) {
            if (confirm("Are you sure you want to delete this product?")) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_product.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                        location.reload();  
                    } else {
                        alert("An error occurred while deleting the product.");
                    }
                };
                xhr.send("product_ID=" + encodeURIComponent(product_ID));
            }
        }

        const sections = document.querySelectorAll('section');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        sections.forEach(section => {
            observer.observe(section);
        });


        let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.opacity = i === index ? '1' : '0';
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

setInterval(nextSlide, 3000); 

document.addEventListener("DOMContentLoaded", function() {
    showSlide(currentSlide);
});



</script>
</body>
</html>
