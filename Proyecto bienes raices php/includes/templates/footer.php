<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a href="<?php echo $admin ? '../..' : '.' ?>/nosotros.php">Nosotros</a>
            <a href="<?php echo $admin ? '../..' : '.' ?>/anuncios.php">Anuncios</a>
            <a href="<?php echo $admin ? '../..' : '.' ?>/blog.php">Blog</a>
            <a href="<?php echo $admin ? '../..' : '.' ?>/contacto.php">Contacto</a>
        </nav>
    </div>
    <p class="copyright">Todos los derechos reservados
        <?php echo date('Y') ?>&copy;
    </p>
</footer>
<script src="<?php echo $admin ? '../..' : '.' ?>/build/js/bundle.min.js"></script>
</body>

</html>