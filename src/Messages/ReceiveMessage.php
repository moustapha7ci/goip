<?php
namespace Pikart\Goip\Messages;

use Pikart\Goip\Message;

class ReceiveMessage extends Message
{
    /**
     * Ack message
     */
    public function ack(): ? string
    {
        return "RECEIVE ".$this->request()->get('receive').' OK';
    }

    /**
     * Receive count number
     *
     * @return int|null
     */
    public function receive() : ? int
    {
        return $this->request()->get('receive');
    }

    /**
     * Sender phone number
     *
     * @return int|null
     */
    public function srcnum() : ? int
    {
        return $this->request()->get('srcnum');
    }

    /**
     * Sender text message
     *
     * @return string|null
     */
    public function msg() : ? string
    {
        return $this->request()->get('msg');
    }
}
