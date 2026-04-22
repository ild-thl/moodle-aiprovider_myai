<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace aiprovider_myai;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Class process_text_to_speech
 *
 * @package    aiprovider_myai
 * @copyright  2025 Jan Rieger <jan.rieger@th-luebeck.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class process_text_to_speech extends abstract_processor {
    /**
     * Get configured voice for TTS.
     *
     * @return string
     */
    protected function get_voice(): string {
        return get_config('aiprovider_myai', 'action_text_to_speech_voice') ?: 'alloy';
    }

    /**
     * Get configured output format for TTS.
     *
     * @return string
     */
    protected function get_format(): string {
        return get_config('aiprovider_myai', 'action_text_to_speech_format') ?: 'mp3';
    }

    /**
     * Get configured speech speed for TTS.
     *
     * @return float
     */
    protected function get_speed(): float {
        $speed = get_config('aiprovider_myai', 'action_text_to_speech_speed');
        if (!is_string($speed) && !is_numeric($speed)) {
            return 1.0;
        }

        // Accept both "1.0" and locale-style "1,0" inputs.
        $normalisedspeed = str_replace(',', '.', (string)$speed);
        return is_numeric($normalisedspeed) ? (float)$normalisedspeed : 1.0;
    }

    #[\Override]
    protected function get_endpoint(): UriInterface {
        return new Uri(get_config('aiprovider_myai', 'action_text_to_speech_endpoint'));
    }

    #[\Override]
    protected function get_model(): string {
        return get_config('aiprovider_myai', 'action_text_to_speech_model');
    }

    #[\Override]
    protected function get_system_instruction(): string {
        return get_config('aiprovider_myai', 'action_text_to_speech_systeminstruction');
    }

    #[\Override]
    protected function create_request_object(string $_userid): RequestInterface {
        $requestobj = new \stdClass();
        $requestobj->model = $this->get_model();
        $requestobj->input = $this->action->get_configuration('texttotransform');
        $requestobj->voice = $this->get_voice();
        $requestobj->format = $this->get_format();
        $requestobj->speed = $this->get_speed();

        return new Request(
            method: 'POST',
            uri: '',
            body: json_encode($requestobj),
            headers: [
                'Content-Type' => 'application/json',
            ],
        );
    }

    /**
     * Handle a successful response from the external AI api.
     *
     * @param ResponseInterface $response The response object.
     * @return array The response.
     */
    protected function handle_api_success(ResponseInterface $response): array {
        $responsebody = $response->getBody();
        $bodystring = $responsebody->getContents();

        return [
            'success' => true,
            'generatedcontent' => $bodystring,
        ];
    }

    /**
     * Handle an error from the external AI api.
     *
     * @param ResponseInterface $response The response object.
     * @return array The error response.
     */
    protected function handle_api_error(ResponseInterface $response): array {
        $responsearr = [
            'success' => false,
            'errorcode' => $response->getStatusCode(),
        ];

        $status = $response->getStatusCode();
        if ($status >= 500 && $status < 600) {
            $responsearr['errormessage'] = $response->getReasonPhrase();
        } else {
            $bodystring = $response->getBody()->getContents();
            $bodyobj = json_decode($bodystring);
            if (isset($bodyobj->error->message)) {
                $responsearr['errormessage'] = $bodyobj->error->message;
            } else if ($bodystring !== '') {
                $responsearr['errormessage'] = $bodystring;
            } else {
                $responsearr['errormessage'] = 'Unknown error from AI API.';
            }
        }

        return $responsearr;
    }
}
