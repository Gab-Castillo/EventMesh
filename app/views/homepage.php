<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD · Home</title>
</head>
<body class="min-h-screen">

<?php include 'navigation.php'; ?>

<div style="min-height:100vh;display:flex;align-items:center;justify-content:center;padding-top:4rem;">
  <div style="max-width:520px;width:100%;padding:0 1.5rem;">

    <!-- Hero Card -->
    <div style="position:relative;overflow:hidden;border-radius:1.5rem;padding:3rem 2.5rem;margin-bottom:1.5rem;"
         class="bg-white dark:bg-zinc-900 shadow-xl dark:shadow-indigo-950/40"
         style="border:1px solid rgba(99,102,241,0.12);">

      <!-- decorative blob -->
      <div style="position:absolute;top:-60px;right:-60px;width:200px;height:200px;border-radius:50%;background:radial-gradient(circle,rgba(99,102,241,0.18),transparent 70%);pointer-events:none;"></div>

      <p class="brand-font" style="font-size:0.75rem;letter-spacing:0.15em;text-transform:uppercase;color:#6366f1;margin-bottom:0.75rem;">Management System</p>
      <h1 class="brand-font" style="font-size:2.5rem;font-weight:800;line-height:1.1;margin-bottom:1rem;" class="text-zinc-900 dark:text-white">
        <span style="color:#18181b;" class="dark-text-swap">User</span><br>
        <span style="color:#6366f1;">Records</span>
      </h1>
      <p style="font-size:0.9rem;line-height:1.6;margin-bottom:2rem;color:#71717a;" class="dark:text-zinc-400">
        Built with PHP, MySQL &amp; Tailwind CSS. Manage your user data with ease.
      </p>

      <div style="display:flex;gap:0.75rem;flex-wrap:wrap;">
        <a href="index" style="display:inline-flex;align-items:center;gap:6px;padding:10px 22px;border-radius:8px;background:#6366f1;color:#fff;font-size:0.875rem;font-weight:500;letter-spacing:0.02em;text-decoration:none;transition:all 0.2s;border:none;"
           onmouseover="this.style.background='#4f46e5'" onmouseout="this.style.background='#6366f1'">
          View Records →
        </a>
        <a href="insert" style="display:inline-flex;align-items:center;gap:6px;padding:10px 22px;border-radius:8px;background:transparent;color:#6366f1;font-size:0.875rem;font-weight:500;letter-spacing:0.02em;text-decoration:none;transition:all 0.2s;border:1.5px solid #6366f1;"
           onmouseover="this.style.background='rgba(99,102,241,0.08)'" onmouseout="this.style.background='transparent'">
          + Add Record
        </a>
      </div>
    </div>

    <!-- Stats Row -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;">
      <?php
        include 'connection.php';
      $count = $pdo->query('SELECT COUNT(*) FROM account')->fetchColumn();
      ?>
      <div style="padding:1.25rem 1.5rem;border-radius:1rem;border:1px solid rgba(99,102,241,0.12);" class="bg-white dark:bg-zinc-900">
        <p style="font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;color:#a1a1aa;margin-bottom:0.25rem;">Total Users</p>
        <p class="brand-font" style="font-size:2rem;font-weight:800;color:#6366f1;"><?= $count ?></p>
      </div>
      <div style="padding:1.25rem 1.5rem;border-radius:1rem;border:1px solid rgba(99,102,241,0.12);" class="bg-white dark:bg-zinc-900">
        <p style="font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;color:#a1a1aa;margin-bottom:0.25rem;">Status</p>
        <p style="font-size:0.9rem;font-weight:500;color:#22c55e;margin-top:0.35rem;">● Online</p>
      </div>
    </div>

  </div>
</div>

<script>
  // Fix text colors for dark mode inline styles
  document.querySelectorAll('.dark-text-swap').forEach(el => {
    const update = () => {
      el.style.color = document.documentElement.classList.contains('dark') ? '#f4f4f5' : '#18181b';
    };
    update();
    new MutationObserver(update).observe(document.documentElement, {attributes:true, attributeFilter:['class']});
  });
</script>

</body>
</html>
