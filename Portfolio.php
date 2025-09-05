<?php
// Portfolio configuration - update with your information
$portfolio_config = [
    'name' => 'Your Name',
    'title' => 'Web Developer & Designer',
    'about' => 'I am a passionate developer with experience in creating web applications. I enjoy solving complex problems and building user-friendly interfaces.',
    'email' => 'your.email@example.com',
    'github' => 'https://github.com/kavii519',
    'projects' => [
        [
            'title' => 'Pahana Edu Bookshop',
            'description' => 'An educational bookshop platform for students and educators.',
            'github_url' => 'https://github.com/kavii519/PahanaEduBookshop',
            'tags' => ['education', 'e-commerce', 'php']
        ],
        [
            'title' => 'Care Compass Hospitals',
            'description' => 'A hospital management system for patient care and administrative tasks.',
            'github_url' => 'https://github.com/kavii519/Care_Compass_Hospitals',
            'tags' => ['healthcare', 'management', 'php']
        ],
        [
            'title' => 'The Cosmatic Store',
            'description' => 'An e-commerce platform for cosmetic products.',
            'github_url' => 'https://github.com/kavii519/The-Cosmatic-Store',
            'tags' => ['e-commerce', 'beauty', 'php']
        ],
        [
            'title' => 'FitZone Fitness',
            'description' => 'A fitness center management application.',
            'github_url' => 'https://github.com/kavii519/fitzone_fitness',
            'tags' => ['fitness', 'health', 'php']
        ],
        [
            'title' => 'RexyclOX',
            'description' => 'A recycling and sustainability platform.',
            'github_url' => 'https://github.com/kavii519/RexyclOX',
            'tags' => ['sustainability', 'environment', 'php']
        ],
        [
            'title' => 'SPC Client Application',
            'description' => 'Client application for statistical process control.',
            'github_url' => 'https://github.com/kavii519/SPC_Client_Application',
            'tags' => ['statistics', 'analysis', 'php']
        ],
        [
            'title' => 'LuxeVista Resort',
            'description' => 'A booking system for luxury resorts.',
            'github_url' => 'https://github.com/kavii519/LuxeVista_Resort1',
            'tags' => ['hospitality', 'booking', 'php']
        ]
    ]
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Basic validation
    $errors = [];
    if (empty($name)) $errors[] = 'Name is required';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($message)) $errors[] = 'Message is required';
    
    if (empty($errors)) {
        // In a real application, you would send an email here
        $success_message = "Thank you for your message, $name! I'll get back to you soon.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $portfolio_config['name']; ?> - Portfolio</title>
    <style>
        :root {
            --primary-color: #4a6cf7;
            --secondary-color: #6f42c1;
            --dark-color: #1d2144;
            --light-color: #f8f9fa;
            --gray-color: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f8ff;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem 0;
            text-align: center;
        }
        
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid rgba(255, 255, 255, 0.3);
            margin-bottom: 1rem;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        
        h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--dark-color);
        }
        
        h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        section {
            padding: 3rem 0;
        }
        
        .about {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            margin-top: -50px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            margin: 10px auto;
        }
        
        .projects {
            background-color: var(--light-color);
        }
        
        .filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 2rem;
        }
        
        .filter-btn {
            padding: 8px 16px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .project-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
        }
        
        .project-content {
            padding: 1.5rem;
        }
        
        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 1rem;
        }
        
        .project-tag {
            background: #e9ecef;
            color: var(--gray-color);
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        
        .project-link {
            display: inline-block;
            margin-top: 1rem;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }
        
        .project-link:hover {
            text-decoration: underline;
        }
        
        .contact {
            background: white;
        }
        
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .btn {
            padding: 12px 30px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background: var(--secondary-color);
        }
        
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
        
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        footer {
            background: var(--dark-color);
            color: white;
            text-align: center;
            padding: 2rem 0;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        
        .social-link {
            color: white;
            text-decoration: none;
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <!-- Replace with your actual image path -->
            <img src="https://via.placeholder.com/150" alt="Profile Image" class="profile-img">
            <h1><?php echo $portfolio_config['name']; ?></h1>
            <p><?php echo $portfolio_config['title']; ?></p>
        </div>
    </header>
    
    <section class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <p><?php echo $portfolio_config['about']; ?></p>
        </div>
    </section>
    
    <section class="projects">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            
            <div class="filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="education">Education</button>
                <button class="filter-btn" data-filter="e-commerce">E-Commerce</button>
                <button class="filter-btn" data-filter="healthcare">Healthcare</button>
                <button class="filter-btn" data-filter="fitness">Fitness</button>
                <button class="filter-btn" data-filter="sustainability">Sustainability</button>
                <button class="filter-btn" data-filter="statistics">Statistics</button>
                <button class="filter-btn" data-filter="hospitality">Hospitality</button>
            </div>
            
            <div class="projects-grid">
                <?php foreach ($portfolio_config['projects'] as $project): ?>
                <div class="project-card" data-tags="<?php echo implode(',', $project['tags']); ?>">
                    <div class="project-content">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="project-tag"><?php echo $tag; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo $project['github_url']; ?>" target="_blank" class="project-link">View on GitHub →</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <section class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            
            <?php if (isset($success_message)): ?>
                <div class="alert alert-success"><?php echo $success_message; ?></div>
            <?php endif; ?>
            
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <form class="contact-form" method="POST">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Your Message" required><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
                </div>
                <button type="submit" name="contact" class="btn">Send Message</button>
            </form>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="social-links">
                <a href="<?php echo $portfolio_config['github']; ?>" target="_blank" class="social-link">GitHub</a>
                <a href="mailto:<?php echo $portfolio_config['email']; ?>" class="social-link">Email</a>
            </div>
            <p>&copy; <?php echo date('Y'); ?> <?php echo $portfolio_config['name']; ?>. All rights reserved.</p>
        </div>
    </footer>
    
    <script>
        // Project filtering functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    button.classList.add('active');
                    
                    const filterValue = button.getAttribute('data-filter');
                    
                    projectCards.forEach(card => {
                        if (filterValue === 'all') {
                            card.style.display = 'block';
                        } else {
                            const tags = card.getAttribute('data-tags').split(',');
                            if (tags.includes(filterValue)) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>