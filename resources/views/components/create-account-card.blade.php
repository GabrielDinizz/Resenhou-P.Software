<div class="containerLogin">
    <div class="login">
        <h2 class="title">CADASTRAR</h2>
        @if($errors->any())
            @foreach($errors->all() as $e)
                <p>{{ $e }}</p>
            @endforeach
        @endif  
        <form method="POST" action="/register"> <!-- Mude a rota de action -->
            @csrf
            <h1 class="titulo2">Nome de Usuário</h1>
            <div class="caixa1">
                <input type="text" name="name" value="{{ old('name') }}" required>
            </div>
            <h1 class="titulo2">CPF</h1>
            <div class="caixa1">
                <input type="text" name="cpf" value="{{ old('cpf') }}" required>
            </div>
            <h1 class="titulo2">Data de nascimento</h1>
            <div class="caixa1">
                <input type="date" name="birthdate" value="{{ old('birthdate') }}" required>
            </div>
            <h1 class="titulo2">Email</h1>
            <div class="caixa1">
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <h1 class="titulo2">Senha</h1>
            <div class="caixa1">
                <input type="password" name="password" id="senha" required>
                <img src="{{ asset('assets/oiofechado.png') }}" id="trocasenha" class="trocasenha" onclick="togglePasswordVisibility()" alt="Mostrar/Ocultar Senha">
            </div>
            <h1 class="titulo2">Confirmar Senha</h1>
            <div class="caixa1">
                <input type="password" name="password_confirmation" id="confirm_senha" required>
                <img src="{{ asset('assets/oiofechado.png') }}" id="trocaConfirmSenha" class="trocasenha" onclick="togglePasswordVisibility('confirm_senha', 'trocaConfirmSenha')" alt="Mostrar/Ocultar Senha">
            </div>
            <button id="buttonLogar" type="submit">Criar Conta</button>
            <p id="cadastre">JA POSSUI UMA CONTA? <a href="#">FAÇA LOGIN</a></p>
        </form>
    </div>
</div>

<script>
    function togglePasswordVisibility(fieldId = 'senha', toggleId = 'trocasenha') {
        var passwordInput = document.getElementById(fieldId);
        var togglePassword = document.getElementById(toggleId);
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePassword.src = "{{ asset('assets/oioaberto.png') }}";
        } else {
            passwordInput.type = "password";
            togglePassword.src = "{{ asset('assets/oiofechado.png') }}";
        }
    }
</script>
