<?php
require_once __DIR__ . '/../../config.php';
try {
    $pdo = new PDO(
        'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET,
        DB_USERNAME,
        DB_PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Access</title>
    <?php include __DIR__ . '/auth-styles.php'; ?>
</head>
<body class="font-body" data-theme="light">
  <nav class="t-nav fixed top-0 left-0 right-0 z-50 h-16 flex items-center justify-between px-8 md:px-14 border-b t-border-soft">
    <a href="landingpage" class="font-display font-bold text-2xl t-text no-underline flex items-baseline" style="letter-spacing:.02em"><span class="t-orange italic">Event</span><span class="t-gold">Mesh</span></a>
    <a href="Auth" class="btn-add">Create Account</a>
  </nav>
  <main class="flex min-h-screen pt-16 t-bg theme-trans">
    <div class="flex-1 flex items-center justify-center px-5 py-12 t-bg theme-trans">
  <div class="card bg-white dark:bg-zinc-900">

    <div class="card-header">
      <div>
        <p class="brand-font" style="font-size:0.7rem;letter-spacing:0.12em;text-transform:uppercase;color:#6366f1;margin-bottom:2px;">Database</p>
        <h1 class="brand-font" style="font-size:1.5rem;font-weight:800;" class="text-zinc-900 dark:text-white">User Records</h1>
      </div>
      <a href="Auth" class="btn-add">+ Create Account</a>
    </div>

    <?php
      $stmt = $pdo->query('SELECT * FROM account');
      $rows = $stmt->fetchAll();
    ?>

    <?php if(count($rows) === 0): ?>
      <div class="empty-state">
        <p style="font-size:2rem;margin-bottom:0.5rem;">📭</p>
        <p style="font-size:1rem;font-weight:500;margin-bottom:0.5rem;" class="dark:text-zinc-400">No records found</p>
        <a href="insert" style="color:#6366f1;text-decoration:none;font-size:0.875rem;">Add your first record →</a>
      </div>
    <?php else: ?>
      <div style="overflow-x:auto;">
        <table>
          <thead>
            <tr>
              <th>User ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Password Hash</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($rows as $row): ?>
            <tr>
              <td style="color:#a1a1aa;font-size:0.78rem;">#<?= htmlspecialchars($row['user_id']) ?></td>
              <td style="font-weight:500;" class="dark:text-zinc-200"><?= htmlspecialchars($row['name']) ?></td>
              <td class="dark:text-zinc-300"><?= htmlspecialchars($row['email']) ?></td>
              <td style="color:#71717a;" class="dark:text-zinc-400"><?= htmlspecialchars($row['phone_number']) ?></td>
              <td class="dark:text-zinc-400" style="max-width:160px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?= htmlspecialchars($row['password']) ?></td>
              <td style="display:flex;gap:6px;align-items:center;">
                <a href="edit?id=<?= $row['user_id'] ?>" class="btn-edit">Edit</a>
                <a href="delete?id=<?= $row['user_id'] ?>" class="btn-del" onclick="return confirm('Delete this record?')">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div style="padding:0.85rem 2rem;text-align:right;font-size:0.78rem;color:#a1a1aa;border-top:1px solid rgba(99,102,241,0.08);">
        <?= count($rows) ?> record<?= count($rows) !== 1 ? 's' : '' ?> total
      </div>
    <?php endif; ?>

  </div>
    </div>
  </main>
</body>
</html>