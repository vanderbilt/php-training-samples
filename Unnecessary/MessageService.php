<?php

namespace Unnecessary;
use Unnecessary\Utilities;

class MessageService
{
    private Utilities $utilities;

    public function __construct()
    {
        $this->utilities = new Utilities();
    }

    /**
     * This function sends a message
     * @param $message - a message object containing the message details
     * @param $type - either 'email' or 'sms'
     * @param $logContent - boolean on whether to log the full content of the message (0 = no, 1 = yes)
     * @return bool
     * @throws \Exception
     */
    public function sendMessage(MessageObject $message): bool
    {
        // This system does not currently support SMS, but is designed to allow it some day when we have the time to expand
        if ($message->isEmail()) {
            return $this->sendEmail($message);
        }
        return false;
    }

    private function sendEmail(MessageObject $message): bool
    {
//        var_dump($message);
//        die();
        if (!$this->hasValidDestination($message->to)) {
            throw new \Exception('Invalid destination');
        }
//        $message->content = $this->sanitizeContent($message->content);
        $this->utilities->sendToEmailInterface(
            $message->to,
            $message->from,
            $message->subject,
            $message->content
        );
        $this->utilities->logEvent($message->getLogDetails());
        $this->utilities->flush();
        return true;
    }

    private function sendTextMessage(MessageObject $message)
    {
        // @ToDo Implement text message support
    }

    private function hasValidDestination(string $destination): bool
    {
        return filter_var($destination, FILTER_VALIDATE_EMAIL);
    }

//    private function sanitizeContent(string $content): string
//    {
//        return htmlentities($content);
//    }

    private function attachmentMeetsSizeLimit(int $attachmentSizeInMb): bool
    {
        return $attachmentSizeInMb <= 2;
    }

}
