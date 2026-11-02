<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function isLoggedIn(): bool
{
    return isset(
        $_SESSION["id"],
        $_SESSION["lietotajvards"],
        $_SESSION["loma"]
    );
}

function requireLogin(): void
{
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit;
    }
}

function requireRole(string $requiredRole): void
{
    requireLogin();

    if ($_SESSION["loma"] !== $requiredRole) {
        header("Location: index.php");
        exit;
    }
}

function escape(string $value): string
{
    return htmlspecialchars(
        $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        "UTF-8"
    );
}