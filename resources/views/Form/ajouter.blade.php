<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container card shadow">
        <h1 class="my-3">Ajouter un Etudiant</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
         <form action="{{ route('FormController.store') }}" method="post">
        @csrf
             <div class="mb-2">
                 <label for="nom" class="form-label">Nom :</label>
                 <input type="text" name="nom" value="{{ old('nom') }}" class="form-control @error('nom') is-invalid @enderror" />
                    @error('nom')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
             </div>
             <div class="mb-2">
                 <label for="prenom" class="form-label">Prénom :</label>
                 <input type="text" name="prenom" value="{{ old('prenom') }}" class="form-control  @error('prenom') is-invalid @enderror" />
                    @error('prenom')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
             </div>
             <div class="mb-2">
                 <label for="email" class="form-label">Adresse Email :</label>
                 <input type="email" name="email" value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror" />
                    @error('email')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
             </div>
             <div class="mb-2">
                 <label for="pw" class="form-label">Mot de passe :</label>
                 <input type="password" name="pw" value="{{ old('pw') }}" class="form-control  @error('pw') is-invalid @enderror" />
                    @error('pw')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
             </div>
             <div class="mb-2">
                 <label for="pw_confirmation" class="form-label">Confirmation :</label>
                 <input type="password" name="pw_confirmation" value="{{ old('pw_confirmation') }}" class="form-control  @error('pw_confirmation') is-invalid @enderror" />
                    @error('pw_confirmation')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
             </div>
             <div class="mb-4">
                 <label for="bac"  class="form-label">Type de Bac :</label><br>
                 <div class="d-flex mx-4">
                    <input type="radio" id="marocain" class="mx-2" name="bac" value= "marocain" {{ old('bac') == 'marocain' ? 'checked': '' }} />
                    <label for="marocain">Marocain</label>
                    <input type="radio" id="inter" class="mx-2" name="bac" value="inter" {{ old('bac') == 'inter' ? 'checked': '' }} />
                    <label for="inter">International</label>
                 </div>
                    @error('bac')
                       <div class="text-danger">
                           {{$message}}
                       </div>
                    @enderror
             </div>
             <div class="mb-2">
                 <label for="filiere">Filiére souhaitée :</label><br>
                 <select name="filiere" class="form-control my-2 @error('filiere') is-invalid @enderror">
                     <option value="">Choisir une filiére..</option>
                     <option value="SMI">SMI</option>
                     <option value="SMA">SMA</option>
                     <option value="SEG">SEG</option>
                     <option value="PC">PC</option>
                 </select>
                    @error('filiere')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
             </div>
             <button class="btn btn-primary my-2 w-100" type="submit">Ajouter l'étudiant</button>

         </form>
    </div>
</body>
</html>