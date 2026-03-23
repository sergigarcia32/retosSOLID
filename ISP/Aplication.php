<?php

interface NotificadorEmail
{
    public function enviarEmail(string $destino, string $mensaje);
}

interface NotificadorSMS
{
    public function enviarSMS(string $telefono, string $mensaje);
}

class NotificadorEmailSimple implements NotificadorEmail
{
    public function enviarEmail(string $destino, string $mensaje)
    {
        echo "Enviando email a $destino: $mensaje\n";
    }
}

class NotificadorSMSimple implements NotificadorSMS
{
    public function enviarSMS(string $telefono, string $mensaje)
    {
        echo "Enviando SMS a $telefono: $mensaje\n";
    }
}

function procesarEnvioEmail(NotificadorEmail $notificador, string $destino, string $mensaje)
{
    $notificador->enviarEmail($destino, $mensaje);
}

function procesarEnvioSMS(NotificadorSMS $notificador, string $telefono, string $mensaje)
{
    $notificador->enviarSMS($telefono, $mensaje);
}

$email = new NotificadorEmailSimple();
procesarEnvioEmail($email, 'cliente@example.com', 'Hola desde ISP');

$sms = new NotificadorSMSimple();
procesarEnvioSMS($sms, '+34123456789', 'Hola desde ISP');
