<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Methods;

use unreal4u\TelegramAPI\Abstracts\TelegramMethods;

/**
 * Use this method to send information about a venue. On success, the sent Message is returned.
 *
 * Objects defined as-is july 2016
 *
 * @see https://core.telegram.org/bots/api#sendvenue
 */
class SendVenue extends TelegramMethods
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public $chat_id = '';

    /**
     * Latitude of location
     * @var float
     */
    public $latitude = 0.0;

    /**
     * Longitude of location
     * @var float
     */
    public $longitude = 0.0;

    /**
     * Name of the venue
     * @var string
     */
    public $title = '';

    /**
     * Address of the venue
     * @var string
     */
    public $address = '';

    /**
     * Optional. Foursquare identifier of the venue
     * @var string
     */
    public $foursquare_id = '';

    /**
     * Optional. Sends the message silently. iOS users will not receive a notification, Android users will receive a
     * notification with no sound.
     * @see https://telegram.org/blog/channels-2-0#silent-messages
     * @var bool
     */
    public $disable_notification = false;

    /**
     * If the message is a reply, ID of the original message
     * @var int
     */
    public $reply_to_message_id = 0;

    /**
     * Optional. Additional interface options. A JSON-serialized object for a custom reply keyboard, instructions to
     * hide keyboard or to force a reply from the user.
     * @var null
     */
    public $reply_markup = null;

    public function getMandatoryFields(): array
    {
        return [
            'chat_id',
            'latitude',
            'longitude',
            'title',
            'address',
        ];
    }

    public function getMethodName(): string
    {
        return 'sendVenue';
    }
}
