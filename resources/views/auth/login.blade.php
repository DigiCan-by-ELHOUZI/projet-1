<!doctype html>
<html lang="en">
  <head>
  	<title>Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo/logo_1.png">
	<link rel="stylesheet" href="css2/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/img.jpg);">
		<header>

				<a href="/"><img style="height: 100px;" src="img/logo/logo_1.png" alt=""></a>

		</header>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Connexion</h2>
				</div>
			</div>
			<br /><br /><br /><br />
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="{{ route('login') }}" class="signin-form" method="post">

		      		<div class="form-group">
		      			<input type="email" name="email" class="form-control" value="{{ old('email') }}" autocomplete="off">
                        @error('login')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror

                        @error('email')
						   <span class="invalid-feedback" role="alert">
							  <strong>{{ $message }}</strong>
					    	</span>
					    @enderror
		      		</div>

	                <div class="form-group">
	                  <input id="mot de passe incorrect" name="password" type="password" class="form-control" placeholder="mot de passe" required autocomplete="current-password">
	                  <span toggle="#mot de passe incorrect" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      @error('password')
						  <span class="invalid-feedback" role="alert">
							 <strong>{{ $message }}</strong>
						  </span>
					  @enderror
	                </div>

                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                        <div class="col-md-6">
                            <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                @foreach(['membre' => 'Membre', 'entraineurs' => 'Entraineurs'] as $value => $label)
                                    <option value="{{ $value }}"{{ old('role') === $value ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

	            <div class="form-group">
					<input type="submit" name="submit" value="connexion" class="form-control btn btn-primary submit px-3">
					<a type="submit" href="/"class="login100-form-btn">Retour</a>
                    <a type="submit" href="/register"class="login100-form-btn">inscription</a>
	            </div>

	            <div class="form-group d-md-flex">


	            </div>
	          </form>

		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js2/jquery.min.js"></script>


  <script src="js2/main.js"></script>

	</body>
</html>
