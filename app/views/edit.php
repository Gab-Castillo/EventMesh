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

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<script>alert('Invalid record ID.');window.location='index';</script>";
    exit;
}

$id = (int)$_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM account WHERE user_id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch();

if (!$row) {
    echo "<script>alert('Record not found.');window.location='index';</script>";
    exit;
}

if (isset($_POST['name'])) {
    $stmt = $pdo->prepare("UPDATE account SET name=?, email=?, phone_number=?, password=? WHERE user_id=?");
    $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone_number'], password_hash($_POST['password'], PASSWORD_DEFAULT), $id]);
    echo "<script>alert('User updated successfully');window.location='index';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Record</title>
  <?php include __DIR__ . '/auth-styles.php'; ?>
</head>
<body class="font-body" data-theme="light">
  <nav class="t-nav fixed top-0 left-0 right-0 z-50 h-16 flex items-center justify-between px-8 md:px-14 border-b t-border-soft bg-white">
    <a href="landingpage" class="font-display font-bold text-2xl t-text no-underline flex items-baseline"><span class="t-orange italic">Event</span><span class="t-gold">Mesh</span></a>
    <a href="index" class="btn-add">Dashboard</a>
  </nav>
  <main class="flex min-h-screen pt-24 t-bg">
    <div class="w-full max-w-xl mx-auto px-4 py-10">
      <div class="form-card">
        <h1 class="text-2xl font-bold t-text mb-2">Edit User</h1>
        <p class="t-text-2 mb-6">Update details for <strong>#<?= htmlspecialchars($row['user_id']) ?></strong>.</p>
        <?php if (!empty($error)): ?>
          <div class="alert-error mb-4"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post" class="space-y-4">
          <div>
            <label class="input-label" for="name">Name</label>
            <input id="name" name="name" class="em-input" value="<?= htmlspecialchars($row['name']) ?>" required>
          </div>
          <div>
            <label class="input-label" for="email">Email</label>
            <input id="email" name="email" class="em-input" type="email" value="<?= htmlspecialchars($row['email']) ?>" required>
          </div>
          <div>
            <label class="input-label" for="phone_number">Phone</label>
            <input id="phone_number" name="phone_number" class="em-input" type="tel" value="<?= htmlspecialchars($row['phone_number']) ?>" required>
          </div>
          <div>
            <label class="input-label" for="password">Password</label>
            <input id="password" name="password" class="em-input" type="password" placeholder="Leave blank to keep current">
          </div>
          <div class="flex gap-3">
            <a href="index" class="btn-cancel">Cancel</a>
            <button type="submit" class="btn-submit">Update Record</button>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>
</html>
      font-family: 'DM Sans', sans-serif;
    }
    html.dark .btn-cancel { border-color: #3f3f46; color: #a1a1aa; }
    .btn-cancel:hover { border-color: #6366f1; color: #6366f1; }

    .btn-update {
      flex: 1;
      padding: 10px;
      border-radius: 8px;
      border: none;
      background: #6366f1;
      font-size: 0.875rem;
      font-weight: 500;
      color: #fff;
      cursor: pointer;
      transition: background 0.15s;
      font-family: 'DM Sans', sans-serif;
    }
    .btn-update:hover { background: #4f46e5; }
  </style>
</head>
<body class="font-body" data-theme="dark">
  <nav class="t-nav fixed top-0 left-0 right-0 z-50 h-16 flex items-center justify-between px-8 md:px-14 border-b t-border-soft">
    <a href="landingpage" class="font-display font-bold text-2xl t-text no-underline flex items-baseline" style="letter-spacing:.02em"><span class="t-orange italic">Event</span><span class="t-gold">Mesh</span></a>
    <a href="index" class="btn-add">User Records</a>
  </nav>
  <main class="flex min-h-screen pt-16 t-bg theme-trans">
    <div class="flex-1 flex items-center justify-center px-5 py-12 t-bg theme-trans">
      <div class="form-card bg-white dark:bg-zinc-900">
  <div class="form-card-header">
    <span class="id-tag">ID #<?= $id ?></span>
    <p class="brand-font" style="font-size:0.7rem;letter-spacing:0.12em;text-transform:uppercase;color:#6366f1;margin-bottom:3px;margin-top:6px;">Editing</p>
    <h2 class="brand-font" style="font-size:1.4rem;font-weight:800;color:#18181b;" class="dark:text-white">Edit Record</h2>
  </div>

  <div class="form-body">
    <form action="" method="post" style="display:flex;flex-direction:column;gap:1rem;">
      <div>
        <label class="field-label">Name</label>
        <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" class="field-input" required>
      </div>

      <div>
        <label class="field-label">Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" class="field-input" required>
      </div>

      <div>
        <label class="field-label">Phone Number</label>
        <input type="tel" name="phone_number" value="<?= htmlspecialchars($row['phone_number']) ?>" class="field-input" required>
      </div>

      <div>
        <label class="field-label">Password</label>
        <input type="password" name="password" placeholder="Leave blank to keep current" class="field-input">
      </div>

      <div style="display:flex;gap:0.75rem;margin-top:0.5rem;">
        <a href="index" class="btn-cancel">Cancel</a>
        <button type="submit" class="btn-update">Update Record</button>
      </div>
    </form>
  </div>
      </div>
    </div>
  </main>
</body>
</html>
