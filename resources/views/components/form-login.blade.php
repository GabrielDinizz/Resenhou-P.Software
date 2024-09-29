<div>
    <h1 id="titlei">Bem Vindo: <b id="titlep">{{ auth()->user()->name }}!!</b> </h1>
    <h1 id="titlei">Edite Seu Perfil Aqui:</h1>
    
</div>
<br>

<div class="container">

    <div class="info-section">
        <h2 class="formstit">Suas Informações  </h2>
        <div id="info-form">
            <form method="POST" action="{{ route('perfil.update') }}" onsubmit="return validateForm()">
                @csrf
                <div>
                    <label class="label-style" for="name">Nome:</label>
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" disable>
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
       
        <h2 class="dropdown-title" onclick="toggleSection('avatar-form')">Alterar Avatar  ↓</h2>
        <div id="avatar-form" class="dropdown-content">
            <div class="avatar-preview">
                <img src="{{ auth()->user()->avatar }}" alt="Avatar atual">
            </div>
            <form method="POST" action="{{ route('perfil.avatar.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div>
                    <label class="label-style" for="avatar">Selecione um novo avatar:</label>
                    <select id="avatar" name="avatar" required>
                        @foreach(['avatar1', 'avatar2', 'avatar3', 'avatar4'] as $avatar)
                            <option class="dropdown-button" value="{{ $avatar }}">{{ $avatar }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="buttonsperfil" type="submit">Alterar Avatar</button>
            </form>
        </div>

        <h2 class="dropdown-title" onclick="toggleSection('name-form')">Alterar Nome ↓</h2>
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
        <h2 class="dropdown-title" onclick="toggleSection('password-form')">Alterar Senha  ↓</h2>
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

     <div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="buttonsperfil" type="submit">LOGOUT</button>
            </form>
        </div>
    
    </div>
</div>



<script>
 
 function toggleSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section.classList.contains('show')) {
        section.classList.remove('show');
    } else {
   
        var allSections = document.querySelectorAll('.dropdown-content');
        allSections.forEach(function(sec) {
            sec.classList.remove('show');
        });

        section.classList.add('show');
    }
}
function validateForm2(){
    var name = document.getElementById('nametro').value;
    if (name.length > 30){
        alert('O nome so pode ter 30 caracteres')
        return false
    }

    alert(' Nome alterada com sucesso!');
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

    document.addEventListener('DOMContentLoaded', function() {
    const avatarOptions = document.querySelectorAll('.avatar-preview-option');

    avatarOptions.forEach(function(option) {
        option.addEventListener('click', function() {
            const avatar = option.getAttribute('data-avatar');
            document.querySelector('.avatar-preview img').src = `{{ asset("assets/$avatar.png") }}`;
        });
    });
});
</script>