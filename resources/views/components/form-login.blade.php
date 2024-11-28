<div>
    <h1 id="titlei">Bem Vindo: <b id="titlep">{{ auth()->user()->name }}!!</b></h1>
</div> <br>

<div class="container">
    <div class="info-section">
        <div id="infosec1">
            <h2 class="dropdown-title" id="formtitle1" onclick="toggleSection('info-form', this)">
                <img class="setaimg" src="{{ asset('assets/seta12.png') }}" alt="Seta">
                Informações
            </h2>
            <div id="info-form" class="dropdown-content">
                <form method="POST" action="{{ route('perfil.update') }}" onsubmit="return validateForm()">
                    @csrf
                    <div>
                        <label class="label-style" for="name">Nome:</label>
                        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" disabled>
                    </div>
                    <div>
                        <label class="label-style" for="email">Email:</label>
                        <input type="email" id="email" value="{{ auth()->user()->email }}" disabled>
                    </div>
                    <div>
                        <label class="label-style" for="cpf">CPF:</label>
                        <input type="text" id="cpf" value="{{ auth()->user()->cpf }}" disabled>
                    </div>
                    <div>
                        <label class="label-style" for="birthdate">Data de Nascimento:</label>
                        <input type="date" id="birthdate" value="{{ auth()->user()->birthdate }}" disabled>
                    </div>
                </form>
            </div>

            <h2 class="dropdown-title" id="formtitle3" onclick="toggleSection('name-form', this)">
                <img class="setaimg" src="{{ asset('assets/seta12.png') }}" alt="Seta">
                Alterar Nome
            </h2>
            <div id="name-form" class="dropdown-content">
                <form method="POST" action="{{ route('perfil.updateName') }}" onsubmit="return validateForm2()">
                    @csrf
                    @method('PATCH')
                    <div>
                        <label class="label-style" for="name">Novo Nome:</label>
                        <input type="text" id="nametro" name="name" value="{{ auth()->user()->name }}" required>
                    </div>
                    <button class="buttonsperfil" type="submit">Alterar Nome</button>
                </form>
            </div>

            <h2 class="dropdown-title" id="formtitle4" onclick="toggleSection('password-form', this)">
                <img class="setaimg" src="{{ asset('assets/seta12.png') }}" alt="Seta">
                Alterar Senha
            </h2>
            <div id="password-form" class="dropdown-content">
                <form method="POST" action="{{ route('perfil.update') }}" onsubmit="return validateForm()">
                    @csrf
                    @method('PATCH')
                    <div>
                        <label class="label-style" for="password">Nova Senha:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div>
                        <label class="label-style" for="password_confirmation">Confirmar Senha:</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <div>
                        <button class="buttonsperfil" type="submit">Alterar Senha</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="infosec2">
            <h2 class="formstit" id="formtitle2">
                Avatar Atual
            </h2>
            <div class="avatar-preview">
                <img id="avataratual" src="{{ auth()->user()->avatar }}" alt="Avatar atual">
            </div>
            <form id="avatar-form" method="POST" action="{{ route('perfil.avatar.update') }}">
                @csrf
                @method('PATCH')
                <div id="avatar-selection">
                    @foreach(['avatar1', 'avatar2', 'avatar3'] as $avatar)
                        <label style="cursor: pointer;">
                            <input type="radio" name="avatar" value="{{ $avatar }}" onclick="submitAvatarForm()" style="display:none;">
                            <img class="avatar-image" src="{{ asset('assets/' . $avatar . '.png') }}" alt="Avatar {{ $avatar }}" style="width: 100px; margin: 10px;">
                        </label>
                    @endforeach
                </div>
            </form>

            <br><br>
            <div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="buttonsperfil2" type="submit">LOGOUT</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function toggleSection(sectionId, titleElement) {
    var section = document.getElementById(sectionId);
    var setaImg = titleElement.querySelector('.setaimg');

    if (section.classList.contains('show')) {
        section.classList.remove('show');
        setaImg.src = "{{ asset('assets/seta12.png') }}"; // Seta fechada
    } else {
        var allSections = document.querySelectorAll('.dropdown-content');
        var allSetas = document.querySelectorAll('.setaimg');
        allSections.forEach(function(sec) {
            sec.classList.remove('show');
        });
        allSetas.forEach(function(seta) {
            seta.src = "{{ asset('assets/seta12.png') }}"; // Todas as setas fechadas
        });

        section.classList.add('show');
        setaImg.src = "{{ asset('assets/seta13.png') }}"; // Seta aberta
    }
}

function validateForm2() {
    var name = document.getElementById('nametro').value;
    if (name.length > 30) {
        alert('O nome só pode ter até 30 caracteres.');
        return false;
    }

    alert('Nome alterado com sucesso!');
    return true;
}

function validateForm() {
    var password = document.getElementById('password').value;
    var password_confirmation = document.getElementById('password_confirmation').value;

    if (password.length < 8) {
        alert('A senha deve ter no mínimo 8 caracteres.');
        return false;
    }

    if (password !== password_confirmation) {
        alert('As senhas não coincidem.');
        return false;
    }

    alert('Senha alterada com sucesso!');
    return true;
}

function submitAvatarForm() {
    document.getElementById('avatar-form').submit();
}
</script>
