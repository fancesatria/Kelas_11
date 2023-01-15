<nav>
    <ul>
        <li><a href="?menu=kontak">kontak</a></li>
        <li><a href="?menu=sejarah">sejarah</a></li>
        <li><a href="?menu=jurusan">jurusan</a></li>
    </ul>
</nav>

<?php 

 

    if (isset($_GET['menu'])) {
    
        $menu = $_GET['menu'];

        require_once $menu . '.php';

    }

?>