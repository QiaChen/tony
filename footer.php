                    <footer class="footer reveal" style="<?php if(wp_is_mobile()) echo 'display:none;' ?>">
                        <p>Copyright © <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></p>
                    </footer>
                    <script type="text/javascript">
        $(document).ready(function () {
            $.goup({
                trigger: 100,
                bottomOffset: 30,       //距底部偏移量 
                locationOffset: 30,     //距右部偏移量
            });
        });
</script>
                    <script src="https://static.ouorz.com/bootstrap.min.js"></script>
                </div>
            </div>
        </main>
    </body>
</html>
