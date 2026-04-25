<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Produits</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', sans-serif; background: #f5f6fa; color: #333; min-height: 100vh; }
        nav { background: #1a1a2e; color: white; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        nav a { color: #e0e0e0; text-decoration: none; font-size: 1.1rem; font-weight: 600; letter-spacing: 1px; }
        nav .nav-links { display: flex; gap: 1rem; align-items: center; }
        nav .nav-links span { color: #aaa; font-size: 0.9rem; }
        .container { max-width: 1100px; margin: 2rem auto; padding: 0 1.5rem; }
        .alert { padding: 0.8rem 1.2rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.95rem; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-error   { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .btn { display: inline-block; padding: 0.5rem 1.1rem; border-radius: 6px; text-decoration: none; font-size: 0.9rem; cursor: pointer; border: none; transition: opacity 0.2s; }
        .btn:hover { opacity: 0.85; }
        .btn-primary  { background: #4361ee; color: white; }
        .btn-warning  { background: #f8961e; color: white; }
        .btn-danger   { background: #e63946; color: white; }
        .btn-secondary{ background: #6c757d; color: white; }
        form { display: inline; }
        .logout-form button { background: none; border: none; color: #aaa; cursor: pointer; font-size: 0.9rem; }
        .logout-form button:hover { color: white; } 

        
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('produits.index') }}"><img src="{{ asset('products.png') }}" style="height:30px; vertical-align:middle; margin-right:8px;">Gestion des Produits</a>
        <div class="nav-links">
            @auth
                <span>{{ auth()->user()->name }}</span>
                <form class="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Déconnexion</button>
                </form>
            @endauth
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @yield('content')

       
    </div>
</body>
</html>
