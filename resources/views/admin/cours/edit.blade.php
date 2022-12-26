
@extends('modele')

@section('title', 'Modication et validation')

@section('contents')
    <!--------------------- NavBar ------------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand mb-0 h1" href="{{route('admin.home')}}"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin.home')}}">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('admin.users.index')}}">Utilisateur</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.cours.index')}}">Cours</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gestionnaire.home')}}">Partie gestionnaire</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('enseignant.home')}}">Partie enseignant</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('admin.account.edit')}}">Changer son mot de passe</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.account.editNomPrenom',['id'=>Auth::user()->id])}}">Modifier son nom/prénom</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>


    <div class="container-sm">
        <!-----------------------------Btn Back------------------------------>
        <a class="btn btn-info" style="margin-top:20px;" href="{{ URL::previous() }}"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>
        <p>Formulaire de modification</p>
        <form action="{{route('admin.cours.edit',['id'=>$cours->id])}}" method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Intitule</label>
                <input type="text" class="form-control" name="intitule" id="formGroupExampleInput2" placeholder="intitule..." value="{{old('intitule',$cours->intitule)}}">
            </div>

            <input class="btn btn-primary" type="submit" name="Modifier" value="Modifier">
            <input class="btn btn-danger" type="submit" name="Annuler" value="Annuler">
            @csrf
        </form>
    </div>
@endsection
