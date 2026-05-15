<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación - Eterna Koreana</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #faf8f5 0%, #ffe8f0 50%, #fff5e6 100%);
            background-attachment: fixed;
            color: #1f1f1f;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 600px;
            padding: 40px 20px;
            text-align: center;
        }

        .confirmation-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.55);
            border-radius: 25px;
            padding: 50px 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #90EE90 0%, #7BC67B 100%);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 30px;
            box-shadow: 0 10px 25px rgba(144, 238, 144, 0.3);
            animation: scaleIn 0.6s ease-out;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .success-icon ion-icon {
            font-size: 45px;
            color: white;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #1f1f1f;
        }

        .subtitle {
            color: #666;
            font-size: 1rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .qr-section {
            background: rgba(255, 145, 164, 0.08);
            border: 2px dashed rgba(255, 145, 164, 0.3);
            border-radius: 18px;
            padding: 30px;
            margin: 30px 0;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .qr-label {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 20px;
            font-weight: 600;
        }

        #qr-code {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .order-details {
            background: rgba(255, 145, 164, 0.05);
            border-radius: 18px;
            padding: 20px;
            margin: 30px 0;
            text-align: left;
        }

        .detail-row {
            display: grid;
            grid-template-columns: 120px 1fr;
            gap: 15px;
            margin-bottom: 12px;
            font-size: 0.9rem;
            border-bottom: 1px solid rgba(255, 145, 164, 0.1);
            padding-bottom: 12px;
        }

        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .detail-label {
            font-weight: 600;
            color: #666;
        }

        .detail-value {
            color: #1f1f1f;
            word-break: break-word;
        }

        .redirect-info {
            color: #ff91a4;
            font-size: 0.9rem;
            margin-top: 30px;
        }

        .countdown {
            font-weight: 700;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .confirmation-card {
                padding: 30px 20px;
            }

            h1 {
                font-size: 1.6rem;
            }

            .detail-row {
                grid-template-columns: 1fr;
                gap: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="confirmation-card">
            <div class="success-icon">
                <ion-icon name="checkmark-done-outline"></ion-icon>
            </div>

            <h1>¡Pedido Confirmado!</h1>
            <p class="subtitle">
                Tu pedido ha sido registrado exitosamente.<br>
                Realiza la transferencia según los datos de tu QR.
            </p>

            <div class="qr-section">
                <div class="qr-label">Escanea este código QR</div>
                <div id="qr-code"></div>
            </div>

            <div class="order-details">
                <div class="detail-row">
                    <div class="detail-label">ID Pedido:</div>
                    <div class="detail-value">#{{ $address->id }}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Destinatario:</div>
                    <div class="detail-value">{{ $address->recipient_name }}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Teléfono:</div>
                    <div class="detail-value">{{ $address->phone }}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Ciudad:</div>
                    <div class="detail-value">{{ $address->city }}, {{ $address->department }}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Dirección:</div>
                    <div class="detail-value">{{ $address->address_line_1 }}
                        @if($address->address_line_2)
                            {{ $address->address_line_2 }}
                        @endif
                    </div>
                </div>
            </div>

            <p class="redirect-info">
                Serás redirigido al inicio en <span class="countdown" id="countdown">5</span> segundos...
            </p>
        </div>
    </div>

    <script>
        // Generar QR con la información del pedido
        const qrData = `PEDIDO: #{{ $address->id }}
DESTINATARIO: {{ $address->recipient_name }}
TELEFONO: {{ $address->phone }}
CIUDAD: {{ $address->city }}, {{ $address->department }}
DIRECCION: {{ $address->address_line_1 }}`;

        const qrCode = new QRCode(document.getElementById('qr-code'), {
            text: qrData,
            width: 250,
            height: 250,
            colorDark: '#1f1f1f',
            colorLight: '#ffffff',
            correctLevel: QRCode.CorrectLevel.H
        });

        // Countdown y redirección
        let seconds = 5;
        const countdownElement = document.getElementById('countdown');

        setInterval(() => {
            seconds--;
            countdownElement.textContent = seconds;

            if (seconds === 0) {
                window.location.href = '{{ route("welcome") }}';
            }
        }, 1000);
    </script>
</body>

</html>
