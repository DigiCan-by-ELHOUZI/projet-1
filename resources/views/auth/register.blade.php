<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inscription</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css3/style.css">

</head>
<body>

<div class="form-container">

   <form action="{{ route('register') }}" method="post">
    @csrf
      <h3>Nouvelle Inscription</h3>

      <div>
        <input id="prenom_adr" type="text"  class="form-control @error('prenom_adr') is-invalid @enderror" name="prenom_adr" value="{{ old('prenom_adr') }}"  required placeholder="Prenom">
        @error('prenom_adr')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
        @enderror
      </div>

      <div>
        <input id="nom_adr" type="text" class="form-control @error('nom_adr') is-invalid @enderror" name="nom_adr" value="{{ old('nom_adr') }}" required placeholder="nom">
        @error('nom_adr')
           <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
           </span>
        @enderror
      </div>

      <div>
        <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required placeholder="Votre age">
        @error('age')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
        @enderror
      </div>

      <div>
         <input id="Ntele" type="text" class="form-control @error('Ntele') is-invalid @enderror" name="Ntele" value="{{ old('Ntele') }}" required placeholder="votre numéro de téléphone">
         @error('Ntele')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
         @enderror
      </div>

      <div>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="E-mail">
        @error('email')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

     <div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required placeholder="mot de passe">
        @error('password')
           <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
           </span>
        @enderror
     </div>

     <div>
        <input id="password-confirm" class="form-control" type="password" name="password_confirmation" required placeholder="confirmer mot de passe">
     </div>


     {{-- <div class="form-group row">
        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

        <div class="col-md-6">
            <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
                @foreach(['Membre' => 'Membre', 'entraineurs' => 'Entraineurs'] as $value => $label)
                    <option value="{{ $value }}"{{ old('role') === $value ? ' selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>

            @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div> --}}



      <input type="submit" name="submit" value="INSCRIPTION" class="form-btn">
      <a  href="/"class="login100-form-btn">Retour</a>

   </form>

</div>
<script>


    rules: {

        role: 'required|in:Membre,entraineurs',
    },


</script>
</body>
</html>










