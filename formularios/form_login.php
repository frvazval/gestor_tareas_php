<main>    
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form name="formLogin" class="formTareas" autocomplete="off">
            <div>
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
                <p id="errorUsuario"></p>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                <p id="errorPassword"></p>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <div>
            <a href="index.php?formulario=crear_cuenta">Crear cuenta</a>
            <a href="index.php?formulario=reset">No recuerdo la contraseña</a>
        </div>
        
    </div>
</main>
