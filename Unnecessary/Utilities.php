<?php

namespace Unnecessary;

class Utilities
{
    public function sendToEmailInterface(
        string $to,
        string $from,
        string $subject,
        string $content
    ) {
        // Send to an email system
    }

    public function logEvent(string $logDetails): void
    {
        // Save to a logging system
        $this->flush();
    }

    public function flush(): void
    {
        // Commit transaction to database
    }
}
