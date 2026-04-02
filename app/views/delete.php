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

$status = '';
$message = '';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM account WHERE user_id = ?");
    $deleted = $stmt->execute([$id]);
    if ($deleted) {
        $status = 'success';
        $message = 'Record deleted successfully.';
    } else {
        $status = 'error';
        $message = 'Could not delete record. Please try again.';
    }
} else {
    $status = 'error';
    $message = 'Invalid record ID.';
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Record</title>
  <?php include __DIR__ . '/auth-styles.php'; ?>
</head>
<body class="font-body" data-theme="dark">
  <nav class="t-nav fixed top-0 left-0 right-0 z-50 h-16 flex items-center justify-between px-8 md:px-14 border-b t-border-soft">
    <a href="landingpage" class="font-display font-bold text-2xl t-text no-underline flex items-baseline" style="letter-spacing:.02em"><span class="t-orange italic">Event</span><span class="t-gold">Mesh</span></a>
    <a href="index" class="btn-add">Back to Records</a>
  </nav>
  <main class="flex min-h-screen pt-16 t-bg theme-trans">
    <div class="flex-1 flex items-center justify-center px-5 py-12 t-bg theme-trans">
      <div class="form-card">
        <h2 class="font-display font-bold t-text mb-4" style="font-size:1.5rem;">Delete Status</h2>
        <p class="t-text-2"><?= htmlspecialchars($message) ?></p>
      </div>
    </div>
  </main>
</body>
</html>
