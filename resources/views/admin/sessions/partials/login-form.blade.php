<form action="{{route('login.post')}}" id="loginForm" method="post">
    {{csrf_field()}}
    <hr/>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group row">
                <input type="email" class="form-control" name="email" placeholder="Entrez votre adresse email">
            </div>

            <div class="form-group row">
                <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe">
            </div>

            <div class="other-actions row">
                <div class="col-sm-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                        <label class="form-check-label" for="rememberMe">Se souvenir</label>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{route('forgot-password.index')}}" class="forgot-link">Mot de passe oublié ?</a>
                </div>
            </div>

            <div class="row">
                <button class="btn btn-theme btn-full">Se connecter</button>
            </div><br/><br/><hr/>
        </div>
    </div>
</form>