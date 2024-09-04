<div>
    <h1 id="titlei">Bem Vindo: <b id="titlep">{{ auth()->user()->name }}!!</b></h1>
    <h1 id="titlei">Edite Seu Perfil Aqui:</h1>
</div>
<br>

<div class="container">
    <!-- Seção de informações do usuário -->
<!-- Seção de informações do usuário -->
<div class="info-section">
    <form method="POST" action="{{ route('perfil.update') }}" onsubmit="return validateForm()">
        @csrf
       
        <h2 class="formstit"> Suas informaçoes</h2>
        <div>
            <label class="label-style" for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" required>
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

    <!-- Botão de logout separado -->
    <div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="buttonsperfil" type="submit">LOGOUT</button>
        </form>
    </div>
</div>

<!-- Seção de alteração de avatar -->
<!-- Seção de alteração de avatar -->
<div class="avatar-section">
        <h2 class="formstit">Alterar Avatar</h2>
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

        <form method="POST" action="{{ route('perfil.update') }}" onsubmit="return validateForm()">
            @csrf
            @method('PATCH')
            <h2 class="formstit">Alterar Senha</h2>
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

<!-- JavaScript para validação de formulário e alerta -->
<script>
    function validateForm() {
        var password = document.getElementById('password').value;
        var password_confirmation = document.getElementById('password_confirmation').value;

        // Verifica se a senha tem no mínimo 8 caracteres
        if (password.length < 8) {
            alert('A senha deve ter no mínimo 8 caracteres.');
            return false;
        }

        // Verifica se as senhas coincidem
        if (password !== password_confirmation) {
            alert('As senhas não coincidem.');
            return false;
        }

        // Exibe o alerta de sucesso e permite o envio do formulário
        alert('Senha alterada com sucesso!');
        return true; // Permite o envio do formulário
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