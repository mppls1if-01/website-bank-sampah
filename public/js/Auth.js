<script>
    var auth = firebase.auth();
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var login = document.getElementById('login');
    var register = document.getElementById('register');
    var logout = document.getElementById('logout');

    login.addEventListener('click', handleLogin);
    register.addEventListener('click', handleRegister);
    logout.addEventListener('click', handleLogout);

    function handleLogin() {
        auth.signInWithEmailAndPassword(email.value, password.value)
            .then(function(data){
                alert("Anda berhasil login");
                logout.classList.remove('hidden');
                login.classList.add('hidden');
                register.classList.add('hidden');
            })
            .catch(function(err) {
                alert("Email or Password is invalid");
            })

    }
    function handleRegister(){
        auth.createUserWithEmailAndPassword(email.value, password.value)
        .then(function(data){
            alert("Anda berhasil mendaftar");
            logout.classList.remove('hidden');
            login.classList.add('hidden');
            register.classList.add('hidden');
        })
        .catch(function(err){
            alert("email or password is invalid");
        })
    }
    function handleLogout(){
        auth.signOut().then(function(){
            alert("Anda berhasil logout");
            logout.classList.add('hidden');
            login.classList.remove('hidden');
            register.classList.remove('hidden');
        }).catch(function(err){

        })
    }
</script>