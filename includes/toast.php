<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<link rel="stylesheet" href="assets/css/toast.css">
<script src="assets/js/toast.js"></script>

<?php if (isset($_SESSION['toast'])): ?>
<script>
document.addEventListener('DOMContentLoaded', () => {
    showToast(
        <?= json_encode($_SESSION['toast']['type']) ?>,
        <?= json_encode($_SESSION['toast']['message']) ?>
    );
});
</script>

<?php unset($_SESSION['toast']); ?>
<?php endif; ?>