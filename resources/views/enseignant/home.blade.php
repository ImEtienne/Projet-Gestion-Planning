@extends('modele')

@section('title', 'Accueil - Enseignant')


@section('contents')
    <!--------------------- NavBar ------------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="{{route('enseignant.home')}}"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('enseignant.home')}}">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('enseignant.showSeance')}}">Voir séance</a>
                    <li>

                    @if(Auth::user()->type == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.home')}}">Back To Home Admin</a>
                            <li>
                    @endif


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('enseignant.account.edit')}}">Changer son mot de passe</a></li>
                            <li><a class="dropdown-item" href="{{route('enseignant.account.editNomPrenom', ['id'=>Auth::user()->id])}}">Modifier son nom/prénom</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-------------------------------Formulaire----------------------->
    <div class="d-flex flex-column h-90">
        <div class="postion-relative">
            <div class="container-sm">
                <h4>Page d'accueil enseignant.</h4>
                <p class="text-start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus blandit ante non placerat. Sed consequat nibh lorem, et lacinia massa porttitor et. Nam rhoncus vitae magna ut fermentum. Phasellus iaculis nisl purus, sed tempus diam vulputate pulvinar. Morbi elementum nulla enim, ut convallis orci semper et. Phasellus quis lorem sit amet tortor dignissim tristique et vitae odio. Maecenas non iaculis mi, et consectetur lorem. Sed congue quam vel ante sodales tempor. Etiam laoreet, risus pretium fermentum ultricies, eros nisl maximus ligula, vestibulum tempus tellus mi eu ipsum. Fusce lobortis purus ligula, sit amet sodales dui scelerisque nec. Nullam malesuada mauris in ligula porta, id consectetur elit scelerisque. Cras volutpat urna vitae velit faucibus, egestas tincidunt felis euismod.

                    Aliquam eget pellentesque lorem, quis interdum mauris. Ut auctor faucibus dolor, et interdum nulla. Suspendisse potenti. Suspendisse potenti. Donec gravida pretium imperdiet. Nulla bibendum sit amet metus vitae laoreet. Suspendisse sed leo eu purus mollis imperdiet. Pellentesque consequat tincidunt sapien, in luctus nisi tempus sed. Quisque dictum neque tortor, ultrices mollis risus luctus nec. Fusce blandit, velit at iaculis vulputate, leo tellus commodo risus, consequat aliquet ligula velit sit amet quam. Curabitur fringilla libero sed magna semper imperdiet. Duis magna eros, aliquam vel auctor nec, tristique eu libero. Aliquam tempus tristique neque, id suscipit diam convallis ac. Integer a nulla sit amet urna commodo eleifend.

                    Quisque sed blandit metus, sed lobortis nisi. Cras auctor justo et nisl cursus, porta placerat purus vulputate. Morbi consequat leo diam, at tempor leo pellentesque vel. Sed ligula magna, sollicitudin sed interdum a, tincidunt a diam. Proin in convallis arcu. Fusce ultrices urna gravida suscipit accumsan. Cras scelerisque interdum magna et tempus. Etiam nec sodales nulla, sit amet pulvinar nibh. Proin et leo ante. Donec imperdiet purus eget tellus gravida, eu posuere ipsum maximus. Praesent consectetur maximus enim id porttitor.

                    Sed magna lacus, congue vitae tellus iaculis, dignissim pulvinar magna. Donec in lacinia risus. Vivamus varius nulla ac mi tincidunt tincidunt. Proin sem mi, aliquam eu suscipit at, suscipit vel dui. Aliquam at leo nec ipsum porta suscipit quis eget lacus. Nullam quis nunc pretium, hendrerit quam sit amet, sagittis turpis. Nunc suscipit, leo vel fringilla lobortis, mi massa mollis ex, non viverra sapien ligula at urna. Donec efficitur nisl non vestibulum feugiat. Morbi dictum erat vel dolor finibus, sed fringilla orci aliquam. Sed lobortis tortor elit, a congue dolor maximus id. Vivamus accumsan urna et libero ornare, quis tempus dolor varius. Nullam a leo iaculis, mattis sem gravida, commodo nulla.

                    Fusce ut nisl nec augue egestas sagittis sit amet id nisl. Nulla facilisi. Duis ultrices elit arcu, a cursus nunc congue vel. Aenean accumsan blandit arcu, vitae condimentum turpis elementum at. Fusce quis fermentum ipsum, in maximus metus. Mauris maximus tristique ipsum. Duis sagittis orci dolor, nec faucibus nunc suscipit porta. Phasellus eget porttitor eros. Cras pulvinar in sapien non rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras finibus vel nulla quis tristique. In pretium pellentesque quam non feugiat. Vestibulum fringilla scelerisque nunc ut pretium. Nam nec ante efficitur, elementum augue vel, malesuada turpis.

                    Proin egestas vel magna eget interdum. Etiam pharetra non lectus a ullamcorper. Vivamus iaculis fermentum felis, in euismod odio auctor sed. Aenean egestas semper dignissim. Nullam suscipit fermentum tincidunt. Nullam semper, massa sit amet viverra tincidunt, nibh tortor tristique ex, eget vehicula massa est a erat. Nullam mollis et odio at scelerisque. Fusce ultricies, leo eu fermentum auctor, dui mi iaculis ipsum, lacinia molestie nisl elit ac dolor. In iaculis posuere urna quis auctor. Pellentesque eu ultricies nulla.

                    Duis quis ipsum a lectus tincidunt semper sed lacinia leo. Nam accumsan turpis quis tortor sollicitudin, vel sagittis dui placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque et quam magna. Fusce efficitur sem nisl, at suscipit tellus blandit ac. Curabitur libero sem, feugiat ornare ipsum eu, condimentum lacinia ligula. Maecenas et tincidunt nunc, quis ultricies ipsum.

                    Fusce condimentum faucibus massa, nec faucibus odio consequat non. Pellentesque dignissim varius lorem. Quisque fermentum orci hendrerit est condimentum, ac sodales ex eleifend. Aenean eget iaculis lorem. Praesent et finibus dui. Quisque vestibulum metus eget convallis placerat. Donec a iaculis turpis. Mauris sit amet molestie dolor.

                    Donec in lacus facilisis, gravida nunc aliquet, volutpat tellus. Aenean eget libero vel neque accumsan placerat et sed metus. Phasellus sed arcu pellentesque, molestie dui nec, tristique lacus. Pellentesque quis libero consequat, tristique lorem nec, dictum lectus. Mauris fermentum iaculis velit vitae varius. Aenean lacinia, est vitae mattis dictum, risus dui dignissim ipsum, eget porttitor purus massa vel nisi. Donec euismod semper pharetra. Sed condimentum venenatis ex, at efficitur mi semper nec. Phasellus a tempus lorem. In ut nisi sodales, dignissim justo egestas, ultrices neque. Proin quis lobortis arcu. Etiam mollis ornare ex id condimentum.

                    Proin vitae quam eget lacus aliquam imperdiet. Phasellus lacinia ut augue in sodales. Duis non sem sit amet turpis faucibus hendrerit vel a elit. Etiam maximus neque nec tortor interdum ultricies. Nullam finibus nibh felis, eget pulvinar metus rutrum ac. Quisque vulputate tellus sit amet bibendum elementum. Donec massa nulla, scelerisque in elit quis, vestibulum bibendum purus. Praesent id finibus enim. Maecenas vel eros efficitur, lobortis dui in, luctus diam. Vestibulum dapibus, felis vitae luctus tincidunt, massa elit aliquam lorem, eget suscipit mi ligula eu ante. Aenean non arcu at urna luctus feugiat. Mauris blandit faucibus lobortis.

                    Suspendisse at feugiat ligula. Nullam ac neque et est facilisis ultricies. Donec mollis mi dui, eget venenatis nibh ullamcorper vitae. Phasellus sed dictum lectus. Mauris lacinia eu nunc ut bibendum. Etiam mollis ligula at libero congue, mollis cursus dui mollis. Donec arcu tortor, lobortis vitae mollis quis, pharetra sagittis nunc. Praesent aliquam volutpat lacus, eget hendrerit arcu blandit sed.

                    Curabitur vel erat porttitor, vehicula erat vel, vestibulum ante. Donec pulvinar sollicitudin odio vel hendrerit. Vivamus leo sem, sollicitudin vitae libero a, rhoncus pellentesque nisi. Aliquam pellentesque ligula id arcu semper, sit amet semper quam tincidunt. Donec consequat condimentum luctus. Aliquam eget lobortis tellus. Suspendisse consequat lectus sed odio blandit, quis dictum ipsum luctus. Morbi cursus orci ipsum, sed venenatis leo malesuada ut. Suspendisse a malesuada magna. Ut finibus velit vel mi venenatis ornare. Morbi ultrices finibus erat sit amet bibendum. Nam et cursus dolor, non pharetra velit. Cras id elementum lorem.

                    Phasellus ultrices est interdum nunc euismod laoreet. Donec posuere laoreet diam id tempus. Suspendisse imperdiet dui erat, eget rutrum nunc condimentum eget. Donec pulvinar ipsum nibh, ut congue elit pellentesque nec. Praesent ac eros vitae ligula sodales condimentum. Donec quis efficitur est, ac molestie libero. Nullam eget metus leo. Pellentesque lacus libero, ornare id blandit sed, dapibus id leo. Integer quam libero, lobortis a sem quis, dignissim bibendum tellus. Aenean mattis tortor augue, non placerat erat consectetur non. Pellentesque a ultricies massa. Curabitur vitae tellus sem. Nulla malesuada velit enim, id bibendum libero sodales quis. Morbi ornare dolor at ante aliquam, quis maximus lorem dictum.

                    Ut lacinia malesuada erat, ac tincidunt libero feugiat vel. Integer eget ligula nec nunc sagittis dapibus. Sed gravida semper velit sed faucibus. Fusce non diam vitae lacus auctor pulvinar vitae at urna. Vivamus dignissim turpis non ipsum sodales, sit amet porta neque laoreet. Suspendisse interdum nibh lorem, nec malesuada felis malesuada quis. Morbi egestas interdum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat lacus sed quam interdum, vel facilisis sem tincidunt. Nulla facilisi.

                    Phasellus eu lectus sem. Vestibulum blandit quam in commodo iaculis. Pellentesque placerat, justo eu auctor auctor, lacus orci eleifend arcu, sed egestas nisl nisi eget elit. Cras at vulputate tellus, ut viverra diam. Curabitur sed elit sit amet mi elementum convallis. Nunc posuere quam quis tellus elementum, sed congue purus hendrerit. Pellentesque quis dictum mauris, vitae congue elit. Donec ut magna orci. In quis euismod ligula. Integer hendrerit sem et malesuada iaculis.

                    Sed dictum nulla vel orci mattis, ac venenatis lectus volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis rutrum fermentum lorem non mollis. Aenean dignissim orci ultrices nulla sodales, non ullamcorper purus dapibus. Nam gravida, quam ac dapibus aliquam, lectus dolor accumsan enim, quis commodo orci mauris non odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut sit amet ullamcorper arcu, pharetra pellentesque mi. Maecenas ac sem a ligula bibendum lobortis. Nulla facilisi. Nullam at lectus fermentum, ultrices urna sed, gravida risus. Curabitur sit amet leo id arcu malesuada sodales. Nam nec ante ut eros eleifend tempus eget vel nisl.

                    Mauris eleifend est non arcu porttitor dignissim. Cras aliquam aliquet enim, nec hendrerit sapien. Aenean sit amet malesuada neque. Phasellus a sodales lectus. Nunc volutpat tortor a turpis vulputate porta. Donec ut velit mauris. Nulla congue a metus eget tincidunt. Cras eu condimentum diam. Aenean posuere elit et massa accumsan, sit amet scelerisque arcu tincidunt. Aenean euismod nec lectus sit amet congue. Proin id purus in est hendrerit vehicula a quis urna. Pellentesque consequat id dui nec bibendum. Duis vel scelerisque magna.

                    Ut porta tincidunt augue. Aliquam id porta justo. Phasellus sed eros quam. Nulla ultricies pretium lacus, in consectetur magna vestibulum vel. Integer quis nulla ut nunc finibus euismod. Cras ac mi fermentum, iaculis urna ut, fermentum augue. Nam arcu ex, suscipit a feugiat ut, egestas in neque. Morbi in malesuada est. Curabitur porttitor at velit eget convallis. Praesent eu augue purus. Quisque id cursus nibh, quis consectetur leo. Duis suscipit, elit in iaculis venenatis, nisi nibh hendrerit augue, non molestie ante tortor sed nulla. Donec fermentum laoreet lectus, vel posuere ante sollicitudin non.


                </p>
            </div>
        </div>
    </div>

@endsection
