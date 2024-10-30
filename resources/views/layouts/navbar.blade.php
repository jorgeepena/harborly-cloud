<nav class="mb-5 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-6">
                <a href="{{ route('index') }}" class="d-block"><img src="{{ asset('img/logo-sm.svg') }}" alt="Harborly" width="50"></a>
            </div>

            <div class="col-6 col-md-6">
                <div class="d-flex justify-content-end gap-3">
                    @guest
                    <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">Sign In</a>
                    @else
                    <a href="{{ route('projects.create') }}" class="btn btn-primary">Dock a Project</a>
                    <a href="{{ route('account.home') }}" class="btn btn-outline-primary">Your Harbor</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>