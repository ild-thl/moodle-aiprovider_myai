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
 * Class process_generate_video
 *
 * @package    aiprovider_myai
 * @copyright  2025 Jan Rieger <jan.rieger@th-luebeck.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class process_generate_video extends abstract_processor {
    #[\Override]
    protected function get_endpoint(): UriInterface {
        return new Uri(get_config('aiprovider_myai', 'action_generate_video_endpoint'));
    }

    #[\Override]
    protected function get_model(): string {
        return get_config('aiprovider_myai', 'action_generate_video_model');
    }

    #[\Override]
    protected function get_system_instruction(): string {
        return get_config('aiprovider_myai', 'action_generate_video_systeminstruction');
    }

    #[\Override]
    protected function create_request_object(string $userid): RequestInterface {
        
        // $image_url = new \stdClass();
        // $image_url->url = $this->action->get_configuration('imagebase64');
        
        // $image = new \stdClass();
        // $image->type = 'image_url';
        // $image->image_url = $image_url;

        $text = new \stdClass();
        $text->type = 'text';
        $text->text = $this->action->get_configuration('prompttext');
        
        $userobj = new \stdClass();
        $userobj->role = 'user';
        //$userobj->content = [$image, $text];
        $userobj->content = [$text];

        $messages = [];
        
        $messages = [$userobj];

        $requestobj = new \stdClass();
        $requestobj->model = $this->get_model();
        $requestobj->user = $userid;
        $requestobj->messages = $messages;
        $requestobj->temperature = 0.0;
        $requestobj->max_tokens = 120000;

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
        $bodyobj = json_decode($responsebody->getContents());

        return [
            'success' => true,
            'id' => $bodyobj->id,
            'fingerprint' => $bodyobj->system_fingerprint,
            'generatedcontent' => $bodyobj->choices[0]->message->content,
            'finishreason' => $bodyobj->choices[0]->finish_reason,
            'prompttokens' => $bodyobj->usage->prompt_tokens,
            'completiontokens' => $bodyobj->usage->completion_tokens,
        ];
    }
}
