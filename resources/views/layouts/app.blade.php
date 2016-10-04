<html>
<head>
    <title>Bacheca gli orti di Caere</title>
    <!-- Css -->

    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
</head>
<body>
    <div class="container-fluid">
        <!-- header  -->
        <!-- Logo -->
        <header>
            <a href="/" id="logo">
                <img src="imgs/orti.png" alt="Gli Orti di Caere">
                <span>Gli Orti di Caere</span>
            </a>
            <!-- main navigation links -->
            <nav id="main-navigation">
                <ul>
                    <li><a href="/notices">Bacheca</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main body site -->
        <main>
            @yield('content')
        </main>

        <!-- footer -->
        <footer>
            @yield('footer')
        </footer>
    </div>
</body>
</html>
