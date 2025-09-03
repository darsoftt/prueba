<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawl Stars - Registro</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One:wght@400&family=Nunito:wght@400;600;700;800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 255, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 0, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(0, 255, 255, 0.1) 0%, transparent 50%);
            animation: backgroundMove 10s ease-in-out infinite alternate;
        }
        
        @keyframes backgroundMove {
            0% { transform: translateY(0px) rotate(0deg); }
            100% { transform: translateY(-20px) rotate(1deg); }
        }
        
        .register-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        
        .register-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            position: relative;
            overflow: hidden;
            animation: cardFloat 6s ease-in-out infinite;
        }
        
        
        .register-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(6, 255, 165, 0.1), transparent);
            animation: rotate 8s linear infinite;
            z-index: -1;
        }
        
        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }
        
        .logo-container {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        .logo {
            font-family: 'Fredoka One', cursive;
            font-size: 2.5rem;
            background: linear-gradient(45deg, #FF6B35, #F7931E, #FFD23F, #06FFA5);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease-in-out infinite;
            text-shadow: 0 0 30px rgba(255, 107, 53, 0.3);
            position: relative;
        }
        
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .logo::after {
            content: '🚀';
            position: absolute;
            top: -10px;
            right: -25px;
            font-size: 1.3rem;
            animation: rocketFloat 3s ease-in-out infinite;
        }
        
        @keyframes rocketFloat {
            0%, 100% { transform: translateY(0px) rotate(-10deg); }
            50% { transform: translateY(-10px) rotate(10deg); }
        }
        
        .subtitle {
            color: #666;
            font-size: 1rem;
            font-weight: 600;
            margin-top: 8px;
        }
        
        .form-section {
            margin-bottom: 25px;
        }
        
        .section-title {
            color: #FF6B35;
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-row {
            display: flex;
            gap: 15px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .form-control {
            border: 2px solid #e0e6ed;
            border-radius: 15px;
            padding: 12px 18px 12px 45px;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }
        
        .form-control:focus {
            border-color: #FF6B35;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
            background: rgba(255, 255, 255, 1);
            transform: translateY(-2px);
        }
        
        .form-select {
            border: 2px solid #e0e6ed;
            border-radius: 15px;
            padding: 12px 18px;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }
        
        .form-select:focus {
            border-color: #06FFA5;
            box-shadow: 0 0 0 0.2rem rgba(6, 255, 165, 0.25);
            background: rgba(255, 255, 255, 1);
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #FF6B35;
            font-size: 1.1rem;
            z-index: 5;
        }
        
        .password-strength {
            margin-top: 8px;
            font-size: 0.8rem;
        }
        
        .strength-bar {
            width: 100%;
            height: 4px;
            background: #e0e6ed;
            border-radius: 2px;
            overflow: hidden;
            margin-top: 5px;
        }
        
        .strength-fill {
            height: 100%;
            transition: all 0.3s ease;
            border-radius: 2px;
        }
        
        .strength-weak { width: 25%; background: #ff4757; }
        .strength-fair { width: 50%; background: #ffa726; }
        .strength-good { width: 75%; background: #66bb6a; }
        .strength-strong { width: 100%; background: #06FFA5; }
        
        .form-check {
            margin-bottom: 20px;
        }
        
        .form-check-input {
            border: 2px solid #e0e6ed;
            border-radius: 6px;
            transform: scale(1.2);
        }
        
        .form-check-input:checked {
            background-color: #06FFA5;
            border-color: #06FFA5;
        }
        
        .form-check-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #666;
            margin-left: 8px;
        }
        
        .form-check-label a {
            color: #FF6B35;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .form-check-label a:hover {
            color: #F7931E;
        }
        
        .btn-register {
            background: linear-gradient(45deg, #06FFA5, #00D4AA);
            border: none;
            border-radius: 15px;
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 700;
            color: white;
            width: 100%;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }
        
        .btn-register::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }
        
        .btn-register:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(6, 255, 165, 0.4);
        }
        
        .btn-register:hover::before {
            left: 100%;
        }
        
        .btn-register:active {
            transform: translateY(-1px);
        }
        
        .login-link {
            text-align: center;
            padding: 20px;
            background: rgba(255, 107, 53, 0.1);
            border-radius: 15px;
            margin-top: 20px;
        }
        
        .login-link p {
            margin: 0;
            color: #666;
            font-weight: 600;
        }
        
        .login-link a {
            color: #FF6B35;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        
        .login-link a:hover {
            color: #F7931E;
            text-shadow: 0 0 10px rgba(255, 107, 53, 0.3);
        }
        
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        
        .floating-gem {
            position: absolute;
            font-size: 1.8rem;
            animation: float 8s ease-in-out infinite;
            opacity: 0.6;
        }
        
        .gem-1 { top: 8%; left: 8%; animation-delay: 0s; }
        .gem-2 { top: 15%; right: 12%; animation-delay: 2s; }
        .gem-3 { bottom: 35%; left: 15%; animation-delay: 4s; }
        .gem-4 { bottom: 15%; right: 8%; animation-delay: 6s; }
        .gem-5 { top: 45%; left: 5%; animation-delay: 1s; }
        .gem-6 { top: 60%; right: 5%; animation-delay: 3s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-15px) rotate(90deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
            75% { transform: translateY(-15px) rotate(270deg); }
        }
        
        .form-feedback {
            font-size: 0.8rem;
            margin-top: 5px;
            font-weight: 600;
        }
        
        .valid-feedback {
            color: #06FFA5;
        }
        
        .invalid-feedback {
            color: #ff4757;
        }
        
        @media (max-width: 576px) {
            .register-card {
                margin: 20px;
                padding: 30px 25px;
            }
            
            .logo {
                font-size: 2rem;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .floating-gem {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <div class="floating-elements">
        <div class="floating-gem gem-1">💎</div>
        <div class="floating-gem gem-2">⭐</div>
        <div class="floating-gem gem-3">🏆</div>
        <div class="floating-gem gem-4">💰</div>
        <div class="floating-gem gem-5">🎮</div>
        <div class="floating-gem gem-6">⚡</div>
    </div>
    
    <div class="register-container">
        <div class="register-card">
            <div class="logo-container">
                <h1 class="logo">ÚNETE AL BRAWL</h1>
                <p class="subtitle">¡Crea tu cuenta y conquista la arena!</p>
            </div>
            
            <form id="registerForm" novalidate>
                <!-- Información Personal -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-user"></i>
                        Información Personal
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <i class="fas fa-signature input-icon"></i>
                            <input type="text" class="form-control" id="firstName" placeholder="Nombre" required>
                            <div class="invalid-feedback">Ingresa tu nombre</div>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-signature input-icon"></i>
                            <input type="text" class="form-control" id="lastName" placeholder="Apellido" required>
                            <div class="invalid-feedback">Ingresa tu apellido</div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <i class="fas fa-birthday-cake input-icon"></i>
                            <input type="date" class="form-control" id="birthDate" required>
                            <div class="invalid-feedback">Selecciona tu fecha de nacimiento</div>
                        </div>
                        <div class="form-group">
                            <select class="form-select" id="country" required>
                                <option value="">🌎 País</option>
                                <option value="AR">🇦🇷 Argentina</option>
                                <option value="BR">🇧🇷 Brasil</option>
                                <option value="CL">🇨🇱 Chile</option>
                                <option value="CO">🇨🇴 Colombia</option>
                                <option value="MX">🇲🇽 México</option>
                                <option value="PE">🇵🇪 Perú</option>
                                <option value="ES">🇪🇸 España</option>
                                <option value="US">🇺🇸 Estados Unidos</option>
                                <option value="OTHER">🌍 Otro</option>
                            </select>
                            <div class="invalid-feedback">Selecciona tu país</div>
                        </div>
                    </div>
                </div>
                
                <!-- Información de Cuenta -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-gamepad"></i>
                        Información de Cuenta
                    </div>
                    
                    <div class="form-group">
                        <i class="fas fa-user-ninja input-icon"></i>
                        <input type="text" class="form-control" id="username" placeholder="Nombre de usuario" required>
                        <div class="invalid-feedback">El nombre de usuario debe tener al menos 3 caracteres</div>
                        <div class="valid-feedback">¡Nombre disponible!</div>
                    </div>
                    
                    <div class="form-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                        <div class="invalid-feedback">Ingresa un correo válido</div>
                    </div>
                    
                    <div class="form-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                        <div class="password-strength">
                            <div class="strength-text">Seguridad de la contraseña</div>
                            <div class="strength-bar">
                                <div class="strength-fill" id="strengthFill"></div>
                            </div>
                        </div>
                        <div class="invalid-feedback">La contraseña debe tener al menos 8 caracteres</div>
                    </div>
                    
                    <div class="form-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmar contraseña" required>
                        <div class="invalid-feedback">Las contraseñas no coinciden</div>
                    </div>
                </div>
                
                <!-- Términos y Condiciones -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label" for="terms">
                        Acepto los <a href="#" id="termsLink">términos y condiciones</a> y la <a href="#" id="privacyLink">política de privacidad</a>
                    </label>
                    <div class="invalid-feedback">Debes aceptar los términos y condiciones</div>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="newsletter">
                    <label class="form-check-label" for="newsletter">
                        Quiero recibir noticias y actualizaciones del juego
                    </label>
                </div>
                
                <button type="submit" class="btn btn-register">
                    <i class="fas fa-rocket me-2"></i>
                    ¡CREAR CUENTA!
                </button>
            </form>
            
            <div class="login-link">
                <p>¿Ya tienes una cuenta? <a href="login" id="login">¡Inicia sesión aquí!</a></p>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registerForm');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const usernameInput = document.getElementById('username');
            const strengthFill = document.getElementById('strengthFill');
            const registerBtn = document.querySelector('.btn-register');
            
            // Validación de fortaleza de contraseña
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                const strength = calculatePasswordStrength(password);
                updatePasswordStrength(strength);
            });
            
            function calculatePasswordStrength(password) {
                let score = 0;
                if (password.length >= 8) score++;
                if (/[a-z]/.test(password)) score++;
                if (/[A-Z]/.test(password)) score++;
                if (/[0-9]/.test(password)) score++;
                if (/[^A-Za-z0-9]/.test(password)) score++;
                return Math.min(score, 4);
            }
            
            function updatePasswordStrength(strength) {
                const classes = ['strength-weak', 'strength-fair', 'strength-good', 'strength-strong'];
                strengthFill.className = 'strength-fill';
                if (strength > 0) {
                    strengthFill.classList.add(classes[strength - 1]);
                }
            }
            
            // Validación de confirmación de contraseña
            function validatePasswordMatch() {
                const password = passwordInput.value;
                const confirmPassword = confirmPasswordInput.value;
                
                if (confirmPassword && password !== confirmPassword) {
                    confirmPasswordInput.setCustomValidity('Las contraseñas no coinciden');
                    confirmPasswordInput.classList.add('is-invalid');
                    confirmPasswordInput.classList.remove('is-valid');
                } else if (confirmPassword) {
                    confirmPasswordInput.setCustomValidity('');
                    confirmPasswordInput.classList.remove('is-invalid');
                    confirmPasswordInput.classList.add('is-valid');
                }
            }
            
            passwordInput.addEventListener('input', validatePasswordMatch);
            confirmPasswordInput.addEventListener('input', validatePasswordMatch);
            
            // Validación de nombre de usuario
            usernameInput.addEventListener('input', function() {
                const username = this.value.trim();
                if (username.length >= 3) {
                    // Simular verificación de disponibilidad
                    setTimeout(() => {
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                    }, 500);
                } else {
                    this.classList.add('is-invalid');
                    this.classList.remove('is-valid');
                }
            });
            
            // Validación de edad
            const birthDateInput = document.getElementById('birthDate');
            birthDateInput.addEventListener('change', function() {
                const birthDate = new Date(this.value);
                const today = new Date();
                const age = today.getFullYear() - birthDate.getFullYear();
                
                if (age < 13) {
                    this.setCustomValidity('Debes tener al menos 13 años para jugar');
                    this.classList.add('is-invalid');
                } else {
                    this.setCustomValidity('');
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                }
            });
            
            
            // Función para crear confeti
            function createConfetti() {
                const colors = ['#FF6B35', '#F7931E', '#FFD23F', '#06FFA5'];
                for(let i = 0; i < 15; i++) {
                    setTimeout(() => {
                        const confetti = document.createElement('div');
                        confetti.style.position = 'fixed';
                        confetti.style.width = '10px';
                        confetti.style.height = '10px';
                        confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                        confetti.style.left = Math.random() * window.innerWidth + 'px';
                        confetti.style.top = '-10px';
                        confetti.style.zIndex = '1000';
                        confetti.style.borderRadius = '50%';
                        confetti.style.pointerEvents = 'none';
                        
                        document.body.appendChild(confetti);
                        
                        confetti.animate([
                            { transform: 'translateY(0px) rotate(0deg)', opacity: 1 },
                            { transform: 'translateY(' + (window.innerHeight + 100) + 'px) rotate(720deg)', opacity: 0 }
                        ], {
                            duration: 3000 + Math.random() * 2000,
                            easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
                        }).addEventListener('finish', () => {
                            confetti.remove();
                        });
                    }, i * 100);
                }
            }
        
            

        });
    </script>
</body>
</html>
