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

/**
 * English language pack for MyAI
 *
 * @package    aiprovider_myai
 * @copyright  2025 Jan Rieger <jan.rieger@th-luebeck.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:extract_pdf:model'] = 'AI model';
$string['action:extract_pdf:model_desc'] = 'The model used to extract the content from the PDF file.';
$string['action:extract_pdf:endpoint'] = 'API endpoint';
$string['action:extract_pdf:systeminstruction'] = 'System instruction';
$string['action:extract_pdf:systeminstruction_desc'] = 'This instruction is sent to the AI model along with the user\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['action:extract_pdf:systeminstruction_default'] = 'Extract the text from the above document as if you were reading it naturally. Return the tables in html format. Return the equations in LaTeX representation. If there is an image in the document and image caption is not present, add a small description of the image inside the <img></img> tag; otherwise, add the image caption inside <img></img>. Watermarks should be wrapped in brackets. Ex: <watermark>OFFICIAL COPY</watermark>. Page numbers should be wrapped in brackets. Ex: <page_number>14</page_number> or <page_number>9/22</page_number>. Prefer using ☐ and ☑ for check boxes.';
$string['action:generate_image:endpoint'] = 'API endpoint';
$string['action:generate_image:model'] = 'AI model';
$string['action:generate_image:model_desc'] = 'The model used to generate images from user prompts.';
$string['action:generate_video:model'] = 'AI model';
$string['action:generate_video:model_desc'] = 'The model used to generate the video.';
$string['action:generate_video:endpoint'] = 'API endpoint';
$string['action:generate_video:systeminstruction'] = 'System instruction';
$string['action:generate_video:systeminstruction_desc'] = 'This instruction is sent to the AI model along with the user\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['action:generate_text:endpoint'] = 'API endpoint';
$string['action:generate_text:model'] = 'AI model';
$string['action:generate_text:model_desc'] = 'The model used to generate the text response.';
$string['action:generate_text:systeminstruction'] = 'System instruction';
$string['action:generate_text:systeminstruction_desc'] = 'This instruction is sent to the AI model along with the user\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['action:summarise_text:endpoint'] = 'API endpoint';
$string['action:summarise_text:model'] = 'AI model';
$string['action:summarise_text:model_desc'] = 'The model used to summarise the provided text.';
$string['action:summarise_text:systeminstruction'] = 'System instruction';
$string['action:summarise_text:systeminstruction_desc'] = 'This instruction is sent to the AI model along with the user\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['action_extract_pdf'] = 'Extract PDF Content';
$string['apikey'] = 'API key';
$string['apikey_desc'] = 'Get a key from your AI provider</a>.';
$string['description'] = 'Extracts content from a PDF file and returns it as plain text.';
$string['enableglobalratelimit'] = 'Set site-wide rate limit';
$string['enableglobalratelimit_desc'] = 'Limit the number of requests that the AI API provider can receive across the entire site every hour.';
$string['enableuserratelimit'] = 'Set user rate limit';
$string['enableuserratelimit_desc'] = 'Limit the number of requests each user can make to the AI API provider every hour.';
$string['generate_video_description'] = 'Generates a short video based on selected course content and a text description.';
$string['generate_video_systeminstruction'] = 'Create a short video based on the provided text. The video should include relevant visual elements that complement and illustrate the text content. Ensure the video is engaging and informative.';
$string['globalratelimit'] = 'Maximum number of site-wide requests';
$string['globalratelimit_desc'] = 'The number of site-wide requests allowed per hour.';
$string['orgid'] = 'AI organization ID';
$string['orgid_desc'] = 'Get an organization ID from your AI provider</a>.';
$string['pluginname'] = 'MyAI';
$string['privacy:metadata'] = 'The AI API provider plugin does not store any personal data.';
$string['privacy:metadata:aiprovider_myai:externalpurpose'] = 'This information is sent to the AI API in order for a response to be generated. Your AI account settings may change how AI stores and retains this data. No user data is explicitly sent to AI or stored in Moodle LMS by this plugin.';
$string['privacy:metadata:aiprovider_myai:model'] = 'The model used to generate the response.';
$string['privacy:metadata:aiprovider_myai:numberimages'] = 'When generating images the number of images used in the response.';
$string['privacy:metadata:aiprovider_myai:prompttext'] = 'The user entered text prompt used to generate the response.';
$string['privacy:metadata:aiprovider_myai:responseformat'] = 'When generating images the format of the response.';
$string['userratelimit'] = 'Maximum number of requests per user';
$string['userratelimit_desc'] = 'The number of requests allowed per hour, per user.';
