<?php

namespace Unnecessary;

class MessageObject
{

    public string $to;
    public string $from;
    public string $subject;
    public string $content;

    public function isEmail(): bool
    {
        return true;
    }

    public function getLogDetails(): string
    {
        $log = [
            'to' => $this->to,
            'from' => $this->from,
            'subject' => $this->subject,
            'message' => $this->content,
            'date' => date('Y-m-d')
        ];
        return json_encode($log);
    }

}
