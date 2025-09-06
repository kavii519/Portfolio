<?php
// Portfolio configuration
$portfolio_config = [
    'name' => 'Methmini Kavindya Amarasiri',
    'title' => 'Software Engineering Undergraduate | Web Developer',
    'about' => 'I am a passionate software engineering student with hands-on experience in building real-world web applications. I enjoy creating scalable systems and solving complex problems.',
    'email' => 'methminiamarasiri74@gmail.com',
    'github' => 'https://github.com/kavii519',
    'linkedin' => 'https://www.linkedin.com/in/methmini-amarasiri',
    'instagram' => 'https://www.instagram.com/kavi_2519',

 // Skills
'skills' => [
    [
        'Programming Languages' => ['PHP', 'Python', 'Java', 'C++', 'JavaScript', 'C#']
    ],
    [
        'Web Technologies' => ['HTML', 'CSS', 'JavaScript', 'Node.js', 'React.js', 'ASP.NET']
    ],
    [
        'Frameworks' => ['React', 'Angular', 'SpringBoot']
    ],
    [
        'Databases' => ['SQL', 'MySQL']
    ],
    [
        'Tools' => ['Git', 'GitHub','Microsoft Teams','Vs Code', 'Visual Studio', 'Android Studio', 'InteliJ','Netbeans','etc']
    ],
    [
        'Soft Skills' => ['Problem-solving', 'Team collaboration & communication', 'Quick adaptability', 'Attention to detail']
    ]
],

    // Education
    'education' => [
        [
            'degree' => 'BSc (Top-up) in Software Engineering',
            'institute' => 'Cardiff Metropolitan University',
            'year' => '2025 - Present'
        ],
        [
            'degree' => 'Higher Diploma in Computing and Software Engineering',
            'institute' => 'Cardiff Metropolitan University',
            'year' => '2023 - 2025'
        ]
    ],

    // Projects
    'projects' => [
        [
            'title' => 'Pahana Edu Bookshop',
            'description' => 'An educational bookshop platform for students and educators with integrated payment processing and inventory management.',
            'github_url' => 'https://github.com/kavii519/PahanaEduBookshop',
            'image' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'tags' => ['education', 'e-commerce', 'php', 'mysql']
        ],
        [
            'title' => 'Care Compass Hospitals',
            'description' => 'A comprehensive hospital management system for patient care, appointment scheduling, and administrative tasks.',
            'github_url' => 'https://github.com/kavii519/Care_Compass_Hospitals',
            'image' => 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'tags' => ['healthcare', 'management', 'php', 'javascript']
        ],
        [
            'title' => 'The Cosmatic Store',
            'description' => 'An e-commerce platform for cosmetic products with user reviews, recommendations, and secure checkout.',
            'github_url' => 'https://github.com/kavii519/The-Cosmatic-Store',
            'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'tags' => ['e-commerce', 'beauty', 'php', 'payment processing']
        ],
        [
            'title' => 'FitZone Fitness',
            'description' => 'A fitness center management application with class scheduling, member tracking, and progress analytics.',
            'github_url' => 'https://github.com/kavii519/fitzone_fitness',
            'image' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'tags' => ['fitness', 'health', 'php', 'analytics']
        ],
        [
            'title' => 'RexyclOX',
            'description' => 'A recycling and sustainability platform connecting users with local recycling centers and tracking environmental impact.',
            'github_url' => 'https://github.com/kavii519/RexyclOX',
            'image' => 'https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'tags' => ['sustainability', 'environment', 'php', 'maps']
        ],
        [
            'title' => 'SPC Client Application',
            'description' => 'Client application for statistical process control with real-time data visualization and reporting.',
            'github_url' => 'https://github.com/kavii519/SPC_Client_Application',
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'tags' => ['statistics', 'analysis', 'php', 'data visualization']
        ],
        [
            'title' => 'LuxeVista Resort',
            'description' => 'A booking system for luxury resorts with room selection, amenity booking, and concierge services.',
            'github_url' => 'https://github.com/kavii519/LuxeVista_Resort1',
            'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'tags' => ['hospitality', 'booking', 'php', 'reservation system']
        ]
    ]
];

// Handle contact form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $errors = [];
    if (empty($name)) $errors[] = 'Name is required';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($message)) $errors[] = 'Message is required';

    if (empty($errors)) {
        $success_message = "Thank you for your message, $name! I will get back to you soon.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $portfolio_config['name']; ?> - Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #4361ee;
      --secondary-color: #3a56d4;
      --accent-color: #f72585;
      --success-color: #4cc9f0;
      --warning-color: #f9c74f;
      --dark-color: #1a1a2e;
      --light-color: #f8f9fa;
      --gray-color: #6c757d;
      --text-dark: #333;
      --text-light: #f8f9fa;
      --bg-dark: #16213e;
      --bg-light: #ffffff;
      --card-dark: #1e2a4a;
      --card-light: #ffffff;
      --transition: all 0.3s ease;
    }

    .dark-mode {
      --primary-color: #5a73fc;
      --secondary-color: #4a63e3;
      --text-dark: #f8f9fa;
      --text-light: #e9ecef;
      --bg-dark: #0f172a;
      --bg-light: #1e293b;
      --card-dark: #1e2a4a;
      --card-light: #1e2a4a;
    }

    * { 
      margin: 0; 
      padding: 0; 
      box-sizing: border-box; 
    }

    body {
      font-family: 'Times New Roman', Times, serif;
      background: var(--bg-light);
      color: var(--text-dark);
      line-height: 1.6;
      transition: var(--transition);
      overflow-x: hidden;
    }

    .dark-mode body {
      background: var(--bg-dark);
      color: var(--text-light);
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    /* Navigation */
    nav {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      z-index: 1000;
      padding: 1rem 0;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: var(--transition);
    }

    .dark-mode nav {
      background: rgba(30, 42, 74, 0.95);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--primary-color);
      text-decoration: none;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
    }

    .nav-links a {
      color: var(--text-dark);
      text-decoration: none;
      font-weight: 500;
      transition: var(--transition);
      position: relative;
    }

    .dark-mode .nav-links a {
      color: var(--text-light);
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary-color);
      transition: var(--transition);
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .theme-toggle {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1.5rem;
      color: var(--text-dark);
      transition: var(--transition);
      z-index: 1001;
    }

    .dark-mode .theme-toggle {
      color: var(--text-light);
    }

    /* Hero Section */
    header {
      padding: 10rem 0 6rem;
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,224C672,235,768,181,864,160C960,139,1056,149,1152,165.3C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
      background-size: cover;
      background-position: bottom;
    }

    .profile-container {
      position: relative;
      z-index: 1;
    }

    .profile-img-container {
      position: relative;
      display: inline-block;
      margin-bottom: 2rem;
    }

    .profile-img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      transition: var(--transition);
    }

    .profile-img-container::after {
      content: '';
      position: absolute;
      top: -10px;
      left: -10px;
      right: -10px;
      bottom: -10px;
      border-radius: 50%;
      border: 2px solid rgba(255, 255, 255, 0.2);
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      50% {
        transform: scale(1.05);
        opacity: 0.7;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    header h1 {
      font-size: 3.5rem;
      margin-bottom: 0.5rem;
      font-weight: 700;
      letter-spacing: -0.5px;
    }

    header p {
      font-size: 1.5rem;
      margin-bottom: 2.5rem;
      opacity: 0.9;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .header-buttons {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .cta-button {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 14px 32px;
      background: white;
      color: var(--primary-color);
      text-decoration: none;
      border-radius: 50px;
      font-weight: 600;
      transition: var(--transition);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .cta-button.secondary {
      background: transparent;
      color: white;
      border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .cta-button:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .cta-button.secondary:hover {
      background: rgba(255, 255, 255, 0.1);
    }

    .social-header {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-top: 2.5rem;
    }

    .social-header a {
      width: 45px;
      height: 45px;
      background: rgba(255, 255, 255, 0.1);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      transition: var(--transition);
    }

    .social-header a:hover {
      background: white;
      color: var(--primary-color);
      transform: translateY(-3px);
    }

    /* Floating elements */
    .floating-element {
      position: absolute;
      border-radius: 50%;
      opacity: 0.1;
      z-index: 0;
    }

    .float-1 {
      width: 100px;
      height: 100px;
      background: white;
      top: 20%;
      left: 10%;
      animation: float 15s infinite ease-in-out;
    }

    .float-2 {
      width: 150px;
      height: 150px;
      background: var(--accent-color);
      bottom: 10%;
      right: 15%;
      animation: float 18s infinite ease-in-out reverse;
    }

    .float-3 {
      width: 70px;
      height: 70px;
      background: var(--success-color);
      top: 40%;
      right: 20%;
      animation: float 12s infinite ease-in-out;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0) rotate(0deg);
      }
      33% {
        transform: translateY(-20px) rotate(10deg);
      }
      66% {
        transform: translateY(20px) rotate(-10deg);
      }
    }

    /* Section Styling */
    section {
      padding: 5rem 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 3rem;
      position: relative;
      font-size: 2.5rem;
    }

    .section-title::after {
      content: '';
      display: block;
      width: 80px;
      height: 4px;
      background: var(--primary-color);
      margin: 10px auto;
      border-radius: 2px;
    }

    /* About Section */
    .about {
      background: var(--bg-light);
      transition: var(--transition);
    }

    .dark-mode .about {
      background: var(--bg-dark);
    }

    .about-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
    }

    .about-text {
      font-size: 1.1rem;
      line-height: 1.8;
    }

    /* Skills Section */
    .skills {
      background: #f8f9fa;
      padding: 5rem 0;
      transition: all 0.3s ease;
    }

    .dark-mode .skills {
      background: #1a1a2e;
    }

    .skills-container {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }

    .skill-category {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      padding: 2rem;
      width: 100%;
      max-width: 350px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .dark-mode .skill-category {
      background: rgba(30, 42, 74, 0.95);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .skill-category:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .dark-mode .skill-category:hover {
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    .skill-category h4 {
      font-size: 1.4rem;
      margin-bottom: 1.5rem;
      color: #4361ee;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .dark-mode .skill-category h4 {
      color: #5a73fc;
    }

    .skill-category h4 i {
      font-size: 1.2rem;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(67, 97, 238, 0.1);
      border-radius: 50%;
      color: #4361ee;
    }

    .dark-mode .skill-category h4 i {
      background: rgba(90, 115, 252, 0.15);
      color: #5a73fc;
    }

    .skill-items {
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem;
    }

    .skill {
      background: linear-gradient(135deg, #4361ee, #3a56d4);
      color: white;
      padding: 8px 16px;
      border-radius: 50px;
      font-size: 0.9rem;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
      cursor: default;
    }

    .dark-mode .skill {
      background: linear-gradient(135deg, #5a73fc, #4a63e3);
      box-shadow: 0 4px 10px rgba(90, 115, 252, 0.3);
    }

    .skill:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
    }

    .dark-mode .skill:hover {
      box-shadow: 0 6px 15px rgba(90, 115, 252, 0.4);
    }

    /* Different colors for each category */
    .skill-category:nth-child(1) h4 { color: #4361ee; }
    .skill-category:nth-child(2) h4 { color: #f27121; }
    .skill-category:nth-child(3) h4 { color: #2a9d8f; }
    .skill-category:nth-child(4) h4 { color: #e76f51; }
    .skill-category:nth-child(5) h4 { color: #9b59b6; }

    .dark-mode .skill-category:nth-child(1) h4 { color: #5a73fc; }
    .dark-mode .skill-category:nth-child(2) h4 { color: #f9a26c; }
    .dark-mode .skill-category:nth-child(3) h4 { color: #4cc9f0; }
    .dark-mode .skill-category:nth-child(4) h4 { color: #ff9b85; }
    .dark-mode .skill-category:nth-child(5) h4 { color: #b57edc; }

    .skill-category:nth-child(1) .skill { background: linear-gradient(135deg, #4361ee, #3a56d4); }
    .skill-category:nth-child(2) .skill { background: linear-gradient(135deg, #f27121, #e94057); }
    .skill-category:nth-child(3) .skill { background: linear-gradient(135deg, #2a9d8f, #1d7874); }
    .skill-category:nth-child(4) .skill { background: linear-gradient(135deg, #e76f51, #e63946); }
    .skill-category:nth-child(5) .skill { background: linear-gradient(135deg, #9b59b6, #8e44ad); }

    .dark-mode .skill-category:nth-child(1) .skill { background: linear-gradient(135deg, #5a73fc, #4a63e3); }
    .dark-mode .skill-category:nth-child(2) .skill { background: linear-gradient(135deg, #f9a26c, #f27121); }
    .dark-mode .skill-category:nth-child(3) .skill { background: linear-gradient(135deg, #4cc9f0, #3a56d4); }
    .dark-mode .skill-category:nth-child(4) .skill { background: linear-gradient(135deg, #ff9b85, #e76f51); }
    .dark-mode .skill-category:nth-child(5) .skill { background: linear-gradient(135deg, #b57edc, #9b59b6); }

    /* Education Section */
    .education {
      background: var(--bg-light);
      transition: var(--transition);
    }

    .dark-mode .education {
      background: var(--bg-dark);
    }

    .education-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }

    .education-item {
      background: var(--card-light);
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: var(--transition);
    }

    .dark-mode .education-item {
      background: var(--card-dark);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .education-item:hover {
      transform: translateY(-5px);
    }

    .education-degree {
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
    }

    .education-institute {
      font-weight: 500;
      margin-bottom: 0.5rem;
    }

    .education-year {
      color: var(--accent-color);
      font-weight: 500;
    }

    /* Projects Section */
    .projects {
      background: #f8f9fa;
      transition: var(--transition);
    }

    .dark-mode .projects {
      background: #1a1a2e;
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 2.5rem;
    }

    .project-card {
      background: var(--card-light);
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: var(--transition);
      position: relative;
    }

    .dark-mode .project-card {
      background: var(--card-dark);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .project-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .project-content {
      padding: 1.5rem;
    }

    .project-title {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: var(--primary-color);
    }

    .project-description {
      margin-bottom: 1.5rem;
      color: var(--text-dark);
    }

    .dark-mode .project-description {
      color: var(--text-light);
    }

    .project-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 1.5rem;
    }

    .project-tag {
      background: rgba(67, 97, 238, 0.1);
      color: var(--primary-color);
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 500;
    }

    .project-link {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 600;
      transition: var(--transition);
    }

    .project-link:hover {
      gap: 0.8rem;
    }

    /* Contact Section */
    .contact {
      background: var(--bg-light);
      transition: var(--transition);
    }

    .dark-mode .contact {
      background: var(--bg-dark);
    }

    .contact-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .contact-icon {
      width: 50px;
      height: 50px;
      background: var(--primary-color);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
    }

    .contact-form {
      background: var(--card-light);
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: var(--transition);
    }

    .dark-mode .contact-form {
      background: var(--card-dark);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 500;
    }

    .form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1rem;
      transition: var(--transition);
      background: var(--bg-light);
      color: var(--text-dark);
    }

    .dark-mode .form-control {
      background: var(--bg-dark);
      color: var(--text-light);
      border-color: #444;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
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
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 600;
      transition: var(--transition);
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .btn:hover {
      background: var(--secondary-color);
      gap: 0.8rem;
    }

    .alert {
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 1.5rem;
      font-weight: 500;
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

    /* Footer */
    footer {
      background: var(--dark-color);
      color: white;
      padding: 3rem 0 2rem;
      text-align: center;
    }

    .social-links {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .social-link {
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.1);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      transition: var(--transition);
    }

    .social-link:hover {
      background: var(--primary-color);
      transform: translateY(-5px);
    }

    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: var(--primary-color);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      text-decoration: none;
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      z-index: 999;
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }

    .back-to-top:hover {
      background: var(--secondary-color);
      transform: translateY(-5px);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
      .about-content,
      .contact-container {
        grid-template-columns: 1fr;
        gap: 2rem;
      }
      
      header h1 {
        font-size: 2.5rem;
      }
      
      header p {
        font-size: 1.2rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
    }

    @media (max-width: 768px) {
      .nav-links {
        position: fixed;
        top: 70px;
        left: -100%;
        width: 80%;
        height: calc(100vh - 70px);
        background: var(--bg-light);
        flex-direction: column;
        padding: 2rem;
        gap: 1.5rem;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        transition: 0.4s;
        z-index: 999;
      }
      
      .dark-mode .nav-links {
        background: var(--bg-dark);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
      }
      
      .nav-links.active {
        left: 0;
      }
      
      .projects-grid {
        grid-template-columns: 1fr;
      }
      
      header {
        padding: 7rem 0 4rem;
      }
      
      header h1 {
        font-size: 2rem;
      }
      
      .profile-img {
        width: 150px;
        height: 150px;
      }
      
      .skills-container {
        gap: 1.5rem;
      }
      
      .skill-category {
        max-width: 100%;
        padding: 1.5rem;
      }
      
      .skill-category h4 {
        font-size: 1.2rem;
      }
      
      .education-container {
        grid-template-columns: 1fr;
      }
      
      .contact-container {
        grid-template-columns: 1fr;
      }
      
      .social-header {
        flex-wrap: wrap;
      }
    }

    @media (max-width: 480px) {
      header h1 {
        font-size: 1.8rem;
      }
      
      header p {
        font-size: 1rem;
      }
      
      .cta-button {
        padding: 12px 24px;
        font-size: 0.9rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
      
      .project-card {
        margin-bottom: 1.5rem;
      }
      
      .contact-item {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
      }
    }

    /* Hamburger Menu */
    .hamburger {
      display: none;
      flex-direction: column;
      justify-content: space-around;
      width: 30px;
      height: 25px;
      background: transparent;
      border: none;
      cursor: pointer;
      padding: 0;
      z-index: 1001;
    }

    .hamburger span {
      width: 100%;
      height: 3px;
      background: var(--text-dark);
      border-radius: 3px;
      transition: var(--transition);
    }

    .dark-mode .hamburger span {
      background: var(--text-light);
    }

    .hamburger.active span:nth-child(1) {
      transform: rotate(-45deg) translate(-5px, 6px);
    }

    .hamburger.active span:nth-child(2) {
      opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
      transform: rotate(45deg) translate(-5px, -6px);
    }

    @media (max-width: 768px) {
      .hamburger {
        display: flex;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav>
    <div class="container nav-container">
      <div class="nav-links" id="navLinks">
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#education">Education</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
      </div>
      <button class="theme-toggle" id="themeToggle">
        <i class="fas fa-moon"></i>
      </button>
      <button class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav>

  <!-- Hero Section -->
  <header>
    <div class="container profile-container">
      <div class="profile-img-container">
        <img src="profile.jpg" alt="Profile" class="profile-img" onerror="this.src='https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'">
      </div>
      <h1 data-aos="fade-up"><?php echo $portfolio_config['name']; ?></h1>
      <p data-aos="fade-up" data-aos-delay="100"><?php echo $portfolio_config['title']; ?></p>
      <div class="header-buttons">
        <a href="#projects" class="cta-button" data-aos="fade-up" data-aos-delay="200">View My Work</a>
        <a href="#contact" class="cta-button secondary" data-aos="fade-up" data-aos-delay="300">Contact Me</a>
      </div>
      <div class="social-header">
        <a href="<?php echo $portfolio_config['github']; ?>" target="_blank"><i class="fab fa-github"></i></a>
        <a href="<?php echo $portfolio_config['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="mailto:<?php echo $portfolio_config['email']; ?>"><i class="fas fa-envelope"></i></a>
        <a href="<?php echo $portfolio_config['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="floating-element float-1"></div>
    <div class="floating-element float-2"></div>
    <div class="floating-element float-3"></div>
  </header>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">About Me</h2>
      <div class="about-content">
        <div class="about-text" data-aos="fade-right">
          <p><?php echo $portfolio_config['about']; ?></p>
          <p>I'm currently pursuing my degree in Software Engineering while working on various web development projects. My goal is to become a full-stack developer and contribute to innovative solutions that make a positive impact.</p>
        </div>
        <div data-aos="fade-left" data-aos-delay="200">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
               alt="Coding" style="width: 100%; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="skills">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">My Skills</h2>
      <div class="skills-container">
        <?php foreach ($portfolio_config['skills'] as $categoryArray): ?>
          <?php foreach ($categoryArray as $category => $skills): ?>
            <div class="skill-category" data-aos="fade-up">
              <h4>
                <?php 
                  // Add icons based on category
                  if ($category === 'Programming Languages') echo '<i class="fas fa-code"></i> ';
                  elseif ($category === 'Frameworks') echo '<i class="fas fa-cubes"></i> ';
                  elseif ($category === 'Web Technologies') echo '<i class="fas fa-globe"></i> ';
                  elseif ($category === 'Databases') echo '<i class="fas fa-database"></i> ';
                  elseif ($category === 'Tools') echo '<i class="fas fa-tools"></i> ';
                  elseif ($category === 'Soft Skills') echo '<i class="fas fa-users"></i> ';
                ?>
                <?php echo $category; ?>
              </h4>
              <div class="skill-items">
                <?php foreach ($skills as $skill): ?>
                  <span class="skill" data-aos="zoom-in" data-aos-delay="<?php echo rand(100, 500); ?>">
                    <?php echo $skill; ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Education Section -->
  <section id="education" class="education">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Education</h2>
      <div class="education-container">
        <?php foreach ($portfolio_config['education'] as $edu): ?>
          <div class="education-item" data-aos="fade-up" data-aos-delay="<?php echo rand(100, 300); ?>">
            <h3 class="education-degree"><?php echo $edu['degree']; ?></h3>
            <p class="education-institute"><?php echo $edu['institute']; ?></p>
            <p class="education-year"><?php echo $edu['year']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">My Projects</h2>
      <div class="projects-grid">
        <?php foreach ($portfolio_config['projects'] as $index => $project): ?>
        <div class="project-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
          <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="project-image">
          <div class="project-content">
            <h3 class="project-title"><?php echo $project['title']; ?></h3>
            <p class="project-description"><?php echo $project['description']; ?></p>
            <div class="project-tags">
              <?php foreach ($project['tags'] as $tag): ?>
                <span class="project-tag"><?php echo $tag; ?></span>
              <?php endforeach; ?>
            </div>
            <a href="<?php echo $project['github_url']; ?>" target="_blank" class="project-link">
              View on GitHub <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Get In Touch</h2>
      <div class="contact-container">
        <div class="contact-info" data-aos="fade-right">
          <div class="contact-item">
            <div class="contact-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div>
              <h3>Email</h3>
              <p><?php echo $portfolio_config['email']; ?></p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">
              <i class="fab fa-github"></i>
            </div>
            <div>
              <h3>GitHub</h3>
              <p><?php echo $portfolio_config['github']; ?></p>
            </div>
          </div>
            <div class="contact-item">
            <div class="contact-icon">
              <i class="fab fa-linkedin-in"></i>
            </div>
            <div>
              <h3>LinkedIn</h3>
              <p><?php echo $portfolio_config['linkedin']; ?></p>
            </div>
          </div>
        </div>
        <div class="contact-form" data-aos="fade-left" data-aos-delay="200">
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
          
          <form method="POST">
            <div class="form-group">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Your Email</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="message" class="form-label">Your Message</label>
              <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" name="contact" class="btn">
              Send Message <i class="fas fa-paper-plane"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="social-links">
        <a href="<?php echo $portfolio_config['github']; ?>" target="_blank" class="social-link">
          <i class="fab fa-github"></i>
        </a>
        <a href="<?php echo $portfolio_config['linkedin']; ?>" target="_blank" class="social-link">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="mailto:<?php echo $portfolio_config['email']; ?>" class="social-link">
          <i class="fas fa-envelope"></i>
        </a>
        <a href="<?php echo $portfolio_config['instagram']; ?>" class="social-link" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
      <p>&copy; <?php echo date('Y'); ?> <?php echo $portfolio_config['name']; ?>. All rights reserved.</p>
    </div>
  </footer>

  <a href="#" class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // Initialize AOS
    AOS.init({
      duration: 800,
      offset: 100,
      once: true
    });

    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = themeToggle.querySelector('i');
    
    // Check for saved theme preference or respect OS preference
    if (localStorage.getItem('theme') === 'dark' || 
        (window.matchMedia('(prefers-color-scheme: dark)').matches && !localStorage.getItem('theme'))) {
      document.body.classList.add('dark-mode');
      themeIcon.classList.remove('fa-moon');
      themeIcon.classList.add('fa-sun');
    }
    
    themeToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
      } else {
        localStorage.setItem('theme', 'light');
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
      }
    });

    // Back to top button
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    });
    
    backToTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Mobile menu toggle
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');
    
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      hamburger.classList.toggle('active');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        hamburger.classList.remove('active');
      });
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });
  </script>
</body>
</html>