

<nav class="navbar navbar-expand-lg shadow-sm  py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
 
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">
                        Nanagames 
                    </a>
                </li>
            
                <li class="nav-item dropdown">
                    <a id="navbarDropdown"
                        class="nav-link dropdown-toggle" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   
                       Les jeux
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                            <a href="{{ route('show-all-games') }}" class="dropdown-item">
                                Voir tous
                            </a>
                            <a href="{{ route('show-create-game') }}" class="dropdown-item">
                                Créer
                            </a>
                    
                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown"
                        class="nav-link dropdown-toggle" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        
                       Les Articles
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a href="{{ route('show-all-articles') }}" class="dropdown-item">
                            Voir tous
                        </a>
                        <a href="{{ route('show-create-article') }}" class="dropdown-item">
                            Créer
                        </a>
                    </div>

                </li>

                @auth 

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">
                        Logout 
                    </a>
                </li>
                
                @endauth
                
           
            </ul>
        </div>
    </div>
</nav>
