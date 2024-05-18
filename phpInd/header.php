<?php
function isActive($page)
{
    return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}
?>

<header>
    <h1>Сайт отзывов</h1>
    <nav>
        <ul>
            <li class="<?php echo isActive('index.php'); ?>"><a href="/phpind/index.php">Главная</a></li>
            <li class="<?php echo isActive('feedback_form.php'); ?>"><a href="/phpind/feedback_form.php">Оставить отзыв</a></li>
            <li class="<?php echo isActive('search.php'); ?>"><a href="/phpind/search.php">Поиск отзывов</a></li>
            <?php if (isset($_SESSION['user_id']) && $_SESSION['role'] == 'admin') : ?>
                <li class="<?php echo isActive('dashboard.php'); ?>"><a href="/phpind/admin/dashboard.php">Админ панель</a></li>
                <li><a href="/phpind/admin/logout.php">Выход</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>