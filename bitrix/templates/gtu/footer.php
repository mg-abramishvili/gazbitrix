        </div>
    </main>

    <footer>
        <div class="container">
            © 2023 ООО «Газпром трансгаз Уфа»
        </div>
    </footer>

    <script>
        function dropdownMenu(menuName) {
            let menu = document.getElementById(menuName)

            if(menu.classList.contains('active')) {
                menu.classList.remove('active')
            } else {
                menu.classList.add('active')
            }
        }
    </script>
</body>
</html>