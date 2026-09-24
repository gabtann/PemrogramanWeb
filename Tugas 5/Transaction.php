<?php

declare(strict_types=1);

class Transaction
{
    public function __construct(
        private string $id,
        private string $type,
        private float $amount,
    ) {}

    public function process(): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
        session_start();
        }

        if (!isset($_SESSION['balance'])) {
            $_SESSION['balance'] = 0;
        }

        if (!isset($_SESSION['transactions'])) {
            $_SESSION['transactions'] = [];
        }

        $result = match ($this->type) {
            'deposit' => $this->processDeposit(),
            'withdrawal' => $this->processWithdrawal(),
        };

        if ($result) {
            $_SESSION['transactions'][] = [
                'id' => $this->id,
                'type' => $this->type,
                'amount' => $this->amount,
                'balance_after' => $_SESSION['balance'],
            ];
        }
        return $result;
    }
    
    private function processWithdrawal(): bool
    {
        if ($_SESSION['balance'] >= $this->amount) {
            $_SESSION['balance'] -= $this->amount;
            return true;
        } else {
            return false;
        }
    }

    private function processDeposit(): bool
    {
        $_SESSION['balance'] += $this->amount;
        return true;
    }   
}