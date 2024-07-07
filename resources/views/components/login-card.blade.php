<div class="containerLogin">
    <div class="login">
        <h2 class="title">LOGIN</h2>
        @if($errors->any())
            @foreach($errors->all() as $e)
                <p>{{ $e }}</p>
            @endforeach
        @endif  
        <form method="POST" action="/authenticate">
            @csrf
            <h1 class="titulo2">Email</h1>
            <div class="caixa1">
                <input type="text" name="email" value="{{ old('email') }}">
            </div>
            <h1 class="titulo2">SENHA</h1>
            <div class="caixa1">
                <input type="password" name="password" id="senha" value="">
                <img src="{{ asset('assets/oiofechado.png') }}" id="trocasenha" class="trocasenha" onclick="togglePasswordVisibility()" alt="Mostrar/Ocultar Senha">
            </div>
            <a href="#" class="esquecisenha">ESQUECEU SUA SENHA?</a>
            <button id="buttonLogar" type="submit">LOGAR</button>
            <p id="cadastre">NÃO TEM CONTA? <a href="#">CADASTRE-SE</a></p>
        </form>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("senha");
        var togglePassword = document.getElementById("trocasenha");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePassword.src = "{{ asset('assets/oioaberto.png') }}";
        } else {
            passwordInput.type = "password";
            togglePassword.src = "{{ asset('assets/oiofechado.png') }}";
        }
    }
</script>
