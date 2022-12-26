@extends('modele')

@section('title', 'HOME -ADMIN')

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
    </nav>

   <div class="d-flex flex-column h-90">
    <div class="postion-relative">
        <div class="container-sm">
            <p>Page d'accueil administrateur.</p>
            <p class="text-start">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies blandit mi. Aenean mollis nunc neque, non ornare quam pharetra vel. Integer lacinia ipsum ultrices risus tempor, non fringilla tellus pellentesque. Maecenas eget viverra turpis. Phasellus sed dapibus mi, sit amet condimentum ex. Proin bibendum, ipsum at sagittis iaculis, ante libero efficitur mi, ut fermentum nibh nibh et sem. Vestibulum feugiat nulla in placerat laoreet. In nunc eros, tempus et convallis quis, ultricies vitae tellus. Suspendisse sit amet nisi commodo, condimentum arcu ut, volutpat purus.
                Nulla faucibus dapibus odio sed interdum. Donec ullamcorper ipsum ex, vel molestie mauris tincidunt sit amet. Cras a nisl turpis. Aliquam erat volutpat. In eu hendrerit ligula. Nam purus magna, rutrum ut hendrerit sit amet, tempus non elit. Ut vitae tellus in enim porta molestie. Nunc pretium diam eu massa tempus porttitor. Praesent aliquet blandit sem quis volutpat. Suspendisse potenti. Maecenas pretium laoreet nisl a placerat. Nunc vulputate dolor arcu, sit amet feugiat leo pellentesque sit amet. Fusce mi dolor, pellentesque ac tellus ut, rutrum posuere lorem. Praesent metus enim, malesuada lobortis dui sit amet, suscipit congue mauris. Aliquam vel libero egestas, tempor leo in, eleifend nisl. Sed sit amet imperdiet libero, at vehicula eros.
                Phasellus sagittis nulla nulla, quis semper nulla egestas condimentum. Phasellus semper eget nulla a dignissim. Nulla facilisi. Curabitur viverra ex non orci sodales mattis. Aenean facilisis, lacus vitae tincidunt gravida, enim turpis ornare magna, et egestas tortor ligula eget sem. Nulla libero libero, efficitur eu lacus eget, euismod porta urna. Phasellus nunc tellus, vestibulum sed tellus vel, sodales lobortis lacus.
                Donec et orci mi. Aenean sagittis sagittis dapibus. Phasellus vel elit nec tellus scelerisque maximus malesuada eu turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet quam eu molestie vulputate. Nulla imperdiet rhoncus risus eu volutpat. Nullam viverra pharetra condimentum. Maecenas eu posuere sapien, vel posuere purus. Morbi ornare sollicitudin leo, non tempus ipsum scelerisque nec. Maecenas quis fringilla enim. Etiam bibendum luctus odio eget cursus. Nulla luctus, odio et tincidunt sagittis, eros enim mollis ligula, feugiat iaculis nisl nulla commodo enim.
                Suspendisse tincidunt, est ac accumsan sodales, nisi dolor lacinia leo, aliquet consectetur arcu est quis nisi. Sed dignissim ac nunc a blandit. Sed id auctor felis, tincidunt condimentum lacus. Sed at erat ut turpis posuere rutrum a sit amet sapien. Integer vestibulum felis sit amet iaculis auctor. Curabitur scelerisque tempus lacus, eget lacinia felis fringilla vel. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas in ultricies mauris, id pulvinar lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent porta arcu vitae dictum aliquet. Suspendisse est diam, efficitur laoreet sollicitudin in, lobortis at augue. Sed felis tellus, commodo sed pulvinar vel, tristique ut ex. Vivamus finibus elit sed augue placerat, viverra iaculis diam pulvinar. Proin maximus arcu sed scelerisque tempor. Vivamus porta vestibulum faucibus. Vivamus ac nulla risus.
                In hac habitasse platea dictumst. Cras interdum lacinia sem, ut varius ante sodales non. Vestibulum rutrum pretium ultrices. Nunc sed venenatis est. Aenean suscipit tellus at neque eleifend, sit amet feugiat tortor rutrum. Maecenas eros ligula, sollicitudin vel lobortis id, venenatis et tellus. Quisque fringilla a lacus nec accumsan. Cras consequat ipsum nec augue luctus vulputate.
                Integer sed leo pretium, dapibus odio at, scelerisque ante. Quisque massa mauris, egestas eget aliquam quis, aliquet eu metus. Curabitur sagittis nunc ac ultrices eleifend. Curabitur rhoncus mauris enim, ac dignissim risus sodales non. Maecenas et elementum justo, sit amet tempus dui. Suspendisse dictum lectus mi, ut dapibus arcu condimentum et. Etiam tincidunt lorem non ex cursus, eu tincidunt est varius. Nulla tristique mollis lorem vel dictum. Fusce venenatis sed elit ut volutpat. Integer tincidunt, tellus quis pretium ultricies, libero ante elementum libero, et dictum urna nulla a sapien. Nullam dignissim vel quam id cursus. Donec accumsan sit amet nisi non pretium. Suspendisse ut leo sagittis erat imperdiet scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam eu augue vitae sapien blandit iaculis vitae sed eros. Aliquam erat volutpat.
                Fusce nec mollis dolor. Curabitur maximus venenatis tristique. Phasellus ipsum felis, sollicitudin vel sapien eget, pretium pretium nunc. Integer rhoncus libero nec dictum tempus. Morbi commodo diam id aliquam hendrerit. Aenean ut lorem vel tellus malesuada cursus quis eu ligula. Nulla non volutpat justo. Nulla facilisi. Fusce scelerisque, lacus rhoncus volutpat hendrerit, libero quam pharetra tortor, in pellentesque est diam eu nibh. Maecenas eu accumsan est, non tristique dui. Vivamus nec gravida neque. Curabitur dictum nisi id est luctus feugiat. Sed vel nulla dignissim, pulvinar nisl sed, congue massa. Proin pharetra lorem lectus, sit amet consectetur eros scelerisque ac. Donec hendrerit a nisi vestibulum tincidunt.
                Praesent imperdiet at ex et rhoncus. Aenean sodales volutpat ex, quis varius ante sagittis nec. Maecenas vitae massa tempus, convallis justo et, ullamcorper tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum nec sapien eu mi facilisis ullamcorper tempus ac purus. Mauris vulputate orci nec sem mollis viverra. Nam in turpis est. Curabitur non ligula consectetur, consequat mauris in, volutpat orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec lacinia justo eu tincidunt convallis. Sed posuere elementum ex eu dignissim. In aliquet posuere massa, id mattis tellus vulputate sed. Aliquam in gravida elit.
                Nulla bibendum faucibus semper. Vestibulum dapibus turpis rutrum, sodales urna non, dapibus felis. Vestibulum feugiat ligula ut finibus pretium. Integer vel ipsum lorem. Ut justo orci, sagittis ut luctus quis, porttitor eu tellus. Quisque vitae dui a risus aliquam sollicitudin. In mi neque, aliquam a enim at, varius feugiat ipsum. Integer urna augue, malesuada et rutrum id, faucibus et metus. Mauris accumsan eros lectus, nec auctor sem cursus quis. Sed dapibus faucibus viverra. Aliquam erat volutpat.

            </p>
        </div>
        </div>
    </div>





@endsection
