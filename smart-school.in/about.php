<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Eduflow - School Management System</title>
    <?php include 'header.php'; ?>
    <style>
        /* Custom animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        /* Modern styling */
        .about-hero {
            background: linear-gradient(135deg, #0061f2 0%, #00c6f9 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff20" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            opacity: 0.1;
        }

        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin: 20px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #0061f2 0%, #00c6f9 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .feature-icon i {
            color: white;
            font-size: 24px;
        }

        .stats-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .stat-card {
            text-align: center;
            padding: 30px;
        }

        .stat-number {
            font-size: 48px;
            font-weight: bold;
            color: #0061f2;
            margin-bottom: 10px;
        }

        .timeline {
            position: relative;
            padding: 60px 0;
        }

        .timeline-item {
            padding: 20px;
            border-left: 3px solid #0061f2;
            margin-left: 20px;
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 0;
            width: 20px;
            height: 20px;
            background: #0061f2;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

<!-- Hero Section -->
<section class="about-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 fade-in" style="animation-delay: 0.3s">
                <h1 class="display-4 mb-4">About Eduflow</h1>
                <p class="lead mb-4">Founded in 2024, Eduflow is revolutionizing education management with cutting-edge technology solutions that empower schools to achieve excellence.</p>
                <a href="#" class="btn btn-light btn-lg">Learn More</a>
            </div>
            <div class="col-md-6 text-center fade-in" style="animation-delay: 0.6s">
                <img src="assets/admin/assets/img/about-illustration.svg" alt="About Eduflow" class="img-fluid float-animation" style="max-width: 400px;">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5 fade-in">
                <h2 class="display-5">Why Choose Eduflow?</h2>
                <p class="lead text-muted">Transforming education management with innovative solutions</p>
            </div>
        </div>
        <div class="row">
            <?php
            $features = [
                ['icon' => 'fa-graduation-cap', 'title' => 'Smart Learning', 'description' => 'Advanced learning management system that adapts to student needs'],
                ['icon' => 'fa-users', 'title' => 'Community Focused', 'description' => 'Building stronger educational communities through technology'],
                ['icon' => 'fa-chart-line', 'title' => 'Data Driven', 'description' => 'Make informed decisions with comprehensive analytics'],
                ['icon' => 'fa-shield-alt', 'title' => 'Secure Platform', 'description' => 'Enterprise-grade security for your institution\'s data']
            ];

            foreach ($features as $index => $feature): ?>
                <div class="col-md-6 col-lg-3 fade-in" style="animation-delay: <?= ($index * 0.2) ?>s">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas <?= $feature['icon'] ?>"></i>
                        </div>
                        <h4><?= $feature['title'] ?></h4>
                        <p class="text-muted"><?= $feature['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <?php
            $stats = [
                ['number' => '1000+', 'label' => 'Schools'],
                ['number' => '50,000+', 'label' => 'Students'],
                ['number' => '5,000+', 'label' => 'Teachers'],
                ['number' => '98%', 'label' => 'Satisfaction']
            ];

            foreach ($stats as $index => $stat): ?>
                <div class="col-md-3 fade-in" style="animation-delay: <?= ($index * 0.2) ?>s">
                    <div class="stat-card">
                        <div class="stat-number"><?= $stat['number'] ?></div>
                        <div class="text-muted"><?= $stat['label'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="timeline">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5 fade-in">
                <h2 class="display-5">Our Journey</h2>
                <p class="lead text-muted">From inception to innovation</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <?php
                $timeline = [
                    ['year' => '2024', 'title' => 'Foundation', 'description' => 'Eduflow was founded with a vision to transform education management'],
                    ['year' => '2024', 'title' => 'First Release', 'description' => 'Launched our core school management system'],
                    ['year' => '2024', 'title' => 'Mobile App', 'description' => 'Introduced mobile applications for students and teachers'],
                    ['year' => '2024', 'title' => 'Global Expansion', 'description' => 'Expanded our services to multiple countries']
                ];

                foreach ($timeline as $index => $item): ?>
                    <div class="timeline-item fade-in" style="animation-delay: <?= ($index * 0.3) ?>s">
                        <h5><?= $item['year'] ?> - <?= $item['title'] ?></h5>
                        <p class="text-muted"><?= $item['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<!-- Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            observer.observe(element);
        });
    });
</script>
</body>
</html>