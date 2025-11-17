<?php
require '../config/db.php';
$id= $_POST['id'];

$view=$conn->query("SELECT * FROM portfolio WHERE id = $id")->fetch_assoc();
?>



<?php
include 'layouts/header.php';
?>
    <style>
        body {
            background-color: #f8fafc;
            font-family: "Nunito", sans-serif;
        }

        .sidebar {
            background: linear-gradient(180deg, #4e73df 0%, #224abe 100%);
            min-height: 100vh;
            color: white;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.85);
            font-weight: 500;
            border-radius: 10px;
            margin: 4px 8px;
            transition: 0.3s;
        }

        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        .sidebar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
            font-size: 1.25rem;
        }

        .topbar {
            background-color: #ffffff;
            border-bottom: 1px solid #e3e6f0;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .topbar .nav-link {
            color: #5a5c69;
        }

        .topbar .nav-link:hover {
            color: #4e73df;
        }

        .content-wrapper {
            padding: 30px;
            background: #f9fbfd;
            min-height: 100vh;
        }

        .search-box input {
            border-radius: 25px;
            border: 1px solid #d1d3e2;
            padding: 8px 15px;
        }

        #sidebarToggle {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
        }

        .sidebar-brand-icon {
            font-size: 1.6rem;
            margin-right: 10px;
        }
    </style>

    <!-- Page Content -->
    
        
            <div class="container-fluid mt-4">
    <?php if ($view): ?>
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="fas fa-envelope"></i> Contact #<?= htmlspecialchars($view['id']) ?></h4>
            </div>
            <div class="card-body p-4">
                <div class="mb-3">
                    <h5 class="text-muted"><i class="fas fa-user"></i> Email:</h5>
                    <p class="fs-5 fw-semibold"><?= htmlspecialchars($view['email']) ?></p>
                </div>
<div class="mb-3">
                    <h5 class="text-muted"><i class="fas fa-person"></i> Ismi:</h5>
                    <p class="fs-5"><?= nl2br(htmlspecialchars($view['name'])) ?></p>
                </div><div class="mb-3">
                    <h5 class="text-muted"><i class="fas fa-hand"></i> Xabar mavzusi:</h5>
                    <p class="fs-5"><?= nl2br(htmlspecialchars($view['theme'])) ?></p>
                </div>
                <div class="mb-3">
                    <h5 class="text-muted"><i class="fas fa-comment-dots"></i> Xabar:</h5>
                    <p class="fs-5"><?= nl2br(htmlspecialchars($view['message'])) ?></p>
                </div>

                <a href="tables.php" class="btn btn-secondary mt-3">
                    <i class="fas fa-arrow-left"></i> Orqaga qaytish
                </a>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-warning text-center mt-5">
            <i class="fas fa-exclamation-triangle"></i> Bunday ID bilan xabar topilmadi.
        </div>
    <?php endif; ?>
</div>
